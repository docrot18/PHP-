<?php

$y = 1;

$fn1 = fn($x) => $x + $y;
// эквивалентно использованию $y по значению:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};

var_export($fn1(3));
?>

<?php

$z = 1;
$fn = fn($x) => fn($y) => $x * $y + $z;
// Выведет 51
var_export($fn(5)(10));
?>

<?php

$x = 1;
$fn = fn() => $x++; // Ничего не изменит
$fn();
var_export($x);  // Выведет 1

?>