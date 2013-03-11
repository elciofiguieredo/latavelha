<?php if(have_posts()) : ?>
	<div class="loop accident details">
		<ul>
			<?php while(have_posts()) : the_post(); ?>
				<li>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header>
							<?php
							$type = latavelha_get_accident_type();
							$date = latavelha_get_accident_date();
							?>
							<div class="icon <?php if($type) echo $type->slug; ?>"></div>
							<h3>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php if($type) echo $type->name; ?>
									<?php if($date) : ?>
										<span class="date"><?php echo $date; ?></span>
									<?php endif; ?>
								</a>
							</h3>
						</header>
						<section>
							<?php the_excerpt(); ?>
						</section>
					</article>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
<?php endif; ?>