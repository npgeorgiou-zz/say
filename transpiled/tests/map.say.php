<?php

require_once './lib/all.php';
$_dollar_map = Map_::from(['a' => String_::from('tuna'), 'b' => String_::from('bacon')]);
$_dollar_map->setAtIndex(String_::from('a'), String_::from('burger'));
$_dollar_map->setAtIndex(String_::from('c'), String_::from('salad'));
$_dollar_mapTests = Array_::from([$_dollar_map->infix_equal(Map_::from(['c' => String_::from('salad'), 'b' => String_::from('bacon'), 'a' => String_::from('burger')]))->prefix_exclamation(), $_dollar_map->infix_equal(Map_::from(['a' => String_::from('burger'), 'b' => String_::from('bacon'), 'c' => String_::from('salad')])), $_dollar_map->infix_exclamation_equal(Map_::from(['a' => String_::from('burger')])), $_dollar_map->infix_ampersand(Map_::from(['a' => Integer_::from(1), 'c' => Integer_::from(3)]))->infix_equal(Map_::from(['a' => Integer_::from(1), 'b' => String_::from('bacon'), 'c' => Integer_::from(3)])), Map_::from(['b' => Integer_::from(2), 'c' => Integer_::from(3), 'z' => Integer_::from(10)])->infix_ampersand($_dollar_map)->infix_equal(Map_::from(['b' => String_::from('bacon'), 'c' => String_::from('salad'), 'z' => Integer_::from(10), 'a' => String_::from('burger')])), $_dollar_map->size()->infix_equal(Integer_::from(3)), $_dollar_map->keys()->infix_equal(Array_::from([String_::from('a'), String_::from('b'), String_::from('c')])), $_dollar_map->values()->infix_equal(Array_::from([String_::from('burger'), String_::from('bacon'), String_::from('salad')])), $_dollar_map->hasKey(String_::from('a'))->infix_equal(Boolean_::from(true)), $_dollar_map->hasValue(String_::from('burger'))->infix_equal(Boolean_::from(true)), $_dollar_map->hasPair(String_::from('a'), String_::from('burger'))->infix_equal(Boolean_::from(true)), Map_::from(['a' => Integer_::from(1), 'b' => Integer_::from(2), 'c' => Integer_::from(1)])->values()->unique()->infix_equal(Array_::from([Integer_::from(1), Integer_::from(2)])), $_dollar_map->getAtIndex(String_::from('a'))->infix_equal(String_::from('burger')), $_dollar_map->getAtIndex(String_::from('first'))->infix_equal(String_::from('burger')), $_dollar_map->getAtIndex(String_::from('last'))->infix_equal(String_::from('salad')), $_dollar_map->getAtIndexes(String_::from('b'), String_::from('c'))->infix_equal(Array_::from([String_::from('bacon'), String_::from('salad')])), Map_::from(['1' => String_::from('one')])->getAtIndex(Integer_::from(1))->infix_equal(String_::from('one'))]);
foreach ($_dollar_mapTests as $_dollar_test) {
    if ($_dollar_test->infix_equal(Boolean_::from(true))->toNative()) {
        Say_(String_::from('.')->green());
    } else {
        Say_(String_::from('x')->red());
    }
}
$count = Integer_::from(0);
foreach ($_dollar_map as $_dollar_k => $_dollar_v) {
    $count = $count->infix_plus(Integer_::from(1));
}
if ($count->infix_equal(Integer_::from(3))->toNative()) {
    Say_(String_::from('.')->green());
} else {
    Say_(String_::from('x')->red());
}