<?php
/**
 * The search template
 * 
 * @package WordPress
 * @subpackage Mimmo
 * @since Mimmo 1.0
 */
get_header(); ?>

<main id="main" class="site-main">
    <div class="search-form">
        <?php get_search_form(); ?>
    </div>
    <section id="primary" class="content-area">
   

        <?php 
        if ( have_posts() ) : ?>
           <header class="page-header">
				<?php
				printf(
					/* translators: 1: search result title. 2: search term. */
					'<h2 class="page-title">%1$s <span class="page-description search-term">%2$s</span></h2>',
					__( 'Search results for:', 'mimmo' ),
					get_search_query()
				);
				?>
			</header><!-- .page-header -->
            <div class="articles">
            <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                    <div class="entry-data">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="entry-thumbnail">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                            </div>
                        <?php endif; ?>
                        <div class="entry-summary">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>

                </article>
        <?php 
            endwhile; 
            
            else :
                get_template_part( 'template-parts/content', 'none');
            endif; ?>
        </div>
    </section>
    
</main>

<?php 
get_footer();
