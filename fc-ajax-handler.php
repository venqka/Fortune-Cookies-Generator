<?php
/****************************************************
	Receive and handle ajax request.
	Returns random fortune cookie.
*****************************************************/

function fc_random_cookie() {

	$fc_ajax_nonce = $_POST['nonce'];
	 
	check_ajax_referer( 'ajax-nonce', 'nonce' );

	$fc_query_args = array(
		'post_type'			=>	'fortune-cookie', 
		'posts_per_page'	=>	1, 
		'orderby'			=>	'rand'
	);
	$fc_query = NEW WP_Query( $fc_query_args );

	// The Loop
	if ( $fc_query->have_posts() ) {
		while ( $fc_query->have_posts() ) {
			$fc_query->the_post();

			$fc_cookie_url = get_the_permalink();
			$fc_cookie_title = get_the_title();

			$fc_facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $fc_cookie_url;
			$fc_twitter_url = 'https://twitter.com/intent/tweet?text='. $fc_cookie_title . '&amp;url=' . $fc_cookie_url . '&amp;via=venqka';
			$fc_google_url = 'https://plus.google.com/share?url=' . $fc_cookie_url;
			$fc_linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $fc_cookie_url . '&amp;title=' . $fc_cookie_title;
 
?>

			
			
			<?php the_content(); ?>
			<div class="fc-share">
				<a href="<?php echo $fc_facebook_url; ?>" class="fa fa-facebook"></a>
				<a href="<?php echo $fc_twitter_url; ?>" class="fa fa-twitter"></a>
				<a href="<?php echo $fc_google_url; ?>" class="fa fa-google"></a>
				<a href="<?php echo $fc_linkedin_url; ?>" class="fa fa-linkedin"></a>
			</div>	
			
<?php
		}
	}
	die();	
}
add_action( 'wp_ajax_nopriv_get_fortune_cookie', 'fc_random_cookie' );
add_action( 'wp_ajax_get_fortune_cookie', 'fc_random_cookie' );