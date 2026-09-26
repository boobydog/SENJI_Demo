<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">
			
						<div class="footer-icon-container">
				<div class="footer-icon-div">
				<a href="http://localhost:8000/"><img src="/wp-content/uploads/2024/03/icons_instagram.png" alt=""></a>
				<a href="http://localhost:8000/"><img src="/wp-content/uploads/2024/03/icons_twitter.png" alt=""></a>
					</div>
				</div>
			<div class="site-info">© SENJI 2024</div>

 			<?php 
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
// 			do_action( 'storefront_footer' );
			?> 

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
