<?php

class example{

	public static $pub=4;

	static function display(){
		return self::$pub;
	}
}
echo example::$pub;
?>