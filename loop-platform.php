<?php if(have_posts()) : ?>
	<div class="loop platform">
		<ul>
			<?php $i = 0; while(have_posts()) : the_post(); $i++; ?>
				<li class="four columns <?php if($i % 3 === 0) echo 'omega'; elseif(($i-1) % 3 === 0) echo 'alpha'; ?>">
					<?php get_template_part('card', 'platform'); ?>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
<?php endif; ?>