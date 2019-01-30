<?php

require_once "sub-main1.php";
require_once "main1.php";

$doit = new sub;

$doit->id = 40;
if($doit->deleteid()) {?>

	 <script>
	 alert('Successfully deleted');
	 </script>

	    <?php }
else{
	?>
	    <script>alert('Error !!!')</script> <?php }
?>
