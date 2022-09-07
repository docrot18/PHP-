<?php
class MyClass
{
}

class NotMyClass
{
}
$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof NotMyClass);
?>

<?php
class ParentClass
{
}

class MyClass1 extends ParentClass
{
}

$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof ParentClass);
?>


<?php
interface MyInterface
{
}

class MyClass2 implements MyInterface
{
}

$a = new MyClass;
$b = new MyClass;
$c = 'MyClass';
$d = 'NotMyClass';

var_dump($a instanceof $b); // $b - объект класса MyClass
var_dump($a instanceof $c); // $c - строка 'MyClass'
var_dump($a instanceof $d); // $d - строка 'NotMyClass'
?>