<?php

class person{
	public $name = 'What';   //This is used when we don't assign anything to this property
	public $age;

    
    public function __construct($n,$a,$b){  //this is a magic function called when object is created
    	echo $n.'name = '.$this->name.'<br/>';
    	$this->name = $a;
    	$this->age = $b;

    }

	public function sentence(){
		return $this->name;       //$this is used to indicate property of object's called or initial property of class 
	}
}


$nepali = new person('Nepali','Sagar',19);   //we create two objects and access them.
$chinese = new person('Chinese','Xing-xang',20);   //each object may have different same property with different value

echo 'Nepali name = '.$nepali->sentence().'<br/>';
echo 'Chinese name = '.$chinese->sentence().'<br/>';
echo 'Accessing directly a public property => '.$nepali->name;  
?>