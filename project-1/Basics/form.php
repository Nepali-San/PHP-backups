<?php
 //$income = $_POST['income'] //2.taken from form in array style.
//echo "<pre>";
if(isset($_POST['submit']))   //condition to check if submit is set, unset() is it's opposite function.
{
 echo 'income = '.$_POST['income'].'<br/>';
 echo 'interest_percentage = '.$_POST['interest'].'<br/>';

$ans = ($_POST['interest'] /100) *$_POST['income'];

echo 'interest ='.$ans;
}
?>


<html>
<head>
<!--fevicon and title section-->
<title>Form</title>
</head>
<body>
<form method = 'post'>  <!-- get/post-->
   <input type ='number' name ='income' placeholder='Enter your income'><br/>
   <input type ='number' name='interest' placeholder='Enter interest percentage'><br/>
   <input type = 'submit' value ='sent' name = 'submit'>
</form>
</body>
</html>
