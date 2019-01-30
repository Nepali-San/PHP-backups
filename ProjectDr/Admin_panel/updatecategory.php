<?php

require_once 'class/common.class.php';
require_once 'class/session.class.php';
require_once 'class/category.class.php';
$title = 'Update category';
require_once 'layout/header.php';
sessionhelper::checklogin();

$category=new category;
if(isset($_GET['id'])){
$id=$category->realescapestring($_GET['id']);
$err=[];
$category->set('id',$id);
if (isset($_POST['submit'])) {
	// var_dump($_POST);
	if (isset($_POST['name'])&&!empty($_POST['name']))
	 {
		$name=$category->realescapestring($_POST['name']);
		
	 }else{
		$err[]="Name Cannot Be Empty";
	      }
	      if (isset($_POST['slug'])&&!empty($_POST['slug']))
	 {
		$slug=$category->realescapestring($_POST['slug']);
		
	 }else{
		$err[]="slug Cannot Be Empty";
	     }
	if (isset($_POST['status']))
	 {
		$status=$category->realescapestring($_POST['status']);
		$category->set('status',$status);
	  }
	if (count($err)==0)
	{
	$category->set('slug',$slug);
    $category->set('name',$name);
    $date=date('Y.m.d H:i:s');
    $category->set('modified_at',$date);
	$category->set('modified_by',sessionhelper::get('admin'));
		$result=$category->updatecategory();
		echo "<script>alert('".$result."')</script>";
	}
}
	}
$adata=$category->selectcategorybyid();
// echo "<pre/>";
// var_dump($adata);

?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Update Category</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-heading">Category Details</div>
					<div class="panel-body">
						<div class="col-md-12">
						<?php
							foreach ($err as $error) {
								echo "<li>".$error."</li>";
							}
						?>
							<form role="form" method="post">
							
								<div class="form-group">
									<label>Category Name</label>
									<input class="form-control" placeholder="Enter New Category Name" name="name" value="<?php echo $adata[0]->name ?>">
								</div>
								<div class="form-group">
									<label>Slug</label>
									<input class="form-control" placeholder="Enter New Category slug" name="slug" value="<?php echo $adata[0]->slug ?>">
								</div>
								<div class="form-group">
									<label>Status</label><br>
									<?php
									if($adata['0']->status)
									{ ?>
									<input type="radio" name="status" value="1" checked="checked" >
								        Active
									<input type="radio" name="status" value="0">
									In Active
									<?php
								} else { ?>
									<input type="radio" name="status" value="1">
								        Active
									<input type="radio" name="status" value="0" checked="checked">
									In Active
									</div>	
									<?php
								}
									?>
									<div>
								<button type="submit" name="submit" class="btn btn-primary">Update Category</button>							
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