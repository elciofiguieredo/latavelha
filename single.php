<?php get_header(); ?>

<div class="container main-container">
	<div class="eight columns">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<section id="post-<?php the_ID(); ?>" class="main-section clearfix">
				<article>
					<header>
						<h1><?php the_title(); ?></h1>
						<div class="post-meta">
							<p class="date"><?php the_date(); ?></p>
							<p class="author"><?php _e('by', 'latavelha'); ?> <?php the_author(); ?></p>
						</div>
					</header>
					<section>
						<?php the_content(); ?>
					</section>
				</article>
				<section id="comments">
					<?php comments_template(); ?>
				</section>
			</section>
		<?php endwhile; endif; ?>
	</div>
	<div class="four columns">
		<aside id="sidebar">
				<h2>Hi</h2>
			</div>
		</aside>
	</div>
</div>

<?php get_template_part('section', 'data'); ?>

<?php get_footer(); ?>