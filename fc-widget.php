<?php
/****************************************************
			Fortune cookies widget
*****************************************************/

class Fc_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'fc_widget',
			'description' => 'Fortune cookie in a widget',
		);
		parent::__construct( 'fc_widget', 'Fortune Cookie', $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		

		ob_start();

?>

			<div class="fc-widgetfortune-cookie-wrap">
				<div class="fc-widget-fortune-cookie"></div>
				<button class="fc-widget-cookie-generate-button"><?php _e( 'New Fortune Cookie', 'fc' ); ?></button>
			</div>

<?php
	
		$fc_widget = ob_get_clean();

		echo $fc_widget;		

	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}