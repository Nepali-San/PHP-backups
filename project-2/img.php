<?php
if(isset($_POST['submit'])){
$image_name = $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$image_name);
}
?>

<form enctype='multipart/form-data' method="post">
<input type = "file" name = 'image'>
<input type="submit" name="submit">
<br/><br/>
The choosen file will be on the location where you have put img.php inside folder htdocs
</form>