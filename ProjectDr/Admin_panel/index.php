<?php

require_once 'class/common.class.php';
require_once 'class/admin.class.php';
require_once 'class/session.class.php';

$admin=new admin;

$err=[];

if (isset($_POST['submit'])) {
	if (isset($_POST['username']) && !empty($_POST['username'])) {
		//$a = $_POST['username'];
		$admin->username = $admin->realescapestring($_POST['username']);
	}else{
		$err[0]='Username Cannot Be Empty';
	}
	if (isset($_POST['password'])&& !empty($_POST['password'])) {
		$admin->password = $_POST['password'];
	} 
	else{
		$err[1]='Password Cannot Be Empty';
	}

	if (count($err) == 0) {
		$res = $admin->selectadminbyusername();
		if (!count($res)) {
			$err[3]= "Username/Password Doesnot Match";
		}else{
			$salt=$res[0]->salt;
			$dpassword=$res[0]->password;
			$newpassword=sha1($salt.$admin->password);
			if ($newpassword==$dpassword) {
				sessionhelper::set('admin',$admin->username);
				$admin->updatelastlogin();
				header('location:dashboard.php');
			}else{
				$err[3]="Username/Password Doesn't Match";
			}
		}
	}
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Login</title>

<link href="libs/css/bootstrap.min.css" rel="stylesheet">
<link href="libs/css/datepicker3.css" rel="stylesheet">
<link href="libs/css/styles.css" rel="stylesheet">
</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading" style="text-align: center;">Log in</div>
				<div class="panel-body" style="text-align: center;">
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
						<?php
						foreach ($err as $error) {
							echo $error."<br/>";
						}
						?>
							<input type="submit" name="submit" class="btn btn-primary">
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	

	<?php 
	require_once 'layout/footer.php';
	 ?>