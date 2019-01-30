<?php

//parent class

class person{
	public $name="Sher";  //public can be freely accessed from anywhere validly

	private $middlename="Bahadur"; // can't access directly from outside class($obj->middlename) but can be accessed through inside class ($obj->getmiddlename());

	protected $lastname="Deuwa" ;
	//can't access directly as like private but can be accessed by outside class by child class

	public function getname(){
		return $this->name;
	}
	public function getmiddlename(){
		return $this->middlename;
	}
	public function getlastname(){
		return $this->lastname;
	}
	private function privatemiddle(){   
//private methods can only be accessed by methods inside the class only
		return $this->middlename;
	}
	protected function protectlast(){
		return $this->lastname;
	}
	public function priaccesser(){     
	//outside the class we use this method to access private and protected method

		echo  $this->privatemiddle().' ';  
		echo  $this->protectlast();  
	}
}

$parent= new person;
echo "possible access through parent for all public methods".'<br/><br/>';
echo 'Public = $parent->name gives '.$parent->name.'<br/>';  //no error
echo 'Public = $parent->getname() gives '.$parent->getname().'<br/>';   //no error
echo 'Private = $parent->getmiddlename() gives '.$parent->getmiddlename().'<br/>';  //no error    <- child can't access this method

//$parent->middlename;  //error for both child and parent
//$parent->lastname;    //error for both child and parent

echo 'Protected = $parent->getlastname() gives '.$parent->getlastname().'<br/>';  //no error

echo "possible access through parent for private and protected methods".'<br/><br/>';
$parent->priaccesser();

//child class

class child extends person{

	public function getdetail(){
		echo $name=$this->name.'<br/>';  //no error

		//echo $middlename=$this->middlename; 

		//throws error because private property cannot be accessed by the inherited class
		echo $lastname=$this->lastname.'<br/>';//protected variable can be accessed by child class
        // $this->protectlast(); no error becoz protected method can be accessed inside child's class.
	}

}

$object1 = new child;
//$object1 -> getdetail();  //calling to child class
 //$object1 -> priaccesser(); 
echo '<br/><br/>';
echo 'possible access through child'.'<br/><br/>';
echo ' Public = object1->getname() gives '.$object1 -> getname().'<br/>';
echo ' Public = object1->name gives '.$object1->name.'<br/>';

echo "Protected = object1->getlastname() gives ".$object1->getlastname().'<br/>';

echo ':  Accessed through protected function '.$object1->priaccesser();
?>