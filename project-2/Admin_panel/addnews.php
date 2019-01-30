 <?php
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'class/common.class.php';
require_once 'class/news.class.php';
require_once 'class/category.class.php';
$title = 'Add news';
require_once 'layout/header.php';

$err = [];
$news = new news; 
//php var_dump($_POST); 
if(isset($_POST['submit']))
{
	if(isset($_POST['title']) && !empty($_POST['title'])){
		$title = $news->realescapestring($_POST['title']);
	}
	else{
		$err[] = 'title invalid';
	}
	if(isset($_POST['category']) && !empty($_POST['category'])){
		$category  = $news->realescapestring($_POST['category']);
	}
	else{
		$err[] = 'category invalid';
	}
	if(isset($_POST['short_desc']) && !empty($_POST['short_desc'])){
		$short_desc  = $news->realescapestring($_POST['short_desc']);	}
	else{
		$err[] = 'short description invalid';
	}
	if(isset($_POST['description']) && !empty($_POST['description'])){
		$description  = $news->realescapestring($_POST['description']);
	}
	else{
		$err[] = 'description invalid';
	}
	if(!empty($_FILES['image']['name']))
	{
	    $image_name = $_FILES['image']['name'];
    	move_uploaded_file($_FILES['image']['tmp_name'],'Files/'.$image_name);
    	$news->set('image',$image_name);
	}
	if(isset($_POST['status'])){
		$status  = $news->realescapestring($_POST['status']);
	}
	else{
		$err[] = 'invalid status';
	}
	if(count($err) == 0)
	{
	$news->set('created_at',date('Y-m-d H:i:s'));
	$created_by = sessionhelper::get('admin');
	$news->set('created_by',$created_by);
	$news->set('category',$category);
    $news->set('short_desc',"$short_desc");
    $news->set('description',"$description");
    $news->set('title',"$title");
    $news->set('status',$status);	
   }
   if($news->addnews()){
   	echo "<script>alert('Success')</script>";
   }
   else{
   	echo "<script>alert('Error on adding news')</script>";
   }
}
$category = new category;
$cdata = $category->selectallcategory();
?> 

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add News </h1pozt>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-heading">News Details</div>
					<div class="panel-body">
						<div class="col-md-12">
						<?php
							foreach ($err as $error) {
								echo "<li>".$error."</li>";
							}
						?>
							<form enctype="multipart/form-data" role="form" method="post">
								<div class="form-group">
									<label>News title</label>
									<input class="form-control" placeholder="Enter News Title" name="title">
								</div>
								<div class="form-group">
									<label>News Category</label>
									<select name='category' class="form-control">
									<?php
									foreach ($cdata as $cd){
										echo "<option value= '".$cd->name ."'>".$cd->name."</option>";
									}
									?>
									</select>
								<!-- 	<input class="form-control" placeholder="Enter News Category" name="category"> -->
									
								</div>
								<div class="form-group">
									<label>Short Description</label>
									<input type="text" class="form-control" placeholder="Write Short Description About News" name="short_desc">
								</div>					
								<div class="form-group">
									<label>Full Description</label>
									<input type="text" name="description" placeholder="Write Full Description About News" class="form-control">
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


								<button type="submit" name="submit" class="btn btn-primary">Add News</button>							
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div>
	</div>
<?php require_once 'layout/footer.php'; ?>