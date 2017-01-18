<?php
/**
 * Template Name: Blog
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content">

			<div class="masthead">
				<?php get_the_post_thumbnail($post->ID); ?>
				<div class="masthead-container">
					<h1>Blog</h1>
					<div class="masthead-text">
						<?php
							$blogsub = get_field( "masthead_subtitle-blog", 13 );
							$blogtext = get_field( "masthead_text-blog", 13 );	
						?>					
						<h4><?php echo $blogsub ?></h4>
						<?php echo $blogtext ?>
					</div>
				</div>
			</div>

		<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'page-templates/template-parts/content', get_post_format() );
				?>

		<?php
endwhile; ?>

		<?php else : ?>

		<?php get_template_part( 'page-templates/template-parts/content', 'none' ); ?>

		<?php
endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>