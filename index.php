<?php

class Box {
    public $var;
    public $foo;
    public $bar;
    public function __construct($var, $foo, $bar) {
        var_dump($var, $foo, $bar);
        $this->var = $var;
        $this->foo = $foo;
        $this->bar = $bar;
    }
    public function __set( $name, $value ) {
        var_dump($name, $value);
    }
    public function __get( $name ) {
        return "prop $name does not exist";
    }
    public function __call($name, $args){
        var_dump($name, $args);
    }
    public function __destruct() {
        echo "Object was destroyed\n";
    }
}
$box = new Box('hello', 1, 2);
$box->bla = 5;
var_dump($box->salsa);
$box->helloworld('Hello world');
var_dump(serialize($box));