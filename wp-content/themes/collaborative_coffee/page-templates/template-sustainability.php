<?php
/**
 * Template Name: Sustainability
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

<div id="primary" class="content-area">

	<?php while ( have_posts() ) : the_post(); ?>

	<div class="masthead">
		<img class="no-mobile" src="<?php the_field('sustainability_image'); ?>" alt="Sustainability image" />
		<img class="show-mobile" src="<?php the_field('sustainability_image_mobile'); ?>" alt="Sustainability image" />
		<div class="masthead-container">
			<h1><?php the_title(); ?></h1>
			<div class="masthead-text">
				<h4><?php the_field('masthead_subtitle'); ?></h4>
				<?php the_field('masthead_text'); ?>
			</div>
		</div>
	</div>
		
	<div class="left-block">
		<img class="sub-logo" src="<?php the_field('ethics_logo2'); ?>" width="" height="" alt="" />
		<h4><?php the_field('leadin_title'); ?></h4>
		
		<?php the_field('leadin_text'); ?>
		
		<?php if( have_rows('pdf_links') ):
			while ( have_rows('pdf_links') ) : the_row(); ?>
				<a class="pdf-link" href="<?php the_sub_field('pdf_doc_link'); ?>"><?php the_sub_field('pdf_link_title'); ?> <span>Download Here>></span></a>
			<?php endwhile;
		endif; ?>	
	</div>

	<div class="right-block">
		<h2><span><?php echo count( get_field('ol_copy') ); ?></span> Principles of Sustainability</h2>
		<ol>
		<?php if( have_rows('ol_copy') ):
			while ( have_rows('ol_copy') ) : the_row(); ?>
			<li>
				<h4><?php the_sub_field('ol_header'); ?></h4>
				<?php the_sub_field('ol_text'); ?>
			</li>
			<?php endwhile;
		endif; ?>

		</ol>
	</div>


	<?php endwhile; // end of the loop. ?>

</div><!-- #primary -->

<?php get_footer(); ?>