<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package some_like_it_neat
 */
?>
		<?php tha_content_bottom(); ?>

		</main><!-- #main -->

		<?php tha_content_after(); ?>

	</div><!-- .wrap -->

</div><!-- #page -->

	<?php tha_footer_before(); ?>

	<footer id="colophon" class="site-footer wrap" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
		<div class="footer-border"></div>
		<div class="footer-content">
			<div class="deco-left"></div>
	
		<?php tha_footer_top(); ?>
	
			<section class="site-info">
	
				<h6>&copy; 2016 FARMER BROS. CO. All Rights Reserved.</h6>
	
			</section><!-- .site-info -->
			<div class="deco-right"></div>
		</div>
	</footer><!-- #colophon -->

	<?php tha_footer_after(); ?>
	
<?php tha_body_bottom(); ?>

<?php wp_footer(); ?>

</body>
</html>
