<!-- Featured -->
			<div class="wrapper style2">
				<section class="container">
				<img style = "border:1px solid black" src="<?php echo base_url()?>admin_panel/files/giphy.gif" height = 150px alt="">
					<header class="major">
						<h2>Some contents</h2>
						<span class="byline">Please review and share if you like them</span>
					</header>
					<div class="row no-collapse-1">
					<?php 
					foreach ($this->featured_info as $kjdl) { ?>

					<section class="4u">
					<h6><?php echo $kjdl->title?></h6>
							<img style = "border:1px solid black" src="<?php echo base_url()?>admin_panel/files/<?php echo $kjdl->image ?>" height = 150px alt="">
							<p><?php echo $kjdl->short_desc?>..........<a href="<?php echo base_url()."$kjdl->category/"."$kjdl->slug" ?>">More</a></p>
						</section>
					<?php } ?>

					</div>
				</section>
			</div>	