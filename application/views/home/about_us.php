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
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
							<div class="page-left-side">
								<h3>About Us</h3>
								<hr />
								<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
								</p>
								<a href="<?php echo base_url()."assets/pdf/2019.pdf";?>">
									<span class="fa fa-file-pdf"></span>
									Our documention
								</a>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 custom-form">			
							<div class="page-right-side">			
								<img src="<?php echo base_url()."assets/images/user/mian.jpg";?>" alt="image" width="300" class="img-fluid img-thumbnail d-inline float-right" />						
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
</body>
</html>