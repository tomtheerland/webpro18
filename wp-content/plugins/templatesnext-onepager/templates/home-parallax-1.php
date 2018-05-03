<!--service section-->
<?php

global $txo_allowed_html;

$parallax1_title = $parallax1_subtitle = $parallax1_desc = "";

$parallax1_align = esc_attr(get_theme_mod( 'parallax1_align', ''));
if( empty($parallax1_align)) {
	$parallax1_align = 'center';
}

$parallax1_title = esc_attr(get_theme_mod( 'parallax1_title', __( 'Our parallax1', 'txo' )));
$parallax1_subtitle = esc_attr(get_theme_mod( 'parallax1_subtitle', __( 'The Next Generation Media Development Company', 'txo' )));

$parallax1_desc = wp_kses(get_theme_mod( 'parallax1_desc', __( 'Phasellus gravida bibendum adipiscing. Cras id rhoncus diam. Praesent pharetra justo sed velit tempus, non pulvinar tortor tempor. Maecenas elementum consequat orci, eget fermentum erat adipiscing porta. Nunc et lorem eu metus', 'txo' )), $txo_allowed_html);

$parallax1_bg_image = esc_url(get_theme_mod( 'parallax1_bg_image', '' ));
$parallax1_bg_repeat = esc_attr(get_theme_mod( 'parallax1_bg_repeat', 'repeat' ));
$parallax1_bg_attach = esc_attr(get_theme_mod( 'parallax1_bg_attach', 'fixed' ));
$parallax1_bg_size = esc_attr(get_theme_mod( 'parallax1_bg_size', 'auto' ));
$parallax1_bg_position = esc_attr(get_theme_mod( 'parallax1_bg_position', 'left top' ));
$parallax1_bg_color = esc_attr(get_theme_mod( 'parallax1_bg_color', 'rgb(236, 236, 236)' ));
$parallax1_overlay_color = esc_attr(get_theme_mod( 'parallax1_overlay_color', 'rgba(255, 255, 255, 0.5)' ));
$parallax1_fullwidth = esc_attr(get_theme_mod( 'parallax1_fullwidth', 1 ));
$parallax1_parallax = esc_attr(get_theme_mod( 'parallax1_parallax', 0 ));

$section_style = '';

if( $parallax1_parallax == 0 ) {
	$section_style .= 'background-image : url('. $parallax1_bg_image . '); ';
}
$section_style .= 'background-repeat : '. $parallax1_bg_repeat . '; ';
$section_style .= 'background-attachment : '. $parallax1_bg_attach . '; ';
$section_style .= 'background-size : '. $parallax1_bg_size . '; ';
$section_style .= 'background-position : '. $parallax1_bg_position . '; ';
$section_style .= 'background-color : '. $parallax1_bg_color . ';';

$parallax1_title_color = esc_attr(get_theme_mod( 'parallax1_title_color', '#484848' ));
$parallax1_subtitle_color = esc_attr(get_theme_mod( 'parallax1_subtitle_color', '#595959' ));
$parallax1_text_color = esc_attr(get_theme_mod( 'parallax1_text_color', '#646464' ));

$parallax1_top_padding = esc_attr(get_theme_mod( 'parallax1_top_padding', 72 ));
$parallax1_bottom_padding = esc_attr(get_theme_mod( 'parallax1_bottom_padding', 72 ));
$parallax1_shape_seperator = esc_attr(get_theme_mod( 'parallax1_shape_seperator', 'none' ));
$parallax1_ss_color_1 = esc_attr(get_theme_mod( 'parallax1_ss_color_1', '#83b735' ));
$parallax1_ss_color_2 = esc_attr(get_theme_mod( 'parallax1_ss_color_2', '#649f0c' ));

$section_fullwidth = '';

if( $parallax1_fullwidth == 1 )
{
	$section_fullwidth = 'tx-fullwidthrow tx-fwidth';
}

?>
<section id="parallax1" class="txsec-parallax1 txo-section">
	<?php txo_shape_seperator(get_theme_mod( 'parallax1_shape_seperator', 'none' ), $parallax1_ss_color_1, $parallax1_ss_color_2, 1); ?>
    <div class="shortcut-wrap">
        <div class="customizer-shortcut" style="display:none;">
            <span class="editoptions"><?php _e( 'Edit Section', 'txo' ) ?></span>
        </div>
		<?php if ( current_user_can( 'customize' ) ) { ?> 
            <div class="customizer-shortcut-admin">
                <a href="<?php echo admin_url( 'customize.php?autofocus[panel]=parallax1' ); ?>" class="editoptions"><?php _e( 'Edit Section', 'txo' ) ?></a>
            </div>
        <?php }?>
	</div>
    
    <div class="parallax1_inner txo-section-inner txo-align-<?php echo $parallax1_align; ?>">
        <div class="tx-row <?php echo $section_fullwidth; ?>" style="">
    	<?php if( $parallax1_parallax == 0 ) { ?>        
        	<div class="tx-fw-inner" style="<?php echo $section_style; ?>">	
            <div class="tx-fw-overlay" style="background-color: <?php echo $parallax1_overlay_color; ?> ;"> 
        <?php } else { ?>
        	<div class="tx-fw-inner parallax-container" style="background-image : url('<?php echo $parallax1_bg_image; ?>');">	
            <div class="tx-fw-overlay" style="background: transparent;" data-z-index="1" data-overlay="<?php echo $parallax1_overlay_color; ?>"> 
        <?php }?>        
               
                <div class="tx-fw-content" style="color: <?php echo $parallax1_text_color; ?>; padding-top: <?php echo $parallax1_top_padding; ?>px; padding-bottom: <?php echo $parallax1_bottom_padding; ?>px;">
                    <h2 class="parallax1-title txo-title" style="color: <?php echo $parallax1_title_color; ?>;"><?php echo do_shortcode(htmlspecialchars_decode($parallax1_title)); ?></h2>
                    <h3 class="parallax1-subtitle txo-subtitle" style="color: <?php echo $parallax1_subtitle_color; ?>;"><?php echo do_shortcode(htmlspecialchars_decode($parallax1_subtitle)); ?></h3>
                    
                    <!-- parallax1 -->
                    <div class="about-desc"><?php echo do_shortcode(htmlspecialchars_decode($parallax1_desc)); ?></div>
                    <!-- /parallax1 -->
                    
                    <div class="clear"></div>
                </div>
        	</div>
        	</div>        
        </div>        
    </div>
</section>
<!--/service section-->

