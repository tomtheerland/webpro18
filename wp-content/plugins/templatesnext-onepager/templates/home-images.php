<!--images/ads section-->
<?php
$images_title = $images_subtitle = $images_desc = "";

$images_align = esc_attr(get_theme_mod( 'images_align', ''));
if( empty($images_align)) {
	$images_align = 'center';
}
	
$images_title = esc_attr(get_theme_mod( 'images_title', __( '', 'txo' )));
$images_subtitle = esc_attr(get_theme_mod( 'images_subtitle', __( '', 'txo' )));

$images_bg_image = esc_url(get_theme_mod( 'images_bg_image', '' ));
$images_bg_repeat = esc_attr(get_theme_mod( 'images_bg_repeat', 'repeat' ));
$images_bg_attach = esc_attr(get_theme_mod( 'images_bg_attach', 'fixed' ));
$images_bg_size = esc_attr(get_theme_mod( 'images_bg_size', 'auto' ));
$images_bg_position = esc_attr(get_theme_mod( 'images_bg_position', 'left top' ));
$images_bg_color = esc_attr(get_theme_mod( 'images_bg_color', 'rgba(255, 255, 255, 1)' ));
$images_overlay_color = esc_attr(get_theme_mod( 'images_overlay_color', 'rgba(255, 255, 255, 0.0)' ));
$images_fullwidth = esc_attr(get_theme_mod( 'images_fullwidth', 1 ));
$images_style = esc_attr(get_theme_mod( 'images_style', 'folio-style-masonry' ));

$images_title_color = esc_attr(get_theme_mod( 'images_title_color', '#484848' ));
$images_subtitle_color = esc_attr(get_theme_mod( 'images_subtitle_color', '#595959' ));

$images_column = esc_attr(get_theme_mod( 'images_column', '3' ));

$section_style = '';

$section_style .= 'background-image : url('. $images_bg_image . '); ';
$section_style .= 'background-repeat : '. $images_bg_repeat . '; ';
$section_style .= 'background-attachment : '. $images_bg_attach . '; ';
$section_style .= 'background-size : '. $images_bg_size . '; ';
$section_style .= 'background-position : '. $images_bg_position . '; ';
$section_style .= 'background-color : '. $images_bg_color . ';';

$images_top_padding = esc_attr(get_theme_mod( 'images_top_padding', 72 ));
$images_bottom_padding = esc_attr(get_theme_mod( 'images_bottom_padding', 72 ));
$images_shape_seperator = esc_attr(get_theme_mod( 'images_shape_seperator', 'none' ));
$images_ss_color_1 = esc_attr(get_theme_mod( 'images_ss_color_1', '#83b735' ));
$images_ss_color_2 = esc_attr(get_theme_mod( 'images_ss_color_2', '#649f0c' ));

$section_fullwidth = '';

if( $images_fullwidth == 1 )
{
	$section_fullwidth = 'tx-fullwidthrow tx-fwidth';
}

$images_preset = array (
    array(
        'image_title' => 'Aquatic Infrastructure',
        'image_subtitle' => 'Photoshop',
        'image_url' => 'http://www.google.com',
        'image_image' => TX_ONEPAGER_URL . 'images/banners/banners-small-1.jpg',
    ),
    array(
        'image_title' => 'Templates Next Digital Media',
        'image_subtitle' => 'Illustrator',
        'image_url' => 'http://www.google.com',
        'image_image' => TX_ONEPAGER_URL . 'images/banners/banners-small-2.jpg',
    ),
    array(
        'image_title' => 'Jhon & Jenny',
        'image_subtitle' => 'Web Development',
        'image_url' => 'http://www.google.com',
        'image_image' => TX_ONEPAGER_URL . 'images/banners/banners-small-3.jpg',
    ),
);

$images = get_theme_mod('txo_images_v', $images_preset);
$image_loop = "";
$image_no = 0;
$template_dir = TX_ONEPAGER_URL;


foreach( $images as $image ) {
	If ( $image_no <= 8 ) {
		
		$image_title = esc_attr($image['image_title']);
		$image_subtitle = esc_attr($image['image_subtitle']);
		$image_url = esc_url($image['image_url']);
		$image_image = esc_attr($image['image_image']);
		
		if ( false !== strpos( $image_image, $template_dir ) ) {
			$image_image_url = $image_image;
		} else
		{
			$image_image_url = wp_get_attachment_image_src( $image_image, 'full' );
			$image_image_url = $image_image_url[0];
		}
		
		$image_loop .= '<div style="" class="tx-portfolio-item tx-post-col-'.$images_column.'">';
			$image_loop .= '<figure class="snip1321"><img src="'.$image_image_url.'" alt="'.$image_title.'" style="max-width: 100%;" />';
			$image_loop .= '<figcaption><i class="ion-stats-bars"></i>';
			$image_loop .= '<h4>'.$image_subtitle.'</h4>';
			$image_loop .= '<h2>'.$image_title.'</h2>';
			$image_loop .= '</figcaption><a href="'.$image_subtitle.'"></a>';
			$image_loop .= '</figure>';
		$image_loop .= '</div>';
		
		$image_no++;		

	}
}

?>
<section id="images-ads" class="txsec-portfolio txo-section">

	<?php txo_shape_seperator(get_theme_mod( 'images_shape_seperator', 'none' ), $images_ss_color_1, $images_ss_color_2, 1); ?>

    <div class="shortcut-wrap">
        <div class="customizer-shortcut" style="display:none;">
            <span class="editbg"><?php _e( 'Backbround', 'txo' ) ?></span>
            <span class="editoptions"><?php _e( 'Options', 'txo' ) ?></span>
            <span class="editcontent"><?php _e( 'Contents', 'txo' ) ?></span>            
        </div>
		<?php if ( current_user_can( 'customize' ) ) { ?> 
            <div class="customizer-shortcut-admin">
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=images_background' ); ?>" class="editbg"><?php _e( 'Backbround', 'txo' ) ?></a>
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=images_options' ); ?>" class="editoptions"><?php _e( 'Options', 'txo' ) ?></a>
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=images_items' ); ?>" class="editcontent"><?php _e( 'Content', 'txo' ) ?></a>                
            </div>
        <?php }?>
	</div>
    
    <div class="images_inner txo-section-inner txo-align-<?php echo $images_align; ?>">
    
        <div class="tx-row <?php echo $section_fullwidth; ?>" style="">
        <div class="tx-fw-inner" style="<?php echo $section_style; ?>">	
        <div class="tx-fw-overlay" style="background-color: <?php echo $images_overlay_color; ?> ;">        
        <div class="tx-fw-content" style="padding-top: <?php echo $images_top_padding; ?>px; padding-bottom: <?php echo $images_bottom_padding; ?>px;">
            <h2 class="portfolio-title txo-title" style="color: <?php echo $images_title_color; ?>;"><?php echo do_shortcode(htmlspecialchars_decode($images_title)); ?></h2>
            <h3 class="portfolio-subtitle txo-subtitle" style="color: <?php echo $images_subtitle_color; ?>;"><?php echo do_shortcode(htmlspecialchars_decode($images_subtitle)); ?></h3>
            
            <div style="" class="tx-portfolio tx-post-row tx-masonry <?php echo $images_style; ?>">            
				<?php echo $image_loop; ?>
                <div class="clear"></div>
            </div>
            
        	<div class="clear"></div>
        </div>
        </div>
        </div>        
        </div>        
    </div>
</section>
<!--/service section-->

