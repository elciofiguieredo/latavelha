<?php if(have_posts()) : ?>
	<div class="loop accident clearfix">
		<ul>
			<?php $i = 0; while(have_posts()) : the_post(); $i++; ?>
				<li class="four columns <?php if($i % 3 === 0) echo 'omega'; elseif(($i-1) % 3 === 0) echo 'alpha'; ?>">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="clearfix">
						<?php $date = get_post_meta($post->ID, 'accident_date', true); ?>
						<?php if($date) : ?>
							<div class="date-container">
								<span class="date"><?php echo $date ?></span>
							</div>
						<?php endif; ?>
						<div <?php if($date) echo 'class="offset"'; ?>>
							<header class="clearfix">
								<?php
								$types = get_the_terms($post->ID, 'accident-type');
								if($types) {
									$type = array_shift($types);
								}
								?>
								<h3>
									<div class="icon <?php if($type) echo $type->slug; ?>"></div>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php if($type) echo $type->name; else _e('Unknown', 'latavelha'); ?>
									</a>
								</h3>
							</header>
							<section>
								<?php the_content_rss('...', 0, '', 15); ?>
							</section>
						</div>
					</article>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
<?php endif; ?>
