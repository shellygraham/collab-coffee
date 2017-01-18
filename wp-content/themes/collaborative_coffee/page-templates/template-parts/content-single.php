<?php
/**
 * @package some_like_it_neat
 */
?>
<?php tha_entry_before(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemType="http://schema.org/BlogPosting">
	<?php tha_entry_top(); ?>
	<header class="entry-header">
		<h1 class="entry-title" itemprop="name" ><?php the_title(); ?></h1>

		<div class="entry-meta">

			<span class="genericon genericon-time"></span> <?php some_like_it_neat_posted_on(); ?>

		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="articleBody" >

	<?php the_content(); ?>

	</div><!-- .entry-content -->

	<?php tha_entry_bottom(); ?>
</article><!-- #post-## -->
<?php tha_entry_after(); ?>
