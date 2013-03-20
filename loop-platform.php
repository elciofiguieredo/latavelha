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
								<?php if(latavelha_get_platform_age()) : ?>
									<p class="icon time"><?php echo latavelha_get_platform_age_text(); ?></p>
								<?php endif; ?>
								<p class="icon warning"><?php echo latavelha_get_platform_accidents_count_text(); ?></p>
							</div>
						</section>
						<footer class="clearfix">
							<p>
								<a class="icon info" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php _e('more', 'latavelha'); ?></a>
								<?php if(latavelha_has_platform_location()) : ?>
									<a class="icon location" href="#"><?php _e('locate on the map', 'latavelha'); ?></a>
								<?php endif; ?>
							</p>
						</footer>
					</article>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
<?php endif; ?>