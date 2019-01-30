<?php
class maths {
	public $pi = 3.14;
       

	function mul($a,$b){
		return  $a * $b;
    }
    function sq($r){
    	 return $r * $r;
    }


}

class circle extends maths{
public $radius;
function __construct($r){
	$this->radius=$r;
}

function area(){
	$area = $this->sq($this->radius);
	$area = $this->mul($this->pi,$area);
	return $area;
}

function per(){
	$per = $this->mul($this->radius,$this->pi);
	$per = $this->mul(2,$per);
	return $per;
}
}
$obj = new circle(6);

echo "area = ".$obj->area().'<br/>';
echo "perimeter = ".$obj->per();

?>