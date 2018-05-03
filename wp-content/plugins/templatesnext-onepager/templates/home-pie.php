<!--pie section-->
<?php
$pie_sec_title = $pie_subtitle = $pie_desc = "";

$pie_align = esc_attr(get_theme_mod( 'pie_align', ''));
if( empty($pie_align)) {
	$pie_align = 'center';
}

$pie_sec_title = esc_attr(get_theme_mod( 'pie_title', __( 'Our pie', 'txo' )));
$pie_subtitle = esc_attr(get_theme_mod( 'pie_subtitle', __( 'The Next Generation Media Development Company', 'txo' )));
$pie_columns = esc_attr(get_theme_mod( 'pie_columns', 4));


$pie_bg_image = esc_url(get_theme_mod( 'pie_bg_image', '' ));
$pie_bg_repeat = esc_attr(get_theme_mod( 'pie_bg_repeat', 'repeat' ));
$pie_bg_attach = esc_attr(get_theme_mod( 'pie_bg_attach', 'fixed' ));
$pie_bg_size = esc_attr(get_theme_mod( 'pie_bg_size', 'auto' ));
$pie_bg_position = esc_attr(get_theme_mod( 'pie_bg_position', 'left top' ));
$pie_text_color = esc_attr(get_theme_mod( 'pie_text_color', '#373737' ));
$pie_bg_color = esc_attr(get_theme_mod( 'pie_bg_color', 'rgba(255, 255, 255, 1)' ));
$pie_overlay_color = esc_attr(get_theme_mod( 'pie_overlay_color', 'rgba(255, 255, 255, 0.5)' ));
$pie_fullwidth = esc_attr(get_theme_mod( 'pie_fullwidth', 1 ));

$pie_title_color = esc_attr(get_theme_mod( 'pie_title_color', '#484848' ));
$pie_subtitle_color = esc_attr(get_theme_mod( 'pie_subtitle_color', '#595959' ));


$pie_top_padding = esc_attr(get_theme_mod( 'pie_top_padding', 72 ));
$pie_bottom_padding = esc_attr(get_theme_mod( 'pie_bottom_padding', 72 ));
$pie_shape_seperator = esc_attr(get_theme_mod( 'pie_shape_seperator', 'none' ));
$pie_ss_color_1 = esc_attr(get_theme_mod( 'pie_ss_color_1', '#83b735' ));
$pie_ss_color_2 = esc_attr(get_theme_mod( 'pie_ss_color_2', '#649f0c' ));

$section_style = '';

$section_style .= 'background-image : url('. $pie_bg_image . '); ';
$section_style .= 'background-repeat : '. $pie_bg_repeat . '; ';
$section_style .= 'background-attachment : '. $pie_bg_attach . '; ';
$section_style .= 'background-size : '. $pie_bg_size . '; ';
$section_style .= 'background-position : '. $pie_bg_position . '; ';
//$section_style .= 'color : '. $pie_text_color . '; ';
$section_style .= 'background-color : '. $pie_bg_color . ';';


$section_fullwidth = '';

if( $pie_fullwidth == 1 )
{
	$section_fullwidth = 'tx-fullwidthrow tx-fwidth';
}


$pie_preset = array (
			array(
				'pie_title'	=> __( 'Pie Chart Title', 'txo' ),
				'pie_percent' 	=> 72,
				'pie_color' 	=> '#dd9933',
				'pie_track_color'  => 'rgba(125,125,125,0.2)',
				'pie_width'	=> 7,
				'pie_size' => 120,				
				'pie_desc' 	=> __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'txo' ),
			),
			array(
				'pie_title'	=> __( 'Pie Chart Title', 'txo' ),
				'pie_percent' 	=> 64,
				'pie_color' 	=> '#dd9933',
				'pie_track_color'  => 'rgba(125,125,125,0.2)',
				'pie_width'	=> 7,
				'pie_size' => 120,				
				'pie_desc' 	=> __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'txo' ),
			),
			array(
				'pie_title'	=> __( 'Pie Chart Title', 'txo' ),
				'pie_percent' 	=> 88,
				'pie_color' 	=> '#dd9933',
				'pie_track_color'  => 'rgba(125,125,125,0.2)',
				'pie_width'	=> 7,
				'pie_size' => 120,				
				'pie_desc' 	=> __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'txo' ),
			),
			array(
				'pie_title'	=> __( 'Pie Chart Title', 'txo' ),
				'pie_percent' 	=> 56,
				'pie_color' 	=> '#dd9933',
				'pie_track_color'  => 'rgba(125,125,125,0.2)',
				'pie_width'	=> 7,
				'pie_size' => 120,				
				'pie_desc' 	=> __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'txo' ),
			),
);	

$charts = get_theme_mod('txo_pie', $pie_preset);
$chart_loop = "";
$chart_no = 1;
$template_dir = TX_ONEPAGER_URL;

foreach( $charts as $chart ) {
	If ( $chart_no <= 4 ) {
		
		$pie_title = esc_attr($chart['pie_title']);
		$pie_percent = (esc_attr($chart['pie_percent']))/100;
		$pie_color = esc_attr($chart['pie_color']);
		$pie_track_color = esc_attr($chart['pie_track_color']);
		$pie_width = esc_attr($chart['pie_width']);
		$pie_size = esc_attr($chart['pie_size']);
		$pie_desc = esc_attr($chart['pie_desc']);
		
		$chart_loop .= '<div class="tx-team-item">';
    		$chart_loop .= '<div class="tx-team-box">';
			
				$chart_loop .= '<div class="txo-pie" data-value="'.$pie_percent.'" data-size="'.$pie_size.'" data-thickness="'.$pie_width.'" data-fill="{ &quot;color&quot;: &quot;'.$pie_color.'&quot; }" data-empty-fill="'.$pie_track_color.'" style=""></div>';
        		$chart_loop .= '<div class="tx-pie-head" style="margin-top: -'.($pie_size+8).'px; line-height: '.($pie_size).'px;">';
                	$chart_loop .= '<div class="tx-pie-chart">';
						if( $pie_align == 'left' || $pie_align == 'right' ) {
                			$chart_loop .= '<span class="txo-pie-percent" style="font-size: '.($pie_size/5).'px; display: block; width: '.$pie_size.'px; text-align: center; ">'.$pie_percent.'%</span>';							
						} else {
                			$chart_loop .= '<span class="txo-pie-percent" style="font-size: '.($pie_size/5).'px; display: block;">'.$pie_percent.'%</span>';							
						}
                	$chart_loop .= '</div>';
            	$chart_loop .= '</div>';
            	$chart_loop .= '<div class="tx-pie-content">';
            		$chart_loop .= '<div class="tx-pie-content-inner" style="">';
                		$chart_loop .= '<h3 class="">'.$pie_title.'</h3>';
                    	$chart_loop .= '<div class="desc" style="color: '.$pie_text_color.';">'.$pie_desc.'</div>';
                	$chart_loop .= '</div>';
            	$chart_loop .= '</div>';      
    		$chart_loop .= '</div>';
    	$chart_loop .= '</div>';
		
		
		
		$chart_no++;
	}
}

	
?>
<section id="pie" class="txsec-pie txo-section">
	<?php txo_shape_seperator(get_theme_mod( 'pie_shape_seperator', 'none' ), $pie_ss_color_1, $pie_ss_color_2, 1); ?>
    <div class="shortcut-wrap">
        <div class="customizer-shortcut" style="display:none;">
            <span class="editoptions"><?php _e( 'Edit Section', 'txo' ) ?></span>
        </div>
		<?php if ( current_user_can( 'customize' ) ) { ?> 
            <div class="customizer-shortcut-admin">
                <a href="<?php echo admin_url( 'customize.php?autofocus[panel]=pie' ); ?>" class="editoptions"><?php _e( 'Edit Section', 'txo' ) ?></a>
            </div>
        <?php }?>
	</div>
    
    <div class="pie_inner txo-section-inner txo-align-<?php echo $pie_align; ?>">
    
        <div class="tx-row <?php echo $section_fullwidth; ?>" style="">
        <div class="tx-fw-inner" style="<?php echo $section_style; ?>">	
        <div class="tx-fw-overlay" style="background-color: <?php echo $pie_overlay_color; ?> ;">        
        <div class="tx-fw-content" style="color: <?php echo $pie_text_color; ?>; padding-top: <?php echo $pie_top_padding; ?>px; padding-bottom: <?php echo $pie_bottom_padding; ?>px;">
            <h2 class="testimonials-title txo-title" style="color: <?php echo $pie_title_color; ?>"><?php echo do_shortcode(htmlspecialchars_decode($pie_sec_title)); ?></h2>
            <h3 class="testimonials-subtitle txo-subtitle" style="color: <?php echo $pie_subtitle_color; ?>"><?php echo do_shortcode(htmlspecialchars_decode($pie_subtitle)); ?></h3>
            
                <div class="tx-team tx-<?php echo $pie_columns; ?>-column-team">
                
                    <?php echo $chart_loop; ?>    
                                
                </div>               
            
        	<div class="clear"></div>
        </div>
        </div>
        </div>        
        </div>        
    </div>
</section>
<!--/pie section-->

