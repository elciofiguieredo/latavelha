<?php if(have_posts()) : ?>
	<div class="loop news">
		<ul>
			<?php while(have_posts()) : the_post(); ?>
				<li>
					<?php get_template_part('card', 'post'); ?>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
<?php endif; ?>