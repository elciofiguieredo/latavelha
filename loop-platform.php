<?php if(have_posts()) : ?>
	<div class="loop platform">
		<ul>
			<?php while(have_posts()) : the_post(); ?>
				<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h3><?php the_title(); ?></h3>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
<?php endif; ?>