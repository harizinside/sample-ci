<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
	<div class="container">
		<a href="<?php echo base_url('/home'); ?>" class="navbar-brand">
			<span class="brand-text font-weight-light">DIAS ONLINE</span>
		</a>
		<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse order-3" id="navbarCollapse">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="<?php echo base_url('/') ;?>" class="nav-link">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Form</a>
					<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
						<li><a href="<?php echo base_url('form/satu'); ?>" class="dropdown-item">Form Satu </a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- Right navbar links -->
		<ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('auth/signout'); ?>" role="button">
					<i class="fas fa-sign-out-alt"></i>
				</a>
			</li>
		</ul>
	</div>
</nav>