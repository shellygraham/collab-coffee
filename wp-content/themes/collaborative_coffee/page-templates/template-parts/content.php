<?php
/**
 * @package some_like_it_neat
 */
?>

<?php tha_entry_before(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemType="http://schema.org/BlogPosting" >
	<?php tha_entry_top(); ?>
	<header class="entry-header">

		<h2 class="entry-title" itemprop="name" ><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

	<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<span class="genericon genericon-time"></span> <?php some_like_it_neat_posted_on(); ?>
			<span itemprop="dateModified" style="display:none;"><?php printf( __( 'Last modified:', 'some-like-it-neat' ) ); ?> <?php the_modified_date(); ?></span>
		</div><!-- .entry-meta -->
	<?php
endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary" itemprop="description">
	<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content" itemprop="articleBody">
	<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
	<?php
endif; ?>

</article><!-- #post-## -->
<?php tha_entry_after(); ?>
