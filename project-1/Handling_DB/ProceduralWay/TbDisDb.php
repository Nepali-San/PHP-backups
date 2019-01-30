
<?php

//To display the data in tb_admin in tabular form.

require_once("news.php");
$sql = "select *from tb_admin";
$res = mysqli_query($con,$sql);
	?>
<html>
<body>
<head>
<style>
table{
	border:1px solid green;
	padding:2px;
}
th,td{
border:1px solid black;
padding:12px;
	}
	h1{
		color: #00ff00;
		font-family: sans-serif;
	}
	</style>
	<title>Table in PHP</title>
</head>
<h1>tb_admin</h1>
<br>
<table style = "border-spacing:1px">    <!--style="border-spacing: 4px"-->
<tr>
<th>Id</th>
<th>Name</th>
<th>Username</th>
<th>Email</th>
<th>Contact</th>
<th>Action</th>
<th>Created date</th>
<th>Created by</th>
<th>Last Login</th>
</tr>
<?php
while($row = mysqli_fetch_assoc($res)){?>
<tr>
<td><?php echo $row['id']?></td>
<td><?php echo $row['name']?></td>
<td><?php echo $row['username']?></td>
<td><?php echo $row['email']?></td>
<td><?php echo $row['contact']?></td>
<td><?php 
if(empty($row['last_login']))
    echo "User has never logged in";
else 
	echo $row['last_login']?></td>
<td><?php echo $row['created_date']?></td>
<td><?php 
if(empty($row['created_by']))
	echo 'Null';
else  
echo $row['created_by']?></td>
<td><a href="UpdateAdmin.php?id=<?php echo $row['id'] ?>">Update</a><br>
<a href="DeleteAdmin.php?id=<?php echo $row['id'] ?>">Delete</a></td>
</tr>
<?php }  ?>
</table>
</body>
</html>