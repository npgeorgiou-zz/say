<?php

require_once './lib/all.php';
require_once __DIR__ . '/../lib.say.php';
$expected = String_::from('12fizz4buzzfizz78fizzbuzz11fizz1314fizzbuzz1617fizz19buzzfizz2223fizzbuzz26fizz2829fizzbuzz3132fizz34buzzfizz3738fizzbuzz41fizz4344fizzbuzz4647fizz49buzzfizz5253fizzbuzz56fizz5859fizzbuzz6162fizz64buzzfizz6768fizzbuzz71fizz7374fizzbuzz7677fizz79buzzfizz8283fizzbuzz86fizz8889fizzbuzz9192fizz94buzzfizz9798fizzbuzz');
$actual = String_::from('');
foreach (Array_::from([], Integer_::from(1), Integer_::from(100)) as $_dollar_it) {
    if ($_dollar_it->infix_slash_question(Integer_::from(3))->infix_and($_dollar_it->infix_slash_question(Integer_::from(5)))->toNative()) {
        $actual = $actual->infix_ampersand(String_::from('fizzbuzz'));
    } else {
        if ($_dollar_it->infix_slash_question(Integer_::from(3))->toNative()) {
            $actual = $actual->infix_ampersand(String_::from('fizz'));
        } else {
            if ($_dollar_it->infix_slash_question(Integer_::from(5))->toNative()) {
                $actual = $actual->infix_ampersand(String_::from('buzz'));
            } else {
                $actual = $actual->infix_ampersand($_dollar_it->toString());
            }
        }
    }
}
$assert_equals($expected, $actual);
$actual = String_::from('');
foreach (Array_::from([], Integer_::from(1), Integer_::from(100)) as $_dollar_it) {
    $actual = $actual->infix_ampersand((function () use(&$expected, &$actual, &$_dollar_it) {
        if ($_dollar_it->infix_slash_question(Integer_::from(3))->infix_and($_dollar_it->infix_slash_question(Integer_::from(5)))->toNative()) {
            return String_::from('fizzbuzz');
        } else {
            if ($_dollar_it->infix_slash_question(Integer_::from(3))->toNative()) {
                return String_::from('fizz');
            } else {
                if ($_dollar_it->infix_slash_question(Integer_::from(5))->toNative()) {
                    return String_::from('buzz');
                } else {
                    return $_dollar_it->toString();
                }
            }
        }
    })());
}
$assert_equals($expected, $actual);
$actual = String_::from('');
foreach (Array_::from([], Integer_::from(1), Integer_::from(100)) as $_dollar_it) {
    if ($_dollar_it->infix_slash_question(Integer_::from(3))->toNative()) {
        $actual = $actual->infix_ampersand(String_::from('fizz'));
    }
    if ($_dollar_it->infix_slash_question(Integer_::from(5))->toNative()) {
        $actual = $actual->infix_ampersand(String_::from('buzz'));
    }
    if ($_dollar_it->infix_slash_question(Integer_::from(3))->prefix_exclamation()->infix_and($_dollar_it->infix_slash_question(Integer_::from(5))->prefix_exclamation())->toNative()) {
        $actual = $actual->infix_ampersand($_dollar_it->toString());
    }
}
$assert_equals($expected, $actual);
$actual = String_::from('');
foreach (Array_::from([], Integer_::from(1), Integer_::from(100)) as $_dollar_it) {
    $_dollar_map = Map_::from(['0' => String_::from('fizzbuzz'), '3' => String_::from('fizz'), '5' => String_::from('buzz'), '6' => String_::from('fizz'), '9' => String_::from('fizz'), '10' => String_::from('buzz'), '12' => String_::from('fizz')]);
    $remainder = $_dollar_it->infix_percentage(Integer_::from(15));
    $actual = $actual->infix_ampersand((function () use(&$expected, &$actual, &$_dollar_it, &$_dollar_map, &$remainder) {
        if ($_dollar_map->hasKey($remainder)->toNative()) {
            return $_dollar_map->getAtIndex($remainder);
        } else {
            return $_dollar_it->toString();
        }
    })());
}
$assert_equals($expected, $actual);
$fizzer = Function_::from(function () use(&$expected, &$actual, &$fizzer) {
    global $fizzer;
    return String_::from('fizz');
});
$buzzer = Function_::from(function () use(&$expected, &$actual, &$fizzer, &$buzzer) {
    global $buzzer;
    return String_::from('buzz');
});
$fizzbuzzer = Function_::from(function () use(&$expected, &$actual, &$fizzer, &$buzzer, &$fizzbuzzer) {
    global $fizzbuzzer;
    return String_::from('fizzbuzz');
});
$number = Function_::from(function ($n) use(&$expected, &$actual, &$fizzer, &$buzzer, &$fizzbuzzer, &$number) {
    global $number;
    return $n->toString();
});
$loop = Array_::from([$number, $number, $fizzer, $number, $buzzer, $fizzer, $number, $number, $fizzer, $buzzer, $number, $fizzer, $number, $number, $fizzbuzzer]);
$actual = String_::from('');
$test = Array_::from([], Integer_::from(1), Integer_::from(100))->chunk(Integer_::from(15));
foreach ($test as $_dollar_chunk) {
    foreach ($_dollar_chunk as $_dollar_index => $_dollar_number) {
        $actual = $actual->infix_ampersand($loop->getAtIndex($_dollar_index)($_dollar_number));
    }
}
$assert_equals($expected, $actual);