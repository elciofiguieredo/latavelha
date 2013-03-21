<?php if(have_posts()) : ?>
	<div class="loop accident details">
		<ul>
			<?php while(have_posts()) : the_post(); ?>
				<li>
					<?php get_template_part('card', 'accident-details'); ?>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
<?php endif; ?>