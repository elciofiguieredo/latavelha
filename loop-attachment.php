<?php
$args = array(
	'post_type' => 'attachment',
	'numberposts' => -1,
	'post_status' => 'any',
	'post_parent' => $post->ID
);
$attachments = get_posts($args);
if($attachments) : ?>
	<ul id="post-<?php the_ID(); ?>-attachments" class="loop attachments">
		<?php foreach($attachments as $attachment) :
			$src = wp_get_attachment_link($attachment->ID, 'medium');
			?>
			<li class="media">
				<?php echo $src; ?>
			</li>
		<?php endforeach; ?>
	</ul>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			var $container = $('#post-<?php the_ID(); ?>-attachments');
			$container.imagesLoaded(function() {
				$container.isotope({
					itemSelector: '.media',
					layoutMode: 'masonry'
				});
			});
		});
	</script>
<?php endif; ?>