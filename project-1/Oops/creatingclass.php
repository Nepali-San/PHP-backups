<?php
//creating class
class firstclass{

	public $name='your name';
	//variable that can be accessed by all function

	//creating method
	function getname(){
		//$this allows us to access variable inside class
		//return $name
		return $this->name;
	}
}

//creating new instance of class ie object
$object=new firstclass;
//accessing method of class
$name=$object->getname(); 
echo $name;
?>