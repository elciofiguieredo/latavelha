<?php if(have_posts()) : ?>
	<div class="loop accident clearfix">
		<ul class="masonry-list">
			<?php while(have_posts()) : the_post(); ?>
				<li class="masonry-item">
					<?php get_template_part('card', 'accident'); ?>
				</li>
			<?php endwhile; ?>
		</ul>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				var $container = $('.loop.accident .masonry-list');
				$container.imagesLoaded(function() {
					$container.isotope({
						itemSelector: '.loop.accident .masonry-item',
						layoutMode: 'masonry'
					});
				});
			});
		</script>
	</div>
<?php endif; ?>
