<?php
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'class/common.class.php';
require_once 'class/admin.class.php';
$title = "Admin list";
require_once 'layout/header.php';
$admin = new admin;
$data = $admin->selectalladmin();
?>

<script src="libs/js/bootstrap-table.js"></script>
<link href="libs/css/bootstrap-table.css" rel="stylesheet">
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Admin List</h1>
			</div>
		</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Admin table</div>
					<div class="panel-body">
						<table data-toggle="table" id="table-style"  data-row-style="rowStyle">
						    <thead>
						    <tr>
						        <th>Id</th>
						        <th>Name</th>
						        <th>Username</th>
						        <th>Email</th>
						        <th>Created Date</th>
						        <th>Last login</th>
						        <th colspan="2">Action</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($data as $a){ ?>
						    <tr>
						    <td><?php echo $a->id; ?></td>
						    <td><?php echo $a->name; ?></td>
						    <td><?php echo $a->username; ?></td>  
						    <td><?php echo $a->email; ?></td>
						    <td><?php echo $a->created_at ?></td>
						    <td><?php echo $a->last_login ?></td>
						    <td><a href="updateadmin.php?id=<?php echo $a->id ?>" class = 'btn btn-primary'>update</a>
						    <td>
						    <a href="deleteadmin.php?id=<?php echo $a->id ?>" class = 'btn btn-danger'>delete</a></td>
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
