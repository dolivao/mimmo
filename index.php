<?php
/**
 * The main template
 * 
 * @package WordPress
 * @subpackage Mimmo
 * @since Mimmo 1.0
 */

get_header();?>

<main id="main" class="site-main">
	<div class="search-form">
        <?php get_search_form(); ?>
    </div>
<div class="articles">
<?php
	if ( have_posts() ) :
	    while ( have_posts() ) : the_post(); ?>

	        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	            <?php the_title( sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink())), '</a></h2>'); ?>

	             <?php if ( has_post_thumbnail() ) : ?>
                        <div class="entry-thumbnail">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail' ); ?></a>
                        </div>
                 <?php endif; ?>

	            <div class="entry-summary">
	            <?php the_excerpt(); ?>
	            </div>

	        </article>

	<?php endwhile;

	endif; ?>
</div>
</main>
<?php get_footer(); ?>   

