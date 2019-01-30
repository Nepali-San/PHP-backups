<?php
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'class/common.class.php';
require_once 'class/category.class.php';
$title = 'category list';
require_once 'layout/header.php';
$category=new category;
$allcategory=$category->selectallcategory();

?>
<script src="libs/js/bootstrap-table.js" type="text/javascript"></script>
<link href="libs/css/bootstrap-table.css" rel="stylesheet">
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Category List</h1>
			</div>
		</div><!--/.row-->	
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">List of Category</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data2.json" >
						    <thead>
						    <tr>
						        <th>ID</th>
						        <th>Name</th>
						        <th>Slug</th>
						        <th>Created By</th>
						        <th>Created Date</th>
						        <th>Modified By</th>
						        <th>Modified Date</th>
						        <th>Status</th>
						        <th>Action</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php
						    	foreach ($allcategory as $ac) {?>
								    <tr>
								    	<td><?php echo $ac->id ?></td>
								    	<td><?php echo $ac->name ?></td>
								    	<td><?php echo $ac->slug ?></td>
								    	<td><?php echo $ac->created_by ?></td>
								    	<td><?php echo $ac->created_at ?></td>
								    	<td>
								    		<?php 
								    			if (empty($ac->modified_by)) {
								    				echo "<i>NULL";
								    			}else{
								    				echo $ac->modified_by;
								    				} ?>
								    	</td>
								    	<td>
								    		<?php 
								    			if (empty($ac->modified_at)) {
								    				echo "<i>NULL";
								    			}else{
								    				echo $ac->modified_at;
								    				} ?>
								    	</td>
								    	<td>
								    		<?php
								    			if ($ac->status) {?>
								    		<a  class="btn btn-success" href="#">Active</a>
								    			<?php
								    		}else{?>
								    		<a  class="btn btn-danger" href="#">In-Active</a>
								    		<?php 
								    			}
								    		?>
								    	</td>
								    	<td>
								    		<a  class="btn btn-primary" href="updatecategory.php?id=<?php echo $ac->id ?>">UPDATE</a>
								    		<a class="btn btn-danger" href="deletecategory.php?id=<?php echo $ac->id ?>">DELETE</a>
								    	</td>
								    </tr>
						    	<?php } ?>
						    	</tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
	</div><!--/.main-->
<?php require_once 'layout/footer.php' ?>