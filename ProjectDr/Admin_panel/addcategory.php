<?php
require_once 'class/session.class.php';
sessionhelper::checklogin();
$title = 'Add category';
require_once 'layout/header.php';
require_once 'class/common.class.php';
require_once 'class/category.class.php';
$err = [];
$cat = new category;
if(isset($_POST['submit'])){
	if(isset($_POST['name']) && !empty($_POST['name'])){
		$name =$cat->realescapestring($_POST['name']);
	}
	else{
		$err[] = 'Name field is empty';
	}
	if(isset($_POST['slug']) && !empty($_POST['slug'])){
		$slug =$cat->realescapestring($_POST['slug']);
	}
	else{
		$err[] = 'slug field is empty';
	}
	if(isset($_POST['status'])){
		$status = $_POST['status'];
	}
	else{
		$err[]= 'status field empty';
	}
if(count($err)==0){
	$cat->set('slug',$slug);
	$cat->set('name',$name);
	$cat->set('created_by',sessionhelper::get('admin'));
	$date = date('Y-m-d H:i:s');
	$cat->set('created_at',$date);
	$cat->set('status',$status);
if($cat->addcategory()){
		echo "<script>alert('New Category Added Successfully')</script>";
	}
	else{ 
		echo "<script>alert('New Category Could Not Be Added')</script>";
	}
}
}
?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">ADD CATEGORY</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-heading">Form Elements</div>
					<div class="panel-body">
						<div class="col-md-6">
						<?php
							foreach ($err as $error) {
								echo "<li>".$error."</li>";
							}
						?>
							<form role="form" method="post">
							
								<div class="form-group">
									<label>Category Name</label>
									<input class="form-control" name="name" placeholder="Enter your name">
								</div>	

								<div class="form-group">
									<label>Slug</label>
									<input class="form-control" name="slug" placeholder="Enter slug">
								</div>					
								<div class="form-group">
									<label>Status</label><br/>
									<input type="radio" name="status" value="1" checked="checked">
									Active
									<input type="radio" name="status" value="0">
									In-active
								</div>	 

								<button type="submit" name = "submit" class="btn btn-primary">Add category</button>
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
<?php
require_once 'layout/footer.php';
?>