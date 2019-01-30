<?php
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'class/common.class.php';
require_once 'class/info.class.php';
require_once 'class/category.class.php';
$title = "Update info";
require_once 'layout/header.php';
$info = new info;
$err= [];
$id = $info->realescapestring($_GET['id']);
$info->set('id',$id);
if(isset($_POST['submit']))
{
	// var_dump($_POST);
	if(isset($_POST['title']) && !empty($_POST['title'])){
		$title = $info->realescapestring($_POST['title']);
	}
	else{
		$err = 'Invalid title';
	}
	if(isset($_POST['slug']) && !empty($_POST['slug'])){
		$slug= $info->realescapestring($_POST['slug']);
	}
	else{
		$err = 'Invalid slug';
	}
	if(isset($_POST['featured'])){
		$featured= $info->realescapestring($_POST['featured']);
	}
	else{
		$err = 'Invalid featured';
	}
	if(isset($_POST['category']) && !empty($_POST['category'])){
		$category = $info->realescapestring($_POST['category']);
	}
	else{
		$err = 'Invalid category';
	}if(isset($_POST['short_desc']) && !empty($_POST['short_desc'])){
	$short_desc = $info->realescapestring($_POST['short_desc']);
	}
	else{
		$err = 'Invalid short description';
	}if(isset($_POST['description']) && !empty($_POST['description'])){
		$description= $info->realescapestring($_POST['description']);
	}
	else{
		$err = 'Invalid description';
		}
	// 	if(isset($_POST['imgpre'])){
	// 	$imgpre = $info->realescapestring($_POST['imgpre']);
	// }

		if(!empty($_FILES['image']['name']))
	{
	    $image_name = $_FILES['image']['name'];
    	move_uploaded_file($_FILES['image']['tmp_name'],'Files/'.$image_name);
    	$info->set('image',$image_name);
	}
	if(isset($_POST['status'])){
		$status = $info->realescapestring($_POST['status']);
	}
	else{
		$err = 'Invalid status';
	}
	$date = date('Y-m-d H:i:s');
	if(count($err) == 0){
		$info->title = $title;
		$info->set('category',$category);
		$info->set('short_desc',$short_desc);
		$info->set('description',$description);
		$info->set('modified_by',sessionhelper::get('admin'));
		$info->set('modified_at',$date);
		$info->set('slug',$slug);
		$info->set('featured',$featured);
		$info->set('status',$status);
	}
	 if($result = $info->updateinfo()){
		echo "<script>alert('".$result."')</script>";
	}
}
$b = $info->selectinfobyid();
$category = new category;
$cdata = $category->selectallcategory();
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Update info</h2>
			</div>
		</div>	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div claspanel-body">
					<div class="col-md-6"> 
							<form role="form" method="POST" enctype="multipart/form-data">
							<div class="form-group">
									<label>Image</label><br/>
									<?php 
									if(!empty($b[0]->image)){ ?>
									<img src="files/<?php echo $b['0']->image ?>" height = 100px width = 120px />
									<?php 
									}else
									{ ?>
										<img src="files/noimage.jpg" height = 100px width = 120px /> 
									<?php	} ?>

								</div>
								<div class="form-group">
									<label>Title</label>  
									<input class="form-control" placeholder="Title" name="title" value="<?php echo $b[0]->title;  ?>" >
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
								</div>
								<div class="form-group">
									<label>Short description</label>
									<input class="form-control" placeholder="short description" name="short_desc" value="<?php echo $b[0]->short_desc; ?>" >
								</div> 
								<div class="form-group">
									<label>Description</label>
									<input class="form-control" placeholder="description" name="description" value="<?php echo $b['0']->description; ?>" >
								</div> 
								<div class="form-group">
									<label>Slug</label>
									<input class="form-control" placeholder="slug" name="slug" value="<?php echo $b['0']->slug; ?>" >
								</div> 
									<div class="form-group">
									<label>Status</label><br>
									<?php
									if($b['0']->status)
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
									<?php } ?>
									</div>
									<div class="form-group">
									<label>Featured</label><br>
									<?php
									if($b['0']->featured)
									{ ?>
									<input type="radio" name="featured" value="1" checked="checked" >
								        Active
									<input type="radio" name="featured" value="0">
									In Active
									<?php
								} else { ?>
									<input type="radio" name="featured" value="1">
								        Active
									<input type="radio" name="featured" value="0" checked="checked">
									In Active
									<?php } ?>
									</div>	
									<div class="form-group">
								<label>Choose image</label>
								<input  type="file" name="image" class="form-control">			
                                </div>
											<button type="submit" class="btn btn-primary" name="submit" >Save changes </button>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<?php 
		require_once 'layout/footer.php';
		?>