			<div class="main-content">		
				<div class="col-md-12 total-news">
					<div class="slider">
						<script src="<?php echo base_url()?>public/js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  $("#conference-slider").responsiveSlides({
								auto: true,
								manualControls: '#slider3-pager',
							  });
							});
						</script>
						 <div class="conference-slider">
							<!-- Slideshow 3 -->
							<ul class="conference-rslide" id="conference-slider">
							<?php
							foreach ($this->sliderdata as $sd) {?>
							  <li><img src="<?php echo base_url()?>admin_panel/files/<?php echo $sd->image ?>" alt="No image"></li>
							  <?php } ?>
							</ul>
							<!-- Slideshow 3 Pager -->
							<ul id="slider3-pager">
							<?php
							foreach ($this->sliderdata as $sd) {?>
							  <li><a href="#"><img src="<?php echo base_url()?>admin_panel/files/<?php echo $sd->image ?>" alt="no image"></a></li>
							  <?php } ?>
							</ul>
						</div> 
					</div>	
				<div class="posts">
					<div class="left-posts">
						<div class="world-news">
							<div class="main-title-head">
								<h3>Featured Articles</h3>
								<a href="singlepage.html">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
							<?php 
							foreach($this->featured_news as $fa) { ?>
								<div class="world-news-grid">
									<img src="<?php echo base_url()?>admin_panel/files/<?php echo $fa->image ?>" alt="No image">
									<a href="singlepage.html" class="title">
									<?php echo $fa->title ?>
									</a>
									<p><?php echo $fa->short_desc ?></p>
									<a href="singlepage.html">Read More</a>
								</div>
								<?php } ?>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="latest-articles">
							<div class="main-title-head">
								<h3>Latest News</h3>
								<a href="singlepage.html">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
								<?php foreach ($this->latest as $key) { ?>
									<div class="world-news-grid">
									<img src="<?php echo base_url()?>admin_panel/files/<?php echo $key->image ?>" alt="No image">
									<a href="singlepage.html" class="title"><?php echo $key->title ?> </a>
									<p><?php echo $key->short_desc ?> </p>
									<a href="singlepage.html">Read More</a>
								</div>
								<?php } ?>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="right-posts">
						<div class="desk-grid">
							<h3>You May Also Like</h3>
							<?php foreach($this->latest as $lsa ){?>
							<div class="desk">
								<a href="singlepage.html" class="title">
								 <?php echo $lsa->title; ?></a>
								<p><?php echo $lsa->short_desc ?></p>
								<p><a href="singlepage.html">Read More</a><span>3 hours ago</span></p>
								</div>
								<?php }?>
							
							<a class="more" href="singlepage.html">More  +</a>
						</div>
						<div class="editorial">
							<h3>Popular</h3>
							<?php foreach ($this->featured_news as $fn) { ?>
							<div class="editor">
							<a href="single.html"><img src="<?php echo base_url()?>admin_panel/files/<?php echo $fn->image ?>" alt="" height =150px width = 30px ></a>
								<a href="single.html">
									<?php echo $fn->short_desc ?>
								</a>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="clearfix"></div>	
				</div>
				</div>	
				<div class="clearfix"></div>
			</div>