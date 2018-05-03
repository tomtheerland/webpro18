<?php
/* All dynamic CSS goes here */

function txo_load_dynamic_style() {

		$txo_style = $txo_color = '';
		
		$txo_color = esc_attr(get_theme_mod('primary_color', ''));
		
		if ( !empty($txo_color) )
		{
			//$txo_style = '#portfolio .portfolio_inner .folio-style-masonry .tx-border-box:hover .folio-head { background-color: '. $txo_color .' ; color: #FFFFFF; }';
			
			$txo_style = '.txo-button, .txo-button-colored { background-color: '. $txo_color .'; border: 1px solid '. $txo_color .';  color: #FFF;}';

			$txo_style .= '.txo-button:hover,.txo-button-colored:hover { background-color: #373737;	border: 1px solid #373737; color: #FFFFFF; }';

			$txo_style .= '.txo-button-rev, .txo-button-colored-rev { border-color: '. $txo_color .';}';

			$txo_style .= '.txo-button-rev:hover, .txo-button-colored-rev:hover { background-color: '. $txo_color .'; border-color: '. $txo_color .';}';
			
		}
        wp_add_inline_style( 'section-style', $txo_style );
}
add_action( 'wp_enqueue_scripts', 'txo_load_dynamic_style' );
