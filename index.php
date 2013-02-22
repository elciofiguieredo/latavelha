<?php get_header(); ?>

<section id="map">
	<?php mappress_featured_map(); ?>
</section>
	
<div class="container">
	<div class="twelve columns">
		<section id="platforms" class="content-section">
			<h2><?php _e('See platforms', 'latavelha'); ?></h2>
			<?php query_posts('post_type=platform&posts_per_page=6'); ?>
			<?php get_template_part('loop', 'platform'); ?>
			<?php wp_reset_query(); ?>
		</section>
	</div>
	<div class="six columns">
		<section id="news" class="content-section">
			<h2><?php _e('News', 'latavelha'); ?></h2>
		</section>
	</div>
	<div class="six columns">
		<section id="accidents" class="content-section">
			<h2><?php _e('Accidents', 'latavelha'); ?></h2>
		</section>
	</div>
</div>

<?php get_footer(); ?>