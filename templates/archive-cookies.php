<?php
/****************************************************
		Fortune cookies archive tamplate
*****************************************************/

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php

				// The Loop
				if ( have_posts() ) {
					echo '<hr/>';
					while ( have_posts() ) {
						the_post();

						$fc_cookie_url = get_the_permalink();
						$fc_cookie_title = get_the_title();

						$fc_facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $fc_cookie_url;
						$fc_twitter_url = 'https://twitter.com/intent/tweet?text='. $fc_cookie_title . '&amp;url=' . $fc_cookie_url . '&amp;via=venqka';
						$fc_google_url = 'https://plus.google.com/share?url=' . $fc_cookie_url;
						$fc_linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $fc_cookie_url . '&amp;title=' . $fc_cookie_title;

						$fc_categories = get_the_terms( get_the_ID(), 'fortune-cookie-category' );
						$fc_tags = get_the_terms( get_the_ID(), 'fortune-cookies-tags' );

						echo '<div class="fc-archive-cookie-wrap">';
						if( !empty( $fc_categories ) ) {
							echo 'Categories:';
							foreach ( $fc_categories as $fc_category ) {

								$fc_home_url = home_url();
								$fc_category_url = $fc_home_url . '/fortune-cookie-category/' . $fc_category->slug;

								echo '<div class="fc-category"><a href="' . $fc_category_url . '">' . $fc_category->name . '</a></div>';  	
							}
						}	

						if( !empty( $fc_tags ) ) {
							echo '<div> Tags: ';
							foreach ( $fc_tags as $fc_tag ) {

								$fc_home_url = home_url();
								$fc_tag_url = $fc_home_url . '/fortune-cookies-tags/' . $fc_tag->slug;

								echo '<a href="' . $fc_tag_url . '">' . $fc_tag->name . '</a>, ';  	
							}
							echo '</div>';
						}	
				?>
						<div class="fc-template-cookie-content">		  
							<?php the_content(); ?> 
						<!--</div>
						<div class="fc-share">-->
							<a href="<?php echo $fc_facebook_url; ?>" class="fa fa-facebook"></a>
							<a href="<?php echo $fc_facebook_url; ?>" class="fa fa-twitter"></a>
							<a href="<?php echo $fc_facebook_url; ?>" class="fa fa-google"></a>
							<a href="<?php echo $fc_linkedin_url; ?>" class="fa fa-linkedin"></a>
						</div>
						</div><!--fc-archive-cookie-wrap-->
						<br/>
						<hr/>
			<?php
					}
				}	
			?>			

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
