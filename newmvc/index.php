<?php
require_once 'config/config.php';
require_once 'libs/controller.php';
require_once 'libs/model.php';

// creates an array from url
$url = explode('/',$_GET['p']);
$count = count($url);
if($count == '1'){
	if($url[0]== 'home'){
		require_once  'controller/homecontroller.php';
		$obj = new homecontroller;
		$obj ->index();
	}
	else{
		require_once 'controller/categorycontroller.php';
		$category = $url[0];
		$obj = new categorycontroller($category);
		$obj ->index($category);
	}
}
elseif($count == '2'){
	require_once 'controller/newscontroller.php';
	$category = $url[0];
	$news = $url[1];
	$obj = new newscontroller($category,$news);
	$obj->index($news);
}
?>