<?php get_header(); ?>
<section class="event-wrapper">
	<div class="mycontainer">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="nepevent">
					<h3>Events in Japan</h3>
					<div class="sector"></div>
					<?php
					$eventjapan = get_field('events_japan');
					if ($eventjapan != "") :
						$i = 1;
						foreach ($eventjapan as $event) :
							?>
							<div class="nepeveitem">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-2 col-2">
										<div class="counter"><?php echo $i; ?></div>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10 col-10 col-10">
										<div class="eventdesc">
											<span><?php echo $event["japan_title"] ?></span>
											<p><?php echo $event["japan_content"] ?></p>
										</div>
									</div>
								</div>
							</div>
							<?php
							$i++;
						endforeach;
					endif;
					?>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="japevent">
					<h3>Events in Nepal</h3>
					<div class="sector2"></div>
					<?php
					$eventnepal = get_field('events_in_nepal');
					if ($eventnepal != "") :
						$i = 1;
						foreach ($eventnepal as $eventnep) :
							?>
							<div class="japeveitem">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-2">
										<div class="counter2"><?php echo $i; ?></div>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10 col-10">
										<div class="eventdesc2">
											<span><?php echo $eventnep["title"]; ?></span>
											<p><?php echo $eventnep["content"]; ?></p>
										</div>
									</div>
								</div>
							</div>
							<?php
							$i++;
						endforeach;
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>