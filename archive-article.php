<?php get_header(); ?>
<section class="fullnotice">
	<div class="mycontainer">
		<div class="row">
			<div class="col-12">
				<h4 class="title">Articles</h4>
			</div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="col-12">
					<a href="<?php the_permalink();?>">
					<div class="notitem">
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="imgs">
									<?php if (has_post_thumbnail()) : ?>
										<img src="<?php the_post_thumbnail_url(); ?>" alt="">
									<?php endif; ?>
								</div>
							</div>
							<div class="col-lg-8 col-md-8">
								<div class="notdesc">
									<h3><?php the_title(); ?></h3>
									<div class="sector"></div>
									<?php echo get_excerpt(200); ?>
								</div>
							</div>
						</div>
					</div>
					</a>
				</div>
				<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>