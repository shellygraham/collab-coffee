<?php
/**
 * Template Name: Blends Product LP
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

<div id="primary" class="content-area">

	<?php while ( have_posts() ) : the_post(); ?>

	<div class="video-container">

		<div id="block2" style="width: 100%; height: 500px; z-index: 1;"
		  data-vide-bg="mp4: /wp-content/themes/collaborative_coffee/assets/video/collaborative2, webm: /wp-content/themes/collaborative_coffee/assets/video/collaborative2, ogv: /wp-content/themes/collaborative_coffee/assets/video/collaborative2, poster: /wp-content/themes/collaborative_coffee/assets/video/collaborative2"
		  data-vide-options="position: 0% 50%">
            <div class="content full-height">
                <div class="headline">
<!--                     <h2><?php the_field('product_video_text'); ?></h2> -->
                </div>
            </div>
		</div>		
		<div id="mobile-banner">
<!-- 			<img src="<?php bloginfo('url'); ?>/wp-content/themes/collaborative_coffee/assets/video/collaborative2.jpg" alt="Mobile banner image" /> -->
		</div>
		
		<nav id="secondary-nav" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
			<button class="menu-button second">
				<?php echo get_theme_mod( 'some_like_it_neat_mobile_nav_label', 'Blends' ); ?>
			</button>
	        <?php
				wp_nav_menu(
					array(
						'menu' => 'product-menu',
						'menu_class' => 'flexnav', //Adding the class for FlexNav
						'items_wrap' => '<ul data-breakpoint=" '. esc_attr( get_theme_mod( 'some_like_it_neat_mobile_min_width', '768' ) ) .' " id="%1$s" class="%2$s">%3$s</ul>', // Adding data-breakpoint for FlexNav
					)
				);
			?>

		</nav><!-- #site-navigation -->
	</div>
		
	<h1 style="color: #<?php the_field('title_color'); ?>"><?php the_title(); ?></h1>	
		
	<div class="left-block-blends">
		<img src="<?php the_field('blend_bag1'); ?>" alt="" />
		<div class="tech-info" style="background:url('<?php the_field('country_background_image1'); ?>') no-repeat;background-size: contain;">
			<h4>Technical Information</h4>
			<?php the_field('technical_information1'); ?>
			<h4>Product Notes</h4>
			<p><?php the_field('product_notes1'); ?></p>
			<h4>Tasting Profile</h4>
			<?php the_field('tasting_profile1'); ?>
			<p style="text-align: center;"><img class="sub-logo" src="<?php the_field('ethics_logo'); ?>" width="216" height="64" alt="" /></p>
			<img class="blend-origin" src="<?php the_field('origin_main_image1'); ?>" alt="" />
			<h4>French Roast Origin</h4>
			<p><?php the_field('origin_description1'); ?> <a href="<?php the_field('origin_description_link1'); ?>">Learn more about the origin >></a></p>
		</div>
	</div>

	<div class="right-block">
		<img src="<?php the_field('blend_bag2'); ?>" alt="" />
		<div class="tech-info" style="background:url('<?php the_field('country_background_image2'); ?>') no-repeat;background-size: contain;">
			<h4>Technical Information</h4>
			<?php the_field('technical_information2'); ?>
			<h4>Product Notes</h4>
			<p><?php the_field('product_notes2'); ?></p>
			<h4>Tasting Profile</h4>
			<?php the_field('tasting_profile2'); ?>
			<p style="text-align: center;"><img class="sub-logo" src="<?php the_field('ethics_logo'); ?>" width="216" height="64" alt="" /></p>
			<img class="blend-origin" src="<?php the_field('origin_main_image2'); ?>" alt="" />
			<h4>House Blend Origin</h4>
			<p><?php the_field('origin_description2'); ?> <a href="<?php the_field('origin_description_link2'); ?>">Learn more about the origin >></a></p>
	</div>


	<?php endwhile; // end of the loop. ?>

</div><!-- #primary -->

<?php get_footer(); ?>
