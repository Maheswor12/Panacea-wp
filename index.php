<?php get_header(); ?>

<section class="slider">
	<!-- start of slider -->
	<ul id="imageGallery">
		<li data-thumb="<?php echo home_url(); ?>/wp-content/uploads/2019/05/slider1.jpg" data-src="<?php echo home_url() ?>/wp-content/uploads/2019/05/slider1.jpg">
			<?php
			$slider11 = cs_get_option('slider1');
			$slider112 = wp_get_attachment_url($slider11, 'full');
			if ($slider112 != "") 
			{
			?>
				<img src="<?php echo $slider112; ?>" />
			<?php
			}
			?>
		</li>
		<li data-thumb="<?php echo home_url(); ?>/wp-content/uploads/2019/05/slider2.jpg" data-src="<?php echo home_url() ?>/wp-content/uploads/2019/05/slider2.jpg">
			<?php
			$slider22 = cs_get_option('slider2');
			$slider222 = wp_get_attachment_url($slider22, 'full');
			if ($slider222 != "") :
			?>
				<img src="<?php echo $slider222; ?>" />
			<?php endif; ?>
		</li>
		<li data-thumb="<?php echo home_url(); ?>/wp-content/uploads/2019/05/slider3.jpg" data-src="<?php echo home_url() ?>/wp-content/uploads/2019/05/slider3.jpg">
			<?php
			$slider33 = cs_get_option('slider3');
			$slider333 = wp_get_attachment_url($slider33, 'full');
			if ($slider333 != "") :
			?>
				<img src="<?php echo $slider333; ?> " />
			<?php endif; ?>
		</li>
	</ul>
	
	<div class="cont">
		<button class="prev"><i class="fas fa-arrow-left"></i></button>
		<button class="next"><i class="fas fa-arrow-right"></i></button>
	</div>
	<!-- end of slider -->
	<!-- start of notice -->
	<div class="notice-wrap">
		<div class="head">Notice<span><a href="<?php echo home_url(); ?>/notice/">All</a></span></div>
		
		<div class="notice2">
			<?php
			$notice = array('post_type' => 'Notice', 'posts_per_page' => '2');
			$notice1 = new WP_Query($notice);
			if ($notice1->have_posts()) :
				while ($notice1->have_posts()) :
					$notice1->the_post();
					?>
					<a href="<?php the_permalink(); ?>">
					<div class="notice-item">
						<span><i class="far fa-clock"></i><?php echo get_the_date("F j,Y") ?></span>
						<p><?php the_title(); ?> </p>
					</div>
					</a>
				<?php
				endwhile;
				endif;
				?>
		</div>
	</div>
	<!-- end of notice -->
</section>
<!-- start of second section -->
<section class="infos-wrapper">
	<div class="mycontainer">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 sameheight">
				<div class="info-item video">
					<i class="flaticon-camera"></i>
					<h4><a href="<?php echo home_url(); ?>/gallery/">VIDEOS</a></h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 sameheight">
				<div class="info-item photo">
					<i class="flaticon-photo"></i>
					<h4><a href="<?php echo home_url(); ?>/gallery/">PHOTOS</a></h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 sameheight">
				<div class="info-item news">
					<i class="flaticon-newspaper"></i>
					<h4><a href="<?php echo home_url(); ?>/news/">NEWS</a></h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 sameheight">
				<div class="info-item notice">
					<i class="flaticon-news"></i>
					<h4><a href="<?php echo home_url(); ?>/notice/">NOTICE</a></h4>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end of second section -->
<!-- start of message from director section -->
<section class="director-wrap">
	<div class="mycontainer">
		<div class="row">
			<div class="col-lg-6 col-md-6 sameheight norightpad">
				<div class="dirimg">
					<?php
					$message_image = cs_get_option('message_image');
					$imagemessage = wp_get_attachment_url($message_image, 'full');
					if ($imagemessage != "") {
						?>
						<img src="<?php echo $imagemessage; ?>" alt="">
					<?php
					}
					?>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 sameheight noleftpad">
				<div class="dirmsg">
					<h4>Message from the director</h4>
					<div class="sector"></div>
					<h5>
						<?php
						if (cs_get_option('message_title') != "") {
							echo cs_get_option('message_title');
						}
						?>
					</h5>
					<p>
						<?php
						if (cs_get_option('message_note') != "") {
							echo cs_get_option('message_note');
						}
						?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end of message from director section -->
<!-- start of history section -->
<section class="history-wrap">
	<div class="mycontainer">
		<div class="row">
			<div class="col-lg-6 col-md-6 sameheight norightpad">
				<div class="hiphoto">
					<h4>History</h4>
					<div class="sector2"></div>
						<?php if(cs_get_option('history_question')!=""): ?>
					<p>
						<?php
						echo cs_get_option('history_question');
						?>
					</p>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 sameheight noleftpad">
				<div class="imgjpn">
					<?php 
					$history_photo = cs_get_option('history_image');
					$history_photos = wp_get_attachment_url($history_photo, 'full');
					if($history_photos!=""): ?>
					<img src="<?php echo $history_photos;  ?>">
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end of history section -->
<section class="visioncourse">
	<div class="mycontainer">
		<div class="row">
			<!-- start of vision section -->
			<div class="col-lg-6 col-md-6 sameheight norightpad">
				<div class="vision">
					<h4>Vision</h4>
					<div class="sector"></div>
					<p>
					<?php
						$id = 183;
						$post = get_page($id);
						echo $post->post_content;
					?>
					</p>
				</div>
			</div>
			<!-- end of vision section -->
			<!-- start of japanese language course section-->
			<div class="col-lg-6 col-md-6 sameheight noleftpad">
				<div class="course">
					<h4>Japanese Language Course</h4>
					<div class="sector2"></div>
					<p><? echo cs_get_option('course'); ?></p>
					<div class="row list clearfix">
						<ul class="col-md-12 col-sm-12 col-xs-12">
						<?php if(cs_get_option('course1')!=""):?>
							<li><i class="fa fa-check-circle"></i>&nbsp;&nbsp;<?php echo cs_get_option('course1'); ?> </li>
							<?php endif; ?>
							<?php if(cs_get_option('course2')!=""):?>
							<li><i class="fa fa-check-circle"></i>&nbsp;&nbsp; <?php echo cs_get_option('course2'); ?></li>
							<?php endif; ?>
							<?php if(cs_get_option('course3')!=""):?>
							<li><i class="fa fa-check-circle"></i>&nbsp;&nbsp; <?php echo cs_get_option('course3'); ?></li>
							<?php endif; ?>
							<?php if(cs_get_option('course4')!=""):?>
							<li><i class="fa fa-check-circle"></i>&nbsp;&nbsp; <?php echo cs_get_option('course4'); ?></li>
							<?php endif; ?>
							<?php if(cs_get_option('course5')!=""):?>
							<li><i class="fa fa-check-circle"></i>&nbsp;&nbsp; <?php echo cs_get_option('course5'); ?></li>
					<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<!-- end of japanese language course -->
		</div>
</section>
<!-- start of study in japan and article section -->
<section class="studyjpn">
	<div class="mycontainer">
		<div class="row">
			<div class="col-lg-8 col-md-7 sameheight">
				<div class="stjp">
					<h4>Study in Japan</h4>
					<p>
					<?php
						$id = 54;
						$post = get_page($id);
						echo $post->post_content;
					?>
					</p>
					<a class="morebtn" href="<?php echo home_url(); ?>/studyjapan">More</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-5 sameheight">
				<div class="artics">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-6">
							<h4>Latest Article </h4>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-6">
							<a class="artbtn" href="<?php echo home_url(); ?>/article/">View All</a>
						</div>

					</div>
					<div class="sector"></div>
					<?php
					$article = array('post_type' => 'article', 'posts_per_page' => 2);
					$article1 = new WP_Query($article);
					if ($article1->have_posts()) :
						while ($article1->have_posts()) :
							$article1->the_post();
							?>
							<div class="artics-item">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-3 col-3">
										<div class="datum">
											<strong><?php echo get_the_date("F"); ?> <br><span><?php echo get_the_date("j"); ?></span></strong>
										</div>
									</div>
									
									<div class="col-lg-9 col-md-9 col-sm-9 col-9">
									<a href="<?php the_permalink(); ?>">
										<div class="desart">
											<p><?php the_title(); ?></p>
											<h6>By <span><?php echo get_field('writer'); ?></span></h6>
										</div>
										</a>
									</div>
									
								</div>
							</div>
						<?php
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end of japan and article section -->
<!-- start of panacea success rate section -->
<section class="success-wrap">
	<div class="mycontainer">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="sucimg">
				<?php
					 $success_img = cs_get_option('success_image');
					 $success_img1 = wp_get_attachment_image_url( $success_img, 'full');
					 if( $success_img1!=""):
				?>
					<img src="<?php echo $success_img1; ?>">
					 <?php endif; ?>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="sucdes">
					<h4>Panacea Education's Success Rates</h4>
					<div class="sector"></div>
					<p>
						<?php echo cs_get_option('success_Text'); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end of start of success rate section -->
<!-- start of gallery section -->
<section class="gallery-wrap">
	<div class="mycontainer">
		<div class="bordergallery">
			<div class="row" id="lightgallery">
				<div class="col-lg-6 col-md-6 col-sm-8 col-6">
					<h4>Gallery</h4>
					<div class="sector"></div>
				</div>
				<?php
				$gallerylist = array('post_type' => 'gallery');
				$gallerylist1 = new wp_query($gallerylist);
				if ($gallerylist1->have_posts()) : $gallerylist1->the_post();
					?>
					<div class="col-lg-6 col-md-6 col-sm-4 col-6">
						<a class="allbtn" href="<?php echo home_url(); ?>/gallery/">View All</a>
					</div>
				<?php
				endif;
				?>
				<?php
				$gallery = array('post_type' => 'Gallery', 'posts_per_page' => 4);
				$gallery1 = new wp_query($gallery);
				if ($gallery1->have_posts()) :
					while ($gallery1->have_posts()) :
						$gallery1->the_post();
						?>
						<div class="col-lg-3 col-md-3 col-sm-6">
							<?php if (has_post_thumbnail()) : ?>
								<div class="galleries item" data-src="<?php the_post_thumbnail_url(); ?>">
									<a href="#"><img src="<?php the_post_thumbnail_url(); ?>" alt="Gallery 1 pcitures is this.">
									</a>
									<div class="lay">
										<h6><i class="fas fa-search"></i></h6>
									</div>
								</div>
							<?php endif; ?>
						</div>
					<?php
					endwhile;
				endif;
				?>
			</div>
		</div>
</section>
<!-- end of gallery section -->
<!-- start of testimonial and news section -->
<section class="testimonial-wrapper">
	<div class="mycontainer">
		<div class="row">
			<div class="col-lg-6 col-md-6 sameheight">
				<ul id="test-slider">
					<!-- <li>
						<div class="item">
							<div class="row">
								<div class="col-lg-12 col-sm-12">
									<div class="tesitem">
										<p>I feel very proud to call myself a Panacean. The learning of Japanese Language in Panacea was very fruitful. I did not have to worry...</p>
										<img src="<?php //echo home_url() ?>/wp-content/uploads/2019/05/test2.jpg">
										<span>Hello World</span>
									</div>
								</div>
							</div>
						</div>
					</li> -->
					<?php
						 $test = array('post_type'=>'testimonial');
						 $test1 = new WP_Query($test);
						 if($test1->have_posts()):
						 	while($test1->have_posts()):
						 	$test1->the_post();
					?>
					<li>
						<div class="item ">
							<div class="row">
								<div class="col-lg-12 col-sm-12">
									<div class="tesitem">
										<?php the_content(); ?>
										
										<?php if(has_post_thumbnail()):?>
										<img src="<?php the_post_thumbnail_url();?>">
									 	<?php endif; ?>
										<span><?php the_title();?></span>
									</div>
								</div>
							</div>
						</div>
					</li>
					<?php
						 endwhile;
						 endif;
					?> 
				</ul>
			</div>
			<div class="col-lg-6 col-md-6 sameheight">
				<div class="newes">
					<div class="title">
						<h4>News</h4>
					</div>
					<?php
					$news = array(
						'post_type' => 'news',
						'posts_per_page' => '2',
					);
					$news1 = new WP_Query($news);
					if ($news1->have_posts()) :
						while ($news1->have_posts()) :
							$news1->the_post();
							?>
							<div class="news-item">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-4">
										<?php if (has_post_thumbnail()) : ?>
											<img src="<?php the_post_thumbnail_url(); ?>" alt="">
										<?php endif; ?>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-8 col-8">
										<h6><?php the_title(); ?></h6>
										<p><?php echo get_excerpt(250); ?></p>
									</div>
								</div>
							</div>
						<?php
						endwhile;
					endif;
					?>
					<!-- <div class="news-item">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-4">
								<img src="<?php //echo home_url() 
											?>/wp-content/uploads/2019/05/news.jpg" alt="">
							</div>
							<div class="col-lg-8 col-md-8 col-sm-8 col-8">
								<h6>Lorem ipsum dolor sit amet</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end of testimonial and news section -->


<?php
get_footer(); ?>