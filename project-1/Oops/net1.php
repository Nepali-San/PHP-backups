<?php
class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")<br/>";
        } else {
            echo "\$this is not defined.<br/>";
        }
    }
}

class B
{
    function bar()
    {  
    A::foo();      //only single defined & by other's two below only one undefined.
    	// $obj = new A;
     //    $obj->foo();
    }
}

$a = new A();
$a->foo();

A::foo();
$b = new B();
$b->bar();

B::bar();
?>