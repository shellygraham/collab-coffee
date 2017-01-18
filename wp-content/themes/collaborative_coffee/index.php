<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package some_like_it_neat
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content">

			<?php
				$blogimg = get_field( "masthead_image-blog", 13 );
				$blogimgmob = get_field( "masthead_image-blog_mobile", 13 );
				$blogsub = get_field( "masthead_subtitle-blog", 13 );
				$blogtext = get_field( "masthead_text-blog", 13 );	
			?>

			<div class="masthead">
				<img class="no-mobile" src="<?php echo $blogimg ?>" alt="Blog Image" />
				<img class="show-mobile" src="<?php echo $blogimgmob ?>" alt="Blog Image" />

				<div class="masthead-container">
					<h1>Blog</h1>
					<div class="masthead-text">
					
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
				<hr />

		<?php
endwhile; ?>

		<?php else : ?>

		<?php get_template_part( 'page-templates/template-parts/content', 'none' ); ?>

		<?php
endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
