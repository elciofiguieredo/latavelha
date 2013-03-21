<?php if(have_posts()) : ?>
	<div class="loop accident clearfix">
		<ul>
			<?php while(have_posts()) : the_post(); ?>
				<li>
					<?php get_template_part('card', 'accident'); ?>
				</li>
			<?php endwhile; ?>
		</ul>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				var $container = $('.loop.accident > ul');
				$container.imagesLoaded(function() {
					$container.isotope({
						itemSelector: '.loop.accident > ul > li',
						layoutMode: 'masonry'
					});
				});
			});
		</script>
	</div>
<?php endif; ?>
