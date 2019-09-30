<?php get_header(); ?>
<section class="service-wrap">
	<div class="mycontainer">
		<div class="row">
			<div class="col-lg-6 sameheight">
				<div class="sernep">
					<h3>Services in Nepal</h3>
					<div class="sector2"></div>
					<ul>
						<?php
						$id = 58;
						$post = get_page($id);
						echo $post->post_content;
						?>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 sameheight">
				<div class="serjap">
					<h3>Services in Japan</h3>
					<div class="sector"></div>
					<ul>
						<?php
						$id = 58;
						$post = get_page($id);
						echo the_field('services', $post);
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>