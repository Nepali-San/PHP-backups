
<?php

$con = new mysqli('localhost','root','','db_news');  //$con is object of mysqli
                   // we pass localhost,... to  mysqli

if($con->connect_error){  // or use errno instead of error
	die("Database connection not established");
}
echo "Database Connection Established<br/>";


// echo "<pre/>";   
// var_dump($con);   //To see the property of object $con

//*************************inserting data **************************************
// $date =  date('Y-m-d H:i:s');
 
// $sql = "insert into tb_admin(name,username,email,contact,created_date)values('newoop','newoop','newoop@oop','1234984','$date')";

// if($con->query($sql)){       //query is the method of class mysqli
// 	echo "inserted successfully";
// }
// else{
// 	echo "data could not be inserted";
// }


//******************to display data******************************

// echo "<pre/>";
// $sql = "select * from tb_admin";
// $res = $con->query($sql);
// $data = [];    //creating array

// //*********** to see property*************
// //var_dump($res);

// if($res->num_rows > 0) //if data is present in data
// {
//    while($row = $res->fetch_object()){
//    array_push($data,$row);  
//    }
// }

// foreach ($data as $d) {
// 	echo $d->name.'<br/>';
// 	echo $d->username.'<br/>';
// }


//************************update data****************************************

$sql = "update tb_admin set name = 'ram' where id = '5'";
if($con->query($sql)){            
   if($con->affected_rows == 1)    //checks if updation affects any data 
   {
	echo "successfully updated";
    }
   else{
	echo "Duplicated data entered";   //If we update with the same previous data
     }
 }
 else{
 	echo "data couldn't be inserted";   //Error to insert the data
 }

echo "<pre/>";
echo var_dump($con);

?>