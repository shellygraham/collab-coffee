<?php
/**
 * Template Name: Collaborators
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of farms and that other 'farms' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

<div id="primary" class="content-area">

	<?php while ( have_posts() ) : the_post(); ?>

	<div class="map-container">
		<div class="map-content">
			<h1><?php the_title(); ?></h1>
			<h4><?php the_field('map_subtitle'); ?></h4>
			<p><?php the_field('map_text'); ?></p>
		</div>
		<div class="map-holder">
			<?php the_post_thumbnail(); ?>
	<?php
		$farms = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_title', 'sort_order' => 'asc' ) );
			foreach( $farms as $farm ) {	?>
				<a class="node <?php the_field('node_link', $farm); ?>" href="#<?php the_field('node_link', $farm); ?>"><?php the_field('farm_name', $farm); ?></a>
				<a href="#<?php the_field('node_link', $farm); ?>">
						<div class="node-popout <?php the_field('node_link', $farm); ?>">
						<h3><?php the_field('farm_name', $farm); ?>, <span><?php the_field('farm_country', $farm); ?></span></h3>
					<img class="grid" src="<?php the_field('node_image', $farm); ?>" />
					</div>
				</a>
			<?php } ?>
		</div>
	</div>

	<?php endwhile; // end of the loop. ?>
<div class="farm-wrapper">	

	<?php
		$farms = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_title', 'sort_order' => 'asc' ) );
			foreach( $farms as $farm ) {	?>

	<div class="farm-container <?php the_field('farm_country', $farm); ?>" id="<?php the_field('node_link', $farm); ?>">
		<div class="title-bar">
			<h2><?php the_field('farm_name', $farm); ?><span><?php the_field('farm_country', $farm); ?></span></h2>
			<nav id="secondary-nav" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
				    <ul data-breakpoint=" 768 " class="flexnav">
					    <li>
					    	<a href="#farm-124">Colombia</a>
					    </li>
						<li>
							<a href="#farm-82">El Salvador</a>
						</li>
						<li>
							<a href="#farm-128">Nicaragua</a>
						</li>
						<li>
							<a href="#farm-133">Peru</a>
						</li>
						<li>
							<a href="#farm-144">Portland</a>
						</li>
						<li>
							<a href="#farm-139">Rwanda</a>
						</li>
					</ul>
			</nav><!-- #site-navigation -->
		</div>
		
		
		<div class="left-block">
			<h4><?php the_field('farm_subtitle', $farm); ?></h4>
			<?php the_field('farm_description', $farm); ?>
		</div>
		<div class="right-block">
			<img class="grid" src="<?php the_field('farm_main_image', $farm); ?>" />			
			<div class="image-grid">
				<?php if( have_rows('farm_images', $farm) ):
					while ( have_rows('farm_images', $farm) ) : the_row(); ?>
						
						<img src="<?php the_sub_field('another_farm_image', $farm); ?>" />
				
					<?php endwhile;
				endif; ?>
			</div>
		</div>
		
	</div>
	
	<?php } ?>
</div>
<!--
		<?php if( have_rows('repeater', 123) ): ?>

		    <ul>
		
		    <?php while( have_rows('repeater', 123) ): the_row(); ?>
		
		        <li><?php the_sub_field('title'); ?></li>
		
		    <?php endwhile; ?>
		
		    </ul>
		
		<?php endif; ?>
-->


</div><!-- #primary -->

<?php get_footer(); ?>
