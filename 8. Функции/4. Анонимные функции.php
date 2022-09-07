<?php
echo preg_replace_callback('~-([a-z])~', function ($match) {
    return strtoupper($match[1]);
}, 'hello-world');
// выведет helloWorld
?>

<?php
$greet = function($name)
{
    printf("Привет, %s\r\n", $name);
};

$greet('Мир');
$greet('PHP');
?>

<?php
$message = 'привет';

// Наследуем $message
$example = function () use ($message) {
    var_dump($message);
};
$example();

// Значение унаследованной переменной задано там, где функция определена,
// но не там, где вызвана
$message = 'мир';
$example();

// Сбросим message
$message = 'привет';

// Наследование по ссылке
$example = function () use (&$message) {
    var_dump($message);
};
$example();

// Изменённое в родительской области видимости значение
// остаётся тем же внутри вызова функции
$message = 'мир';
echo $example();

// Замыкания могут принимать обычные аргументы
$example = function ($arg) use ($message) {
    var_dump($arg . ', ' . $message);
};
$example("привет");

// Объявление типа возвращаемого значения идет после конструкции use
$example = function () use ($message): string {
    return "привет $message";
};
var_dump($example());
?>