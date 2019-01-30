<?php
$con = mysqli_connect('localhost','root','','db_assignment');
if(!$con){
	die ("Error connecting database");
}
$sql = "select *from tb_admin";
$res = mysqli_query($con,$sql);
?>

<html>
<body>
<table border='1px solid black'>
<tr>
<th>Id</th>
<th>Name</th>
<th>Username</th>
<th>Address</th>
<th>Email</th>
<th>Contact</th>
<th>Created_date</th>
<th>Last_login</th>
<th>Password</th>
<th>Action</th>
</tr>
<?php while($row = mysqli_fetch_assoc($res)){?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['username'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['contact'];?></td>
<td><?php echo $row['created_date'];?></td>
<td><?php echo $row['last_login'];?></td>
<td><?php echo $row['password'];?></td>
<td><a href="update1.php?id=<?php echo $row['id']; ?>">update</a><br/><a href = "delete1.php?id=<?php echo $row['id']; ?>">delete</a></td></td>
</tr>
<?php } ?>
</table>
</body>
</html>