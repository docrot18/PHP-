<?php
class Foo {
    public function getPrivateMethod() {
        return [$this, 'privateMethod'];
    }
    private function privateMethod() {
        echo __METHOD__, "\n";
    }
}
$foo = new Foo;
$privateMethod = $foo->getPrivateMethod();
$privateMethod();
// Fatal error: Call to private method Foo::privateMethod() from global scope
// Это потому, что вызов выполняется вне Foo, и с этого момента будет проверяться видимость.
class Foo1 {
    public function getPrivateMethod() {
        // Использует область, в которой получена callback-функция.
        return $this->privateMethod(...); // идентично Closure::fromCallable([$this, 'privateMethod']);
    }
    private function privateMethod() {
        echo __METHOD__, "\n";
    }
}
$foo1 = new Foo1;
$privateMethod = $foo1->getPrivateMethod();
$privateMethod();  // Foo1::privateMethod
?>