<?php

require_once './lib/all.php';
$_dollar_array = Array_::from([Integer_::from(1), Integer_::from(2), Integer_::from(3)]);
$_dollar_array->setAtIndex(Integer_::from(1), Integer_::from(4));
$_dollar_array->setAtIndex(String_::from('last'), Integer_::from(5));
$_dollar_array->setAtIndex(String_::from('next'), Integer_::from(6));
$_dollar_string = String_::from('foobar');
$_dollar_string->setAtIndex(Integer_::from(1), String_::from('X'));
$_dollar_string->setAtIndex(String_::from('last'), String_::from('Z'));
$_dollar_string->setAtIndex(String_::from('next'), String_::from('A'));
$_dollar_int = Integer_::from(66);
$_dollar_int->setAtIndex(Integer_::from(1), Integer_::from(1));
$_dollar_int->setAtIndex(String_::from('last'), Integer_::from(2));
$_dollar_int->setAtIndex(String_::from('next'), Integer_::from(3));
$_dollar_indexAccessTests = Array_::from([$_dollar_array->infix_equal(Array_::from([Integer_::from(4), Integer_::from(2), Integer_::from(5), Integer_::from(6)])), $_dollar_array->getAtIndex(Integer_::from(1))->infix_equal(Integer_::from(4)), $_dollar_array->getAtIndex(String_::from('first'))->infix_equal(Integer_::from(4)), $_dollar_array->getAtIndex(String_::from('last'))->infix_equal(Integer_::from(6)), $_dollar_array->getAtIndexes(Integer_::from(2), Integer_::from(3))->infix_equal(Array_::from([Integer_::from(2), Integer_::from(5)])), $_dollar_array->getBetweenIndexes(Integer_::from(1), Integer_::from(3))->infix_equal(Array_::from([Integer_::from(4), Integer_::from(2), Integer_::from(5)])), $_dollar_array->getBetweenIndexes(Integer_::from(2), null)->infix_equal(Array_::from([Integer_::from(2), Integer_::from(5), Integer_::from(6)])), $_dollar_array->getBetweenIndexes(null, Integer_::from(3))->infix_equal(Array_::from([Integer_::from(4), Integer_::from(2), Integer_::from(5)])), $_dollar_string->infix_equal(String_::from('XoobaZA')), $_dollar_string->getAtIndex(Integer_::from(1))->infix_equal(String_::from('X')), $_dollar_string->getAtIndex(String_::from('first'))->infix_equal(String_::from('X')), $_dollar_string->getAtIndex(String_::from('last'))->infix_equal(String_::from('A')), $_dollar_string->getAtIndexes(Integer_::from(2), Integer_::from(3))->infix_equal(String_::from('oo')), $_dollar_string->getBetweenIndexes(Integer_::from(1), Integer_::from(4))->infix_equal(String_::from('Xoob')), $_dollar_string->getBetweenIndexes(Integer_::from(2), null)->infix_equal(String_::from('oobaZA')), $_dollar_string->getBetweenIndexes(null, Integer_::from(3))->infix_equal(String_::from('Xoo')), $_dollar_int->infix_equal(Integer_::from(123)), $_dollar_int->getAtIndex(Integer_::from(1))->infix_equal(Integer_::from(1)), $_dollar_int->getAtIndex(String_::from('first'))->infix_equal(Integer_::from(1)), $_dollar_int->getAtIndex(String_::from('last'))->infix_equal(Integer_::from(3)), $_dollar_int->getAtIndexes(Integer_::from(2), Integer_::from(3))->infix_equal(Integer_::from(23)), $_dollar_int->getBetweenIndexes(Integer_::from(1), Integer_::from(3))->infix_equal(Integer_::from(123)), $_dollar_int->getBetweenIndexes(Integer_::from(2), null)->infix_equal(Integer_::from(23)), $_dollar_int->getBetweenIndexes(null, Integer_::from(3))->infix_equal(Integer_::from(123)), Array_::from([Integer_::from(10), Integer_::from(20)])->getAtIndex((function () use(&$_dollar_array, &$_dollar_string, &$_dollar_int, &$_dollar_indexAccessTests) {
    if (Integer_::from(1)->infix_equal(Integer_::from(1))->toNative()) {
        return Integer_::from(1);
    } else {
        return Integer_::from(2);
    }
})())->infix_equal(Integer_::from(10)), String_::from('foo')->getAtIndex((function () use(&$_dollar_array, &$_dollar_string, &$_dollar_int, &$_dollar_indexAccessTests) {
    if (Integer_::from(1)->infix_equal(Integer_::from(1))->toNative()) {
        return Integer_::from(1);
    } else {
        return Integer_::from(2);
    }
})())->infix_equal(String_::from('f'))]);
foreach ($_dollar_indexAccessTests as $_dollar_test) {
    if ($_dollar_test->infix_equal(Boolean_::from(true))->toNative()) {
        Say_(String_::from('.')->green());
    } else {
        Say_(String_::from('x')->red());
    }
}