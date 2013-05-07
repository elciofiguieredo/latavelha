<?php get_header(); ?>

<div class="main-container">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<section id="post-<?php the_ID(); ?>" class="main-section clearfix">
			<article class="clearfix">
				<header class="page-header clearfix">
					<div class="container">
						<div class="twelve columns">
							<aside class="social">
								<div class="facebook">
									<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=90&amp;appId=521681297871040" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width: 100px; height:22px;" allowTransparency="true"></iframe>
								</div>
								<div class="twitter">
									<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-lang="en" data-count="horizontal">Tweet</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
								</div>
							</aside>
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
				</header>
				<div class="container">
					<div class="eight columns">
						<section>
							<?php the_content(); ?>
						</section>
					</div>
					<div class="three columns offset-by-one">
						<aside id="sidebar">
							<ul class="widgets">
								<?php dynamic_sidebar('generic'); ?>
							</ul>
						</aside>
					</div>
				</div>
			</article>
		</section>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>