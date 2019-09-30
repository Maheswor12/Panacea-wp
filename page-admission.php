<?php get_header() ?>
<section class="admission-wrap">
	<div class="mycontainer">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 sameheight">
				<div class="imgadm">
					<?php
					$post_id = 46;
					$url1 = wp_get_attachment_url(get_post_thumbnail_id($post_id));
					if ($url1 != "") :
						?>
						<img src="<?php echo $url1; ?>">
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-6 sameheight">
				<div class="desadm">
					<h4>Admission Process</h4>
					<div class="sector"></div>
					<ol class="numbering">
						<?php
						$id = 46;
						$post = get_page($id);
						echo $post->post_content;
						?>
					</ol>
					<h4>Tution Fee</h4>
					<div class="sector"></div>
					<ol class="numbering">
						<?php
						$tution = array('post_type' => 'post', 'category_name' => 'tutuion');
						$tution1 = new WP_Query($tution);
						if ($tution1->have_posts()) : $tution1->the_post();
							?>
							<?php the_content(); ?>
						<?php endif; ?>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="awards-wrap">
	<div class="mycontainer">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 sameheight">
				<div class="scholarship">
					<h4>Scholarships</h4>
					<div class="sector2"></div>
					<ol class="numbering2">
						<?php
						$scholar = array('post_type' => 'post', 'category_name' => 'scholarship');
						$scholar2 = new WP_Query($scholar);
						if ($scholar2->have_posts()) : $scholar2->the_post();
							?>
							<?php the_content(); ?>
						<?php endif; ?>
					</ol>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 sameheight">
				<div class="scholarship">
					<h4>Awards</h4>
					<div class="sector2"></div>
					<ol class="numbering2">
						<?php
						$scholar = array('post_type' => 'post', 'category_name' => 'Awards');
						$scholar2 = new WP_Query($scholar);
						if ($scholar2->have_posts()) : $scholar2->the_post();
							?>
							<?php the_content(); ?>
						<?php endif; ?>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>