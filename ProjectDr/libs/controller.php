<?php
class controller{
	function loadmodel($modelname){
		$path = 'model/'.$modelname.'.php';
		require_once $path;
		return new $modelname;
	}	
	function loadview($viewname,$header=true,$footer = true,$banner = false){
        $path = 'view/'.$viewname.'.php';
        if($header){
        	if($banner){
        		require_once 'view/layout/headerwithbanner.php';
        	}
        	else{
        	require_once 'view/layout/header.php';
            }
        }
		require_once $path;
		if($footer){
			require_once 'view/layout/footer.php';
		}
	}
}
?>