<?php
/**
 * Template for displaying the search forms
 *
 * @package Mimmo
 * @since Mimmo 1.0
 */

?>
	
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-wrapper">
		<label for="s" class="screen-reader-text"><span><?php esc_html_e( 'Search', 'newsroom' ); ?></span></label>
		<input type="search" class="field" name="s" id="s" autocomplete="off" placeholder="<?php esc_html_e( 'Search...', 'mimmo' ); ?>" />
		<button type="submit" class="submit" name="submit" id="searchsubmit"><span class="screen-reader-text"><?php esc_html_e( 'Search', 'newsroom' ); ?></span><span class="input-icon fa fa-search"></span></button>
		</div>
	</form>
	