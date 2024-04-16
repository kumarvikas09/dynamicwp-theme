<?php
//  for header
?>
<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- customizer style file include here -->
    <?php include get_template_directory() . "/inc/customizer-style.php";?>
</head>
	
<body <?php body_class(); ?>>

    <header>
        <div class="container">
            <div class="headerWrap">
                <div class="logoBx">
				
				<a href="<?php echo get_home_url() ?>">
					<?php 
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
						echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="Glass Cage" class="logo gc-logoBrand">';
					?>
				</a>
								
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        
                        //   if logo image does'nt exist call site title and tagline
                        if ( has_custom_logo() ) {
                            the_custom_logo();
                        } else {?>
                            <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
                            <!-- <p><?php bloginfo('description'); ?></p> -->
                        <?php
                        }
                    ?>
                </div>
                <div class="menu-toggle-btn">
                    <div id="nav-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div class="navigationWrap">
                    <?php
                        wp_nav_menu(  array(
                            'menu'              => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                            'menu_class'        => "main-menu", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                            'menu_id'           => "primary-menu", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
                            'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                            'theme_location'    => "primary_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                            'before'               => '<div class="a-Wrap">', // (string) Text before the link text.
                            'after'                => '</div>', // (string) Text after the link text.
                        ) );
                    ?>
                </div>
            </div>
        </div>
    </header>



<!-- Search form -->

<div class="search">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <?php echo get_search_form();?>
            </div>
        </div>
    </div>
</div>
        






        
