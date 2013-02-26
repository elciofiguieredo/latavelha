<?php if(have_posts()) : ?>
	<div class="loop platform">
		<ul>
			<?php $i = 0; while(have_posts()) : the_post(); $i++; ?>
				<li class="four columns <?php if($i % 3 === 0) echo 'omega'; elseif(($i-1) % 3 === 0) echo 'alpha'; ?>">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header>
							<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
						</header>
						<section class="summary clearfix">
							<p class="icon person">Diamond Offshore</p>
							<p class="icon gear">Petrobrás</p>
							<p class="icon time">35 anos</p>
							<p class="icon warning">5 acidentes</p>
						</section>
						<footer class="clearfix">
							<p>
								<a class="icon info" href="#"><?php _e('more', 'latavelha'); ?></a>
								<a class="icon location" href="#"><?php _e('locate on the map', 'latavelha'); ?></a>
							</p>
						</footer>
					</article>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
<?php endif; ?>