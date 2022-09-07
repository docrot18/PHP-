<?php
// Правильно:
declare(ticks=1);
?>

<?php
// это то же самое:

// можно так:
declare(ticks=1) {
    // прочие действия
}

// или так:
declare(ticks=1);
// прочие действия
?>

<?php

declare(ticks=1);

// Функция, исполняемая при каждом тике
function tick_handler()
{
    echo "Вызывается tick_handler()\n";
}

register_tick_function('tick_handler'); // вызывает событие тика

$a = 1; // вызывает событие тика

if ($a > 0) {
    $a += 2; // вызывает событие тика
    print($a); // вызывает событие тика
}

?>