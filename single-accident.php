<?php get_header(); ?>

<?php latavelha_map(); ?>

<?php if(have_posts()) : the_post(); ?>
	<section id="platform-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		// accident data
		$type_name = latavelha_get_accident_type_name();
		$platform = latavelha_get_accident_platform();
		$date = latavelha_get_accident_date();
		$notes = latavelha_get_accident_notes();
		$link = latavelha_get_accident_link();
		?>
		<div class="container">
			<div class="twelve columns">
				<article class="accident-content">
					<div class="seven columns alpha">
						<div class="map-content-box">
							<header class="accident-header header">
								<div class="clearfix">
									<h1><?php echo $type_name; ?></h1>
								</div>
								<div class="main-meta clearfix">
									<?php if($platform) : ?>
										<p class="platform"><span><?php _e('Platform', 'latavelha'); ?></span><?php echo $platform->post_title; ?></p>
									<?php endif; ?>
									<?php if($date) : ?>
										<p class="date"><span><?php _e('Date', 'latavelha'); ?></span><?php echo $date; ?></p>
									<?php endif; ?>
								</div>
							</header>
							<section class="accident-data main-section">
								<?php the_content(); ?>
							</section>
						</div>
						<section class="below-content">
							<?php echo $notes; ?>
						</section>
					</div>
					<div class="four columns omega offset-by-one">
						<aside class="related-content">
							<?php if($link) : ?>
								<div class="links">
									<h2><?php _e('Links', 'latavelha'); ?></h2>
									<ul>
										<li>
											<h3><a href="<?php echo $link; ?>" rel="external" target="_blank"><?php _e('Accident report link', 'latavelha'); ?></a></h3>
										</li>
									</ul>
								</div>
							<?php endif; ?>
						</aside>
					</div>
					<?php get_template_part('section', 'attachments'); ?>
				</article>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php get_footer(); ?>