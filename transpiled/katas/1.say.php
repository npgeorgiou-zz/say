<?php

require_once './lib/all.php';
require_once __DIR__ . '/../lib.say.php';
$name = String_::from('Bob');
$assert_equals(String_::from('Hello ')->infix_ampersand($name), String_::from('Hello Bob'));
$name = String_::from('Bob');
$greeting = String_::from('Hello ')->infix_ampersand((function () use(&$name, &$greeting) {
    if (Array_::from([String_::from('Alice'), String_::from('Bob')])->contains($name)->toNative()) {
        return String_::from('' . String_::from('')->asString() . $name->asString() . String_::from('')->asString());
    } else {
        return String_::from('');
    }
})());
$assert_equals($greeting, String_::from('Hello Bob'));
$series = Array_::from([], Integer_::from(1), Integer_::from(100));
$assert_equals($series->postfix_plus(), Integer_::from(5050));
$assert_equals($series->getAtIndex(String_::from('first'))->infix_plus($series->getAtIndex(String_::from('last')))->infix_asterisk($series->size())->infix_slash(Integer_::from(2)), Integer_::from(5050));
$sum = Integer_::from(0);
foreach ($series as $_dollar_it) {
    $sum = $sum->infix_plus($_dollar_it);
}
$assert_equals($sum, Integer_::from(5050));
$summer = Function_::from(function ($a, $b) use(&$name, &$greeting, &$series, &$sum, &$summer) {
    global $summer;
    return $a->infix_plus($b);
});
foreach (Array_::from([], Integer_::from(1), 'inf') as $_dollar_it) {
    if ($series->size()->infix_right_angle_bracket(Integer_::from(1))->toNative()) {
        $series = apply($series, $summer);
    } else {
        break;
    }
}
$assert_equals($series->getAtIndex(Integer_::from(1)), Integer_::from(5050));
$series = Array_::from([], Integer_::from(1), Integer_::from(100));
while ($series->size()->infix_right_angle_bracket(Integer_::from(1))->toNative()) {
    $series = apply($series, $summer);
}
$assert_equals($series->getAtIndex(Integer_::from(1)), Integer_::from(5050));
$series = Array_::from([], Integer_::from(1), Integer_::from(100));
$series = only($series, function ($_dollar_it) use(&$name, &$greeting, &$series, &$sum, &$summer) {
    return $_dollar_it->infix_percentage(Integer_::from(3))->infix_equal(Integer_::from(0));
})->infix_union(only($series, function ($_dollar_it) use(&$name, &$greeting, &$series, &$sum, &$summer) {
    return $_dollar_it->infix_percentage(Integer_::from(5))->infix_equal(Integer_::from(0));
}));
$assert_equals($series->postfix_plus(), Integer_::from(2418));
$n = Integer_::from(100);
$operation = String_::from('products');
$result = (function () use(&$name, &$greeting, &$series, &$sum, &$summer, &$n, &$operation, &$result) {
    if ($operation->infix_equal(String_::from('sums'))->toNative()) {
        return Array_::from([], Integer_::from(1), $n)->postfix_plus();
    } else {
        if ($operation->infix_equal(String_::from('products'))->toNative()) {
            return Array_::from([], Integer_::from(1), $n)->postfix_asterisk();
        } else {
            return String_::from('wrong answer');
        }
    }
})();
$assert_equals($result, Decimal_::from(9.223372036854776E+18));
$_dollar_table = Map_::from([]);
foreach (Array_::from([], Integer_::from(1), Integer_::from(10)) as $Multiplicand) {
    $_dollar_table->setAtIndex($Multiplicand, Array_::from([]));
    foreach (Array_::from([], Integer_::from(1), Integer_::from(10)) as $Multiplier) {
        $_dollar_table->getAtIndex($Multiplicand)->setAtIndex(String_::from('next'), $Multiplicand->infix_asterisk($Multiplier));
    }
}
$assert_equals($_dollar_table, Map_::from(['1' => Array_::from([Integer_::from(1), Integer_::from(2), Integer_::from(3), Integer_::from(4), Integer_::from(5), Integer_::from(6), Integer_::from(7), Integer_::from(8), Integer_::from(9), Integer_::from(10)]), '2' => Array_::from([Integer_::from(2), Integer_::from(4), Integer_::from(6), Integer_::from(8), Integer_::from(10), Integer_::from(12), Integer_::from(14), Integer_::from(16), Integer_::from(18), Integer_::from(20)]), '3' => Array_::from([Integer_::from(3), Integer_::from(6), Integer_::from(9), Integer_::from(12), Integer_::from(15), Integer_::from(18), Integer_::from(21), Integer_::from(24), Integer_::from(27), Integer_::from(30)]), '4' => Array_::from([Integer_::from(4), Integer_::from(8), Integer_::from(12), Integer_::from(16), Integer_::from(20), Integer_::from(24), Integer_::from(28), Integer_::from(32), Integer_::from(36), Integer_::from(40)]), '5' => Array_::from([Integer_::from(5), Integer_::from(10), Integer_::from(15), Integer_::from(20), Integer_::from(25), Integer_::from(30), Integer_::from(35), Integer_::from(40), Integer_::from(45), Integer_::from(50)]), '6' => Array_::from([Integer_::from(6), Integer_::from(12), Integer_::from(18), Integer_::from(24), Integer_::from(30), Integer_::from(36), Integer_::from(42), Integer_::from(48), Integer_::from(54), Integer_::from(60)]), '7' => Array_::from([Integer_::from(7), Integer_::from(14), Integer_::from(21), Integer_::from(28), Integer_::from(35), Integer_::from(42), Integer_::from(49), Integer_::from(56), Integer_::from(63), Integer_::from(70)]), '8' => Array_::from([Integer_::from(8), Integer_::from(16), Integer_::from(24), Integer_::from(32), Integer_::from(40), Integer_::from(48), Integer_::from(56), Integer_::from(64), Integer_::from(72), Integer_::from(80)]), '9' => Array_::from([Integer_::from(9), Integer_::from(18), Integer_::from(27), Integer_::from(36), Integer_::from(45), Integer_::from(54), Integer_::from(63), Integer_::from(72), Integer_::from(81), Integer_::from(90)]), '10' => Array_::from([Integer_::from(10), Integer_::from(20), Integer_::from(30), Integer_::from(40), Integer_::from(50), Integer_::from(60), Integer_::from(70), Integer_::from(80), Integer_::from(90), Integer_::from(100)])]));
$isPrime = Function_::from(function ($n) use(&$name, &$greeting, &$series, &$sum, &$summer, &$operation, &$result, &$_dollar_table, &$isPrime) {
    global $isPrime;
    if ($n->infix_left_angle_bracket_equal(Integer_::from(1))->toNative()) {
        return Boolean_::from(false);
    }
    foreach (Array_::from([], Integer_::from(2), $n->infix_minus(Integer_::from(1))) as $_dollar_it) {
        if ($n->infix_slash_question($_dollar_it)->toNative()) {
            return Boolean_::from(false);
        }
    }
    return Boolean_::from(true);
});
$assert_equals(apply(Array_::from([], Integer_::from(1), Integer_::from(10)), $isPrime), Array_::from([Boolean_::from(false), Boolean_::from(false), Boolean_::from(true), Boolean_::from(false), Boolean_::from(true), Boolean_::from(false), Boolean_::from(true), Boolean_::from(false), Boolean_::from(false), Boolean_::from(false)]));
$is_leap = Function_::from(function ($year) use(&$name, &$greeting, &$series, &$sum, &$summer, &$n, &$operation, &$result, &$_dollar_table, &$isPrime, &$is_leap) {
    $step4 = Function_::from(function ($year) use(&$name, &$greeting, &$series, &$sum, &$summer, &$n, &$operation, &$result, &$_dollar_table, &$isPrime, &$is_leap, &$step4) {
        global $step4;
        return Boolean_::from(true);
    });
    $step5 = Function_::from(function ($year) use(&$name, &$greeting, &$series, &$sum, &$summer, &$n, &$operation, &$result, &$_dollar_table, &$isPrime, &$is_leap, &$step4, &$step5) {
        global $step5;
        return Boolean_::from(false);
    });
    $step3 = Function_::from(function ($year) use(&$name, &$greeting, &$series, &$sum, &$summer, &$n, &$operation, &$result, &$_dollar_table, &$isPrime, &$is_leap, &$step4, &$step5, &$step3) {
        global $step3;
        return (function () use(&$name, &$greeting, &$series, &$sum, &$summer, &$n, &$operation, &$result, &$_dollar_table, &$isPrime, &$is_leap, &$step4, &$step5, &$step3, &$year) {
            if ($year->infix_slash_question(Integer_::from(400))->toNative()) {
                return $step4($year);
            } else {
                return $step5($year);
            }
        })();
    });
    $step2 = Function_::from(function ($year) use(&$name, &$greeting, &$series, &$sum, &$summer, &$n, &$operation, &$result, &$_dollar_table, &$isPrime, &$is_leap, &$step4, &$step5, &$step3, &$step2) {
        global $step2;
        return (function () use(&$name, &$greeting, &$series, &$sum, &$summer, &$n, &$operation, &$result, &$_dollar_table, &$isPrime, &$is_leap, &$step4, &$step5, &$step3, &$step2, &$year) {
            if ($year->infix_slash_question(Integer_::from(100))->toNative()) {
                return $step3($year);
            } else {
                return $step4($year);
            }
        })();
    });
    $step1 = Function_::from(function ($year) use(&$name, &$greeting, &$series, &$sum, &$summer, &$n, &$operation, &$result, &$_dollar_table, &$isPrime, &$is_leap, &$step4, &$step5, &$step3, &$step2, &$step1) {
        global $step1;
        return (function () use(&$name, &$greeting, &$series, &$sum, &$summer, &$n, &$operation, &$result, &$_dollar_table, &$isPrime, &$is_leap, &$step4, &$step5, &$step3, &$step2, &$step1, &$year) {
            if ($year->infix_slash_question(Integer_::from(4))->toNative()) {
                return $step2($year);
            } else {
                return $step5($year);
            }
        })();
    });
    return $step1($year);
});
$leap_years = Array_::from([]);
foreach (Array_::from([], Integer_::from(2021), 'inf') as $_dollar_it) {
    if ($leap_years->size()->infix_equal(Integer_::from(10))->toNative()) {
        break;
    }
    if ($is_leap($_dollar_it)->toNative()) {
        $leap_years->setAtIndex(String_::from('next'), $_dollar_it);
    }
}
$assert_equals($leap_years, Array_::from([Integer_::from(2024), Integer_::from(2028), Integer_::from(2032), Integer_::from(2036), Integer_::from(2040), Integer_::from(2044), Integer_::from(2048), Integer_::from(2052), Integer_::from(2056), Integer_::from(2060)]));
$input = $mockInput(Array_::from([Integer_::from(10), Integer_::from(80), Integer_::from(20), Integer_::from(20), Integer_::from(70), Integer_::from(60), Integer_::from(65), Integer_::from(66)]));
$secret = Integer_::from(66);
$tries = Array_::from([]);
do {
    $guess = $input();
    $tries->setAtIndex(String_::from('next'), $guess);
} while ($guess->infix_exclamation_equal($secret)->toNative());
$assert_equals($tries->unique()->size(), Integer_::from(7));