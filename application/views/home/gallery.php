<!DOCTYPE html>
<html lang="en">
<?php include('include/header.php');?>
<?php include('include/menu.php');?>
<body>
	<div class="page-wrapper">	
		<div class="container-fluid">
			<!-- Contact Page -->
			<div class="page-area">
				<div class="page-container">
					<div class="row" id="lightgallery">						
					
						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12" 
							data-src="<?php echo base_url(); ?>assets/images/slider/1.jpg" 
							data-sub-html="<p>Here will place the content.</p>">
							<div class="gallery">
								<a href="#">
									<img class="img-fluid" src="<?php echo base_url(); ?>assets/images/slider/1.jpg" alt="1st image">
								</a>
								<p>
								It is a long established fact
								</p>
							</div>
						</div>						
					
						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12" 
							data-src="<?php echo base_url(); ?>assets/images/slider/2.jpg" 
							data-sub-html="<p>Here will place the content.</p>">
							<div class="gallery">
								<a href="#">
									<img class="img-fluid" src="<?php echo base_url(); ?>assets/images/slider/2.jpg" alt="1st image">
								</a>
								<p>
								It is a long established fact
								</p>
							</div>
						</div>						
					
						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12" 
							data-src="<?php echo base_url(); ?>assets/images/slider/3.jpg" 
							data-sub-html="<p>Here will place the content.</p>">
							<div class="gallery">
								<a href="#">
									<img class="img-fluid" src="<?php echo base_url(); ?>assets/images/slider/3.jpg" alt="1st image">
								</a>
								<p>
								It is a long established fact
								</p>
							</div>
						</div>						
					
						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12" 
							data-src="<?php echo base_url(); ?>assets/images/slider/4.jpg" 
							data-sub-html="<p>Here will place the content.</p>">
							<div class="gallery">
								<a href="#">
									<img class="img-fluid" src="<?php echo base_url(); ?>assets/images/slider/4.jpg" alt="1st image">
								</a>
								<p>
								It is a long established fact
								</p>
							</div>
						</div>						
					
						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12" 
							data-src="<?php echo base_url(); ?>assets/images/slider/5.jpg" 
							data-sub-html="<p>Here will place the content.</p>">
							<div class="gallery">
								<a href="#">
									<img class="img-fluid" src="<?php echo base_url(); ?>assets/images/slider/5.jpg" alt="1st image">
								</a>
								<p>
								It is a long established fact
								</p>
							</div>
						</div>						
					
						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12" 
							data-src="<?php echo base_url(); ?>assets/images/slider/6.jpg" 
							data-sub-html="<p>Here will place the content.</p>">
							<div class="gallery">
								<a href="#">
									<img class="img-fluid" src="<?php echo base_url(); ?>assets/images/slider/6.jpg" alt="1st image">
								</a>
								<p>
								It is a long established fact
								</p>
							</div>
						</div>						
					
						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12" 
							data-src="<?php echo base_url(); ?>assets/images/slider/1.jpg" 
							data-sub-html="<p>Here will place the content.</p>">
							<div class="gallery">
								<a href="#">
									<img class="img-fluid" src="<?php echo base_url(); ?>assets/images/slider/1.jpg" alt="1st image">
								</a>
								<p>
								It is a long established fact
								</p>
							</div>
						</div>						
					
						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12" 
							data-src="<?php echo base_url(); ?>assets/images/slider/2.jpg" 
							data-sub-html="<p>Here will place the content.</p>">
							<div class="gallery">
								<a href="#">
									<img class="img-fluid" src="<?php echo base_url(); ?>assets/images/slider/2.jpg" alt="1st image">
								</a>
								<p>
								It is a long established fact
								</p>
							</div>
						</div>							
						
					</div>
				</div>
			</div>
			<!-- End Contact Page -->  
			
		</div>


		<!-- Footer Bar -->
		<div class="footer-bar-area">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="social-icon-area">
					<ul class="social-icon-container">
						<li class="social-icon-item">
							<a href="#">
								<img src="<?php echo base_url(); ?>assets/images/default/facebook.png" border="0" alt="" />
							</a>
						</li>
						<li class="social-icon-item">
							<a href="#">
								<img src="<?php echo base_url(); ?>assets/images/default/twitter.png" border="0" alt="" />
							</a>
						</li>
						<li class="social-icon-item">
							<a href="#">
								<img src="<?php echo base_url(); ?>assets/images/default/youtube.png" border="0" alt="" />
							</a>
						</li>
						<li class="social-icon-item">
							<a href="#">
								<img src="<?php echo base_url(); ?>assets/images/default/instagram.png" border="0" alt="" />
							</a>
						</li>
						<li class="social-icon-item">
							<a href="#">
								<img src="<?php echo base_url(); ?>assets/images/default/linkedin.png" border="0" alt="" />
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>		
<!-- End Footer Bar -->
<?php include('include/footer.php');?>	
<script>
	$(function() {		
		//lightgallery
		lightGallery();
		function lightGallery(){
			$("#lightgallery").lightGallery();
		}		
	});
</script>
</body>
</html>