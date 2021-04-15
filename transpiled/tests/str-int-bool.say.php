<?php

require_once './lib/all.php';
$_dollar_comparisonTests = Array_::from([String_::from('foo')->infix_equal(Boolean_::from(true))->infix_equal(Boolean_::from(false)), String_::from('foo')->infix_equal(Integer_::from(1))->infix_equal(Boolean_::from(false)), String_::from('')->infix_equal(Decimal_::from(0.0))->infix_equal(Boolean_::from(false)), String_::from('')->infix_equal(Boolean_::from(false))->infix_equal(Boolean_::from(false)), Boolean_::from(false)->infix_equal(Integer_::from(0))->infix_equal(Boolean_::from(false)), Boolean_::from(true)->infix_equal(Integer_::from(1))->infix_equal(Boolean_::from(false)), Integer_::from(1)->infix_exclamation_equal(Integer_::from(2))->infix_equal(Boolean_::from(true)), String_::from('foo')->infix_exclamation_equal(Integer_::from(1))->infix_equal(Boolean_::from(true)), String_::from('foo')->infix_exclamation_equal(Boolean_::from(false))->infix_equal(Boolean_::from(true)), String_::from('foo')->infix_exclamation_equal(Boolean_::from(true))->infix_equal(Boolean_::from(true)), Boolean_::from(true)->infix_exclamation_equal(Integer_::from(1))->infix_equal(Boolean_::from(true)), Boolean_::from(false)->infix_exclamation_equal(Integer_::from(0))->infix_equal(Boolean_::from(true)), Boolean_::from(true)->infix_kinda(String_::from('true'))->infix_equal(Boolean_::from(true)), String_::from('false')->infix_kinda(Boolean_::from(false))->infix_equal(Boolean_::from(true)), Integer_::from(1)->infix_kinda(String_::from('1'))->infix_equal(Boolean_::from(true)), String_::from('1.1')->infix_kinda(Decimal_::from(1.1))->infix_equal(Boolean_::from(true)), Decimal_::from(1.1)->infix_kinda(Decimal_::from(1.1))->infix_equal(Boolean_::from(true)), String_::from('foo')->infix_kinda(String_::from('foo'))->infix_equal(Boolean_::from(true)), Boolean_::from(false)->infix_kinda(Boolean_::from(false))->infix_equal(Boolean_::from(true)), Boolean_::from(false)->infix_kinda(String_::from(''))->infix_equal(Boolean_::from(false)), Boolean_::from(false)->infix_kinda(Integer_::from(0))->infix_equal(Boolean_::from(false)), Boolean_::from(true)->infix_kinda(Integer_::from(1))->infix_equal(Boolean_::from(false))]);
foreach ($_dollar_comparisonTests as $_dollar_test) {
    if ($_dollar_test->infix_equal(Boolean_::from(true))->toNative()) {
        Say_(String_::from('.')->green());
    } else {
        Say_(String_::from('x')->red());
    }
}
$_dollar_stringTests = Array_::from([String_::from('foo')->infix_equal(String_::from('oof'))->prefix_exclamation(), String_::from('foobar')->infix_ampersand(String_::from('barbaz'))->infix_equal(String_::from('foobarbarbaz')), String_::from('foo')->infix_equal(String_::from('foo'))->infix_equal(Boolean_::from(true)), String_::from('foo')->infix_exclamation_equal(String_::from('bar'))->infix_equal(Boolean_::from(true)), String_::from('foo')->infix_equal(String_::from('bar'))->infix_equal(Boolean_::from(false)), String_::from('aaaa')->infix_right_angle_bracket(String_::from('aaa'))->infix_equal(Boolean_::from(true)), String_::from('aaa')->infix_right_angle_bracket_equal(String_::from('aaa'))->infix_equal(Boolean_::from(true)), String_::from('aaa')->infix_left_angle_bracket_equal(String_::from('aaaa'))->infix_equal(Boolean_::from(true)), String_::from('aaa')->infix_left_angle_bracket_equal(String_::from('aaa'))->infix_equal(Boolean_::from(true)), String_::from('foobar')->infix_union(String_::from('barbaz'))->infix_equal(String_::from('fobarz')), String_::from('foobar')->infix_intersection(String_::from('barbaz'))->infix_equal(String_::from('bar')), String_::from('foobar')->infix_difference(String_::from('barbaz'))->infix_equal(String_::from('fo')), String_::from('1.23')->size()->infix_equal(Integer_::from(4)), String_::from('fooba')->chunk(Integer_::from(2))->infix_equal(Array_::from([String_::from('fo'), String_::from('ob'), String_::from('a')])), String_::from('1.23')->toNumber()->infix_equal(Decimal_::from(1.23)), String_::from('0')->toNumber()->infix_equal(Integer_::from(0)), String_::from('foobar')->contains(String_::from('b'))->infix_equal(Boolean_::from(true)), String_::from('foobar')->replace(String_::from('o'), String_::from('a'))->infix_equal(String_::from('faabar')), String_::from('foobar')->shuffle()->infix_exclamation_equal(String_::from('foobar')), String_::from('foobar')->startsWith(String_::from('foo'))->infix_equal(Boolean_::from(true)), String_::from('foobar')->endsWith(String_::from('bar'))->infix_equal(Boolean_::from(true)), String_::from('foobar')->split(String_::from('o'))->infix_equal(Array_::from([String_::from('f'), String_::from('bar')]))]);
foreach ($_dollar_stringTests as $_dollar_test) {
    if ($_dollar_test->infix_equal(Boolean_::from(true))->toNative()) {
        Say_(String_::from('.')->green());
    } else {
        Say_(String_::from('x')->red());
    }
}
$_dollar_numberTests = Array_::from([Integer_::from(-1)->infix_plus(Integer_::from(1))->infix_equal(Integer_::from(0)), Decimal_::from(1.2)->infix_minus(Decimal_::from(1.1))->infix_equal(Decimal_::from(0.1)), Integer_::from(2)->infix_asterisk(Decimal_::from(-3.1))->infix_equal(Decimal_::from(-6.2)), Decimal_::from(6.1)->infix_slash(Integer_::from(3))->infix_equal(Decimal_::from(2.0333333333)), Decimal_::from(5.1)->infix_percentage(Decimal_::from(2.2))->infix_equal(Decimal_::from(0.7)), Integer_::from(1)->infix_equal(Integer_::from(1))->infix_equal(Boolean_::from(true)), Integer_::from(1)->infix_exclamation_equal(Integer_::from(-1))->infix_equal(Boolean_::from(true)), Decimal_::from(3.3)->infix_equal(Decimal_::from(3.3))->infix_equal(Boolean_::from(true)), Integer_::from(3)->infix_equal(Decimal_::from(3.0))->infix_equal(Boolean_::from(true)), Decimal_::from(3.0)->infix_equal(Integer_::from(3))->infix_equal(Boolean_::from(true)), Integer_::from(2)->infix_right_angle_bracket(Integer_::from(1))->infix_equal(Boolean_::from(true)), Integer_::from(2)->infix_right_angle_bracket_equal(Decimal_::from(2.0))->infix_equal(Boolean_::from(true)), Decimal_::from(1.9999)->infix_left_angle_bracket(Integer_::from(2))->infix_equal(Boolean_::from(true)), Integer_::from(1)->infix_left_angle_bracket_equal(Integer_::from(1))->infix_equal(Boolean_::from(true)), Decimal_::from(0.1)->infix_plus(Decimal_::from(0.2))->infix_equal(Decimal_::from(0.3)), Decimal_::from(-0.1)->infix_plus(Decimal_::from(0.2))->infix_equal(Decimal_::from(0.1)), Integer_::from(123)->toString()->infix_equal(String_::from('123')), Decimal_::from(1.23)->toString()->infix_equal(String_::from('1.23')), Decimal_::from(1.23)->roundDown()->infix_equal(Integer_::from(1)), Decimal_::from(1.23)->roundUp()->infix_equal(Integer_::from(2))]);
foreach ($_dollar_numberTests as $_dollar_test) {
    if ($_dollar_test->infix_equal(Boolean_::from(true))->toNative()) {
        Say_(String_::from('.')->green());
    } else {
        Say_(String_::from('x')->red());
    }
}
$_dollar_integerTests = Array_::from([Integer_::from(123)->infix_equal(Integer_::from(321))->prefix_exclamation(), Integer_::from(123)->infix_union(Integer_::from(345))->infix_equal(Integer_::from(12345)), Integer_::from(1223)->infix_intersection(Integer_::from(3345))->infix_equal(Integer_::from(3)), Integer_::from(1223)->infix_difference(Integer_::from(3345))->infix_equal(Integer_::from(12)), Integer_::from(123)->size()->infix_equal(Integer_::from(3))]);
foreach ($_dollar_integerTests as $_dollar_test) {
    if ($_dollar_test->infix_equal(Boolean_::from(true))->toNative()) {
        Say_(String_::from('.')->green());
    } else {
        Say_(String_::from('x')->red());
    }
}
$_dollar_booleanTests = Array_::from([Boolean_::from(true)->infix_equal(Boolean_::from(false))->prefix_exclamation(), Boolean_::from(true)->infix_equal(Boolean_::from(true))->infix_equal(Boolean_::from(true)), Boolean_::from(true)->infix_exclamation_equal(Boolean_::from(true))->infix_equal(Boolean_::from(false)), Boolean_::from(true)->infix_exclamation_equal(Boolean_::from(false))->infix_equal(Boolean_::from(true)), Boolean_::from(true)->infix_and(Boolean_::from(true))->infix_equal(Boolean_::from(true)), Boolean_::from(true)->infix_and(Boolean_::from(false))->infix_equal(Boolean_::from(false)), Boolean_::from(false)->infix_and(Boolean_::from(false))->infix_equal(Boolean_::from(false)), Boolean_::from(true)->infix_or(Boolean_::from(true))->infix_equal(Boolean_::from(true)), Boolean_::from(true)->infix_or(Boolean_::from(false))->infix_equal(Boolean_::from(true)), Boolean_::from(false)->infix_or(Boolean_::from(false))->infix_equal(Boolean_::from(false))]);
foreach ($_dollar_booleanTests as $_dollar_test) {
    if ($_dollar_test->infix_equal(Boolean_::from(true))->toNative()) {
        Say_(String_::from('.')->green());
    } else {
        Say_(String_::from('x')->red());
    }
}
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
$_dollar_indexAccessTests = Array_::from([$_dollar_array->infix_equal(Array_::from([Integer_::from(4), Integer_::from(2), Integer_::from(5), Integer_::from(6)])), $_dollar_array->getAtIndex(Integer_::from(1))->infix_equal(Integer_::from(4)), $_dollar_array->getAtIndex(String_::from('first'))->infix_equal(Integer_::from(4)), $_dollar_array->getAtIndex(String_::from('last'))->infix_equal(Integer_::from(6)), $_dollar_array->getAtIndexes(Integer_::from(2), Integer_::from(3))->infix_equal(Array_::from([Integer_::from(2), Integer_::from(5)])), $_dollar_array->getBetweenIndexes(Integer_::from(1), Integer_::from(3))->infix_equal(Array_::from([Integer_::from(4), Integer_::from(2), Integer_::from(5)])), $_dollar_array->getBetweenIndexes(Integer_::from(2), null)->infix_equal(Array_::from([Integer_::from(2), Integer_::from(5), Integer_::from(6)])), $_dollar_array->getBetweenIndexes(null, Integer_::from(3))->infix_equal(Array_::from([Integer_::from(4), Integer_::from(2), Integer_::from(5)])), $_dollar_string->infix_equal(String_::from('XoobaZA')), $_dollar_string->getAtIndex(Integer_::from(1))->infix_equal(String_::from('X')), $_dollar_string->getAtIndex(String_::from('first'))->infix_equal(String_::from('X')), $_dollar_string->getAtIndex(String_::from('last'))->infix_equal(String_::from('A')), $_dollar_string->getAtIndexes(Integer_::from(2), Integer_::from(3))->infix_equal(String_::from('oo')), $_dollar_string->getBetweenIndexes(Integer_::from(1), Integer_::from(4))->infix_equal(String_::from('Xoob')), $_dollar_string->getBetweenIndexes(Integer_::from(2), null)->infix_equal(String_::from('oobaZA')), $_dollar_string->getBetweenIndexes(null, Integer_::from(3))->infix_equal(String_::from('Xoo')), $_dollar_int->infix_equal(Integer_::from(123)), $_dollar_int->getAtIndex(Integer_::from(1))->infix_equal(Integer_::from(1)), $_dollar_int->getAtIndex(String_::from('first'))->infix_equal(Integer_::from(1)), $_dollar_int->getAtIndex(String_::from('last'))->infix_equal(Integer_::from(3)), $_dollar_int->getAtIndexes(Integer_::from(2), Integer_::from(3))->infix_equal(Integer_::from(23)), $_dollar_int->getBetweenIndexes(Integer_::from(1), Integer_::from(3))->infix_equal(Integer_::from(123)), $_dollar_int->getBetweenIndexes(Integer_::from(2), null)->infix_equal(Integer_::from(23)), $_dollar_int->getBetweenIndexes(null, Integer_::from(3))->infix_equal(Integer_::from(123)), Array_::from([Integer_::from(10), Integer_::from(20)])->getAtIndex((function () use(&$_dollar_comparisonTests, &$_dollar_stringTests, &$_dollar_numberTests, &$_dollar_integerTests, &$_dollar_booleanTests, &$_dollar_array, &$_dollar_string, &$_dollar_int, &$_dollar_indexAccessTests) {
    if (Integer_::from(1)->infix_equal(Integer_::from(1))->toNative()) {
        return Integer_::from(1);
    } else {
        return Integer_::from(2);
    }
})())->infix_equal(Integer_::from(10)), String_::from('foo')->getAtIndex((function () use(&$_dollar_comparisonTests, &$_dollar_stringTests, &$_dollar_numberTests, &$_dollar_integerTests, &$_dollar_booleanTests, &$_dollar_array, &$_dollar_string, &$_dollar_int, &$_dollar_indexAccessTests) {
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