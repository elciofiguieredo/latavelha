<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<section id="page" class=" clearfix">
		<div class="container">
			<div class="twelve columns">
				<article>
					<header>
						<h1><?php the_title(); ?></h1>
					</header>
					<section>
						<?php the_content(); ?>
					</section>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>

<div id="info-box">
	<div class="container">
		<div class="twelve columns">
			<h2><?php _e('Get the data', 'latavelha'); ?></h2>
			<a class="button"><?php _e('Download', 'latavelha'); ?></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis mi ut tellus convallis cursus. Maecenas vitae augue est. Sed sit amet felis a odio feugiat tempor. Pellentesque dolor tortor, accumsan vel imperdiet sit amet, dapibus at massa. Nunc quam diam, pretium eu auctor in, tincidunt et mauris.</p>
		</div>
	</div>
</div>

<?php get_footer(); ?>