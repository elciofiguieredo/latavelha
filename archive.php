<?php get_header(); ?>

<?php latavelha_map(wp_title('', false)); ?>

<section class="<?php echo get_post_type(); ?> archive content-section clearfix">
	<div class="container">
		<div class="twelve columns">
			<?php if(have_posts()) : ?>
				<h2><?php if(function_exists('bcn_display')) bcn_display(); else wp_title(''); ?></h2>
				<div class="clearfix">
					<?php get_template_part('loop', get_post_type()); ?>
				</div>
				<?php if(function_exists('wp_paginate')) wp_paginate(); ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>