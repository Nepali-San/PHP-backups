<div class="main-content">		
				<div class="col-md-9 total-news">
				<div class="posts">
					<div class="left-posts-category">
						<div class="tech-news">
							<div class="main-title-head">
								<h3><?php echo $this->categoryname ?></h3><br/>
								<div class="clearfix"></div>
							</div>	
							<div class="tech-news-grids">
								<div class="right-tech-news">
								<?php foreach($this->categorynews as $cn) { ?>
									<div class="tech-news-grid span_66">
									<img src="<?php echo base_url()?>admin_panel/files/<?php echo $cn->image ?>" style="height:100px;">
									<div class="col-md-9">
										<a href="singlepage.html"><?php echo $cn->title; ?>  </a>
										<p><?php echo $cn->short_desc ?>...by <a href="#"><?php echo $cn->created_by ?></a></p>
										</div>
									</div>
								<?php } ?>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>					
					</div>
					<div class="clearfix"></div>	
				</div>
				</div>					
				<div class="col-md-3 side-bar">
						<div class="desk-grid">
							<h3>You May Also Like</h3>
							<?php foreach($this->latest_news as $lsa ){?>
							<div class="desk">
								<a href="singlepage.html" class="title"><?php echo $lsa->title?> </a>
								<p><?php echo $lsa->short_desc?></p>
								<p><a href="singlepage.html">Read More</a><span>3 hours ago</span></p>
							</div>
							<?php } ?>
							<a class="more" href="singlepage.html">More  +</a>
						</div>
						<div class="editorial">
							<h3>Popular</h3>
							<?php 
									foreach ($this->featured_news as $fa){?>

							<div class="editor">
								<a href="single.html"><img src="<?php echo base_url()?>admin_panel//files/<?php echo $fa->image ?>" alt="" ></a>
								<a href="single.html"><?php echo $fa->short_desc?></a>
							</div>

								<?php } ?>
						</div>
				</div>	
				<div class="clearfix"></div>
			</div>