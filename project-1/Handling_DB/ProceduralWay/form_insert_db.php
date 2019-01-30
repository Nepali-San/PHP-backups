<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$created_date = date('Y-m-d H:i:s');
	$sql = "insert into tb_admin(name,username,email,contact,created_date) values ('$name','$username','$email','$contact','$created_date')";
	require_once "news.php";
   if(mysqli_query($con,$sql)){ ?>
   	<script>
   	alert('New admin successfully created');
    window.location = "TbDisDb.php"; 
   	</script>
		<?php 
	}
		else { ?>
		<script>
		alert("Error ! Error ! Error !");
		</script>
        <?php
    }
	}
?>
 <html>
<body>
<p style="font-size: 40px;color : red"> Form to create new admin   </p> 
<form method = 'POST'>
<input type = "text" name = "name" placeholder= "Enter name"></br>
<input type = "text" name = "username" placeholder= "Enter username"></br>
<input type = "text" name = "contact" placeholder= "Enter contact number"></br>
<input type = "text" name = "email" placeholder= "Enter email"></br>
<button type = "submit" value = "submit" name = "submit">Add Admin </button></br>
</form>
</body>
</html>