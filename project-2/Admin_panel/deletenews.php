<?php
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'class/common.class.php';
require_once 'class/news.class.php';
$title = "Delete News";
require_once 'layout/header.php';
$news = new news;
if(isset($_GET['id'])){
$id=$_GET['id'];
$news->id = $id;
if($news->deletenews()){
	echo "<script>alert('Deleted successfully')</script>";
}
else{
echo "<script>alert('Error on deleting news')</script>";
}
?>

<script type="text/javascript">
		window.location = "newslist.php";
	</script>
<?php } ?>
