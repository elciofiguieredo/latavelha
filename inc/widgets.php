<?php
class LataVelha_Related_Platforms_Widget extends WP_Widget {

	function LataVelha_Related_Platforms_Widget() {
		$widget_ops = array('classname' => 'widget_related_platforms', 'description' => __('Related platforms', 'latavelha') );
		$this->WP_Widget('LataVelha_Related_Platforms_Widget', __('Related platforms', 'latavelha'), $widget_ops);
	}

	function widget($args, $instance) {
		extract($args, EXTR_SKIP);

		if(!is_single())
			return;

		global $post;
		$platform_id = get_post_meta($post->ID, 'platform_id', true);

		if(!$platform_id)
			return;

		$post = get_post($platform_id);

		echo $before_widget;

		echo $before_title . __('Related platform', 'latavelha') . $after_title;

		setup_postdata($post);
		get_template_part('card', 'platform');
		wp_reset_postdata();

		echo $after_widget;
	}

}
add_action( 'widgets_init', create_function('', 'return register_widget("LataVelha_Related_Platforms_Widget");') );
?>