<?php
require_once "news.php";    //code of database.php is used here
$insertdate = date('Y-m-d H:i:s');  //to insert system date/time
echo 'sytem date/time is '.$insertdate.'</br></br>';  
//  4- display system date/time.

/*
$sql = "insert into  tb_admin(username,name,email,contact,created_date,created_by)values('acie','12jki','gmail.com','135374','$insertdate','San-360')";

//6 - here we write the command to insert into a variable $sql

// echo $sql;    //this will echo the command stored in $sql.

 if(mysqli_query($con,$sql)){     
 
 // Here function has $con as link from database.php and command code in $sql.

 	echo "inserted succesfully";}
 	else{
 		echo "could not be inserted";
 	}*/

 	//similarly for updation
$sql = "UPDATE tb_admin SET username = 'eica' WHERE  id = 4";

echo 'The command to update is :</br>'.$sql.'</br></br>';   //to display the command code stored in $sql.

//mysqli_query($con,$sql);  //<- this will update the database but for further checking in case of errors ,we can use if else

if(mysqli_query($con,$sql))
{
	echo "Successfully updated</br>";
}
else 
echo "Not updated";

/*
//similarly inserting into tb_category

$sql = "insert into  tb_category(category_name,description,created_date,created_by)values('intl','descripion','$insertdate','San-360')";
   if(mysqli_query($con,$sql)){
 	echo "inserted succesfully";}
 	else{
 		echo "could not be inserted";
 	}
 	*/
 	
//To display the contents of a table
 	echo "</br>some contents form tb_category is:</br></br>";
$sql = "select *from tb_category";
$res = mysqli_query($con,$sql);   
//storing data in a variable ,stored as array.  
echo "</pre>";  
while ($row = mysqli_fetch_assoc($res)){        
//the function used here will store data in assertive array we can use array instead of assoc in above function.
	echo 'category_name:  '.$row['category_name'].'--';
	echo 'description:  '.$row['description'].'--';
	echo 'created_date:  '.$row['created_date'].'--';
	echo 'created_by:  '.$row['created_by'].'<br/>';
}
?>