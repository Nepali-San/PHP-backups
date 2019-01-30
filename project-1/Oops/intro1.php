<?php

class person{
	public $name='unassigned so far';
	public $age;

    public function __construct($a){  //this is a magic function called when object is created
    	echo 'Constructed '.$a.'<br/>'.'Name '.$this->name.'<br/>';

    }

	public function sentence(){
		return $this->name;       //$this is used to indicate property of own function
	}
}


$nepali = new person('Nepali'); //we create two objects and access them.  
$chinese = new person('Chinese');   //each object may have different same property with different value
$nepali->name = ' Sagar';
$nepali->age = '19';
$chinese->name ='Xing-xang';
$chinese->age = '20';

echo 'Nepali name = '.$nepali->sentence().'<br/>';
echo 'Chinese name = '.$chinese->sentence();
//instead of assigning the name of objects outside the class we can pass them in consruct just after creating the object and use them done on n2.php
?>