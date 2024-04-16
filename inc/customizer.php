<?php
function dynamicwp_customize_register($wp_customize){
     
        // Panels 
        $wp_customize->add_panel( 'header_content', array( 
        'title'            => __( ' Dynamicwp Header', ' dynamicwp' ),
        'description'      => __( '' ), 
        'priority'         => 10,   
        ) );
        
        // Sections 
        $wp_customize->add_section('header_section', array(
            'title'    => __('Header Content', ' dynamicwp'),
            'description' => '',
            'priority' => 120,
            'panel' => 'header_content',
        ));   
        
        

        //  =============================
        //  = Html Input  dynamicwp Header Image =
        //  =============================

        // Settings
        $wp_customize->add_setting('header_text', array(
            'default'        => ' HOME PAGE BY MV',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
        ));
        
        // Controls
        $wp_customize->add_control('header_text', array(
            'label'      => __('Text Test', ' dynamicwp'),
            'section'    => 'header_section',
            'settings'   => 'header_text',
            'type'           => 'textarea', 
            
        ));
        


        //  =============================
        //  =Text change              =
        //  =============================
        $wp_customize->add_setting('onlyTextOutput', array(
            'default'           => 'ABC',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',
            'type'           => 'theme_mod',  
        ));
    
        $wp_customize->add_control( "onlyTextOutput", array(
            'label'    => __('change text', 'themename'),
            'section'  => 'header_section',
            'settings' => 'onlyTextOutput',
            'type' => 'text',        
        ));


        //  =============================
        //  = Color Picker              =
        //  =============================
        $wp_customize->add_setting('header_color', array(
            'default'           => '#27ae61',
            'type'           => 'theme_mod',
        ));
      
        $wp_customize->add_control( "header_color", array(
            'label'    => __('Color scheme', 'dynamicwp'),
            'section'  => 'header_section',
            'settings' => 'header_color',
            'type' => 'color',
        ));
  
    
        
        //  =============================
        //  = Radio Input               =
        //  =============================
        $wp_customize->add_setting('header_image_show_hide', array(
            'default'        => 'yes',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
        ));
        
        $wp_customize->add_control('header_image_show_hide', array(
            'label'      => __('Thumbnail Hide Show', 'dynamicwp'),
            'section'    => 'header_section',
            'settings'   => 'header_image_show_hide',
            'type'       => 'radio',
            'choices'    => array(
                'yes' => 'Yes',
                'no' => 'No',
            ),
        ));


        
        //  =============================
        //  = Image Upload              =
        //  =============================
        $wp_customize->add_setting('logo_upload', array(
            'default'           => 'http://dynamicwp/wp-content/uploads/2021/05/dummy-logo.png',
            'capability'        => 'edit_theme_options',
        ));
    
        $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logo_upload', array(
            'label'    => __('STICKY LOGO Upload Test', 'dynamicwp'),
            'section'  => 'header_section',
            'settings' => 'logo_upload',
        )));



}
add_action('customize_register', 'dynamicwp_customize_register');





// for topbar
$topbar_texts = array(
    'sg' => __('Topbar Text for SG', 'justco'),
    'au' => __('Topbar Text for AU', 'justco'),
    'jp' => __('Topbar Text for JP', 'justco'),
    'jp_en' => __('Topbar Text for JP - EN', 'justco'),
    'kr' => __('Topbar Text for KR', 'justco'),
    'kr_en' => __('Topbar Text for KR - EN', 'justco'),
    'th' => __('Topbar Text for TH', 'justco'),
    'th_en' => __('Topbar Text for TH - EN', 'justco'),
    'tw' => __('Topbar Text for TW', 'justco'),
    'tw_en' => __('Topbar Text for TW - EN', 'justco'),
);

foreach ($topbar_texts as $key => $label) {
    $setting_key = 'topbar_text_' . strtolower($key);

    // Add Setting
    $wp_customize->add_setting($setting_key, array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
        'type'              => 'theme_mod',
    ));

    // Add Control
    $wp_customize->add_control($setting_key, array(
        'label'    => $label,
        'section'  => 'topbar_content_section',
        'settings' => $setting_key,
        'type'     => 'textarea',
    ));
}

// added this in customizer


// for dynamically show in frontend
if ($c_lang == "en" && $c_lang != "") {
    $setting_key = 'topbar_text_' . $c_code . '_' . $c_lang;
} else {
    $setting_key = 'topbar_text_' . $c_code;
}
$topBarText = get_theme_mod($setting_key);
echo $topBarText; 






// FASD items add in customizer by loop
//  =============================
//  Topbar links item text
//  =============================
$topbar_texts = array(
    'item_1_icon' => __('Item 1 Icon', 'fasd'), // Add the new field for Item 1 Icon
    'item_1_text' => __('Item 1 Text', 'fasd'),
    'item_1_link' => __('Item 1 Link', 'fasd'),
    'item_2_icon' => __('Item 2 Icon', 'fasd'), // Add the new field for Item 2 Icon
    'item_2_text' => __('Item 2 Text', 'fasd'),
    'item_2_link' => __('Item 2 Link', 'fasd'),
);

foreach ($topbar_texts as $key => $label) {
    $setting_key = 'topbar_text_' . strtolower($key);
    $control_type = (strpos($key, 'icon') !== false) ? 'image' : 'textarea'; // Set control type based on the key containing 'icon'

    // Add Setting
    $wp_customize->add_setting($setting_key, array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
        'type'              => 'theme_mod',
    ));

    // Add Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $setting_key, array(
        'label'    => $label,
        'section'  => 'header_section',
        'settings' => $setting_key,
        'type'     => $control_type, // Use the control type determined above
    )));
}



// for dynamically show in frontend
// Loop through each topbar link item
for ($i = 1; $i <= 2; $i++) {
    $icon_key = 'topbar_text_item_' . $i . '_icon';
    $text_key = 'topbar_text_item_' . $i . '_text';
    $link_key = 'topbar_text_item_' . $i . '_link';

    $icon = get_theme_mod($icon_key);
    $text = get_theme_mod($text_key);
    $link = get_theme_mod($link_key);

    // Check if all required fields are filled
    if (!empty($icon) && !empty($text) && !empty($link)) {
        ?>
        <li>
            <a href="<?php echo esc_url($link); ?>">
                <img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($text); ?>" class="icon">
                <span class="text"><?php echo esc_html($text); ?></span>
            </a>
        </li>
        <?php
    }
}