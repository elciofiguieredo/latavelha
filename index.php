<?php get_header(); ?>

<section id="map">
	<?php mappress_featured_map(); ?>
</section>
	
<div class="container">
	<section id="platforms" class="content-section">
		<h2><?php _e('See platforms', 'latavelha'); ?></h2>
		<?php query_posts('post_type=platform&posts_per_page=6'); ?>
		<?php get_template_part('loop', 'platform'); ?>
		<?php wp_reset_query(); ?>
	</section>
	<section id="news" class="content-section">
		<h2><?php _e('News', 'latavelha'); ?></h2>
	</section>
	<section id="accidents" class="content-section">
		<h2><?php _e('Accidents', 'latavelha'); ?></h2>
	</section>
</div>

<?php get_footer(); ?>