<?php

require_once './lib/all.php';
$_dollar_ifTests = Array_::from([(function () use(&$_dollar_ifTests) {
    if (Boolean_::from(true)->toNative()) {
        return String_::from('foo');
    }
})()->infix_equal(String_::from('foo')), (function () use(&$_dollar_ifTests) {
    if (Boolean_::from(false)->toNative()) {
        return String_::from('foo');
    } else {
        return String_::from('bar');
    }
})()->infix_equal(String_::from('bar')), (function () use(&$_dollar_ifTests) {
    if (Boolean_::from(true)->toNative()) {
        return String_::from('foo');
    } else {
        if (Boolean_::from(true)->toNative()) {
            return String_::from('bar');
        } else {
            return String_::from('baz');
        }
    }
})()->infix_equal(String_::from('foo')), (function () use(&$_dollar_ifTests) {
    if (Boolean_::from(false)->toNative()) {
        return String_::from('foo');
    } else {
        if (Boolean_::from(true)->toNative()) {
            return String_::from('bar');
        } else {
            return String_::from('baz');
        }
    }
})()->infix_equal(String_::from('bar')), (function () use(&$_dollar_ifTests) {
    if (Boolean_::from(false)->toNative()) {
        return String_::from('foo');
    } else {
        if (Boolean_::from(false)->toNative()) {
            return String_::from('bar');
        } else {
            return String_::from('baz');
        }
    }
})()->infix_equal(String_::from('baz'))]);
foreach ($_dollar_ifTests as $_dollar_test) {
    if ($_dollar_test->toNative()) {
        Say_(String_::from('.')->green());
    } else {
        Say_(String_::from('x')->red());
    }
}
$actual = Array_::from([]);
$expected = Array_::from([], Integer_::from(10), Integer_::from(1));
foreach (Array_::from([], Integer_::from(10), Integer_::from(1)) as $_dollar_it) {
    $actual->setAtIndex(String_::from('next'), $_dollar_it);
}
if ($actual->infix_equal($expected)->toNative()) {
    Say_(String_::from('.')->green());
} else {
    Say_(String_::from('x')->red());
}
$actual = Array_::from([]);
foreach (Array_::from([], Integer_::from(10), Integer_::from(1)) as $_dollar_n) {
    $actual->setAtIndex(String_::from('next'), $_dollar_n);
}
if ($actual->infix_equal($expected)->toNative()) {
    Say_(String_::from('.')->green());
} else {
    Say_(String_::from('x')->red());
}
$actual = Array_::from([]);
foreach (Array_::from([], Integer_::from(10), Integer_::from(1)) as $_dollar_k => $_dollar_n) {
    $actual->setAtIndex(String_::from('next'), $_dollar_k);
}
if ($actual->infix_equal(Array_::from([], Integer_::from(1), Integer_::from(10)))->toNative()) {
    Say_(String_::from('.')->green());
} else {
    Say_(String_::from('x')->red());
}