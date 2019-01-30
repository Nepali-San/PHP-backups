<?php
$con = mysqli_connect('localhost','root','','db_assignment');
if(!$con){
	die ("Error connecting database");
}
if(isset($_GET['id'])){
	$id = 	$_GET['id'];
	$sql = "delete from tb_admin where id = '$id'";
	if(mysqli_query($con,$sql)){ 
		?>
		<script>
			alert('Deleted Successfully');
			window.location= "practise2.php";
		</script>
	<?php 
    
    }
	else{

		?>
		<script>
			alert("ERROR !!!");
			window.location= "practise2.php";  //<- I don't what it does.
		</script>
		<?php
		 }
}
?>