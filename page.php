<?php get_header(); ?>

<div class="container main-container">
	<div class="twelve columns">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<section id="post-<?php the_ID(); ?>" class="main-section clearfix">
				<article>
					<header>
						<h1><?php the_title(); ?></h1>
					</header>
					<section>
						<?php the_content(); ?>
					</section>
				</article>
			</section>
		<?php endwhile; endif; ?>
	</div>
</div>

<?php get_template_part('section', 'data'); ?>

<?php get_footer(); ?>