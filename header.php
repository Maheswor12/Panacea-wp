
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>
		<?php
		// for title
		bloginfo('name');
		?>
	</title>
	<meta charset="
    <?php
	// for metacharset
	bloginfo('charset');
	?>
    ">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	// for favicon of site
	$favicon = cs_get_option('favicon');
	$favicon_src = wp_get_attachment_url($favicon, 'full');
	?>
	<link rel="shortcut icon" href="
  <?php
	if ($favicon_src != "")
	{
		echo $favicon_src;
	}
	?>
    " />
	<?php
	wp_head();
	?>
</head>
<body>
	<div class="container-load">
		<div class="flex">
			<div class="loader">
			</div>
		</div>
		<div class="load-text">
			Panacea Loading...
		</div>
	</div>
	<section class="tophead">
		<div class="mycontainer">
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
					<div class="top-info">
						<ul>
							<?php if (cs_get_option('header_text') != "") : ?>
								<li><?php echo cs_get_option('header_text'); ?></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
					<div class="top-social">
						<ul>
							<?php
							if (cs_get_option('facebook')!="") 
							{
								?>
								<li><a href="<?php echo cs_get_option('facebook'); ?>"> <i class="fab fa-facebook-f"></i> </a></li>
							<?php

							}
							if (cs_get_option('instagram')!="") 
							{
								?>
								<li><a href="<?php echo cs_get_option('instagram'); ?>"> <i class="fab fa-instagram"></i> </a></li>
							<?php
							}
							if (cs_get_option('twitter')!="") 
							{
								?>
								<li><a href="<?php echo cs_get_option('twitter'); ?>"> <i class="fab fa-twitter"></i> </a></li>
							<?php
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="header">
		<div class="fullcontainer">
			<div class="modrow">
				<div class="col-lg-3 col-md-3 col-sm-4">
					<div class="brand">
						<?php
						$logo = cs_get_option('header_logo1');
						$logofinal = wp_get_attachment_image_src($logo, 'full');
						$logofinal = $logofinal[0];
						?>
						<a href="<?php echo home_url(); ?>"><img src="<?php echo $logofinal; ?>"></a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-8 norightpad">
					<div class="menu">
						<?php wp_nav_menu(array('theme_location' => 'menu-1')); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <div class="float-social">
		<h5><i class="flaticon-follower"></i></h5>
		<div class="float-div">
		<ul>
			<li><a href=""> <i class="fab fa-facebook-f"></i> </a></li>
			<li><a href=""> <i class="fab fa-instagram"></i> </a></li>
			<li><a href=""> <i class="fab fa-twitter"></i> </a></li>
			<li><a href=""> <i class="fab fa-linkedin"></i> </a></li>
		</ul>
	</div>
</div> -->