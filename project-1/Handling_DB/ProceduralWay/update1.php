<?php
$con = mysqli_connect('localhost','root','','db_assignment');
if(!$con){
	die ("Error connecting database");
}
if(isset($_GET['id'])){
 $id = $_GET['id'];
 if(isset($_POST['submit'])){
 	$name = $_POST['name'];
 	$username = $_POST['username'];
 	$contact = $_POST['contact'];
     $address = $_POST['address'];
     $email = $_POST['email'];
     $created_date = $_POST['created_date'];
     $last_login = $_POST['last_login'];
     $password = $_POST['password'];
     $sql = "update tb_admin set name = '$name' , username = '$username',contact = '$contact',email = '$email', address = '$address',created_date = '$created_date',last_login = '$last_login',password = '$password' where id = '$id'";
     if(mysqli_query($con,$sql))
     {?>
     <script type="text/javascript"> 
     alert("Data successfully updated");
     </script> 
     <?php } //note the space bet'n php and } ,if no space then error
     else{

     	?>
     	<script type="text/javascript">
     		alert("ERROR ! ERROR ! ERROR !");
     	</script>
     <?php
     }
 }
	$sql = "select *from tb_admin where id = '$id'";
	$res = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($res);
}

?>

<html>
<body>
<form action = '' method="POST">
<input type="text" value = "<?php echo $row['name'] ?>" name="name" placeholder="name"><br/>
<input type="text" value = "<?php echo $row['username'] ?>"  name="username" placeholder="username"><br/>
<input type="text" value = "<?php echo $row['contact'] ?>" name="contact" placeholder="contact number"><br/>
<input type="text" value = "<?php echo $row['email'] ?>" name="email" placeholder="email"><br/>
<input type="text" value = "<?php echo $row['address'] ?>"  name="address" placeholder="address"><br/>
<input type="date" value = "<?php echo $row['created_date'] ?>"  name="created_date" placeholder="created_date"><br/>
<input type="text" value = "<?php echo $row['last_login'] ?>"  name="last_login" placeholder="last_login"><br/>
<input type="password" value = "<?php echo $row['password'] ?>"  name="password" placeholder="Password"><br/>
<button type="submit" name="submit" value="submit">Update Admin</button>
</form>
</body>
</html>