<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
<?php
if(!empty($title)){
	echo $title;
	}
	else{
	 	echo 'Dashboard';
	 } 
?>
	
</title>

<link href="libs/css/bootstrap.min.css" rel="stylesheet">
<link href="libs/css/datepicker3.css" rel="stylesheet">
<link href="libs/css/styles.css" rel="stylesheet">
<script src="libs/js/jquery-1.11.1.min.js"></script>
<!--Icons-->
<script src="libs/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Db_Doctor </span>Admin</a>
				<ul class="user-menu">
					<li class="">
					
							<li><a href="logout.php" class="">LOG OUT</a></li>
					
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">
			<li class="active"><a href='dashboard.php'><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<!-- <li role="presentation" class="divider"></li> -->
						<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Admin 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="addadmin.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Add admin
						</a>
					</li>
					<li>
						<a class="" href="adminlist.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Admin list
						</a>
					</li>
				</ul>
			</li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Category
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="addcategory.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Add category
						</a>
					</li>
					<li>
						<a class="" href="categorylist.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> category list
						</a>
					</li>
				</ul>
			</li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Info 
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li>
						<a class="" href="addinfo.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Add info
						</a>
					</li>
					<li>
						<a class="" href="infolist.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Info list
						</a>
					</li>
				</ul>
			</li>
		</ul>
		<div class="attribution">Template by <a href = #>SAN</a><br/></div>
	</div>