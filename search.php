<?php get_header(); ?>

<?php latavelha_map(__('Search results', 'latavelha')); ?>

<section class="search content-section clearfix">
	<div class="container">
		<div class="twelve columns">
			<?php if(have_posts()) : ?>
				<h2><?php if(function_exists('bcn_display')) bcn_display(); else wp_title(''); ?></h2>
				<div class="clearfix">
					<ul class="search-list">
						<?php while(have_posts()) : the_post(); ?>
							<li class="search-item">
								<?php get_template_part('card', get_post_type()); ?>
							</li>
						<?php endwhile; ?>
					</ul>
					<script type="text/javascript">
						jQuery(document).ready(function($) {
							var $container = $('.search-list');
							$container.imagesLoaded(function() {
								$container.isotope({
									itemSelector: '.search-item',
									layoutMode: 'masonry'
								});
							});
						});
					</script>
				</div>
				<?php if(function_exists('wp_paginate')) wp_paginate(); ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>