<?php
/**
 * Title: footer
 * Slug: dev-assessment/footer
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"30px"}}}} -->
	<div class="wp-block-group" style="padding-top:80px;padding-bottom:30px">
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Proudly Powered by %1$sWordPress%2$s', 'dev-assessment' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
