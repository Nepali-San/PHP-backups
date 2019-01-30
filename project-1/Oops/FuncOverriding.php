<?php

//Topic : Function overriding

class parents{
	public $a,$b;

	public function doit($a,$b){  //can be accessed by it's child also
		echo "Product of $a and $b is ".($a*$b);
	}
}

class child extends parents{

	public function doit($a,$b){   //rename this method to see effect
		echo "Sum of $a and $b is ".($a+$b);   //no parenthessis cause error
	}
}

$obj = new child;      
$obj->doit(4,5);   // <-'A'

//'A' Uses the method of child not of parent when both method have same name,
//but if we rename the method of child ,suppose 'doit1' then above program will
//use the method of parent

?>
