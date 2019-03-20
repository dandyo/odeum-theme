<?php
/**
 * The main template file
 */

get_header(); ?>
<?php
	if ( have_posts() ) :

		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/post/content', 'excerpt' );
			
		endwhile;

	else :

		get_template_part( 'template-parts/post/content', 'none' );

	endif;
?>
<?php get_footer();