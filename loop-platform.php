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
							<div class="metadata">
								<?php
								$owner = get_the_terms($post->ID, 'platform-owner');
								if($owner) {
									echo '<p class="icon person">';
									$owner = array_shift($owner);
									echo '<a href="' . get_term_link($owner) . '">' . $owner->name . '</a>';
									echo '</p>';
								}
								?>
								<?php
								$operator = get_the_terms($post->ID, 'platform-operator');
								if($operator) {
									echo '<p class="icon gear">';
									$operator = array_shift($operator);
									echo '<a href="' . get_term_link($operator) . '">' . $operator->name . '</a>';
									echo '</p>';
								}
								?>
							</div>
							<div class="info">
								<p class="icon time"><?php echo latavelha_get_platform_age() . ' ' . __('years', 'latavelha'); ?></p>
								<p class="icon warning">0 <?php _e('accidents', 'latavelha'); ?></p>
							</div>
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