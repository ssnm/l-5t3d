<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "listedco_options";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Listed Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Listed Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );


    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        //$args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        //$args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    //$args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

Redux::setSection( $opt_name, array(
    'title'  => __( 'General Settings', 'redux-framework-demo' ),
    'id'     => 'opt_general_settings',
    'fields' => array(
        array(
            'id'       => 'site-logo',
            'type'     => 'media',
            'url' => true,
            'title'    => __( 'Site Logo', 'redux-framework-demo' )
        ),
		array(
            'id'       => 'site-logo-trans',
            'type'     => 'media',
            'url' => true,
            'title'    => __( 'Site Logo (Transparent)', 'redux-framework-demo' )
        ),
		array(
            'id'       => 'site-favicon',
            'type'     => 'media',
            'url' => true,
            'title'    => __( 'Site Favicon (32x32)', 'redux-framework-demo' )
        ),
        array(
            'id'               => 'lm-google-map-key',
            'type'             => 'text',
            'desc'             => 'Required for displaying Car location map',
            'title'            => __('Google Map Key', 'redux-framework-demo'),
        ),
 				array(
            'id'               => 'car-tax-percent',
            'type'             => 'text',
            'desc'             => 'This will affect the price of cars individually. And the tax included price will be shown in payment page',
            'title'            => __('Car tax amount (in %)', 'redux-framework-demo'),
        ),
    )
) );

    // -> START Home page settings
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Home Page', 'redux-framework-demo' ),
        'id'     => 'basic',
        'desc'   => __( 'Basic field with no subsections.', 'redux-framework-demo' ),
        'icon'   => 'el el-home',
    ) );


    Redux::setSection( $opt_name, array(
        'title'      => __( 'Car Hero Area', 'redux-framework-demo' ),
       // 'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/text/" target="_blank">//docs.reduxframework.com/core/fields/text/</a>',
        'id'         => 'opt-text-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'home-slider-title',
                'type'     => 'textarea',
                'title'    => __( 'Hero area title', 'redux-framework-demo' ),
                'subtitle' => __( 'Support HTML', 'redux-framework-demo' ),
                'default'  => 'Every car is hand-inspected.<br>Hand-wrapped. And<a href="#"> hand-delivered.</a>',
            ),
            array(
                'id'       => 'home-slider-main-image',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Hero Image', 'redux-framework-demo'),
                'subtitle' => __('Upload a car image using the WordPress native uploader', 'redux-framework-demo'),
                'default'  => array(
                    'url' => get_bloginfo('stylesheet_directory').'/images/auto_1800.jpg'
                )
            )
        )
    ));

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Home page intro video', 'redux-framework-demo' ),
        'desc'       => 'Please upload all the 3 formats (<strong>.mp4</strong>, <strong>.ogv</strong>, <strong>.webm</strong>) of the video',
        'id'         => 'opt-textarea-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'        => 'hero-video-mp4',
                'type'      => 'media',
                'url'      => true,
                'mode'     => false,
                'title'     => 'Enter .mp4 file URL',
                'subtitle'  => 'Full location URL',
                'default'  => array(
                    'url' => get_bloginfo('stylesheet_directory').'/videos/Intro.mp4'
                )
            ),
            array(
                'id'       => 'hero-video-ogv',
                'type'     => 'media',
                'url'      => true,
                'mode'     => false,
                'title'    => __( 'Enter .ogv file URL', 'redux-framework-demo' ),
                'subtitle' => __( 'Full location URL', 'redux-framework-demo' ),
                'default'  => array(
                    'url' => get_bloginfo('stylesheet_directory').'/videos/Intro.ogv'
                )
            ),
            array(
                'id'       => 'hero-video-webm',
                'type'     => 'media',
                'url'      => true,
                'mode'     => false,
                'title'    => __( 'Enter .webm file URL', 'redux-framework-demo' ),
                'subtitle' => __( 'Full location URL', 'redux-framework-demo' ),
                'default'  => array(
                    'url' => get_bloginfo('stylesheet_directory').'/videos/Intro.webm'
                )
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Sell Circle', 'redux-framework-demo' ),
        //'desc'       => 'Please upload all the 3 formats (<strong>.mp4</strong>, <strong>.ogv</strong>, <strong>.webm</strong>) of the video',
        'id'         => 'opt-sell-circle',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'        => 'sell-circle-title',
                'type'      => 'textarea',
                'title'     => 'Enter sell area title',
                'subtitle'  => 'HTML allowed',
                'default'  => 'Car <span class="listedmotorsgreen">Selling</span><br/>in the 21<sup>st</sup> century'
            ),
            array(
                'id'        => 'sell-circle-content',
                'type'      => 'textarea',
                'title'     => 'Enter sell area content',
                'subtitle'  => 'HTML allowed',
            ),
            array(
                'id'        => 'sell-circle-url',
                'type'      => 'text',
                'title'     => 'Enter SELL page URL',
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Buye Circle', 'redux-framework-demo' ),
        //'desc'       => 'Please upload all the 3 formats (<strong>.mp4</strong>, <strong>.ogv</strong>, <strong>.webm</strong>) of the video',
        'id'         => 'opt-buy-circle',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'        => 'buy-circle-title',
                'type'      => 'textarea',
                'title'     => 'Enter buy area title',
                'subtitle'  => 'HTML allowed',
                'default'  => 'Car <span class="listedmotorsblue">Buying</span><br>in the 21<sup>st</sup> century'
            ),
            array(
                'id'        => 'buy-circle-content',
                'type'      => 'textarea',
                'title'     => 'Enter buy area content',
                'subtitle'  => 'HTML allowed',
            ),
            array(
                'id'        => 'buy-circle-url',
                'type'      => 'text',
                'title'     => 'Enter BUY page URL',
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Magazine Logos', 'redux-framework-demo' ),
        //'desc'       => 'Please upload all the 3 formats (<strong>.mp4</strong>, <strong>.ogv</strong>, <strong>.webm</strong>) of the video',
        'id'         => 'opt-magazine-logos',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'               => 'home-magazine-logos',
                'type'             => 'editor',
                'title'            => __('Enter HTML', 'redux-framework-demo'),
                'args'   => array(
                    'teeny'            => true,
                    'textarea_rows'    => 10
                )
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Two Articles Sections', 'redux-framework-demo' ),
        //'desc'       => 'Please upload all the 3 formats (<strong>.mp4</strong>, <strong>.ogv</strong>, <strong>.webm</strong>) of the video',
        'id'         => 'opt-two-articles-section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'               => 'two-articles-block',
                'type'             => 'editor',
                'title'            => __('Enter HTML', 'redux-framework-demo'),
                'args'   => array(
                    'teeny'            => true,
                    'textarea_rows'    => 10
                )
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Testimonial Slider', 'redux-framework-demo' ),
        //'desc'       => 'Please upload all the 3 formats (<strong>.mp4</strong>, <strong>.ogv</strong>, <strong>.webm</strong>) of the video',
        'id'         => 'opt-testimonial-slider',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'               => 'testi-slide-image-01',
                'type'             => 'media',
                'url'               => true,
                'title'            => __('Slide 1 image', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-text-01',
                'type'             => 'textarea',
                'title'            => __('Slide 1 content', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-image-02',
                'type'             => 'media',
                'url'               => true,
                'title'            => __('Slide 2 image', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-text-02',
                'type'             => 'textarea',
                'title'            => __('Slide 2 content', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-image-03',
                'type'             => 'media',
                'url'               => true,
                'title'            => __('Slide 3 image', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-text-03',
                'type'             => 'textarea',
                'title'            => __('Slide 3 content', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-image-04',
                'type'             => 'media',
                'url'               => true,
                'title'            => __('Slide 4 image', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-text-04',
                'type'             => 'textarea',
                'title'            => __('Slide 4 content', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-image-05',
                'type'             => 'media',
                'url'               => true,
                'title'            => __('Slide 5 image', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-text-05',
                'type'             => 'textarea',
                'title'            => __('Slide 5 content', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-image-06',
                'type'             => 'media',
                'url'               => true,
                'title'            => __('Slide 6 image', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-text-06',
                'type'             => 'textarea',
                'title'            => __('Slide 6 content', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-image-07',
                'type'             => 'media',
                'url'               => true,
                'title'            => __('Slide 7 image', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-text-07',
                'type'             => 'textarea',
                'title'            => __('Slide 7 content', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-image-08',
                'type'             => 'media',
                'url'               => true,
                'title'            => __('Slide 8 image', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-text-08',
                'type'             => 'textarea',
                'title'            => __('Slide 8 content', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-image-09',
                'type'             => 'media',
                'url'               => true,
                'title'            => __('Slide 9 image', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-text-09',
                'type'             => 'textarea',
                'title'            => __('Slide 9 content', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-image-10',
                'type'             => 'media',
                'url'               => true,
                'title'            => __('Slide 10 image', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'testi-slide-text-10',
                'type'             => 'textarea',
                'title'            => __('Slide 10 content', 'redux-framework-demo'),
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Footer', 'redux-framework-demo' ),
        'id'     => 'opt_footer',
        'desc'   => __( 'Basic field with no subsections.', 'redux-framework-demo' ),
        //'icon'   => 'el el-home',
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Social Links', 'redux-framework-demo' ),
        //'desc'       => 'Please upload all the 3 formats (<strong>.mp4</strong>, <strong>.ogv</strong>, <strong>.webm</strong>) of the video',
        'id'         => 'opt-footer-social-section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'               => 'facebook',
                'type'             => 'text',
                'title'            => __('Facebook', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'twitter',
                'type'             => 'text',
                'title'            => __('Twitter', 'redux-framework-demo'),
            ),
            array(
                'id'               => 'linkedin',
                'type'             => 'text',
                'title'            => __('Linkedin', 'redux-framework-demo'),
            ),
      			array(
                'id'               => 'instagram',
                'type'             => 'text',
                'title'            => __('Instagram', 'redux-framework-demo'),
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Copyright', 'redux-framework-demo' ),
        //'desc'       => 'Please upload all the 3 formats (<strong>.mp4</strong>, <strong>.ogv</strong>, <strong>.webm</strong>) of the video',
        'id'         => 'opt-footer-copyright-section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'               => 'copyright_text',
                'type'             => 'textarea',
                'title'            => __('Copyright text', 'redux-framework-demo'),
            )
        )
    ) );

Redux::setSection( $opt_name, array(
    'title'  => __( 'Financing Page Settings', 'redux-framework-demo' ),
    'id'     => 'opt_financing_settings',
    'fields' => array(
        array(
            'id'               => 'finance_tab_1_title',
            'type'             => 'text',
            'title'            => __('First tab title', 'redux-framework-demo'),
        ),
        array(
            'id'               => 'finance_tab_1_content',
            'type'             => 'editor',
            'title'            => __('Content for first tab', 'redux-framework-demo'),
            'args'   => array(
                'teeny'            => false,
                'textarea_rows'    => 10
            )
        ),
        array(
            'id'               => 'finance_tab_2_title',
            'type'             => 'text',
            'title'            => __('Second tab title', 'redux-framework-demo'),
        ),
        array(
            'id'               => 'finance_tab_2_content',
            'type'             => 'editor',
            'title'            => __('Content for second tab', 'redux-framework-demo'),
            'args'   => array(
                'teeny'            => false,
                'textarea_rows'    => 10
            )
        ),
        array(
            'id'               => 'finance_tab_3_title',
            'type'             => 'text',
            'title'            => __('Third tab title', 'redux-framework-demo'),
        ),
        array(
            'id'               => 'finance_tab_3_content',
            'type'             => 'editor',
            'title'            => __('Content for third tab', 'redux-framework-demo'),
            'args'   => array(
                'teeny'            => false,
                'textarea_rows'    => 10,
  							'wpautop' => true
            )
        )
    )
) );