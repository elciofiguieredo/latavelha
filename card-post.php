<div class="card post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header>
			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		</header>
		<section class="summary">
			<?php the_excerpt(); ?>
		</section>
	</article>
</div>