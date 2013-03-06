<?php get_header(); ?>

<?php latavelha_map(__('Platforms', 'latavelha'), false); ?>

<section id="platforms" class="platform content-section clearfix">
	<div class="container">
		<div class="twelve columns">
			<a class="button dark" href="<?php echo get_post_type_archive_link('platform'); ?>"><?php _e('View all platforms', 'latavelha'); ?></a>
			<h2><?php _e('Oldests platforms', 'latavelha'); ?></h2>
			<?php
			$platform_args = array(
				'post_type' => 'platform',
				'posts_per_page' => 6,
				'orderby' => 'meta_value_num',
				'meta_key' => 'construction_date',
				'order' => 'ASC'
			);
			query_posts($platform_args);
			?>
			<?php get_template_part('loop', 'platform'); ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>
</section>
	
<div class="container">
	<div class="five columns">
		<section id="news" class="post content-section clearfix">
			<h2><?php _e('Latest news', 'latavelha'); ?></h2>
			<?php query_posts('posts_per_page=4'); ?>
			<?php get_template_part('loop', 'post'); ?>
			<?php wp_reset_query(); ?>
			<p><a class="button gray" href="<?php echo latavelha_get_news_archive_link(); ?>"><?php _e('View all news', 'latavelha'); ?></a></p>
		</section>
	</div>
	<div class="six columns offset-by-one">
		<section id="accidents" class="accident content-section clearfix">
			<h2><?php _e('Recent accidents', 'latavelha'); ?></h2>
			<?php query_posts('post_type=accident&posts_per_page=4'); ?>
			<?php get_template_part('loop', 'accident'); ?>
			<?php wp_reset_query(); ?>
			<p><a class="button darkred" href="<?php echo get_post_type_archive_link('accident'); ?>"><?php _e('View all accidents', 'latavelha'); ?></a></p>
		</section>
	</div>
</div>
<div id="info-box">
	<div class="container">
		<div class="twelve columns">
			<h2><?php _e('Get the data', 'latavelha'); ?></h2>
			<a class="button"><?php _e('Download', 'latavelha'); ?></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis mi ut tellus convallis cursus. Maecenas vitae augue est. Sed sit amet felis a odio feugiat tempor. Pellentesque dolor tortor, accumsan vel imperdiet sit amet, dapibus at massa. Nunc quam diam, pretium eu auctor in, tincidunt et mauris.</p>
		</div>
	</div>
</div>

<?php get_footer(); ?>