
<script src="public/js/bootstrap-table.js"></script>
<link href="public/css/bootstrap-table.css" rel="stylesheet">
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
						        <th>Email</th>
						        <th>Password</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($data as $a){ ?>
						    <tr>
						    <td><?php echo $a->email; ?></td>
						    <td><?php echo $a->password ?></td>
						    <td><a href="#updateadmin.php?id=<?php echo $a->id ?>" class = 'btn btn-primary'>update</a>
						    <td>
						    <a href="#deleteadmin.php?id=<?php echo $a->id ?>" class = 'btn btn-danger'>delete</a></td>
						    </tr>
						    <?php } ?>
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>	
	</div>