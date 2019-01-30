<?php

require_once 'libs/controller.php';
require_once 'libs/model.php';

$url = explode('/',$_GET['p']);

if($url[0]=='home'){
	require_once 'controller/homecontroller.php';
	$obj = new homecontroller;
	$obj->home();
}

elseif($url[0]=='login'){
	require_once 'controller/homecontroller.php';
	$obj = new homecontroller;
	$obj->login();
}

elseif($url[0] == 'register'){
	require_once 'controller/registercontroller.php';
	$obj = new registercontroller;
	$obj ->register();
	if(isset($url[1]) && $url[1] == 'add'){
      $obj->add();
	}
	else{
		$obj->register();
	}
}

elseif($url[0] == 'user'){
	require_once 'controller/homecontroller.php';
	$obj = new homecontroller;
	if(isset($url[1]) && $url[1] == 'list'){
	$obj->showadmin();
}
}
elseif ($url[0] == 'about') {
    echo "this is about page";
}

elseif ($url[0]=='contact') {
	echo "This is contact page";
}

?>