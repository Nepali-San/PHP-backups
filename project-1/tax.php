<?php
//not completed.......
if(isset($_POST['summit']))
{
   if($_POST['status'] == 's')
   {
      if($_POST['income'] <= 350000)
      {
       $inc = (0.01) * $_POST['income'];
       echo 'income = '.$inc;
       }
   if($_POST['income'] <= 450000)
{
$inc = (0.15) * $_POST['income'];
echo 'income = '.$inc;
}
if($_POST['income'] > 450000)
{
$inc = 0.25 * $_POST['income'];
echo 'income = '.$inc;
}
}

else
{
if($_POST['income'] <= 400000)
{
$inc = (0.01) * $_POST['income'];
echo 'income = '.$inc;
}

if($_POST['income'] <= 500000)
{
$inc = 0.15 * $_POST['income'];
echo 'income = '.$inc;
}
if($_POST['income'] > 500000)
{
$inc = 0.25 * $_POST['income'];
echo 'income = '.$inc;
}
}
}

<html>
<head>
<!--fevicon and title section-->
<title>Form</title>
</head>
<body>
<form method = "post">  <!-- get/post-->
   <input type ="number" name ="income" placeholder="Enter your income"><br/>
   <input type ="number" name="interest" placeholder="Enter interest percentage"><br/>
   <input type ="character" name ="status" placeholer ="s for single and m for married."><br/>
   <input type = "submit" value ="sent" name = "submit">

// for single

// 350,000 <=1%
// 450,000 <=15%
// 450,000 > 25%

// for married;

// 400,000 <=1%
// 500,000 <=15%
// 500,000 > 25%  

</form>
</body>
</html>