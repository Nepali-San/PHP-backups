<?php 
class maths{
	function mul($l,$b)
	{
		return $l*$b;
	}
	function add($l,$b)
	{
		return $l+$b;
	}

}
class rectangle extends maths{
	public $length,$breadth;
	function __construct($a , $b){
		$this->length = $a;
		$this->breadth = $b;
	}
	function area()
	{
		$area = $this->mul($this->length,$this->breadth);
		return $area;
	}
	function perimeter(){
		$parameter=$this->add($this->length,$this->breadth);
		$parameter= $this->mul(2,$parameter);
		return $parameter;
	}
}
$obj = new rectangle(2,3);
echo $obj -> area();
?>
