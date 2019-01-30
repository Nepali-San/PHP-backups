<!DOCTYPE HTML>

<html>
	<head>
		<title>Health Article</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="<?php echo base_url() ?>public/js/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>public/js/jquery.dropotron.min.js"></script>
		<script src="<?php echo base_url() ?>public/js/skel.min.js"></script>
		<script src="<?php echo base_url() ?>public/js/skel-layers.min.js"></script>
		<script src="<?php echo base_url() ?>public/js/init.js"></script>
		
			<link rel="stylesheet" href="<?php echo base_url() ?>public/css/skel.css" />
			<link rel="stylesheet" href="<?php echo base_url() ?>public/css/style.css" />
		
		
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="left-sidebar">

		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h1><a href="#" id="logo">Doctor Who ???</a></h1>
					
				<!-- Nav -->
						<nav id="nav">
							<ul>
						<li><a href="<?php echo base_url().'home' ?>">Home</a></li>
						<?php foreach ($this->menu as $key) { ?>
							<li><a href="<?php echo base_url().$key->name ?>"><?php echo $key->name ?></a></li>
						<?php } ?>
							</ul>
						</nav>
				
				<!-- Banner -->
						<div id="banner">
							<div class="container">
								<section>
									<header class="major">
										<h2>THE SITE THAT CARES</h2>
										<span class="byline">&hellip; <strong><em>This site contains the general information for your good health . <br/>This informations are collected by an unknown doctor namely Doctor Who.</em></strong></span>
									</header>
		
								</section>			
							</div>
						</div>

						
						
				</div>
			</div>