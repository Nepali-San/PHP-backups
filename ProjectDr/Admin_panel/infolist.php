<?php
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'class/common.class.php';
require_once 'class/info.class.php';
$title = 'info list';
require_once 'layout/header.php';
$info = new info;
$data = $info->selectinfo();
?>

<script src="libs/js/bootstrap-table.js"></script>
<link href="libs/css/bootstrap-table.css" rel="stylesheet">
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">info List</h1>
			</div>
		</div><!--/.row-->	
		<div class="row">		
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">List of info</div>
					<div class="panel-body">
						<table data-toggle="table" id="table-style"  data-row-style="rowStyle">
						    <thead>
						    <tr>
						        <th>Id</th>
						        <th>Title</th>
						        <th>Category</th>
						        <th>Short description</th>
						        <th>Description</th>
						        <th>Image</th>
						        <th>Status</th>
						        <th>Featured</th>
						        <th>Slug</th>
						        <th>Created by</th>
						        <th>Created date</th>
						        <th>Modified by</th>
						        <th>Modified date</th>
						        <th colspan="2">Action</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($data as $a){ ?>
						    <tr>
						    <td><?php echo $a->id; ?></td>
						    <td><?php echo $a->title; ?></td>
						     <td><?php echo $a->category; ?></td> 
						    <td><?php echo $a->short_desc; ?></td>  
						    <td><?php echo $a->description; ?></td>
						     <td>
						     <?php 
						     if($a->image){?>
						     	<img src= "files/<?php echo $a->image ?>" height = 80px width = 100px/>
						     	<?php } else { 
						     		echo "<i>null";
						     		}
						     		?>
						     	</td>
						      <td>
						      <?php 
						       if($a->status){ ?>
						       	<a class = "btn btn-success" href = '#'>Active</a>
						       	<?php 
						       }
						       	else{ ?>
						       	<a class = "btn btn-danger" href = '#'>Inactive</a>
						       <?php }
						       ?>						       	
						       </td>
						       <td>
						       <?php 
						       if($a->featured){ ?>
						       	<a class = "btn btn-success" href = '#'>Active</a>
						       	<?php 
						       }
						       	else{ ?>
						       	<a class = "btn btn-danger" href = '#'>Inactive</a>
						       <?php }
						       ?>						       	
						       </td> 
						       <td><?php echo $a->slug ?></td> 
						    <td><?php echo $a->created_by ?></td>
						      <td><?php echo $a->created_at ?></td>
						        <td>
						        <?php						
						        if(empty($a->modified_by)){
						        	echo "<i>NULL";
						        }
						        	else
						        	{
						        		echo $a->modified_by;
						        	}
						        	?>
						        	</td>
						          <td>
						          <?php	

						           
						        if(empty($a->modified_at)){
						        	echo "<i>NULL";
						        }
						        	else
						        	{
						        		echo $a->modified_at; 
						        	}
						        	?>
						    <td><a href="updateinfo.php?id=<?php echo $a->id ?>" class = 'btn btn-primary'>update</a>
						    <td>
						    <a href="deleteinfo.php?id=<?php echo $a->id ?>" class = 'btn btn-danger'>delete</a></td>
						    </tr>
						    <?php } ?>
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>	
		
		
	</div>

	<?php require_once 'layout/footer.php' ?>
