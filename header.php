<?php
/**
 * The header template
 * 
 * @package WordPress
 * @subpackage Mimmo
 * @since Mimmo 1.0
 */
?>
<?php
    header('X-Frame-Options: GOFORIT'); 
?>
<!DOCTYPE html>
<html <?php language_attributes( ) ?>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-widht, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class();  ?> >

	<?php wp_body_open(); ?>

	<div id="page" class="site">
		<header id="masthead" class="side-header">
			<div id="main-header" class="main-header">
				<div id="title-header" class="title-header">	
					<?php
						if (has_custom_logo()) {?>
								<?php the_custom_logo(); ?>
							</div>
						<?php } ?>	
						<h1><?php bloginfo('name'); ?></h1>

					<?php
	                	if ( has_nav_menu( 'menu-1' )) {
	                ?>
		           <button class="menu-toggle">
                    	<span class="fa fa-bars">
						</span>
                    	<span class="screen-reader-text"><?php
                    	esc_html_e( 'Main Navigation', 'mimmo' );  
                    ?>
                    </span>
                </button>

                </div>
				<div id="navbar" class="navbar">
	                <nav id="site-navigation" class="navigation main-navigation">
	                    <?php
	                    wp_nav_menu(
	                        array(
	                            'theme_location' => 'menu-1',
	                            'menu_class' => 'nav-menu'
	                        )
	                    );
	                    ?>
	                </nav>
	                
	                <?php
	                }
	                ?>

				</div>
			</div>
			
		</header>
		
	