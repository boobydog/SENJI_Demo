<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

 // Remove Credit
function storefront_child_remove_credit() {
	remove_action( 'storefront_footer', 'storefront_credit', 20 );
}

?>
		</div><!-- .col-full -->
	</div><!-- #content -->

<script type="text/javascript">
window.addEventListener("scroll", function () {
  const elm = document.querySelector(".gotopagetop");
  const scroll = window.pageYOffset;
  if (scroll > 300) {
    elm.style.opacity = "1";
    elm.style.zIndex = "1";
    // console.log(scroll);
  } else {
    elm.style.opacity = "0";
    elm.style.zIndex = "-1";
    // console.log(scroll);
  }
});
	
</script>

<div class="gotopagetop">
<a href="#" id="gotopagetop"><img src="/wp-content/uploads/2024/04/cheveron-up.png"></a>
</div>



	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">
			
						<div class="footer-icon-container">
				<div class="footer-icon-div">
				<a href="https://www.instagram.com/senji_ooo/" target="_blank"><img src="/wp-content/uploads/2024/03/icons_instagram.png" alt=""></a>
				<a href="https://twitter.com/senji_ooo" target="_blank"><img src="/wp-content/uploads/2024/04/icon-x.png" alt=""></a>
					</div>
				</div>
		
			<div class="site-info">© SENJI2026</div>
			<div class="privacy"><a href="https://senji-ooo.com/?page_id=14" target="_blank">Privacy Policy & Disclaimer</a></div>
			

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
