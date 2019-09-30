<?php get_header(); ?>
<section class="establish-wrap">
	<div class="mycontainer">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="establishimg">
					<?php
					$post_id = 61;
					$url1 = wp_get_attachment_url(get_post_thumbnail_id($post_id));
					if ($url1 != "") :
						?>
						<img src="<?php echo $url1; ?>">
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-8 col-md-6">
				<div class="estabdesc">
					<h3>
						<?php
						$id = 61;
						$post = get_page($id);
						echo $post->post_title;
						?>
					</h3>
					<div class="sector"></div>
					<p>
						<?php
						$id = 61;
						$post = get_page($id);
						echo $post->post_content;
						?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="vision-wrap">
	<div class="mycontainer">
		<div class="row">
			<div class="col-lg-8 col-md-6 sameheight">
				<div class="pvision">
					<h3>Panacea Vision</h3>
					<div class="sector2"></div>
					<p>
						<?php
						$id = 183;
						$post = get_page($id);
						echo $post->post_content;
						?>
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 sameheight">
				<div class="vsimg">
					<?php
					$post_id = 183;
					$url12 = wp_get_attachment_url(get_post_thumbnail_id($post_id));
					if ($url12 != "") :
						?>
						<img src="<?php echo $url12; ?>">
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="mission-wrap">
	<div class="mycontainer">
		<div class="row">
			<div class="col-lg-4 col-md-6 sameheight">
				<div class="vsimg">
					<?php
					$post_id = 188;
					$url13 = wp_get_attachment_url(get_post_thumbnail_id($post_id));
					if ($url13 != "") :
						?>
						<img src="<?php echo $url13; ?>">
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-8 col-md-6 sameheight">
				<div class="mission">
					<h3>Panacea Mission</h3>
					<div class="sector"></div>
					<p>
						<p>
							<?php
							$id = 188;
							$post = get_page($id);
							echo $post->post_content;
							?>
						</p>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>