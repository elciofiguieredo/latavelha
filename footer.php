<footer id="site-footer">
	<div class="container">
		<div class="eight columns">
			<?php
			/*
			<nav class="footer-links">
				<?php wp_nav_menu(); ?>
			</nav>
			*/
			get_template_part('section', 'data');
			?>
		</div>
		<div class="three columns offset-by-one">
			<div class="credits">
				<p class="greenpeace">
					<?php _e('project', 'latavelha'); ?>
					<a href="http://greenpeace.org.br/" target="_blank" rel="external" title="Greenpeace Brasil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/greenpeace2.png" alt="Greenpeace Brasil" /></a>
				</p>
				<p class="cardume">
					<?php _e('design and website', 'latavelha'); ?>
					<a href="http://cardume.art.br/" target="_blank" rel="external" title="Cardume"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardume.jpg" alt="Cardume" /></a>
				</p>
			</div>
			<p class="small-credits"><?php _e('some icons by', 'latavelha'); ?> <a href="http://www.entypo.com/" rel="external" target="_blank">Entypo</a></p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>