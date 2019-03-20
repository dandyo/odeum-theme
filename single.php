<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>
<?php
	if ( have_posts() ) :

		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/post/content', get_post_format() );

			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			
		endwhile;

	else :

		get_template_part( 'template-parts/post/content', 'none' );

	endif;
?>
<?php get_footer();