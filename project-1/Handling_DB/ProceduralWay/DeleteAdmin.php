<?php
require_once "news.php";
if(isset($_GET['id'])){
	$id = 	$_GET['id'];
	$sql = "delete from tb_admin where id = '$id'";
	if(mysqli_query($con,$sql)){ 
		?>
		<script>
			alert('Deleted Successfully');
			window.location = "TbDisDb.php";   
		</script>
	<?php 
    
    }
	else{

		?>
		<script>
			alert("ERROR !!!");
			window.location = "TbDisDb.php";
		</script>
		<?php
		 }
}
?>