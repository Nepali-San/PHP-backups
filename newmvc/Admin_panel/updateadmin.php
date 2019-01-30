<?php 

require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'layout/header.php';
require_once 'class/common.class.php';
require_once 'class/admin.class.php'; 

$admin= new admin;
$err = [];
if(isset($_GET['id'])){

    $id = $admin->realescapestring($_GET['id']);
	$admin->set('id',$id);
	//equivalent  to $admin->id = $id just adding function for easiness
	if(isset($_POST['submit']))
	{
		if(isset($_POST['name']) && !empty($_POST['name'])){
		$name= $admin->realescapestring($_POST['name']);
		$admin->set('name',$name);
	}
	else
	{
		$err[] = "Name field empty";
	}
	if (isset($_POST['username'])&&!empty($_POST['username'])) {
		$username=$admin->realescapestring($_POST['username']);
		$admin->set('username',$username);
	}else{
		$err[]="Username Cannot Be Empty";
	}
	if (isset($_POST['email'])&&!empty($_POST['email'])) {
		$email=$admin->realescapestring($_POST['email']);
		$admin->set('email',$email);
	}else{
		$err[]="Email Cannot Be Empty";
	}
	if (isset($_POST['password'])&& !empty($_POST['password'])) {
		// $admin->salt=uniqid();
		$admin->set('salt',uniqid());
		$password1=$_POST['password'];
		$password=sha1($admin->salt.$password1);
		$admin->set('password',$password);
	 }
	if (count($err)==0){
			if(!empty($_POST['password'])){
		$result=$admin->updateadminbyidwithpwd();
	}
	else{
		$result = $admin->updateadminbyidwithoutpwd();
	}
	echo "<script>alert('".$result."')</script>";
}
     else{
		echo "<script>alert('".$result."')</script>";
	}
}
}
$val = $admin->selectadminbyid();
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">				
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Update Admin</h2>
			</div>
		</div>	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div claspanel-body">
					<div class="col-md-6"> 
							<form role="form" method="POST">
							<?php
							foreach  ($val as $value){ ?>

								<div class="form-group">
									<label>Admin name</label>  
									<input class="form-control" placeholder="Name" name="name" value="<?php echo $value->name;  ?>" >
								</div>
								<div class="form-group">
									<label>Admin username</label> 
									<input class="form-control" placeholder="Username" name="username" value="<?php echo $value->username; ?>">
								</div>
								<div class="form-group">
									<label>Admin email</label>
									<input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo$value->email; ?>" >
								</div> 
								<div class="form-group">
									<label>Password (optional)</label>
									<input type="password" name="password" placeholder="Enter New Password" value="" class="form-control">
								</div>
											<button type="submit" class="btn btn-primary" name="submit" >Save changes </button>
								<?php } ?>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<?php 
		require_once 'layout/footer.php';
		?>