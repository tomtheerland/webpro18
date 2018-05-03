<!--WooCommerce Products section-->
<?php
$woo_list_title = $woo_list_subtitle = $woo_list_linktext = $woo_list_linkurl = "";

$woo_list_align = esc_attr(get_theme_mod( 'woolist1_align', ''));
if( empty($woo_list_align)) {
	$woo_list_align = 'center';
}

$woo_list_title = esc_attr(get_theme_mod( 'woolist1_title', __( 'Recent Products', 'txo' )));
$woo_list_subtitle = esc_attr(get_theme_mod( 'woolist1_subtitle', __( 'Best Deals Of The Season', 'txo' )));
$woo_list_linktext = esc_attr(get_theme_mod( 'woolist1_linktext', __( 'View All', 'txo' )));
$woo_list_linkurl = esc_url(get_theme_mod( 'woolist1_linkurl', 'http://www.templatesnext.in/'));

$woo_list_bg_image = esc_url(get_theme_mod( 'woolist1_bg_image', '' ));
$woo_list_bg_repeat = esc_attr(get_theme_mod( 'woolist1_bg_repeat', 'repeat' ));
$woo_list_bg_attach = esc_attr(get_theme_mod( 'woolist1_bg_attach', 'fixed' ));
$woo_list_bg_size = esc_attr(get_theme_mod( 'woolist1_bg_size', 'auto' ));
$woo_list_bg_position = esc_attr(get_theme_mod( 'woolist1_bg_position', 'left top' ));
$woo_list_bg_color = esc_attr(get_theme_mod( 'woolist1_bg_color', '#FFFFFF' ));
$woo_list_overlay_color = esc_attr(get_theme_mod( 'woolist1_overlay_color', 'rgba(255, 255, 255, 0.0)' ));
$woo_list_fullwidth = esc_attr(get_theme_mod( 'woolist1_fullwidth', 1 ));
$woo_list_placeholder = esc_attr(get_theme_mod( 'woolist1_placeholder', 1 ));
$woo_list_title_color = esc_attr(get_theme_mod( 'woolist1_title_color', '#484848' ));
$woo_list_subtitle_color = esc_attr(get_theme_mod( 'woolist1_subtitle_color', '#595959' ));

$woo_list_type =  esc_attr(get_theme_mod( 'woolist1_type', 'recent_products' ));
$woo_list_ids =  esc_attr(get_theme_mod( 'woolist1_ids', '' ));
$woo_list_column = esc_attr(get_theme_mod( 'woolist1_column', '4' ));
$woo_list_items = esc_attr(get_theme_mod( 'woolist1_items', '4' ));

$woo_list_top_padding = esc_attr(get_theme_mod( 'woolist1_top_padding', 72 ));
$woo_list_bottom_padding = esc_attr(get_theme_mod( 'woolist1_bottom_padding', 72 ));
$woo_list_shape_seperator = esc_attr(get_theme_mod( 'woolist1_shape_seperator', 'none' ));
$woo_list_ss_color_1 = esc_attr(get_theme_mod( 'woolist1_ss_color_1', '#83b735' ));
$woo_list_ss_color_2 = esc_attr(get_theme_mod( 'woolist1_ss_color_2', '#649f0c' ));

$section_style = '';

$section_style .= 'background-image : url('. $woo_list_bg_image . '); ';
$section_style .= 'background-repeat : '. $woo_list_bg_repeat . '; ';
$section_style .= 'background-attachment : '. $woo_list_bg_attach . '; ';
$section_style .= 'background-size : '. $woo_list_bg_size . '; ';
$section_style .= 'background-position : '. $woo_list_bg_position . '; ';
//$section_style .= 'color : '. $woo_list_text_color . '; ';
$section_style .= 'background-color : '. $woo_list_bg_color . ';';


$section_fullwidth = '';

if( $woo_list_fullwidth == 1 )
{
	$section_fullwidth = 'tx-fullwidthrow tx-fwidth';
}

$list_code = '';

$list_code = '['.$woo_list_type.' ids="'.$woo_list_ids.'" per_page="'.$woo_list_items.'" columns="'.$woo_list_column.'"]';
?>
<section id="woolist1" class="txsec-woolist1 txo-section">

   	<?php txo_shape_seperator(get_theme_mod( 'woolist1_shape_seperator', 'none' ), $woo_list_ss_color_1, $woo_list_ss_color_2, 1); ?>

    <div class="shortcut-wrap">
        <div class="customizer-shortcut" style="display:none;">
            <span class="editbg"><?php _e( 'Backbround', 'txo' ) ?></span>
            <span class="editoptions"><?php _e( 'Options', 'txo' ) ?></span>
        </div>
		<?php if ( current_user_can( 'customize' ) ) { ?> 
            <div class="customizer-shortcut-admin">
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=woolist1_background' ); ?>" class="editbg"><?php _e( 'Backbround', 'txo' ) ?></a>
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=woolist1_options' ); ?>" class="editcontent"><?php _e( 'Options', 'txo' ) ?></a>
            </div>
        <?php }?>
	</div>
    
    <div class="woolist1_inner txo-section-inner txo-align-<?php echo $woo_list_align; ?>">
    
        <div class="tx-row <?php echo $section_fullwidth; ?>" style="">
            <div class="tx-fw-inner" style="<?php echo $section_style; ?>">	
                <div class="tx-fw-overlay" style="background-color: <?php echo $woo_list_overlay_color; ?> ;">        
                    <div class="tx-fw-content" style="padding-top: <?php echo $woo_list_top_padding; ?>px; padding-bottom: <?php echo $woo_list_bottom_padding; ?>px;">
                        <div class="section-head">
                            <h2 class="woolist1-title txo-title" style="color: <?php echo $woo_list_title_color; ?>"><?php echo do_shortcode(htmlspecialchars_decode($woo_list_title)); ?></h2>
                            <h3 class="woolist1-subtitle txo-subtitle" style="color: <?php echo $woo_list_subtitle_color; ?>"><?php echo do_shortcode(htmlspecialchars_decode($woo_list_subtitle)); ?></h3>
                        </div>
                        
                        <div class="txo-woo-list">
							<?php echo do_shortcode(htmlspecialchars_decode($list_code)); ?>
                            <div class="clear"></div>
                            <div class="view-all-button">
                            	<a href="<?php echo $woo_list_linkurl; ?>" class="txo-button"><?php echo $woo_list_linktext; ?></a>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>        
        </div>        
    </div>
</section>
<!--/snlog section-->

