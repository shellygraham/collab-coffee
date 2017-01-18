<?php
/**
 * Template Name: Farm Page
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

<div id="primary" class="content-area">

	<?php while ( have_posts() ) : the_post(); ?>
		
	<div class="left-block">
		<h1><?php the_title(); ?></h1>
		<h5><?php the_field('farm_country'); ?></h5>
		<h4><?php the_field('farm_subtitle'); ?></h4>
		<?php the_field('farm_description'); ?></p>
	</div>

	<div class="right-block">
		<?php the_post_thumbnail(); ?>	
		<?php if( have_rows('farm_images') ):
			while ( have_rows('farm_images') ) : the_row(); ?>
			
			<div class="left-block">
			
			<?php the_sub_field('another_farm_image'); ?>
	
			</div>
			
			<?php endwhile;
		endif; ?>
	</div>


	<?php endwhile; // end of the loop. ?>

</div><!-- #primary -->

<?php get_footer(); ?>
