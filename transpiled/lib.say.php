<?php

require_once './lib/all.php';
$assert_equals = Function_::from(function ($actual, $expected) use(&$assert_equals) {
    global $assert_equals;
    if ($actual->infix_equal($expected)->toNative()) {
        Say_(String_::from('.')->green());
    } else {
        Say_(String_::from('x')->red());
    }
});
$mockInput = Function_::from(function ($array) use(&$assert_equals, &$mockInput) {
    global $mockInput;
    return Function_::from(function () use(&$assert_equals, &$mockInput, &$array) {
        global $mockInput;
        return $array->getAtIndex($this->invocationCount);
    });
});