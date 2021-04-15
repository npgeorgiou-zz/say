<?php

require_once './lib/all.php';
$filterTests = Array_::from([only(Array_::from([], Integer_::from(1), Integer_::from(10)), Function_::from(function ($item) use(&$filterTests) {
    global $filterTests;
    return $item->infix_right_angle_bracket(Integer_::from(5));
}))->infix_equal(Array_::from([Integer_::from(6), Integer_::from(7), Integer_::from(8), Integer_::from(9), Integer_::from(10)])), except(String_::from('foobar'), function ($_dollar_it) use(&$filterTests) {
    return $_dollar_it->infix_equal(String_::from('o'));
})->infix_equal(String_::from('fbar')), only(Integer_::from(123456), function ($_dollar_it) use(&$filterTests) {
    return $_dollar_it->infix_right_angle_bracket(Integer_::from(2))->infix_and($_dollar_it->infix_left_angle_bracket(Integer_::from(6)));
})->infix_equal(Integer_::from(345)), except(Map_::from(['a' => String_::from('foo'), 'b' => String_::from('bar')]), Function_::from(function ($item) use(&$filterTests) {
    $x = String_::from('bar');
    return $item->infix_equal(String_::from('foo'));
}))->infix_equal(Map_::from(['b' => String_::from('bar')]))]);
foreach ($filterTests as $test) {
    if ($test->infix_equal(Boolean_::from(true))->toNative()) {
        Say_(String_::from('.')->green());
    } else {
        Say_(String_::from('x')->red());
    }
}
$array = Array_::from([], Integer_::from(1), Integer_::from(5));
$mapTests = Array_::from([map(Array_::from([], Integer_::from(1), Integer_::from(5)), Function_::from(function ($item) use(&$filterTests, &$array, &$mapTests) {
    global $mapTests;
    return $item->toString();
}))->infix_equal(Array_::from([String_::from('1'), String_::from('2'), String_::from('3'), String_::from('4'), String_::from('5')])), map(String_::from('foobar'), Function_::from(function ($_dollar_item) use(&$filterTests, &$array, &$mapTests) {
    global $mapTests;
    return (function () use(&$filterTests, &$array, &$mapTests, &$_dollar_item) {
        if ($_dollar_item->infix_equal(String_::from('o'))->toNative()) {
            return String_::from('x');
        } else {
            return String_::from('' . String_::from('')->asString() . $_dollar_item->asString() . String_::from('')->asString());
        }
    })();
}))->infix_equal(String_::from('fxxbar')), map(Integer_::from(123456), function ($_dollar_it) use(&$filterTests, &$array, &$mapTests) {
    return (function () use(&$filterTests, &$array, &$mapTests, &$_dollar_it) {
        if ($_dollar_it->infix_left_angle_bracket(Integer_::from(3))->toNative()) {
            return Integer_::from(0);
        } else {
            return $_dollar_it;
        }
    })();
})->infix_equal(Integer_::from(3456)), map(Map_::from(['a' => String_::from('foo'), 'b' => String_::from('barz')]), function ($_dollar_it) use(&$filterTests, &$array, &$mapTests) {
    return (function () use(&$filterTests, &$array, &$mapTests, &$_dollar_it) {
        if ($_dollar_it->size()->infix_equal(Integer_::from(3))->toNative()) {
            return String_::from('x');
        } else {
            return $_dollar_it;
        }
    })();
})->infix_equal(Map_::from(['a' => String_::from('x'), 'b' => String_::from('barz')]))]);
foreach ($mapTests as $test) {
    if ($test->infix_equal(Boolean_::from(true))->toNative()) {
        Say_(String_::from('.')->green());
    } else {
        Say_(String_::from('x')->red());
    }
}
$add = Function_::from(function ($a, $b) use(&$filterTests, &$array, &$mapTests, &$add) {
    global $add;
    return $a->infix_plus($b);
});
$concat = Function_::from(function ($a, $b) use(&$filterTests, &$array, &$mapTests, &$add, &$concat) {
    global $concat;
    return String_::from('' . String_::from('')->asString() . $a->asString() . String_::from(' ')->asString() . $b->asString() . String_::from('')->asString());
});
$applyTests = Array_::from([apply(Array_::from([Integer_::from(1), Integer_::from(2), Integer_::from(3), Integer_::from(4)]), $add)->infix_equal(Array_::from([Integer_::from(3), Integer_::from(7)])), apply(Array_::from([String_::from('mickey'), String_::from('mouse'), String_::from('donald'), String_::from('duck'), String_::from('foo')]), $concat)->infix_equal(Array_::from([String_::from('mickey mouse'), String_::from('donald duck'), String_::from('foo')]))]);
foreach ($applyTests as $test) {
    if ($test->infix_equal(Boolean_::from(true))->toNative()) {
        Say_(String_::from('.')->green());
    } else {
        Say_(String_::from('x')->red());
    }
}