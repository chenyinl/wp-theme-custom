<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
<style>
footer .copyright, p.text, p.links {
    font-size: 13.6px;
    font-family: MyriadProRegular, Arial, Helvetica, sans-serif, Calibri;
    color: rgb(255, 255, 255) !important;
    line-height: 17.68px;
	list-style-image: none;
	list-style-position: outside;
	list-style-type: none;
	margin-bottom: 15px;
	margin-left: 0px;
	margin-right: 0px;
	margin-top: 0px;
}

.site-footer a{
	color: rgb(255, 255, 255) !important;
}
	footer#colophon, .sidebar-container {
		background: #0e2546 url(http://cloudurl.com/templates/universe/images/bluetexture.png) left top repeat !important;
		width: 100%;
		clear: both;
		font-size: 1.7em;
		color: #fff;
	}
</style>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
				<div class="copyright">
					<p class="text">Copyright © 2015 - Cloud URL, Inc. - All rights reserved.</p>
				</div>
				<!--<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a>-->
			
				<p class="links">
					<a href="http://cloudurl.com/terms-of-service.php">Terms Of Service</a> |
					<a href="http://cloudurl.com/acceptable-usage-policy.php">Acceptable Usage Policy</a> |	
					<a href="http://cloudurl.com/privacy-policy.php">Privacy Policy</a>			
				</p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
	<?php wp_footer(); ?>
</body>
</html>