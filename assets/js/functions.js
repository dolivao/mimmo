/**
 * Functionality specific to Mimmo
 *
 * @package Mimmo
 * @since Mimmo 1.0
 */

( function( $ ) {
	/* Show/Hide effect site navigation */
	$( '.menu-toggle' ).click( function () {
		$( this ).toggleClass( 'open' );
		$( this ).next( '#site-navigation' ).slideToggle( 'slow' );
	} );
} )( jQuery );
