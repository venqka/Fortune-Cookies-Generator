<?php
/****************************************************
	Create Fortune Cookie shortcode
*****************************************************/

function fc_shortcode() {

	ob_start();

?>

		<div class="fortune-cookie-wrap">
			<div class="fortune-cookie"></div>
			<button class="fc-cookie-generate-button"><?php _e( 'New Fortune Cookie', 'fc' ); ?></button>
		</div>

<?php
	
	$fc_shortcode = ob_get_clean();

	return $fc_shortcode;		
}
add_shortcode( 'fortune-cookie', 'fc_shortcode' );