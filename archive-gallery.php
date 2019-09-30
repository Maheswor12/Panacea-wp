<?php get_header(); ?>
<section class="gallery-wrap">
	<div class="mycontainer">
		<div class="bordergallery">
			<div class="row" id="lightgallery">
				<div class="col-lg-12 nextitle">
					<h3>Gallery</h3>
					<div class="sector"></div>
				</div>
				<?php
				if (have_posts()) : while (have_posts()) : the_post();
						?>
						<div class="col-lg-3 col-md-3 col-sm-6">
							<?php if (has_post_thumbnail()) : ?>
								<div class="galleries item" data-src="<?php the_post_thumbnail_url(); ?>">
									<a href="#"><img src="<?php the_post_thumbnail_url(); ?>" alt="Gallery 1 pcitures is this.">
									</a>
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
<?php get_footer(); ?>