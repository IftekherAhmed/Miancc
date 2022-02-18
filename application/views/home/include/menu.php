			
		<?php 
			$uri = $this->uri->segment(2);
			if($uri == "index" || $uri == ""){
				$solid_menu = "";
				$home_menu_postition = "active";
			}else{
				$solid_menu = "solid-menu";
				$home_menu_postition = "";
			}
			if($uri == "about_us_page"){
				$about_menu_postition = "active";
			}else{
				$about_menu_postition = "";
			}
			if($uri == "service_page"){
				$service_menu_postition = "active";
			}else{
				$service_menu_postition = "";
			}
			if($uri == "clients_page"){
				$client_menu_postition = "active";
			}else{
				$client_menu_postition = "";
			}
			if($uri == "project_page"){
				$project_menu_postition = "active";
			}else{
				$project_menu_postition = "";
			}	
			if($uri == "gallery_page"){
				$gallery_menu_postition = "active";
			}else{
				$gallery_menu_postition = "";
			}		
			if($uri == "contact_page"){
				$contact_menu_postition = "active";
			}else{
				$contact_menu_postition = "";
			}			
			if($uri == "blog_page"){
				$blog_menu_postition = "active";
			}else{
				$blog_menu_postition = "";
			}			
		?>
		<!-- Mani Menu -->
		<div class="main-menu-area sticky-top">
			<nav class="navbar navbar-expand-lg main-menu <?php echo $solid_menu; ?>" id="main_menu">			
				<a class="navbar-brand" href="#">
					<img src="<?php echo base_url(); ?>assets/images/default/logo.png" class="img-fluid" width="80" border="0" alt="logo" />
				</a>
				<img src="<?php echo base_url(); ?>assets/images/default/vision.png" class="img-fluid mr-2" width="80" border="0" alt="logo" />
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item <?php echo $home_menu_postition; ?>">
							<a class="nav-link" href="<?php echo base_url();?>ct_home/index">Home </a>
						</li>
						<li class="nav-item <?php echo $about_menu_postition; ?>">
							<a class="nav-link" href="<?php echo base_url();?>ct_home/about_us_page">About Us</a>
						</li>
						<li class="nav-item dropdown <?php echo $service_menu_postition; ?>">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Services
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo base_url();?>ct_home/service_page">Cleaning, Maintenance  & Logistics Support</a>
								<a class="dropdown-item" href="<?php echo base_url();?>ct_home/service_page">Contracting Civil, Electric & Mechanical Work</a>
								<a class="dropdown-item" href="<?php echo base_url();?>ct_home/service_page">Service</a>
								<a class="dropdown-item" href="<?php echo base_url();?>ct_home/service_page">Office Secutiry services</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url();?>ct_home/service_page">Rentals Equipments Supply</a>
							</div>
						</li>
						<li class="nav-item <?php echo $client_menu_postition; ?>">
							<a class="nav-link" href="<?php echo base_url();?>ct_home/clients_page">Clients</a>
						</li>
						<li class="nav-item <?php echo $project_menu_postition; ?>">
							<a class="nav-link" href="<?php echo base_url();?>ct_home/project_page">Project</a>
						</li>
						<li class="nav-item dropdown <?php echo $gallery_menu_postition; ?>">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Photo
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
								<a class="dropdown-item" href="<?php echo base_url();?>ct_home/gallery_page">Gallery</a>
								<a class="dropdown-item" href="<?php echo base_url();?>ct_home/gallery_page">Goverment certificates</a>
								<a class="dropdown-item" href="<?php echo base_url();?>ct_home/gallery_page">Company certified us</a>
							</div>
						</li>
						<li class="nav-item <?php echo $contact_menu_postition; ?>">
							<a class="nav-link" href="<?php echo base_url();?>ct_home/contact_page">Contact</a>
						</li>
						<li class="nav-item <?php echo $blog_menu_postition; ?>">
							<a class="nav-link" href="<?php echo base_url();?>ct_home/blog_page">Blog</a>
						</li>
					</ul>
					<div class="d-inline">
						<img src="<?php echo base_url(); ?>assets/images/default/language.jpg" class="pl-2" width="50" border="0" alt="language" />
					</div>
				</div>
			</nav>
		</div>
		<!-- End Mani Menu -->