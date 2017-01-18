<?php
/**
 * Template Name: Region/Product LP
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

		<div id="block2" style="width: 100%; height: 500px; z-index: 1; background: url(<?php bloginfo(template_url) ?>/assets/img/cc_homepage_header.jpg) center center no-repeat;" >
		  <!--data-vide-bg="mp4: /wp-content/themes/collaborative_coffee/assets/video/collaborative_v4, webm: /wp-content/themes/collaborative_coffee/assets/video/collaborative_v4, ogv: /wp-content/themes/collaborative_coffee/assets/video/collaborative_v4, poster: /wp-content/themes/collaborative_coffee/assets/video/collaborative2"
		  data-vide-options="position: 0% 50%"-->
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
		
	<div class="left-block">
		<h1 style="color: #<?php the_field('title_color'); ?>"><?php the_title(); ?></h1>
		<img src="<?php the_field('origin_main_image'); ?>" alt="" />
		<h4>Origin</h4>
		<p><?php the_field('origin_description'); ?> <a href="<?php the_field('origin_description_link'); ?>">Learn more about the origin >></a></p>
		<div class="grid-row">
			<div class="left-column">
				<img src="<?php the_field('how_we_collaborate_image'); ?>" alt="" />
				<h4>How We Collaborate</h4>
				<p><?php the_field('how_we_collaborate'); ?></p>
			</div>
			<div class="right-column">
				<img src="<?php the_field('why_it_matters_image'); ?>" alt="" />
				<h4>Why it Matters</h4>
				<p><?php the_field('why_it_matters'); ?></p>
			</div>
		</div>	
		<div class="grid-row">
			<div class="left-column">
				<img src="<?php the_field('lorem_ipsum_image'); ?>" alt="" />
				<p><?php the_field('lorem_ipsum'); ?></p>		
			</div>				
			<div class="right-column">	
				<img src="<?php the_field('farm_description_image'); ?>" alt="" />
				<p><?php the_field('farm_description'); ?></p>
			</div>	
		</div>
	</div>

	<div class="right-block">
		<?php the_post_thumbnail(); ?>
		<div class="tech-info" style="background:url('<?php the_field('country_background_image'); ?>') no-repeat;background-size: contain;">
			<h4>Technical Information</h4>
			<?php the_field('technical_information'); ?>
			<h4>Product Notes</h4>
			<p><?php the_field('product_notes'); ?></p>
			<h4>Tasting Profile</h4>
			<?php the_field('tasting_profile'); ?>
			<p style="text-align: center;"><img class="sub-logo" src="<?php the_field('ethics_logo'); ?>" width="216" height="64" alt="" /></p>
		</div>
	</div>


	<?php endwhile; // end of the loop. ?>

</div><!-- #primary -->

<?php get_footer(); ?>
