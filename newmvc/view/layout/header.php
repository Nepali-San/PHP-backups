<!DOCTYPE html>
<html>
<head>
<title>Nepathya Patrika</title>
<link href="<?php echo base_url()?>public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url()?>public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="<?php echo base_url()?>public/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="The News Reporter Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->

</head>
<body>
	<!-- header-section-starts -->
	<div class="container">	
		<div class="news-paper">
			<div class="header">
				<div class="header-left">
					<div class="logo">
						<a href="<?php echo base_url().'home' ?>">
							<h6>The</h6>
							<h1>Nepathya <span>Patrika</span></h1>
						</a>
					</div>
				</div>
					<div class="clearfix"></div>
				<div class="clearfix"></div>
				</div>
			<span class="menu"></span>
			<div class="menu-strip">
				<ul>    
				<li><a href="home">Home</a></li>
				<?php foreach ($this->menu as $data) { ?>
					<li><a href="<?php echo base_url().$data->name ?>"><?php echo $data->name ?></a></li>
					 <?php } ?>
				</ul>
			</div>
			<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".menu-strip" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
			<div class="clearfix"></div>