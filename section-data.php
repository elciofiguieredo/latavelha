<div id="info-box" class="clearfix">
	<h2><?php _e('Get the data', 'latavelha'); ?></h2>
	<p>Nós acreditamos na transparência e remix da visualização de dados. Essa pesquisa está disponível para download em formatos abertos. Clique no botão ao lado para obter todos os dados sobre plataformas, acidentes e poços utilizadas nessa ferramenta.</p>
	<a class="toggle-download button" href="#"><?php _e('Download', 'latavelha'); ?></a>
	<div class="download-section clearfix">
		<ul class="download-list">
			<li>
				<ul class="download-item clearfix">
					<li class="title"><?php _e('Platforms', 'latavelha'); ?></li>
					<li class="format"><a href="<?php echo get_post_type_archive_link('platform'); ?>?geojson" target="_blank" class="button">geojson</a></li>
					<li class="format"><a href="#" class="button">csv</a></li>
					<li class="format"><a href="<?php echo get_post_type_archive_feed_link('platform'); ?>" class="button">rss</a></li>
				</ul>
				<ul class="download-item clearfix">
					<li class="title"><?php _e('Accidents', 'latavelha'); ?></li>
					<li class="format"><a href="<?php echo get_post_type_archive_link('accident'); ?>?geojson" target="_blank" class="button">geojson</a></li>
					<li class="format"><a href="#" class="button">csv</a></li>
					<li class="format"><a href="<?php echo get_post_type_archive_feed_link('accident'); ?>" class="button">rss</a></li>
				</ul>
				<ul class="download-item clearfix">
					<li class="title"><?php _e('Oil wells', 'latavelha'); ?></li>
					<li class="format"><a href="#" class="button">csv</a></li>
					<li class="format"><a href="#" class="button">rss</a></li>
				</ul>
			</li>
		</ul>
		<a class="fork" href="http://github.com/cardume/latavelha/">Fork us on GitHub</a>
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('#info-box').find('.toggle-download').toggle(function() {
				$('#info-box').find('.download-section').show();
				return false;
			}, function() {
				$('#info-box').find('.download-section').hide();
				return false;
			});
		});
	</script>
</div>