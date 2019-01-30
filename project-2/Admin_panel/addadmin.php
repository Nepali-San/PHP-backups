<?php
require_once 'class/session.class.php';
sessionhelper::checklogin();
$title = 'Add admin';
require_once 'layout/header.php';
require_once 'class/common.class.php';
require_once 'class/admin.class.php';

$admin = new admin;
$err = [];

    if(isset($_POST['submit'])){
    	if(isset($_POST['name']) && !empty($_POST['name']))
	$name = $admin->realescapestring($_POST['name']);
        else
        	$err[] = 'Name field invalid';
        if(isset($_POST['username']) && !empty($_POST['username']))
	$username = $admin->realescapestring($_POST['username']);
        else
        	$err[] = 'username field invalid';
        if(isset($_POST['email']) && !empty($_POST['email']))
	$email = $admin->realescapestring($_POST['email']);
        else
        	$err[] = 'email field invalid';
	if(isset($_POST['password']) && !empty($_POST['password']))
	$password = $_POST['password'];
    else
         	$err[] = 'password field invaid';

	
if(count($err) == 0){
	$admin->set('name',$name);
	$admin->set('username',$username);
	$admin->set('email',$email);
	$salt = uniqid();
	$password = sha1($salt.$password);
	$admin->set('password',$password);
	$admin->set('salt',$salt);
	$admin->set('created_at',date('Y-m-d'));

	if($admin->addadmin()){
		?>
		<script type="text/javascript">
			alert('Admin successfully added');
		</script><?php
	}
	else{ 
		echo"<script>
		alert('Error while adding admin')
	</script>";
	//Above we used to method for script one by closing php and other by writing script inside echo
	}
}
}
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">ADD ADMIN</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-heading">Admin Details</div>
					<div class="panel-body">
						<div class="col-md-6">
						<?php
							foreach ($err as $error) {
								echo "<li>".$error."</li>";
							}
						?>
							<form role="form" method="post">
							
								<div class="form-group">
									<label>Admin Name</label>
									<input class="form-control" name="name" placeholder="Enter Admin full name">
								</div>
								<div class="form-group">
									<label>Admin Username</label>
								<input class="form-control" name="username" placeholder="Enter Admin username">
								</div>
								<div class="form-group">
									<label>Admin E-mail</label>
									<input type = "email" class="form-control" name="email" placeholder="Enter Admin E-mail">
								</div>							
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password" placeholder="Enter Admin password">
								</div>	
								<button type="submit" name = "submit" value="submit" class="btn btn-primary">Add admin</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</div>


<?php
require_once 'layout/footer.php';
?>