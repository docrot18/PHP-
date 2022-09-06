<?php
$a = 5;
$b = 2;

function Sum()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

function Sum1()
{
    global $a, $b;

    $b = $a + $b;
}

Sum();
Sum1();
echo $b;
?>