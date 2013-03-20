<?php get_header(); ?>

<div class="container main-container">
	<div class="eight columns">
		<?php get_template_part('loop', 'post'); ?>
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