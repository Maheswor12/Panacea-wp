<?php get_header(); ?>
<section class="stdjapan">
	<div class="mycontainer">
		<div class="row">
			<div class="col-lg-6 col-md-6 sameheight">
				<div class="imgstjp">
					<?php
					$post_id = 54;
					$url12 = wp_get_attachment_url(get_post_thumbnail_id($post_id));
					if ($url12 != "") :
					?>
						<img src="<?php echo $url12; ?>">
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 sameheight">
				<div class="stdjpndesc">
					<h3>Study in Japan</h3>
					<div class="sector"></div>
						<?php
						$id = 54;
						$post = get_page($id);
						echo $post->post_content;
						?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>