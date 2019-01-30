<?php

class birds{
	public $fly;
	public $legs;

	public function __construct($fly,$legs)
	{
		$this->fly = $fly;
		$this->legs = $legs;
	}


	public function ffly(){
       if($this->fly)            //if(1 or true)
       	return 'can fly';
       	else 
       		return "can't fly"; 
	}
	public function legcount(){
		return $this->legs;
	}
}

$bird = new birds(true,2);
echo 'fly status : '.$bird->fly.'<br/>';
echo 'conclusion : '.$bird->ffly().'<br/>';
echo 'No. of legs : '.$bird->legcount().'<br/>';

class pigeon extends birds{  //This is a child class and inherits every property(variables) and method(functions) of parent class
   public function desc(){
   	return 'symbol of peace'.'<br/>';
   }
}

$pigeon = new pigeon(true,2);
echo 'no. of legs for pigeon :'.$pigeon->legcount().'<br/>';
echo 'description of pigeon :'.$pigeon->desc().'<br/>';

class penguin extends birds{   

public function desc(){
	return 'Lives on icy places near sea';
}
}
$penguins = new penguin(false,2);

echo 'Penguins :'.$penguins->ffly().'<br/>';  //inherited property
echo 'description for penguins :'.$penguins->desc();  //self class property
?>