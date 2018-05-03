<?php


function txo_cleanup_shortcode_fix($content) {   
	$array = array (
    	'<p>[' => '[', 
        ']</p>' => ']', 
        ']<br />' => ']',
        ']<br>' => ']'
    );
    $content = strtr($content, $array);
    return $content;
}
add_filter('the_content', 'txo_cleanup_shortcode_fix', 10);
		
/*
* Theme color shortcode
*/

function txo_themecolor_function($atts, $content = null) {
	
   	$atts = shortcode_atts(array(
      	'class' => '',
   	), $atts);
	
	$return_string ='';

   	$return_string .= '<span class="'.esc_attr($atts['class']).' themecolor">';
	$return_string .= do_shortcode($content);
   	$return_string .= '</span>';

   	return $return_string;
}

function txo_color_function($atts, $content = null) {
	
   	$atts = shortcode_atts(array(
      	'color' => '',		
      	'class' => '',
   	), $atts);
	
	$return_string ='';

   	$return_string .= '<span class="'.esc_attr($atts['class']).'" style="color:'.esc_attr($atts['color']).'">';
	$return_string .= do_shortcode($content);
   	$return_string .= '</span>';

   	return $return_string;
}

// row

function txo_row_function($atts, $content = null) {
	
   	$atts = shortcode_atts(array(
      	'class' => '',
   	), $atts);
	
	$content = txo_cleanup_shortcode_fix($content);
	
	$return_string ='';

   	$return_string .= '<div class="tx-row txofied-row '.$atts['class'].'">';
	$return_string .= do_shortcode($content);
   	$return_string .= '</div>';

   	return $return_string;
}


// columns

function txo_column_function($atts, $content = null) {
	
   	$atts = shortcode_atts(array(
      	'size' => '1/4',
		'class' => '',
   	), $atts);
	
	$return_string ='';
	$column_class = 'tx-column-size-';
	
	if ( $atts['size'] == '1/1' ) 
	{
		$column_class .= '1-1';
	} elseif ( $atts['size'] == '1/2' )
	{
		$column_class .= '1-2';
	} elseif ( $atts['size'] == '1/3' )
	{
		$column_class .= '1-3';
	} elseif ($atts['size'] == '1/4' )
	{
		$column_class .= '1-4';
	} elseif ($atts['size'] == '2/3' )
	{
		$column_class .= '2-3';
	} elseif ($atts['size'] == '3/4' )
	{
		$column_class .= '3-4';
	}
	
	$content = txo_cleanup_shortcode_fix($content);
	
   	$return_string .= '<div class="tx-column ' .$column_class. '">';
	$return_string .= do_shortcode($content);
   	$return_string .= '</div>';

   	return $return_string;
}

function txo_spacer_function($atts, $content = null) {
	
   	$atts = shortcode_atts(array(
      	'class' => '',
		'size' => '16',
   	), $atts);
	
	$return_string ='';

   	$return_string .= '<div class="tx-spacer clearfix" style="height: '.esc_attr($atts['size']).'px"></div>';

   	return $return_string;
}


function txo_register_shortcodes(){
	add_shortcode('txo_themecolor', 'txo_themecolor_function');
	add_shortcode('txo_color', 'txo_color_function');
	add_shortcode('txo_row', 'txo_row_function');
	add_shortcode('txo_column', 'txo_column_function');	
	add_shortcode('txo_spacer', 'txo_spacer_function');			
}
add_action( 'init', 'txo_register_shortcodes');