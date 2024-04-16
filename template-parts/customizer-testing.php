<?php 

/* Template Name: Customizer Testing */ 


get_header();
?>


<!-- Radio switch Demo -->

<?php $headerImage = get_theme_mod( "header_image_show_hide", "yes" )?>
    <?php if($headerImage == "yes"): ?>

        <!-- Header Image START-->
            <div id="site-header">
                <div class="header-image">
                    <img alt="header-img" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
                </div> 


                <!-- output will HTML -->
                <?php echo wp_kses_post(get_theme_mod( 'header_text')); ?> 
            </div>
        <!-- Header Image END-->
    
    <?php endif; ?>
            
            

<!-- output will Normal Text -->
<?php echo get_theme_mod( 'onlyTextOutput', 'ABC'); ?> 



<!-- output will Sticky Logo Image means image upload option -->
<img src="<?php echo get_theme_mod( 'logo_upload', 'http://dynamicwp/wp-content/uploads/2021/05/dummy-logo.png'); ?> " alt="sticky-logo">




<?php if ( true == get_theme_mod( 'switch_setting_id', true ) ) : ?>
	<p>Switch is ON</p>
<?php else : ?>
	<p>Switch is OFF</p>
<?php endif; ?>


<!-- customizer text input output -->
<?php echo get_theme_mod( 'text_setting_id', 'This is a default value' ); ?>



<!-- customizer text input output -->
<?php $icon = get_theme_mod( 'dashicons_setting', 'menu' ); ?>
<span class="dashicons dashicons-<?php echo esc_attr( $icon ); ?>"></span>




<!-- customizer Custom controls allow you to add raw HTML in a control. Mostly used for informative controls, expanatory headers etc, but you can use it for whatever you want.z -->
<?php echo get_theme_mod( 'custom_setting', 'This is a default value' ); ?>


<!-- checkbox usage kirki -->
<?php if ( true == get_theme_mod( 'checkbox_setting', true ) ) : ?>
	<p>Checkbox is checked</p>
<?php else : ?>
	<p>Checkbox is unchecked</p>
<?php endif; ?>


<!-- class add base on checkbox check -->
<?php $value = get_theme_mod( 'checkbox_setting', true ); ?>
<div class="<?php echo ( $value ) ? 'bg-primary' : 'bg-danger'; ?>">
	If the checkbox is checked, the class will have a class "checkbox-on".
	If the checkbox is unchecked, the class will have a class "checkbox-off".
</div>




<!--KIRKI  Using the code control your users can enter custom CSS, JS, HTML (and others) which you can then use however you please in your themes. Internally this control uses the CodeMirror library available in WordPress. -->
<?php echo get_theme_mod( 'code_setting', '' ); ?>


<!-- editor output using kirki -->
<?php echo get_theme_mod( 'editor_setting', '' ); ?>


<!-- editor output using kirki -->
<?php echo get_theme_mod( 'generic_custom_setting', '' ); ?>



<!-- Link control using kirki -->
<a href=" <?php echo get_theme_mod( 'link_setting', '' ); ?> ">LINK CONTROL USING KIRKI</a>



<?php get_footer();?>