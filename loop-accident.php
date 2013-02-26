<?php //if(have_posts()) : ?>
	<div class="loop accident">
		<ul>
			<?php // while(have_posts()) : the_post(); ?>
				<li>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header>
							<div class="icon blowout"></div>
							<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Blow Out <span class="date">23/01/2002</span></a></h3>
						</header>
						<section>
							<p>Cras mattis rhoncus purus, id tincidunt enim sollicitudin et. Mauris varius diam ac mi tincidunt laoreet.</p>
						</section>
					</article>
				</li>
				<li>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header>
							<div class="icon leak"></div>
							<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Vazamento <span class="date">23/01/2002</span></a></h3>
						</header>
						<section>
							<p>Cras mattis rhoncus purus, id tincidunt enim sollicitudin et. Mauris varius diam ac mi tincidunt laoreet.</p>
						</section>
					</article>
				</li>
				<li>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header>
							<div class="icon blowout"></div>
							<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Blow Out <span class="date">23/01/2002</span></a></h3>
						</header>
						<section>
							<p>Cras mattis rhoncus purus, id tincidunt enim sollicitudin et. Mauris varius diam ac mi tincidunt laoreet.</p>
						</section>
					</article>
				</li>
			<?php //endwhile; ?>
		</ul>
	</div>
<?php //endif; ?>