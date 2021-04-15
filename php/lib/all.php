<?php

function d(...$things) {
    foreach ($things as $thing) {
        echo json_encode($thing, JSON_PRETTY_PRINT) . PHP_EOL;
    }
}

function dd(...$things) {
    d($things);
    die();
}

function strToNumber_(string $string): Number_ {
    if (!is_numeric($string)) {
        throw new Error("$string can't be converted to Number");
    }

    if (!str_contains($string, '.')) {
        return Integer_::from($string);
    }

    $decimals = explode('.', $string)[1];
    $uniqueDecimals = array_unique(str_split($decimals));
    $hasOnlyZeros = count($uniqueDecimals) === 1 && $uniqueDecimals[0] === '0';

    $string = $hasOnlyZeros ? (int)$string : (float)$string;
    return is_int($string) ? Integer_::from($string) : Decimal_::from($string);
}

interface IndexAccessible_ extends KeyAccessible_ {
    function getBetweenIndexes(Expression_ $start = null, Expression_ $end = null): Expression_;
}

interface KeyAccessible_ {
    function setAtIndex(Expression_ $index, Expression_ $expression): Expression_;

    function getAtIndex(Expression_ $index): Expression_|null;

    function getAtIndexes(...$indexes): Expression_;
}

interface Mappable_Filterable extends Iterator {
    static function fromArray(array $expressions): Expression_;
}

trait Colorable_ {
    private $green = "\x1b[32m";
    private $red = "\x1b[31m";
    private $yellow = "\x1b[33m";
    private $blue = "\x1b[34m";
    private $magenta = "\x1b[35m";
    private $cyan = "\x1b[36m";
    private $white = "\x1b[37m";
    private $reset = "\x1b[0m";

    function green() {
        return String_::from($this->green . $this->toNative() . $this->reset);
    }

    function red() {
        return String_::from($this->red . $this->toNative() . $this->reset);
    }

    function yellow() {
        return String_::from($this->yellow . $this->toNative() . $this->reset);
    }

    function blue() {
        return String_::from($this->blue . $this->toNative() . $this->reset);
    }

    function magenta() {
        return String_::from($this->magenta . $this->toNative() . $this->reset);
    }

    function cyan() {
        return String_::from($this->cyan . $this->toNative() . $this->reset);
    }
}

abstract class Expression_ {
}

abstract class Type_ extends Expression_ {
}

class Sequence_ extends Type_ implements Iterator {
    static function from(Iterator $iterable, $filter, $mapper = null): self {
        return new self($iterable, $filter, $mapper);
    }

    function __construct(public Iterator $source, public $filter, public $mapper) {
    }

    // Iterator
    function rewind(): void {
        $this->source->rewind();
    }

    function key(): ?Integer_ {
        return $this->source->key();
    }

    function current(): ?Expression_ {
        if ($this->mapper) {
            $mapper = $this->mapper;
            return $mapper($this->source->current());
        }

        return $this->source->current();
    }

    function next(): void {
        $this->source->next();
    }

    function valid(): bool {
        $valid = $this->source->valid();

        if (!$this->filter || !$valid) {
            return $valid;
        }

        $filter = $this->filter;
        $isPassingFilter = $filter($this->source->current())->toNative();

        if (!$isPassingFilter) {
            $this->source->next();
            return $this->valid();
        }

        return true;
    }

    function only(callable $f): Sequence_ {
        return Sequence_::from($this, $f);
    }

    function map(callable $f): Sequence_ {
        return Sequence_::from($this, null, $f);
    }

    function getAtIndex(Expression_ $index): Expression_ {
        $index = $index->toNative();

        if ($index === 'first') {
            $index = 1;
        }

        // TODO: Implement
        if ($index === 'last') {
//            $index = $count;
        }

        if ($index < 1) {
            throw new Error("Indexes start from 1, index $index does not exist.");
        }

        $count = 0;
        foreach ($this as $value) {
            $count++;
            if ($count === $index) {
                return $value;
            }
        }

        throw new Error("Index $index not found, Array has only $count elements");
    }

    function __call($functionName, $args) {
        $values = [];
        foreach ($this as $value) {
            $values[] = $value;
        }

        $array = Array_::from($values);
        return call_user_func_array([$array, $functionName], $args);
    }
}

function only(Mappable_Filterable $iterable, callable $f): Mappable_Filterable {
    $toReturn = [];

    foreach ($iterable as $index => $element) {
        if ($f($element)->toNative()) {
            $toReturn[$index->toNative()] = $element;
        }
    }

    return ($iterable::class)::fromArray($toReturn);
}

function except(Mappable_Filterable $iterable, callable $f): Mappable_Filterable {
    $toReturn = [];

    foreach ($iterable as $index => $element) {
        if (!$f($element)->toNative()) {
            $toReturn[$index->toNative()] = $element;
        }
    }

    return ($iterable::class)::fromArray($toReturn);
}

function map(Mappable_Filterable $iterable, callable $f): Mappable_Filterable {
    $toReturn = [];

    foreach ($iterable as $index => $element) {
        $toReturn[$index->toNative()] = $f($element);
    }

    return ($iterable::class)::fromArray($toReturn);
}

function apply(Iterator $iterable, Function_ $f): Iterator {
    // TODO: Get number of args from function
    $paramsCount = $f->paramsCount;
    $chunks = $iterable->chunk(Integer_::from($paramsCount));

    $reduced = [];
    foreach ($chunks as $chunk) {
        if ($chunk->size()->toNative() < $paramsCount) {
            $reduced[] = $chunk->values[0];
            continue;
        }

        $reduced[] = $f(...$chunk->values);
    }

    return Array_::from($reduced);
}

class String_ extends Type_ implements Mappable_Filterable {
    use Colorable_;

    public string $type = 'String';
    public string $value;
    private int $current;

    static function fromArray(array $expressions): self {
        if (empty($expressions)) {
            $value = '';
        } else {
            $value = array_reduce($expressions, fn($acc, $it) => $acc . $it->toNative());
        }

        return self::from($value);
    }

    static function from(string $value): self {
        return new self($value);
    }

    function __construct(string $value) {
        $this->value = $value;

        $this->current = 1;
    }

    // Own functions
    function size(): Integer_ {
        return Integer_::from(strlen($this->value));
    }

    function chunk(Integer_ $chunkSize): Array_ {
        $chunks = array_chunk(str_split($this->value), $chunkSize->toNative());
        $chunks = array_map(fn($it) => String_::from(implode('', $it)), $chunks);

        return Array_::from($chunks);
    }

    // TODO: Make all these standard functions for int/str/array/map.
    public function contains(String_ $string): Boolean_ {
        return Boolean_::from(str_contains($this->value, $string->toNative()));
    }

    public function startsWith(String_ $string): Boolean_ {
        return Boolean_::from(str_starts_with($this->value, $string->toNative()));
    }

    public function endsWith(String_ $string): Boolean_ {
        return Boolean_::from(str_ends_with($this->value, $string->toNative()));
    }

    public function replace(String_ $search, String_ $replace): String_ {
        return String_::from(str_replace($search->toNative(), $replace->toNative(), $this->value));
    }

    public function split(String_ $string): Array_ {
        $parts = explode($string->toNative(), $this->value);
        $parts = array_filter($parts, fn($it) => $it !== '');

        $parts = array_map(fn($it) => String_::from($it), $parts);

        return Array_::from($parts);
    }

    public function shuffle(): String_ {
        return String_::from(str_shuffle($this->value));
    }

    public function toNumber(): Number_ {
        return strToNumber_($this->value);
    }

    // Iterator
    function rewind(): void {
        $this->current = 1;
    }

    function key(): ?Integer_ {
        if ($this->current > strlen($this->value)) {
            return null;
        }

        return Integer_::from($this->current);
    }

    function current(): ?Expression_ {
        return String_::from($this->value[$this->current - 1]);
    }

    function next(): void {
        $this->current++;
    }

    function valid(): bool {
        return $this->current <= strlen($this->value);
    }

    // IndexAccessible_
    function setAtIndex(Expression_ $index, Expression_ $expression): Expression_ {
        $class = $expression::class;
        if (!($class === String_::class)) {
            throw new Error("Cannot put a $class at a String index");
        }

        $index = $index->toNative();
        $count = strlen($this->value);

        if ($index === 'first') {
            $index = 1;
        }

        if ($index === 'last') {
            $index = $count;
        }

        if ($index === 'next') {
            $index = $count + 1;
        }

        if ($index > $count + 1) {
            $next = $index + 1;
            throw new Error("Cannot set element at index $index, next index is $next");
        }

        $toPut = $expression->asString();
        if (strlen($toPut) === 0) {
            throw new Error("Cannot put an empty string at an index");
        }

        if (strlen($toPut) > 1) {
            throw new Error("$toPut is more than one char, cannot put it at a single index");
        }

        $this->value[$index - 1] = $toPut;
        return $this;
    }

    function getAtIndex(Expression_ $index): self {
        $index = $index->toNative();
        $count = strlen($this->value);

        if ($index === 'first') {
            $index = 1;
        }

        if ($index === 'last') {
            $index = $count;
        }

        if ($index < 1) {
            throw new Error("Indexes start from 1, index $index does not exist.");
        }

        if ($index > $count) {
            throw new Error("Index $index not found, String has only $count elements");
        }

        return String_::from($this->value[$index - 1]);
    }

    function getAtIndexes(...$indexes): self {
        $toReturn = '';
        foreach ($indexes as $index) {
            $toReturn .= $this->getAtIndex($index)->toNative();
        }

        return String_::from($toReturn);
    }

    function getBetweenIndexes(Expression_ $start = null, Expression_ $end = null): self {
        $count = strlen($this->value);
        $start = ($start === null) ? 1 : $start->toNative();
        $end = ($end === null) ? $count : $end->toNative();

        if ($start < 1) {
            throw new Error("Indexes start from 1, index $start does not exist.");
        }

        if ($end >= $count + 1) {
            throw new Error("Index $end not found, string has only $count elements");
        }

        $range = '';
        foreach (range($start, $end) as $index) {
            $range .= $this->value[$index - 1];
        }

        return String_::from($range);
    }

    // Operators
    function infix_equal(Expression_ $right): Boolean_ {
        if (!($right instanceof String_)) {
            return Boolean_::from(false);
        }

        return Boolean_::from($this->value === $right->value);
    }

    function infix_exclamation_equal(Expression_ $right): Boolean_ {
        if (!($right instanceof String_)) {
            return Boolean_::from(true);
        }

        return Boolean_::from($this->value !== $right->value);
    }

    function infix_right_angle_bracket(Expression_ $right): Boolean_ {
        if (!($right instanceof String_)) {
            throw new Error('Cant compare length with ' . get_class($right));
        }

        return Boolean_::from(strlen($this->value) > strlen($right->value));
    }

    function infix_left_angle_bracket(Expression_ $right): Boolean_ {
        if (!($right instanceof String_)) {
            throw new Error('Cant compare length with ' . get_class($right));
        }

        return Boolean_::from(strlen($this->value) < strlen($right->value));
    }

    function infix_right_angle_bracket_equal(Expression_ $right): Boolean_ {
        if (!($right instanceof String_)) {
            throw new Error('Cant compare length with ' . get_class($right));
        }

        return Boolean_::from(strlen($this->value) >= strlen($right->value));
    }

    function infix_left_angle_bracket_equal(Expression_ $right): Boolean_ {
        if (!($right instanceof String_)) {
            throw new Error('Cant compare length with ' . get_class($right));
        }

        return Boolean_::from(strlen($this->value) <= strlen($right->value));
    }

    function infix_ampersand(Expression_ $right): self {
        if (!($right instanceof String_)) {
            throw new Error('Cant concatenate with ' . get_class($right));
        }

        return String_::from($this->value . $right->value);
    }

    function infix_kinda(Expression_ $right): Boolean_ {
        if (
            !($right instanceof String_) &&
            !($right instanceof Number_) &&
            !($right instanceof Boolean_)
        ) {
            return Boolean_::from(false);
        }

        $toCompareWith = $right->value;
        if ($toCompareWith === true) {
            $toCompareWith = 'true';
        }
        if ($toCompareWith === false) {
            $toCompareWith = 'false';
        }

        return Boolean_::from($this->value == $toCompareWith);
    }

    function infix_union(Expression_ $right): String_ {
        if (!($right instanceof String_)) {
            throw new Error('Cant do set union with ' . get_class($this));
        }

        $concat = $this->value . $right->value;
        $unique = implode('', array_unique(str_split($concat)));

        return String_::from($unique);
    }

    function infix_intersection(Expression_ $right): String_ {
        if (!($right instanceof String_)) {
            throw new Error('Cant do set intersection with ' . get_class($this));
        }

        $thisAsArray = str_split($this->value);
        $rightAsArray = str_split($right->value);

        $common = implode('', array_intersect($thisAsArray, $rightAsArray));

        return String_::from($common);
    }

    function infix_difference(Expression_ $right): String_ {
        if (!($right instanceof String_)) {
            throw new Error('Cant do set difference with ' . get_class($this));
        }

        $thisAsArray = str_split($this->value);
        $rightAsArray = str_split($right->value);

        $onlyHere = array_filter($thisAsArray, fn($it) => !in_array($it, $rightAsArray));
        $onlyHere = implode('', array_unique($onlyHere));

        return String_::from($onlyHere);
    }

    function prefix_exclamation(): self {
        return String_::from(strrev($this->value));
    }

    // Expression_
    function toNative() {
        return $this->value;
    }

    function asString(): string {
        return $this->value;
    }
}

abstract class Number_ extends Type_ {
    const PRECISION = 10;

    // Own functions
    function toString(): String_ {
        return String_::from(strval($this->value));
    }

    function roundDown(): Integer_ {
        return Integer_::from(floor($this->value));
    }

    function roundUp(): Integer_ {
        return Integer_::from(ceil($this->value));
    }

    // Operators
    function infix_equal(Expression_ $right): Boolean_ {
        if (!($right instanceof Number_)) {
            return Boolean_::from(false);
        }

        return Boolean_::from($this->value == $right->value);
    }

    function infix_exclamation_equal(Expression_ $right): Boolean_ {
        if (!($right instanceof Number_)) {
            return Boolean_::from(true);
        }

        return Boolean_::from($this->value !== $right->value);
    }

    function infix_right_angle_bracket(Expression_ $right): Boolean_ {
        if (!($right instanceof Number_)) {
            throw new Error('Cant compare a ' . get_class($right));
        }

        $nativeResult = $this->value > $right->value;
        return Boolean_::from($nativeResult);
    }

    function infix_left_angle_bracket(Expression_ $right): Boolean_ {
        if (!($right instanceof Number_)) {
            throw new Error('Cant compare a ' . get_class($right));
        }

        $nativeResult = $this->value < $right->value;
        return Boolean_::from($nativeResult);
    }

    function infix_right_angle_bracket_equal(Expression_ $right): Boolean_ {
        if (!($right instanceof Number_)) {
            throw new Error('Cant compare a ' . get_class($right));
        }

        $nativeResult = $this->value >= $right->value;
        return Boolean_::from($nativeResult);
    }

    function infix_left_angle_bracket_equal(Expression_ $right): Boolean_ {
        if (!($right instanceof Number_)) {
            throw new Error('Cant compare a ' . get_class($right));
        }

        $nativeResult = $this->value <= $right->value;
        return Boolean_::from($nativeResult);
    }

    function infix_plus(Expression_ $right): self {
        if (!($right instanceof Number_)) {
            throw new Error('Cant add a ' . get_class($right));
        }

        $nativeResult = bcadd($this->value, $right->value, self::PRECISION);

        return strToNumber_($nativeResult);
    }

    function infix_minus(Expression_ $right): self {
        if (!($right instanceof Number_)) {
            throw new Error('Cant subtract a ' . get_class($right));
        }

        $nativeResult = bcsub($this->value, $right->value, self::PRECISION);
        return strToNumber_($nativeResult);
    }

    function infix_asterisk(Expression_ $right): self {
        if (!($right instanceof Number_)) {
            throw new Error('Cant multiply a ' . get_class($right));
        }

        $nativeResult = bcmul($this->value, $right->value, self::PRECISION);
        return strToNumber_($nativeResult);
    }

    function infix_slash(Expression_ $right): self {
        if (!($right instanceof Number_)) {
            throw new Error('Cant divide a ' . get_class($right));
        }

        $nativeResult = bcdiv($this->value, $right->value, self::PRECISION);
        return strToNumber_($nativeResult);
    }

    function infix_slash_question(Expression_ $right): Boolean_ {
        $isZero = $this->infix_percentage($right)->toNative() === 0;
        return Boolean_::from($isZero);
    }

    function infix_percentage(Expression_ $right): self {
        if (!($right instanceof Number_)) {
            throw new Error('Cant modulo a ' . get_class($right));
        }

        $nativeResult = bcmod($this->value, $right->value, self::PRECISION);
        return strToNumber_($nativeResult);
    }

    function infix_caret(Expression_ $right): self {
        if (!($right instanceof Number_)) {
            throw new Error('Cant use a ' . get_class($right) . ' as an exponent');
        }

        $nativeResult = bcpow($this->value, $right->value, self::PRECISION);
        return strToNumber_($nativeResult);
    }

    function infix_kinda(Expression_ $right): Boolean_ {
        if (!($right instanceof Number_) && !($right instanceof String_)) {
            return Boolean_::from(false);
        }

        return Boolean_::from($this->value == strval($right->toNative()));
    }

    // Expression_
    function toNative() {
        return $this->value;
    }

    function asString(): string {
        return $this->value;
    }
}

class Integer_ extends Number_ implements Mappable_Filterable {
    public string $type = 'Integer';
    public int $value;
    private int $current;

    static function fromArray(array $expressions): self {
        if (empty($expressions)) {
            throw new Error('Cannot create Integer from an empty Array');
        } else {
            $value = array_reduce($expressions, function ($acc, $it) {
                if (!($it instanceof Integer_)) {
                    throw new Error('Cannot create Integer from a ' . $it::class);
                }
                return $acc . $it->toNative();
            });

            $value = intval($value);
        }

        return self::from($value);
    }

    static function from(int $integer): self {
        return new self($integer);
    }

    function __construct(string $value) {
        if (is_array($value)) {

        }

        $this->value = $value;

        $this->current = 1;
    }

    // Own functions
    function size(): Integer_ {
        return String_::from(strval($this->value))->size();
    }

    public function contains(Integer_ $int): Boolean_ {
        return Boolean_::from(str_contains(strval($this->value), strval($int->toNative())));
    }

    // IndexAccessible_
    function setAtIndex(Expression_ $index, Expression_ $expression): Expression_ {
        if (!($expression instanceof Integer_)) {
            $class = $expression::class;
            throw new Error("Cannot put a $class at an Integer index");
        }

        $string = $this->toString();
        $string->setAtIndex($index, $expression->toString());

        $this->value = intval($string->toNative());
        return $this;
    }

    function getAtIndex(Expression_ $index): self {
        $helper = String_::from(strval($this->value));
        $element = $helper->getAtIndex($index)->toNative();
        return Integer_::from(intval($element));
    }

    function getAtIndexes(...$indexes): self {
        $helper = String_::from(strval($this->value));
        $elements = $helper->getAtIndexes(...$indexes)->toNative();
        return Integer_::from(intval($elements));
    }

    function getBetweenIndexes(Expression_ $start = null, Expression_ $end = null): self {
        $helper = String_::from(strval($this->value));
        $elements = $helper->getBetweenIndexes($start, $end)->toNative();
        return Integer_::from(intval($elements));
    }

    // Iterator
    function rewind(): void {
        $this->current = 1;
    }

    function key(): ?Integer_ {
        if ($this->current > strlen($this->value)) {
            return null;
        }

        return Integer_::from($this->current);
    }

    function current(): ?Expression_ {
        return Integer_::from(strval($this->value)[$this->current - 1]);
    }

    function next(): void {
        $this->current++;
    }

    function valid(): bool {
        return $this->current <= strlen($this->value);
    }

    // Operators
    function prefix_exclamation(): self {
        return Integer_::from(intval(strrev(strval($this->value))));
    }

    function infix_union(Expression_ $right): Integer_ {
        if (!($right instanceof Integer_)) {
            throw new Error('Cant do set union with ' . get_class($this));
        }

        $concat = $this->value . $right->value;
        $unique = implode('', array_unique(str_split($concat)));

        return Integer_::from(intval($unique));
    }

    function infix_intersection(Expression_ $right): Integer_ {
        if (!($right instanceof Integer_)) {
            throw new Error('Cant do set intersection with ' . get_class($this));
        }

        $thisAsArray = str_split(strval($this->value));
        $rightAsArray = str_split(strval($right->value));

        $common = implode('', array_intersect($thisAsArray, $rightAsArray));
        return Integer_::from(intval($common));
    }

    function infix_difference(Expression_ $right): Integer_ {
        if (!($right instanceof Integer_)) {
            throw new Error('Cant do set difference with ' . get_class($this));
        }

        $thisAsArray = str_split(strval($this->value));
        $rightAsArray = str_split(strval($right->value));

        $onlyHere = array_filter($thisAsArray, fn($it) => !in_array($it, $rightAsArray));
        $onlyHere = implode('', array_unique($onlyHere));

        return Integer_::from(intval($onlyHere));
    }
}

class Decimal_ extends Number_ {
    public string $type = 'Decimal';

    static function from(float $float): self {
        return new self($float);
    }

    function __construct(public float $value) {
    }
}

class Boolean_ extends Type_ {
    public string $type = 'Boolean';

    static function from(string $boolean): self {
        return new self($boolean);
    }

    function __construct(public bool $value) {
    }

    // Operators
    function infix_equal(Expression_ $right): Boolean_ {
        if (!($right instanceof Boolean_)) {
            return Boolean_::from(false);
        }

        return Boolean_::from($this->value === $right->value);
    }

    function infix_exclamation_equal(Expression_ $right): Boolean_ {
        if (!($right instanceof Boolean_)) {
            return Boolean_::from(true);
        }

        return Boolean_::from($this->value !== $right->value);
    }

    function infix_and(Expression_ $right): self {
        if (!($right instanceof Boolean_)) {
            throw new Error('Cant do boolean math with a ' . get_class($right));
        }

        return Boolean_::from($this->value && $right->value);
    }

    function infix_or(Expression_ $right): self {
        if (!($right instanceof Boolean_)) {
            throw new Error('Cant do boolean math with a ' . get_class($right));
        }

        return Boolean_::from($this->value || $right->value);
    }

    function infix_kinda(Expression_ $right): self {
        if (!($right instanceof Boolean_) && !($right instanceof String_)) {
            return Boolean_::from(false);
        }

        $toCompareWith = $right->value;
        if ($toCompareWith === 'true') {
            $toCompareWith = true;
        }
        if ($toCompareWith === 'false') {
            $toCompareWith = false;
        }

        return Boolean_::from($this->value === $toCompareWith);
    }

    function prefix_exclamation(): self {
        return Boolean_::from(!$this->value);
    }

    // Expression_
    function toNative() {
        return $this->value;
    }

    function asString(): string {
        return $this->value ? 'true' : 'false';
    }
}

class Array_ extends Expression_ implements Mappable_Filterable, IndexAccessible_ {
    private bool $isExplicit = false;
    private bool $isRange = false;
    private bool $isInfinite = false;
    private int $current;

    static function fromArray(array $expressions): self {
        return self::from($expressions);
    }

    static function from(array $values, $start = null, $end = null): self {
        return new self(array_values($values), $start, $end);
    }

    public function __construct(
        public array $values = [],
        private ?Expression_ $start = null,
        private Expression_|string|null $end = null,
    ) {
        $this->current = 1;

        if ($start && $end) {
            $this->isRange = true;

            if ($end === 'inf') {
                $this->isInfinite = true;
                $this->current = $this->start->toNative();
                return;
            }

            $start = $start->toNative();
            $end = $end->toNative();

            $this->values = $this->nativeArrayOfInteger_s($start, $end);
            return;
        }

        $this->isExplicit = true;
    }

    // Own functions
    function size(): Integer_ {
        return Integer_::from(count($this->values));
    }

    function unique(): self {
        $unique = Array_::from([]);

        foreach ($this->values as $value) {
            if (!$unique->contains($value)->toNative()) {
                $unique->values[] = $value;
            }
        }

        return $unique;
    }

    function contains(Expression_ $expression): Boolean_ {
        $toCheck = $expression;

        foreach ($this->values as $value) {
            if ($value->asString() === $toCheck->asString()) {
                return Boolean_::from(true);
            }
        }

        return Boolean_::from(false);
    }

    function chunk(Integer_ $chunkSize): Array_ {
        $chunks = array_chunk($this->values, $chunkSize->toNative());
        $chunks = array_map(fn($it) => Array_::from($it), $chunks);

        return Array_::from($chunks);
    }

    function indexOf(Expression_ $expression): Integer_ {
        foreach ($this->values as $index => $value) {
            if ($value->asString() === $expression->asString()) {
                return Integer_::from($index + 1);
            }
        }

        // TODO: Not that. Think abt returning Nothing_ or a Maybe_ type.
        return Integer_::from(0);
    }

    function shuffle(): self {
        // TODO: guards for inf arrays, on all own functions.
        $keys = array_keys($this->values);
        shuffle($keys);

        $shuffled = [];
        foreach ($keys as $key) {
            $shuffled[$key] = $this->values[$key];
        }

        return Array_::from($shuffled);
    }

    function random(): Expression_ {
        // TODO: guards for inf arrays, on all own functions.
        return $this->values[array_rand($this->values)];
    }

    private function nativeArrayOfInteger_s(int $start, int $end): array {
        $array = [];

        if ($start <= $end) {
            for ($i = $start; $i <= $end; $i++) {
                $array[] = new Integer_($i);
            }
        }

        if ($start > $end) {
            for ($i = $start; $i >= $end; $i--) {
                $array[] = new Integer_($i);
            }
        }

        return $array;
    }

    // Iterator
    function rewind(): void {
        if ($this->isInfinite) {
            $this->current = $this->start->toNative();
        } else {
            $this->current = 1;
        }
    }

    function key(): ?Integer_ {
        if ($this->isInfinite) {
            return Integer_::from($this->current);
        }

        $index = $this->current - 1;

        if (!array_key_exists($index, $this->values)) {
            return null;
        }

        return Integer_::from($this->current);
    }

    function current(): ?Expression_ {
        if ($this->isInfinite) {
            return Integer_::from($this->current);
        }

        $index = $this->current - 1;

        return $this->values[$index];
    }

    function next(): void {
        $this->current++;
    }

    function valid(): bool {
        if ($this->isInfinite) {
            return true;
        }

        $index = $this->current - 1;
        return array_key_exists($index, $this->values);
    }

    // IndexAccessible_
    function setAtIndex(Expression_ $index, Expression_ $expression): Expression_ {
        if ($this->isInfinite) {
            throw new Error('Cannot set element at infinite arrays');
        }

        $index = $index->toNative();
        $count = count($this->values);

        if ($index === 'first') {
            $index = 1;
        }

        if ($index === 'last') {
            $index = $count;
        }

        if ($index === 'next') {
            $index = $count + 1;
        }

        if ($index > $count + 1) {
            $next = $count + 1;
            throw new Error("Cannot set element at index $index, next index is $next");
        }

//        echo("#");
        $this->values[$index - 1] = $expression;
//        echo(json_encode($this->values, JSON_PRETTY_PRINT) . PHP_EOL);

//        echo "#";
        return $this;
    }

    function getAtIndex(Expression_ $index): Expression_ {
        $index = $index->toNative();

        if ($this->isInfinite) {
            if ($index === 'first') {
                $index = 1;
            }

            if ($index === 'last') {
                throw new Error("Infinite arrays do not end.");
            }

            return new Integer_($this->start->toNative() + $index - 1);
        }

        $count = count($this->values);

        if ($index === 'first') {
            $index = 1;
        }

        if ($index === 'last') {
            $index = $count;
        }

        if ($index < 1) {
            throw new Error("Indexes start from 1, index $index does not exist.");
        }

        if ($index > $count) {
            throw new Error("Index $index not found, Array has only $count elements");
        }

        return $this->values[$index - 1];
    }

    function getAtIndexes(...$indexes): Array_ {
        $toReturn = [];
        foreach ($indexes as $index) {
            $toReturn[] = $this->getAtIndex($index);
        }

        return Array_::from($toReturn);
    }

    function getBetweenIndexes(Expression_ $start = null, Expression_ $end = null): Array_ {
        $count = count($this->values);
        $start = ($start === null) ? 1 : $start->toNative();
        $end = ($end === null) ? $count : $end->toNative();

        if ($this->isInfinite) {
            return Array_::from($this->nativeArrayOfInteger_s($start, $end));
        }

        if ($start < 1) {
            throw new Error("Indexes start from 1, index $start does not exist.");
        }

        if ($end > $count) {
            throw new Error("Index $end not found, Array has only $count elements");
        }

        $range = [];
        foreach (range($start, $end) as $index) {
            $range[] = $this->values[$index - 1];
        }

        return Array_::from($range);
    }

    // Expression_
    function toNative(): array {
        return $this->values;
    }

    function asString(): string {
        if ($this->isInfinite) {
            return '[' . $this->start->asString() . '..' . 'inf]';
        }

        $strings = array_map(fn($it) => $it->asString(), $this->values);
        return '[' . implode(', ', $strings) . ']';
    }

    // Operators
    function infix_equal(Expression_ $right): Boolean_ {
        if (!($right instanceof Array_)) {
            return Boolean_::from(false);
        }

        return Boolean_::from($this->asString() === $right->asString());
    }

    function infix_exclamation_equal(Expression_ $right): Boolean_ {
        if (!($right instanceof Array_)) {
            return Boolean_::from(true);
        }

        return Boolean_::from($this->asString() !== $right->asString());
    }

    function infix_ampersand(Expression_ $right): self {
        if (!($right instanceof Array_)) {
            throw new Error('Cant concatenate with ' . get_class($this));
        }

        return Array_::from(array_merge($this->values, $right->values));
    }

    function infix_union(Expression_ $right): self {
        if (!($right instanceof self)) {
            throw new Error('Cant do set union with ' . get_class($this));
        }

        return $this->infix_ampersand($right)->unique();
    }

    function infix_intersection(Expression_ $right): self {
        if (!($right instanceof self)) {
            throw new Error('Cant do set intersection with ' . get_class($this));
        }

        $inBoth = [];
        foreach ($this->values as $value) {
            if ($right->contains($value)->toNative()) {
                $inBoth[] = $value;
            }
        }

        return Array_::from($inBoth)->unique();
    }

    function infix_difference(Expression_ $right): self {
        if (!($right instanceof self)) {
            throw new Error('Cant do set difference with ' . get_class($this));
        }

        $onlyHere = [];
        foreach ($this->values as $value) {
            if (!$right->contains($value)->toNative()) {
                $onlyHere[] = $value;
            }
        }

        return Array_::from($onlyHere)->unique();
    }

    function prefix_exclamation(): self {
        return Array_::from(array_reverse($this->values));
    }

    function postfix_plus(): Number_ {
        return array_reduce($this->values, function ($acc, $it) {
            return $acc->infix_plus($it);
        }, Integer_::from(0));
    }

    function postfix_minus(): Number_ {
        $firstItem = array_shift($this->values)->value;

        return array_reduce($this->values, function ($acc, $it) {
            return $acc->infix_minus($it);
        }, Integer_::from($firstItem));
    }

    function postfix_asterisk(): Number_ {
        return array_reduce($this->values, function ($acc, $it) {
            return $acc->infix_asterisk($it);
        }, Integer_::from(1));
    }

    function postfix_slash(): Number_ {
        $firstItem = array_shift($this->values)->value;

        return array_reduce($this->values, function ($acc, $it) {
            return $acc->infix_slash($it);
        }, Integer_::from($firstItem));
    }

    function postfix_ampersand(): String_ {
        $firstItem = array_shift($this->values)->value;

        return array_reduce($this->values, function ($acc, $it) {
            return $acc->infix_ampersand($it);
        }, String_::from($firstItem));
    }

    function postfix_and(): Boolean_ {
        $firstItem = array_shift($this->values)->value;

        return array_reduce($this->values, function ($acc, $it) {
            return $acc->infix_and($it);
        }, Boolean_::from($firstItem));
    }

    function postfix_or(): Boolean_ {
        $firstItem = array_shift($this->values)->value;

        return array_reduce($this->values, function ($acc, $it) {
            return $acc->infix_or($it);
        }, Boolean_::from($firstItem));
    }
}

class Map_ extends Expression_ implements Mappable_Filterable, KeyAccessible_ {
    private int $current;

    static function fromArray(array $expressions): self {
        return self::from($expressions);
    }

    static function from(array $values): self {
        return new self($values);
    }

    public function __construct(private array $values = []) {
        $this->current = 1;
    }

    // Own functions
    function size(): Integer_ {
        return Integer_::from(count($this->values));
    }

    function keys(): Array_ {
        return Array_::from(array_map(fn($it) => String_::from($it), array_keys($this->values)));
    }

    function values(): Array_ {
        return Array_::from(array_values($this->values));
    }

    function hasKey(String_|Integer_ $key): Boolean_ {
        return Boolean_::from(array_key_exists($key->toNative(), $this->values));
    }

    function hasValue(Expression_ $expression): Boolean_ {
        foreach ($this->values as $value) {
            $toCheck = $expression;
            if ($value->asString() === $toCheck->asString()) {
                return Boolean_::from(true);
            }
        }

        return Boolean_::from(false);
    }

    function hasPair(String_|Integer_ $key, Expression_ $expression): Boolean_ {
        if (
            array_key_exists($key->toNative(), $this->values) &&
            $this->values[$key->toNative()]->asString() === $expression->asString()
        ) {
            return Boolean_::from(true);
        }

        return Boolean_::from(false);
    }

    // Iterator
    function rewind(): void {
        $this->current = 1;
    }

    function key(): ?String_ {
        $toIndexed = array_keys($this->values);

        $index = $this->current - 1;

        if (!array_key_exists($index, $toIndexed)) {
            return null;
        }

        return String_::from($toIndexed[$index]);
    }

    function current(): Expression_|null {
        $toIndexed = array_values($this->values);
        $index = $this->current - 1;

        return $toIndexed[$index];
    }

    function next(): void {
        $this->current++;
    }

    function valid(): bool {
        $toIndexed = array_values($this->values);
        $index = $this->current - 1;
        return array_key_exists($index, $toIndexed);
    }

    // KeyAccessible_
    function setAtIndex(Expression_ $index, Expression_ $expression): Expression_ {
        $index = $index->toNative();

        $this->values[$index] = $expression;
        return $this;
    }

    function getAtIndex(Expression_ $index): Expression_ {
        $index = $index->toNative();

        if ($index === 'first') {
            $index = array_key_first($this->values);
        }

        if ($index === 'last') {
            $index = array_key_last($this->values);
        }

        if (!array_key_exists($index, $this->values)) {
            throw new Error("key $index does not exist");
        }

        return $this->values[$index];
    }

    function getAtIndexes(...$indexes): Array_ {
        $toReturn = [];
        foreach ($indexes as $index) {
            $toReturn[] = $this->getAtIndex($index);
        }

        return Array_::from($toReturn);
    }

    // Operators
    function infix_equal(Expression_ $right): Boolean_ {
        if (!($right instanceof Map_)) {
            return Boolean_::from(false);
        }

        return Boolean_::from($this->asString() === $right->asString());
    }

    function infix_exclamation_equal(Expression_ $right): Boolean_ {
        if (!($right instanceof Map_)) {
            return Boolean_::from(true);
        }

        return Boolean_::from($this->asString() !== $right->asString());
    }

    function infix_ampersand(Expression_ $right): self {
        if (!($right instanceof Map_)) {
            throw new Error('Cant concatenate with ' . get_class($this));
        }

        return Map_::from(array_merge($this->values, $right->values));
    }

    function prefix_exclamation(): self {
        return Map_::from(array_reverse($this->values));
    }

    // Expression_
    function toNative(): array {
        return $this->values;
    }

    function asString(): string {
        $pairs = [];
        foreach ($this->values as $key => $value) {
            $pairs[] = $key . ' -> ' . $value->asString();
        }

        return '[' . implode(', ', $pairs) . ']';
    }
}

class Function_ extends Type_ {
    public string $type = 'Function';
    public Integer_ $invocationCount;
    public Array_ $bucket;

    private $f;
    public $paramsCount;

    static function from(callable $f): self {
        return new self($f);
    }

    function __construct($f) {
        $this->paramsCount = (new ReflectionFunction($f))->getNumberOfRequiredParameters();
        $this->f = Closure::bind($f, $this);

        $this->invocationCount = Integer_::from(0);
        $this->bucket = Array_::from([]);
    }

    function clear() {
        $this->clearInvocationCount();
        $this->clearBucket();
    }

    function clearInvocationCount() {
        $this->invocationCount = 0;
    }

    function clearBucket() {
        $this->bucket = [];
    }

    function __invoke(...$args) {
        $inc = $this->invocationCount->value + 1;
        $this->invocationCount = Integer_::from($inc);

        $f = $this->f;

        if (in_array('?', $args)) {
            $placeholderCount = count(array_filter($args, fn($it) => $it === '?'));

            $curried = function (...$moreArgs) use ($f, $args) {
                $finalArgs = [];
                foreach ($args as $argOrPlaceholder) {
                    if ($argOrPlaceholder === '?') {
                        if (!empty($moreArgs)) {
                            $finalArgs[] = array_shift($moreArgs);
                        } else {
                            throw new Error('Not enough arguments provided for placeholders');
                        }
                    } else {
                        $finalArgs[] = $argOrPlaceholder;
                    }
                }

                return $f(...$finalArgs);
            };

            $function = Function_::from($curried);
            $function->paramsCount = $placeholderCount;
            return $function;
        }

        if (count($args) < $this->paramsCount) {
            $curried = function (...$moreArgs) use ($f, $args) {
                return $f(...$args, ...$moreArgs);
            };

            $function = Function_::from($curried);
            $function->paramsCount = $this->paramsCount - count($args);
            return $function;
        }

        return $f(...$args);
    }

    function asString(): string {
        return 'function';
    }
}

function Say_($expression): String_ {
    $toPrint = $expression->asString();

    echo($toPrint);
    return String_::from($toPrint);
}

function SayNL_($expression): String_ {
    $toPrint = $expression->asString();
    $toPrint = $toPrint . PHP_EOL;

    echo($toPrint);
    return String_::from($toPrint);
}

function Ask_($expression): String_ {
    $answer = readline($expression->toNative());
    return String_::from($answer);
}

function isSequential(array $array) {
    if ($array === []) return true;
    return array_keys($array) === range(0, count($array) - 1);
}

function toSay($any) {
    switch (gettype($any)) {
        case 'string':
            return String_::from($any);
        case 'double':
            return Decimal_::from($any);
        case 'integer':
            return Integer_::from($any);
        case 'array':
            if (isSequential($any)) {
                return Array_::from(array_map(fn($it) => toSay($it), $any));
            }

            return Map_::from(array_map(fn($it) => toSay($it), $any));
    }

    if (is_callable($any)) {
        return Function_::from($any);
    }
}

// FUNCTIONS
$fullName = Function_::from(function ($a, $b, $c) {
    return join(' ', [$a, $b, $c]);
});

//// Implicit curry
//echo $fullName('Martin')('Luther', 'King') . PHP_EOL;
//echo $fullName('Martin')('Luther')('King') . PHP_EOL;
//
//// Explicit curry
//echo $fullName('?', '?', 'King')('Martin', 'Luther') . PHP_EOL;
//echo $fullName('?', '?', 'King')('Martin', '?')('Luther') . PHP_EOL;
//
//// Combination
//echo $fullName('Martin')('?', 'King')('Luther') . PHP_EOL;
//echo $fullName('Martin', '?', '?')('Luther')('King') . PHP_EOL;
//
//$adder = Function_::from(function ($a, $b, $c = 10) {
//    return $a + $b + $c;
//});
//
//// With default values
//echo $adder(1, 2) . PHP_EOL;
//echo $adder(1)(2) . PHP_EOL;
//echo $adder(1, '?')(2) . PHP_EOL;
//echo $adder('?', '?')(1)(2) . PHP_EOL;
//echo $adder(1, 2, '?')(3) . PHP_EOL;
//echo $adder(1)('?', 3)(2) . PHP_EOL;
//echo $adder(1)('?', '?')(2)(3) . PHP_EOL;
//
//// InvocationCount and bucket
//$foo = Function_::from(function ($a) {
//    if ($this->invocationCount === $a) {
//        return $this->invocationCount;
//    }
//
//    $this->bucket[] = $this->invocationCount;
//    return $this($a);
//});
//
//echo $foo(15) . PHP_EOL;
//echo $foo->invocationCount . PHP_EOL;
//echo join(',', $foo->bucket) . PHP_EOL;


