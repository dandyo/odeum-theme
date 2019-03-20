<?php
/**
 * Template part for displaying excerpt
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
	<?php		
		the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
		?>
	</header>
	<div>
		<?php
		/* translators: %s: Name of current post */
		the_excerpt();
		?>
	</div>
</article>