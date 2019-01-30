			<div class="footer text-center"> 
				<div class="bottom-menu">
                 <ul>
				<li><a href="home">Home</a></li>
				<?php foreach ($this->menu as $data) { ?>
					<li><a href="<?php echo base_url().$data->name ?>"><?php echo $data->name ?></a></li>
					 <?php } ?>
				</ul>
				</div>
			     </div>
				<div class="copyright text-center">
					<p>The News Reporter &copy; 2015 All rights reserved | Template by  <a href="https://www.facebook.com/prayash.gautam">Sudhanshu Gautam</a></p><br><br>
					<!-- <p>Our base url:<br/><?php //echo base_url() ?></p> -->
				</div>
			</div>
		</div>
	</div>
</body>
</html>