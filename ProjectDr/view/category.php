<!-- Featured -->
			<div class="wrapper style2">
				<section class="container">
					<header class="major">
						<h2><?php echo $this->name ?></h2>
						<span class="byline">Please review and share if you like them</span>
					</header>
					<div class="row no-collapse-1">

					<?php 
					foreach ($this->categoryinfo as $info) { ?>

					<section class="4u">
					<h6><?php echo $info->title; ?></h6>

							<img style = "border:1px solid black"src="<?php echo base_url()?>admin_panel/files/<?php echo $info->image ?>" height = 150px alt="No image">
							<p><?php echo $info->short_desc?>..........<a href="<?php echo base_url()."$info->category".'/'."$info->slug" ?>">More</a></p>
						</section>
					<?php } ?>
	
					</div>
				</section>
			</div>	