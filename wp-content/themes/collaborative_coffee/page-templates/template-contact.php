<?php
/**
 * Template Name: Contact
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
		<img class="no-mobile" src="<?php the_field('contact_masthead_image'); ?>" alt="Contact image" />
		<img class="show-mobile" src="<?php the_field('contact_masthead_image_mobile'); ?>" alt="Contact image" />		<div class="masthead-container">
			<h1><?php the_title(); ?></h1>
			<div class="masthead-text">
				<h4><?php the_field('masthead_subtitle-contact'); ?></h4>
				<?php the_field('masthead_text-contact'); ?>
			</div>
		</div>
	</div>
		
	<div class="left-block">
		<h2>General Inquiries</h2>
		<h3><?php the_field('general_contact_name'); ?></h3>
		<a href="tel:<?php the_field('general_contact_email'); ?>"><?php the_field('general_contact_email'); ?></a>

		<h2>Our Headquarters</h2>
		<h3><?php the_field('hq_address'); ?></h3>
		<a href="<?php the_field('hq_email'); ?>"><?php the_field('hq_email'); ?></a>

	</div>

	<div class="middle-block">
		<h2>Press And Media</h2>
		<h3><?php the_field('press_contact_name'); ?></h3>
		<a href="<?php the_field('press_contact_email'); ?>"><?php the_field('press_contact_email'); ?></a>

	</div>

	<div class="right-block">
		<h2>New Business</h2>
		<h3><?php the_field('business_contact_name'); ?></h3>
		<a class="no-lead" href="mailto:<?php the_field('business_contact_email'); ?>"><?php the_field('business_contact_email'); ?></a>		
		<a href="tel:<?php the_field('business_contact_phone'); ?>"><?php the_field('business_contact_phone'); ?></a>		
<!--
		<h2>Follow Us</h2>
		<ul>
		<?php if( have_rows('social_links') ):
			while ( have_rows('social_links') ) : the_row(); ?>
			<li>
				<a href="<?php the_sub_field('social_link_url'); ?>"><?php the_sub_field('social_link_icon'); ?></a>
			</li>
			<?php endwhile;
		endif; ?>
		</ul>
-->
	</div>


	<?php endwhile; // end of the loop. ?>

</div><!-- #primary -->

<?php get_footer(); ?>
