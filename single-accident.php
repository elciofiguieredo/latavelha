<?php get_header(); ?>

<?php latavelha_map(); ?>

<section id="platform-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	// accident data
	$type_name = latavelha_get_accident_type_name();
	?>
	<div class="container">
		<div class="twelve columns">
			<article class="accident-content">
				<div class="seven columns alpha map-content-box">
					<header class="accident-header header">
						<div class="clearfix">
							<h1><?php echo $type_name; ?></h1>
						</div>
						<div class="main-meta clearfix">
						</div>
					</header>
					<section class="accident-data">
					</section>
				</div>
			</article>
		</div>
	</div>
</section>

<?php get_footer(); ?>