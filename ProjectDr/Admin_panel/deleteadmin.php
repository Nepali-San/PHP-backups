<?php
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'class/common.class.php';
require_once 'class/admin.class.php';
require_once 'layout/header.php';
$sth = new admin;
if($_GET['id']){
$id = $sth->realescapestring($_GET['id']);
$sth->set('id',$id);
if($sth->deleteadmin()){
	?>
	<script type="text/javascript">
		alert('Succesfully deleted admin with id = <?php echo $id ?>');
		window.location = "adminlist.php"; 
	</script>
	<?php
}
else{
	?>
	<script type="text/javascript">
		alert('Failed to delete');
		window.location = "adminlist.php"; 
	</script>
	<?php
}
}
require_once 'layout/footer.php';
?>