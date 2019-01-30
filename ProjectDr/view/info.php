		<body class="left-sidebar">
	<!-- Main -->
    <div class="wrapper style2">
				
				<img  style = "border:1px solid black" src="<?php echo base_url()?>admin_panel/files/City-Hospital.gif" alt="No image" height = '120px' width = '90%'>
			
				</div>
		


			<div id="main" class="wrapper style1">
				<div class="container">
					<div class="row">
					
						<!-- Sidebar -->
						<div id="sidebar" class="4u sidebar">
							<section>
								<header class="major">
									<h2>Latest Articles</h2>
								</header>
								<div class="row half">
									<section class="8u">
										<ul class="default">
									<?php foreach ($this->latestinfo as $info) {?>
											<li><a href='<?php echo base_url()."$info->category"."/$info->slug" ?>'><?php echo $info->title ?></a></li>
					
											
									<?php	} ?>
										</ul>
										<img src ="https://media.giphy.com/media/PsKgvUWLIQD6M/giphy.gif" width="350px">
										<img src ="http://hospitalsanjivani.com/images/mother--child.gif" width="350px">
									</section>
								</div>
							</section>
							
						</div>
						
						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
								<header class="major">
									<h2><?php echo $this->ainfo[0]->title ?></h2>
									<span class="byline">by:<?php echo $this->ainfo[0]->created_by?></span><br>
								</header>
								<img  style = "border:1px solid black;float:center;" src="<?php echo base_url().'admin_panel/'.'files/'.$this->ainfo[0]->image ?>" height = 200px width= 500px>
								<br>
								<p><?php echo $this->ainfo[0]->description ?></p>
							</section>
						</div>
					
					</div>
				</div>
			</div>