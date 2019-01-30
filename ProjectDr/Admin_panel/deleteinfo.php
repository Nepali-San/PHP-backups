<?php
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'class/common.class.php';
require_once 'class/info.class.php';
$title = "Delete info";
require_once 'layout/header.php';
$info = new info;
if(isset($_GET['id'])){
$id=$_GET['id'];
$info->id = $id;
if($info->deleteinfo()){
	echo "<script>alert('Deleted successfully')</script>";
}
else{
echo "<script>alert('Error on deleting info')</script>";
}
?>

<script type="text/javascript">
		window.location = "infolist.php";
	</script>
<?php } ?>
