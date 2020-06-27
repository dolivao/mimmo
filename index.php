<?php
/**
 * The main template
 * 
 * @package WordPress
 * @subpackage Mimmo
 * @since Mimmo 1.0
 */

get_header();?>
<main>
<?php
	if ( have_posts() ) :
	    while ( have_posts() ) : the_post(); ?>

	        <article class="hentry">
	            <?php the_post_thumbnail(); ?>
	            <?php the_title( sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink())), '</a></h2>'); ?>
	            <div class="entry-summary">
	            <?php the_excerpt(); ?>
	            </div>
	        </article>

	<?php endwhile;

	endif; ?>
</main>
<?php get_footer(); ?>   

