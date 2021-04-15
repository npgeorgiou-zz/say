<?php

require_once './lib/all.php';
$varInScope = String_::from('!');
$fullName = Function_::from(function ($_at_first, $_at_middle, $_at_last) use(&$varInScope, &$fullName) {
    global $fullName;
    $this->bucket->setAtIndex(String_::from('next'), String_::from('foo'));
    return String_::from('' . String_::from('')->asString() . $_at_first->asString() . String_::from(' ')->asString() . $_at_middle->asString() . String_::from(' ')->asString() . $_at_last->asString() . String_::from(' ')->asString() . $varInScope->asString() . String_::from('')->asString());
});
$helloer = Function_::from(function ($name) use(&$varInScope, &$fullName, &$helloer) {
    global $helloer;
    return String_::from('' . String_::from('Hello ')->asString() . $name->asString() . String_::from('')->asString());
});
$butler = Function_::from(function ($greeter, $name) use(&$varInScope, &$fullName, &$helloer, &$butler) {
    global $butler;
    return $greeter($name)->infix_ampersand(String_::from(' Do you want tea?'));
});
$adder = Function_::from(function ($a) use(&$varInScope, &$fullName, &$helloer, &$butler, &$adder) {
    global $adder;
    return Function_::from(function ($b) use(&$varInScope, &$fullName, &$helloer, &$butler, &$adder, &$a) {
        global $adder;
        return $a->infix_plus($b);
    });
});
$addTo2 = $adder(Integer_::from(2));
$result = String_::from('martin luther king !');
$_dollar_functionTests = Array_::from([$fullName(String_::from('martin'), String_::from('luther'), String_::from('king'))->infix_equal($result), $fullName(String_::from('martin'))(String_::from('luther'), String_::from('king'))->infix_equal($result), $fullName(String_::from('martin'))(String_::from('luther'))(String_::from('king'))->infix_equal($result), $fullName('?', '?', String_::from('king'))('?', String_::from('luther'))(String_::from('martin'))->infix_equal($result), $fullName('?', '?', String_::from('king'))(String_::from('martin'))(String_::from('luther'))->infix_equal($result), $fullName(String_::from('martin'))('?', String_::from('king'))(String_::from('luther'))->infix_equal($result), $fullName->invocationCount->infix_equal(Integer_::from(6)), $fullName->bucket->infix_equal(Array_::from([String_::from('foo'), String_::from('foo'), String_::from('foo'), String_::from('foo'), String_::from('foo'), String_::from('foo')])), $butler($helloer, String_::from('main.java.nikos'))->infix_equal(String_::from('Hello main.java.nikos Do you want tea?')), $addTo2(Integer_::from(4))->infix_equal(Integer_::from(6))]);
foreach ($_dollar_functionTests as $_dollar_test) {
    if ($_dollar_test->infix_equal(Boolean_::from(true))->toNative()) {
        Say_(String_::from('.')->green());
    } else {
        Say_(String_::from('x')->red());
    }
}