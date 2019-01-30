<?php
class controller{
	function loadmodel($modelname){
		$path = 'model/'.$modelname.'.php';
		require_once $path;
		return new $modelname;
	}
	function loadview($viewname,$header=true,$footer = true){
        $path = 'view/'.$viewname.'.php';
        if($header){
        	require_once 'view/layout/header.php';
        }
		require_once $path;
		if($footer){
			require_once 'view/layout/footer.php';
		}
	}
}
?>