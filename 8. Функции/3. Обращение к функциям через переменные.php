<?php
function foo() {
    echo "В foo()<br />\n";
}

function bar($arg = '')
{
    echo "В bar(); аргумент был '$arg'.<br />\n";
}

// Функция-обёртка для echo
function echoit($string)
{
    echo $string;
}

$func = 'foo';
$func();        // Вызывает функцию foo()

$func = 'bar';
$func('test');  // Вызывает функцию bar()

$func = 'echoit';
$func('test');  // Вызывает функцию echoit()
?>

<?php
class Foo
{
    function Variable()
    {
        $name = 'Bar';
        $this->$name(); // Вызываем метод Bar()
    }

    function Bar()
    {
        echo "Это Bar";
    }
}

$foo = new Foo();
$funcname = "Variable";
$foo->$funcname();  // Обращаемся к $foo->Variable()

?>

<?php
class Foo1
{
    static $variable = 'статическое свойство';
    static function Variable()
    {
        echo 'Вызов метода Variable';
    }
}

echo Foo1::$variable; // Это выведет 'статическое свойство'. Переменная $variable будет разрешена в этой области видимости.
$variable = "Variable";
Foo::$variable();  // Это вызовет $foo->Variable(), прочитав $variable из этой области видимости.

?>