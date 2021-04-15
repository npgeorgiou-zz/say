<?php

require_once './lib/all.php';
require_once __DIR__ . '/../lib.say.php';
$_at_black_jack_adder = Function_::from(function ($a, $b) use(&$_at_black_jack_adder) {
    if ($a->infix_equal(String_::from('A'))->infix_and($b->infix_equal(String_::from('A')))->toNative()) {
        $a = Integer_::from(1);
    }
    $safe = map(map(Array_::from([$a, $b]), function ($_dollar_it) use(&$_at_black_jack_adder, &$a, &$b, &$safe) {
        return (function () use(&$_at_black_jack_adder, &$a, &$b, &$safe, &$_dollar_it) {
            if ($_dollar_it->infix_equal(String_::from('J'))->infix_or($_dollar_it->infix_equal(String_::from('Q')))->infix_or($_dollar_it->infix_equal(String_::from('K')))->toNative()) {
                return Integer_::from(10);
            } else {
                return $_dollar_it;
            }
        })();
    }), function ($_dollar_it) use(&$_at_black_jack_adder, &$a, &$b, &$safe) {
        return (function () use(&$_at_black_jack_adder, &$a, &$b, &$safe, &$_dollar_it) {
            if ($_dollar_it->infix_equal(String_::from('A'))->toNative()) {
                return Integer_::from(1);
            } else {
                return $_dollar_it;
            }
        })();
    });
    return $safe->postfix_plus();
});
$assert_equals($_at_black_jack_adder(Integer_::from(1), Integer_::from(1)), Integer_::from(2));
$assert_equals($_at_black_jack_adder(String_::from('A'), Integer_::from(1)), Integer_::from(2));
$assert_equals($_at_black_jack_adder(String_::from('J'), Integer_::from(1)), Integer_::from(11));
$assert_equals($_at_black_jack_adder(String_::from('Q'), String_::from('K')), Integer_::from(20));
$_at_roll_result = Function_::from(function ($a, $b) use(&$_at_black_jack_adder, &$_at_roll_result) {
    global $_at_roll_result;
    return (function () use(&$_at_black_jack_adder, &$_at_roll_result, &$a, &$b) {
        if ($a->infix_exclamation_equal($b)->toNative()) {
            return $a->infix_plus($b);
        } else {
            return $a->infix_asterisk($b);
        }
    })();
});
$assert_equals($_at_roll_result(Integer_::from(1), Integer_::from(2)), Integer_::from(3));
$assert_equals($_at_roll_result(Integer_::from(6), Integer_::from(6)), Integer_::from(36));
$next_input = $mockInput(Array_::from([Integer_::from(1), Integer_::from(3), Integer_::from(2), Integer_::from(5), Integer_::from(4)]));
$output = Array_::from([]);
$converter = Function_::from(function ($number) use(&$_at_black_jack_adder, &$_at_roll_result, &$next_input, &$output, &$converter) {
    $mapping = Map_::from(['1' => String_::from('one'), '2' => String_::from('two'), '3' => String_::from('three'), '4' => String_::from('four')]);
    if ($mapping->hasKey($number)->prefix_exclamation()->toNative()) {
        return String_::from('too large');
    }
    return $mapping->getAtIndex($number);
});
$output->setAtIndex(String_::from('next'), $converter($next_input()));
$output->setAtIndex(String_::from('next'), $converter($next_input()));
$output->setAtIndex(String_::from('next'), $converter($next_input()));
$output->setAtIndex(String_::from('next'), $converter($next_input()));
$output->setAtIndex(String_::from('next'), $converter($next_input()));
$assert_equals($output, Array_::from([String_::from('one'), String_::from('three'), String_::from('two'), String_::from('too large'), String_::from('four')]));
$trip_is_successful = Function_::from(function ($gold, $pirates) use(&$_at_black_jack_adder, &$_at_roll_result, &$next_input, &$output, &$converter, &$trip_is_successful) {
    global $trip_is_successful;
    return $gold->infix_right_angle_bracket_equal($pirates)->infix_and($gold->infix_plus($pirates)->infix_right_angle_bracket(Integer_::from(100))->prefix_exclamation());
});
$assert_equals($trip_is_successful(Integer_::from(10), Integer_::from(11)), Boolean_::from(false));
$assert_equals($trip_is_successful(Integer_::from(10), Integer_::from(10)), Boolean_::from(true));
$assert_equals($trip_is_successful(Integer_::from(10), Integer_::from(9)), Boolean_::from(true));
$assert_equals($trip_is_successful(Integer_::from(50), Integer_::from(51)), Boolean_::from(false));
$ship_state = Function_::from(function ($gold, $pirates) use(&$_at_black_jack_adder, &$_at_roll_result, &$next_input, &$output, &$converter, &$trip_is_successful, &$ship_state) {
    global $ship_state;
    return (function () use(&$_at_black_jack_adder, &$_at_roll_result, &$next_input, &$output, &$converter, &$trip_is_successful, &$ship_state, &$gold, &$pirates) {
        if ($gold->infix_left_angle_bracket($pirates)->infix_or($gold->infix_plus($pirates)->infix_right_angle_bracket(Integer_::from(100)))->toNative()) {
            return Integer_::from(0);
        } else {
            if ($gold->infix_percentage($pirates)->infix_equal(Integer_::from(0))->toNative()) {
                return Integer_::from(2);
            } else {
                return Integer_::from(1);
            }
        }
    })();
});
$assert_equals($ship_state(Integer_::from(10), Integer_::from(11)), Integer_::from(0));
$assert_equals($ship_state(Integer_::from(51), Integer_::from(50)), Integer_::from(0));
$assert_equals($ship_state(Integer_::from(50), Integer_::from(50)), Integer_::from(2));
$assert_equals($ship_state(Integer_::from(70), Integer_::from(30)), Integer_::from(1));
$quality_to_tip_pct_ = Map_::from(['1' => Decimal_::from(0.05), '2' => Decimal_::from(0.1), '3' => Decimal_::from(0.15), '4' => Decimal_::from(0.2), '5' => Decimal_::from(0.25)]);
$calculate_tip = Function_::from(function ($quality, $price) use(&$_at_black_jack_adder, &$_at_roll_result, &$next_input, &$output, &$converter, &$trip_is_successful, &$ship_state, &$quality_to_tip_pct_, &$calculate_tip) {
    global $calculate_tip;
    return $price->infix_asterisk($quality_to_tip_pct_->getAtIndex($quality));
});
$assert_equals($calculate_tip(Integer_::from(1), Integer_::from(1000)), Integer_::from(50));
$assert_equals($calculate_tip(Integer_::from(2), Integer_::from(1000)), Integer_::from(100));
$assert_equals($calculate_tip(Integer_::from(3), Integer_::from(1000)), Integer_::from(150));
$assert_equals($calculate_tip(Integer_::from(4), Integer_::from(1000)), Integer_::from(200));
$assert_equals($calculate_tip(Integer_::from(5), Integer_::from(1000)), Integer_::from(250));
$can_form_amount = Function_::from(function ($nickels, $pennies, $amount) use(&$_at_black_jack_adder, &$_at_roll_result, &$next_input, &$output, &$converter, &$trip_is_successful, &$ship_state, &$quality_to_tip_pct_, &$calculate_tip, &$can_form_amount) {
    $nickels_to_use = $amount->infix_slash(Integer_::from(5))->roundDown();
    if ($nickels->infix_left_angle_bracket($nickels_to_use)->toNative()) {
        $nickels_to_use = $nickels;
    }
    $left = $amount->infix_minus($nickels_to_use->infix_asterisk(Integer_::from(5)));
    if ($left->infix_equal(Integer_::from(0))->toNative()) {
        return Boolean_::from(true);
    }
    return $pennies->infix_right_angle_bracket_equal($left);
});
$assert_equals($can_form_amount(Integer_::from(2), Integer_::from(1), Integer_::from(11)), Boolean_::from(true));
$assert_equals($can_form_amount(Integer_::from(2), Integer_::from(1), Integer_::from(12)), Boolean_::from(false));
$assert_equals($can_form_amount(Integer_::from(1), Integer_::from(6), Integer_::from(11)), Boolean_::from(true));
$assert_equals($can_form_amount(Integer_::from(1), Integer_::from(6), Integer_::from(12)), Boolean_::from(false));
$assert_equals(except(Array_::from([], Integer_::from(1), Integer_::from(20)), function ($_dollar_it) use(&$_at_black_jack_adder, &$_at_roll_result, &$next_input, &$output, &$converter, &$trip_is_successful, &$ship_state, &$quality_to_tip_pct_, &$calculate_tip, &$can_form_amount) {
    return $_dollar_it->infix_slash_question(Integer_::from(7))->infix_or($_dollar_it->contains(Integer_::from(7)));
}), Array_::from([Integer_::from(1), Integer_::from(2), Integer_::from(3), Integer_::from(4), Integer_::from(5), Integer_::from(6), Integer_::from(8), Integer_::from(9), Integer_::from(10), Integer_::from(11), Integer_::from(12), Integer_::from(13), Integer_::from(15), Integer_::from(16), Integer_::from(18), Integer_::from(19), Integer_::from(20)]));