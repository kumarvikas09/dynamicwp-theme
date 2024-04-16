<?php

// added kirki.php from plugin folder using functions.php
// added kirki-config.php for configuration kirki using functions.php

// kirki config file


//dynamicwp_options is your all field's theme config id


Kirki::add_config( 'dynamicwp_options', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );


// kirki panel start here
// kirki panel start here
// kirki panel start here

Kirki::add_panel( 'kirki_dynamicwp_options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Kirki background Panel', 'kirki' ),
    'description' => esc_html__( 'My panel description', 'kirki' ),
) );




// kirki section start here
// kirki section start here
// kirki section start here

Kirki::add_section( 'kirki_dynamicwp_section', array(
    'title'          => esc_html__( 'Kirki background Section', 'kirki' ),
    'description'    => esc_html__( 'My section description.', 'kirki' ),
    'panel'          => 'kirki_dynamicwp_options',
    'priority'       => 160,	
	'icon'     => 'dashicons-editor-spellcheck',	
) );

    
    
// kirki setings start here
// kirki setings start here
// kirki setings start here
    
Kirki::add_field( 'dynamicwp_options', [
	'type'        => 'background',
	'settings'    => 'background_setting',
	'label'       => esc_html__( 'Header Background Control', 'kirki' ),
	'description' => esc_html__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'kirki' ),
	'section'     => 'kirki_dynamicwp_section',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'your element',
		],
    ],
] );
	


// kirki setings start here
// kirki setings start here
// kirki setings start here

Kirki::add_field( 'dynamicwp_options', [
	'type'        => 'background',
	'settings'    => 'menu_active_background_setting',
	'label'       => esc_html__( 'Menu Active and Hover', 'kirki' ),
	'description' => esc_html__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'kirki' ),
	'section'     => 'kirki_dynamicwp_section',
	'default'     => [
		'background-color'      => '#000',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'your element, your element 2, your element 3',
		],
	],
] );



// kirki setings start here
// kirki setings start here
// kirki setings start here

Kirki::add_field( 'dynamicwp_options', [
	'type'        => 'typography',
	'settings'    => 'typography_setting',
	'label'       => esc_html__( 'Control Label', 'kirki' ),
	'section'     => 'kirki_dynamicwp_section',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left',
	],
    'choices' => [
        'fonts' => [
            'standard' => [
                'Georgia,Times,"Times New Roman",serif',
                'Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
            ],
        ],
    ],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'your element',
		],
	],
] );


add_filter( 'kirki_telemetry', '__return_false' );




// kirki setings start here
// kirki setings start here
// kirki setings start here

Kirki::add_field( 'dynamicwp_options', [
	'type'        => 'switch',
	'settings'    => 'switch_setting_id',
	'label'       => esc_html__( 'Switch', 'kirki' ),
	'section'     => 'kirki_dynamicwp_section',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'kirki' ),
		'off' => esc_html__( 'Disable', 'kirki' ),
	],
] );




// kirki setings start here
// kirki setings start here
// kirki setings start here

Kirki::add_field( 'dynamicwp_options', [
	'type'     => 'text',
	'settings' => 'text_setting_id',
	'label'    => esc_html__( 'Text Control', 'kirki' ),
	'section'  => 'kirki_dynamicwp_section',
	'default'  => esc_html__( 'This is a default value', 'kirki' ),
	'priority' => 10,
] );


// kirki setings start here
// kirki setings start here
// kirki setings start here

Kirki::add_field( 'dynamicwp_options', [
	'type'     => 'textarea',
	'settings' => 'textarea_setting_id',
	'label'    => esc_html__( 'Text Control', 'kirki' ),
	'section'  => 'kirki_dynamicwp_section',
	'default'  => esc_html__( 'This is a default value', 'kirki' ),
	'priority' => 10,
] );



// kirki setings start here
// kirki setings start here
// kirki setings start here



Kirki::add_field( 'dynamicwp_options', [
	'type'     => 'dashicons',
	'settings' => 'dashicons_setting',
	'label'    => esc_html__( 'Dashicons Control', 'kirki' ),
	'section'  => 'kirki_dynamicwp_section',
	'default'  => 'menu',
	'priority' => 10,
] );


// kirki setings start here
// kirki setings start here
// kirki setings start here

Kirki::add_field( 'dynamicwp_options', [
	'type'        => 'custom',
	'settings'    => 'custom_setting',
	// 'label'       => esc_html__( 'This is the label', 'kirki' ), // optional
	'section'     => 'kirki_dynamicwp_section',
		'default'         => '<h3 style="padding:15px 10px; background:#fff; margin:0;">' . __( 'Headline', 'kirki' ) . '</h3>',
	'priority'    => 10,
] );



// kirki setings start here
// kirki setings start here
// kirki setings start here

Kirki::add_field( 'dynamicwp_options', [
	'type'        => 'checkbox',
	'settings'    => 'checkbox_setting',
	'label'       => esc_html__( 'Checkbox Control', 'kirki' ),
	'description' => esc_html__( 'Description', 'kirki' ),
	'section'     => 'kirki_dynamicwp_section',
	'default'     => true,
] );


// kirki setings start here
// kirki setings start here
// kirki setings start here

Kirki::add_field( 'dynamicwp_options', [
	'type'        => 'code',
	'settings'    => 'code_setting',
	'label'       => esc_html__( 'Code Control', 'kirki' ),
	'description' => esc_html__( 'Description', 'kirki' ),
	'section'     => 'kirki_dynamicwp_section',
	'default'     => '',
	'choices'     => [
		'language' => 'css',
	],
] );


// kirki setings start here
// kirki setings start here
// kirki setings start here

Kirki::add_field( 'dynamicwp_options', [
	'type'        => 'editor',
	'settings'    => 'editor_setting',
	'label'       => esc_html__( 'My Editor Control', 'kirki' ),
	'description' => esc_html__( 'This is an editor control.', 'kirki' ),
	'section'     => 'kirki_dynamicwp_section',
	'default'     => '',
] );



// kirki setings start here
// kirki setings start here
// kirki setings start here

Kirki::add_field( 'dynamicwp_options', [
	'type'        => 'generic',
	'settings'    => 'generic_custom_setting',
	'label'       => esc_html__( 'Custom input Control.', 'kirki' ),
	'description' => esc_html__( 'The "generic" control allows you to add any input type you want. In this case we use type="password" and define custom styles.', 'kirki' ),
	'section'     => 'kirki_dynamicwp_section',
	'default'     => '',
	'choices'     => [
		'element'  => 'input',
		'type'     => 'text',
		'style'    => 'background-color:black;color:red;',
		'data-foo' => 'bar',
	],
] );



// kirki setings start here
// kirki setings start here
// kirki setings start here

Kirki::add_field( 'dynamicwp_options', [
	'type'     => 'link',
	'settings' => 'link_setting',
	'label'    => __( 'Link Control', 'kirki' ),
	'section'  => 'kirki_dynamicwp_section',
	'default'  => 'https://mapsteps.com/',
	'priority' => 10,
] );