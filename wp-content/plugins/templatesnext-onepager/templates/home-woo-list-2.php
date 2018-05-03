<!--WooCommerce Products section-->
<?php
$woo_list2_title = $woo_list2_subtitle = $woo_list2_linktext = $woo_list2_linkurl = "";

$woo_list2_align = esc_attr(get_theme_mod( 'woolist2_align', ''));
if( empty($woo_list2_align)) {
	$woo_list2_align = 'center';
}

$woo_list2_title = esc_attr(get_theme_mod( 'woolist2_title', __( 'Products On Sale', 'txo' )));
$woo_list2_subtitle = esc_attr(get_theme_mod( 'woolist2_subtitle', __( 'Best Deals Of The Season', 'txo' )));
$woo_list2_linktext = esc_attr(get_theme_mod( 'woolist2_linktext', __( 'View All', 'txo' )));
$woo_list2_linkurl = esc_url(get_theme_mod( 'woolist2_linkurl', 'http://www.templatesnext.in/'));

$woo_list2_bg_image = esc_url(get_theme_mod( 'woolist2_bg_image', '' ));
$woo_list2_bg_repeat = esc_attr(get_theme_mod( 'woolist2_bg_repeat', 'repeat' ));
$woo_list2_bg_attach = esc_attr(get_theme_mod( 'woolist2_bg_attach', 'fixed' ));
$woo_list2_bg_size = esc_attr(get_theme_mod( 'woolist2_bg_size', 'auto' ));
$woo_list2_bg_position = esc_attr(get_theme_mod( 'woolist2_bg_position', 'left top' ));
$woo_list2_bg_color = esc_attr(get_theme_mod( 'woolist2_bg_color', '#FFFFFF' ));
$woo_list2_overlay_color = esc_attr(get_theme_mod( 'woolist2_overlay_color', 'rgba(255, 255, 255, 0.0)' ));
$woo_list2_fullwidth = esc_attr(get_theme_mod( 'woolist2_fullwidth', 1 ));
$woo_list2_placeholder = esc_attr(get_theme_mod( 'woolist2_placeholder', 1 ));
$woo_list2_title_color = esc_attr(get_theme_mod( 'woolist2_title_color', '#484848' ));
$woo_list2_subtitle_color = esc_attr(get_theme_mod( 'woolist2_subtitle_color', '#595959' ));

$woo_list2_type =  esc_attr(get_theme_mod( 'woolist2_type', 'sale_products' ));
$woo_list2_ids =  esc_attr(get_theme_mod( 'woolist2_ids', '' ));
$woo_list2_column = esc_attr(get_theme_mod( 'woolist2_column', '4' ));
$woo_list2_items = esc_attr(get_theme_mod( 'woolist2_items', '4' ));

$woo_list2_top_padding = esc_attr(get_theme_mod( 'woolist2_top_padding', 72 ));
$woo_list2_bottom_padding = esc_attr(get_theme_mod( 'woolist2_bottom_padding', 72 ));
$woo_list2_shape_seperator = esc_attr(get_theme_mod( 'woolist2_shape_seperator', 'none' ));
$woo_list2_ss_color_1 = esc_attr(get_theme_mod( 'woolist2_ss_color_1', '#83b735' ));
$woo_list2_ss_color_2 = esc_attr(get_theme_mod( 'woolist2_ss_color_2', '#649f0c' ));

$section_style = '';

$section_style .= 'background-image : url('. $woo_list2_bg_image . '); ';
$section_style .= 'background-repeat : '. $woo_list2_bg_repeat . '; ';
$section_style .= 'background-attachment : '. $woo_list2_bg_attach . '; ';
$section_style .= 'background-size : '. $woo_list2_bg_size . '; ';
$section_style .= 'background-position : '. $woo_list2_bg_position . '; ';
//$section_style .= 'color : '. $woo_list2_text_color . '; ';
$section_style .= 'background-color : '. $woo_list2_bg_color . ';';


$section_fullwidth = '';

if( $woo_list2_fullwidth == 1 )
{
	$section_fullwidth = 'tx-fullwidthrow tx-fwidth';
}

$list_code = '';

$list_code = '['.$woo_list2_type.' ids="'.$woo_list2_ids.'" per_page="'.$woo_list2_items.'" columns="'.$woo_list2_column.'"]';
?>
<section id="woolist2" class="txsec-woolist2 txo-section">

   	<?php txo_shape_seperator(get_theme_mod( 'woolist2_shape_seperator', 'none' ), $woo_list2_ss_color_1, $woo_list2_ss_color_2, 1); ?>

    <div class="shortcut-wrap">
        <div class="customizer-shortcut" style="display:none;">
            <span class="editbg"><?php _e( 'Backbround', 'txo' ) ?></span>
            <span class="editoptions"><?php _e( 'Options', 'txo' ) ?></span>
        </div>
		<?php if ( current_user_can( 'customize' ) ) { ?> 
            <div class="customizer-shortcut-admin">
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=woolist2_background' ); ?>" class="editbg"><?php _e( 'Backbround', 'txo' ) ?></a>
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=woolist2_options' ); ?>" class="editcontent"><?php _e( 'Options', 'txo' ) ?></a>
            </div>
        <?php }?>
	</div>
    
    <div class="woolist2_inner txo-section-inner txo-align-<?php echo $woo_list2_align; ?>">
    
        <div class="tx-row <?php echo $section_fullwidth; ?>" style="">
            <div class="tx-fw-inner" style="<?php echo $section_style; ?>">	
                <div class="tx-fw-overlay" style="background-color: <?php echo $woo_list2_overlay_color; ?> ;">        
                    <div class="tx-fw-content" style="padding-top: <?php echo $woo_list2_top_padding; ?>px; padding-bottom: <?php echo $woo_list2_bottom_padding; ?>px;">
                        <div class="section-head">
                            <h2 class="woolist2-title txo-title" style="color: <?php echo $woo_list2_title_color; ?>"><?php echo do_shortcode(htmlspecialchars_decode($woo_list2_title)); ?></h2>
                            <h3 class="woolist2-subtitle txo-subtitle" style="color: <?php echo $woo_list2_subtitle_color; ?>"><?php echo do_shortcode(htmlspecialchars_decode($woo_list2_subtitle)); ?></h3>
                        </div>
                        
                        <div class="txo-woo-list">
							<?php echo do_shortcode(htmlspecialchars_decode($list_code)); ?>
                            <div class="clear"></div>
                            <div class="view-all-button">
                            	<a href="<?php echo $woo_list2_linkurl; ?>" class="txo-button"><?php echo $woo_list2_linktext; ?></a>
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

