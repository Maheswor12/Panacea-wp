<?php get_header(); ?>
<section class="universities-wrap">
	<div class="mycontainer">
		<div class="row">
			<div class="col-sm-12">
				<div class="nextitle">
					<h3>Universities</h3>
					<div class="sector"></div>
				</div>
			</div>
			<?php
			if (have_posts()) : while (have_posts()) : the_post();
					?>
					<div class="col-lg-4 col-md-6 col-sm-12 sameheight">
						<div class="uni-item">
							<p><?php the_title(); ?></p>
						
							<a href="<?php echo get_field('university_link'); ?>" target="_blank">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="" >
							</a>
						</div>
					</div>
				<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>