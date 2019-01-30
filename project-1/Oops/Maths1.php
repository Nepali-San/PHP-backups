<?php
class rectangle{

	public $length,$breadth;

	function __construct($a,$b)
	{
		$this->length=$a;
		$this->breadth=$b;
	}
	function area(){
		$c= $this->length;
		$d = $this->breadth;
		return $c*$d;
	}
}

$obj = new rectangle(4,5);
echo $obj->area();


?>