<?php
/**
 * Template part for displaying posts
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
		?>
	</header>
	<?php
	/* translators: %s: Name of current post */
	the_content( sprintf(
		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
		get_the_title()
	) );
	?>
</article><!-- #post-## -->
