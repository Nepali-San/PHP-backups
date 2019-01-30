<?php
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'class/common.class.php';
require_once 'class/category.class.php';
require_once 'layout/header.php';
$sth = new category;
if(isset($_GET['id'])){
	$id = $sth->realescapestring($_GET['id']);
 $sth->set('id',$id);
if($sth->deletecategory()){
	?>
	<script type="text/javascript">
		alert('Succesfully deleted');
		window.location = "categorylist.php"; 
	</script>
	<?php
}
}
else{
	?>
	<script type="text/javascript">
		alert('ERROR !!!');
		window.location = "categorylist.php"; 
	</script>
	<?php
}
require_once 'layout/footer.php';
?>