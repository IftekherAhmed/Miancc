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
								<p>
									Riyadh Office Address:<br />
									Post-Box-No 12831, Riyadh - 2332<br />
									Tel: 011 4735888, Fax: 011 4784777<br />
									Malaz, Riyadh<br />
									Kingdom of Saudi Arabia<br />
								</p>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.6933586602686!2d46.72690411499902!3d24.668681084144715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDQwJzA3LjMiTiA0NsKwNDMnNDQuNyJF!5e0!3m2!1sen!2sbd!4v1587487765296!5m2!1sen!2sbd" width="" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 custom-form">			
							<div class="page-right-side">			
								<?php 
									//If is there any error notification to show then it will work.
									if($this->session->flashdata('error')):
								?>	
								<p class="text-danger"><?php echo $this->session->flashdata("error"); ?></p>
								<?php
									endif;	
								?>
								<?php
									//If is there any success notification to show then it will work.
									if($this->session->flashdata('success')):
								?>	
								<p class="text-success"><?php echo $this->session->flashdata("success"); ?></p>
								<?php
									endif;	
								?>
							
								<?php echo form_open('ct_home/send_mail'); ?> 
									<?php echo form_input(['name'=>'type', 'type'=>'hidden', 'value'=>'received']); ?>
									<div class="form-group">
										<?php echo form_label('Email*');?>
										<?php echo form_error('user_email', '<div class="text-danger">', '</div>');?>
										<?php echo form_input(['name'=>'user_email', 'class'=>'form-control', 'type'=>'text', 'placeholder'=>'Email*']); ?>
									</div>
									
									<div class="form-group">
										<?php echo form_label('Number*');?>
										<?php echo form_error('user_no', '<div class="text-danger">', '</div>');?>
										<?php echo form_input(['name'=>'user_no', 'class'=>'form-control', 'type'=>'text', 'placeholder'=>'Number*']); ?>
									</div>
									
									<div class="form-group">
										<?php echo form_label('Message');?>												
										<?php echo form_error('message', '<div class="text-danger">', '</div>');?>
										<?php echo form_textarea(['name'=>'message', 'class'=>'form-control', 'placeholder'=>'Message']); ?>
									</div>
									<?php echo form_submit(['name'=>'submit', 'class'=>'btn btn-primary', 'value'=>'Send']);?>
								<?php echo form_close(); ?>		
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