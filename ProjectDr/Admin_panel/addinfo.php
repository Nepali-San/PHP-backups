 <?php
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'class/common.class.php';
require_once 'class/info.class.php';
require_once 'class/category.class.php';
$title = 'Add info';
require_once 'layout/header.php';

$err = [];
$info = new info; 
//php var_dump($_POST); 
if(isset($_POST['submit']))
{
	if(isset($_POST['title']) && !empty($_POST['title'])){
		$title = $info->realescapestring($_POST['title']);
	}
	else{
		$err[] = 'title invalid';
	}
	if(isset($_POST['category']) && !empty($_POST['category'])){
		$category  = $info->realescapestring($_POST['category']);
	}
	else{
		$err[] = 'category invalid';
	}
	if(isset($_POST['short_desc']) && !empty($_POST['short_desc'])){
		$short_desc  = $info->realescapestring($_POST['short_desc']);	}
	else{
		$err[] = 'short description invalid';
	}
	if(isset($_POST['description']) && !empty($_POST['description'])){
		$description  = $info->realescapestring($_POST['description']);
	}
	else{
		$err[] = 'description invalid';
	}

	if(isset($_POST['slug']) && !empty($_POST['slug'])){
		$slug = $info->realescapestring($_POST['slug']);
	}
	else{
		$err[] = 'slug invalid';
	}
	if(!empty($_FILES['image']['name']))
	{
	    $image_name = $_FILES['image']['name'];
    	move_uploaded_file($_FILES['image']['tmp_name'],'Files/'.$image_name);
    	$info->set('image',$image_name);
	}
	if(isset($_POST['status'])){
		$status  = $info->realescapestring($_POST['status']);
	}
	else{
		$err[] = 'invalid status';
	}
	if(isset($_POST['featured'])){
		$featured  = $info->realescapestring($_POST['featured']);
	}
	else{
		$err[] = 'invalid featured';
	}
	if(count($err) == 0)
	{
	$info->set('created_at',date('Y-m-d H:i:s'));
	$created_by = sessionhelper::get('admin');
	$info->set('created_by',$created_by);
	$info->set('category',$category);
    $info->set('short_desc',"$short_desc");
    $info->set('description',"$description");
    $info->set('slug',"$slug");
    $info->set('title',"$title");
    $info->set('status',$status);
    $info->set('featured',$featured);		
   }
   if($info->addinfo()){
   	echo "<script>alert('Success')</script>";
   }
   else{
   	echo "<script>alert('Error on adding info')</script>";
   }
}
$category = new category;
$cdata = $category->selectallcategory();
?> 

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add info </h1pozt>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-heading">info Details</div>
					<div class="panel-body">
						<div class="col-md-12">
						<?php
							foreach ($err as $error) {
								echo "<li>".$error."</li>";
							}
						?>
							<form enctype="multipart/form-data" role="form" method="post">
								<div class="form-group">
									<label>info title</label>
									<input class="form-control" placeholder="Enter info Title" name="title">
								</div>
								<div class="form-group">
									<label>info Category</label>
									<select name='category' class="form-control">
									<?php
									foreach ($cdata as $cd){
										echo "<option value= '".$cd->name ."'>".$cd->name."</option>";
									}
									?>
									</select>
								<!-- 	<input class="form-control" placeholder="Enter info Category" name="category"> -->
									
								</div>
								<div class="form-group">
									<label>Short Description</label>
									<input type="text" class="form-control" placeholder="Write Short Description About info" name="short_desc">
								</div>					
								<div class="form-group">
									<label>Full Description</label>
									<input type="text" name="description" placeholder="Write Full Description About info" class="form-control">
								</div>

								<div class="form-group">
									<label>Slug</label>
									<input type="text" name="slug" placeholder="Write slug info" class="form-control">
								</div>

								<div class="form-group">
								<label>Choose An Image</label>
								<input  type="file" name="image" class="form-control">
                    
                              <!--  <button type="submit" name="submit" class="btn btn-primary">Add picture</button>	 -->					
                                </div>

                                 <div class="form-group">
									<label>Status</label><br>
									<input type="radio" name="status" value='1' checked="checked">
									Active
									<input type="radio" name="status" value='0'
									>In Active
									</div>

									<div class="form-group">
									<label>Featured</label><br>
									<input type="radio" name="featured" value='1'>
									Active
									<input type="radio" name="featured" value='0' checked="checked">
									In Active
									</div>


								<button type="submit" name="submit" class="btn btn-primary">Add info</button>							
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div>
	</div>
<?php require_once 'layout/footer.php'; ?>