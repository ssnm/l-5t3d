<?php
add_filter('show_admin_bar', '__return_false');
require_once (dirname(__FILE__) . '/options/barebones-config.php');

add_action( 'after_setup_theme', 'listedco_theme_setup' );
function listedco_theme_setup() {
    add_image_size( 'listing-right-thumb', 520, 374, true ); // (cropped)
    add_image_size( 'listing-left-thumb', 260, 173, true ); // (cropped)
    add_image_size( 'slick-thumb', 135, 90, true ); // (cropped)
}

add_filter( 'rwmb_meta_boxes', 'listedco_meta_boxes' );
function listedco_meta_boxes( $meta_boxes ) {
    $prefix = 'listedco_page_';

    /*if(is_page_template('layouts/boxed-fullwidth.php')){
        $meta_boxes[] = array(
            'title' => __('Page additional options', 'textdomain'),
            'post_types' => 'page',
            'fields' => array(
                array(
                    'id' => $prefix . 'alt_title',
                    'name' => __('Alternative Title', 'textdomain'),
                    'desc' => 'The original title will be replaced by it',
                    'type' => 'text',
                ),
                array(
                    'id' => $prefix . 'subtitle',
                    'name' => __('Page Subtitle', 'textdomain'),
                    'desc' => 'Appears below the title. HTML allowed',
                    'type' => 'textarea',
                ),
                array(
                    'id'   => $prefix.'video_photo',
                    'name' => __( 'Listing Page Intro Video', 'textdomain' ),
                    'type' => 'text',
                )
            ),
        );

    }else {*/
    $meta_boxes[] = array(
        'title' => __('Page additional options', 'textdomain'),
        'post_types' => 'page',
        'fields' => array(
            array(
                'id' => $prefix . 'alt_title',
                'name' => __('Alternative Title', 'textdomain'),
                'desc' => 'The original title will be replaced by it',
                'type' => 'text',
            ),
            array(
                'id' => $prefix . 'subtitle',
                'name' => __('Page Subtitle', 'textdomain'),
                'desc' => 'Appears below the title. HTML allowed',
                'type' => 'textarea',
            ),
            array(
                'id' => $prefix . 'hero_header_content',
                'name' => __('Video Header Content', 'textdomain'),
                'type' => 'textarea',
            ),
            array(
                'name'             => "Upload a video for background",
                'id'               => "{$prefix}video_header",
                'type'             => 'file_advanced',
                'desc'			   => 'The video will be used as the background instead of the image',
                'max_file_uploads' => 1,
                'mime_type'        => 'video',
            ),
        ),
    );

    /*$meta_boxes[] = array(
        'title' => __('Listing Guarantee Information', 'textdomain'),
        'post_types' => 'listings',
        'fields' => array(
            array(
                'id' => 'listing_test_drive_title',
                'name' => __('Test Drive Title', 'textdomain'),
                'type' => 'text',
            ),
            array(
                'id' => 'listing_test_drive_content',
                'name' => __('Test Drive Content', 'textdomain'),
                'type' => 'textarea',
            ),
            array(
                'id' => 'listing_money_back_title',
                'name' => __('Money Back Guarantee Title', 'textdomain'),
                'type' => 'text',
            ),
            array(
                'id' => 'listing_money_back_content',
                'name' => __('Money Back Guarantee Content', 'textdomain'),
                'type' => 'textarea',
            ),
            array(
                'id' => 'listing_full_warranty_title',
                'name' => __('Full Warranty Title', 'textdomain'),
                'type' => 'text',
            ),
            array(
                'id' => 'listing_full_warranty_content',
                'name' => __('Full Warranty Content', 'textdomain'),
                'type' => 'textarea',
            ),
            array(
                'id' => 'listing_dt_warranty_title',
                'name' => __('Drivetrain Warranty Title', 'textdomain'),
                'type' => 'text',
            ),
            array(
                'id' => 'listing_dt_warranty_content',
                'name' => __('Drivetrain Warranty Content', 'textdomain'),
                'type' => 'textarea',
            ),
        ),
    );*/
    $ins_prefix = 'listed_insp_';
    $meta_boxes[] = array(
        'title' => __('INSPECTION REPORT', 'textdomain'),
        'post_types' => 'listings',
        'fields' => array(
            array(
                'id' => "{$ins_prefix}summary",
                'name' => __('INSPECTION SUMMARY', 'textdomain'),
                'type' => 'textarea',
            ),
            array(
                'name' => __('STATIONARY ROAD TEST', 'textdomain'),
                'id' => "{$ins_prefix}stationary_road_test",
                'type'    => 'wysiwyg',
                // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
                'raw'     => false,
                // Editor settings, see wp_editor() function: look4wp.com/wp_editor
                'options' => array(
                    'textarea_rows' => 7,
                    'teeny'         => false,
                    'media_buttons' => true,
                ),
            ),
            array(
                'name' => __('DRIVING ROAD TEST', 'textdomain'),
                'id' => "{$ins_prefix}driving_road_test",
                'type'    => 'wysiwyg',
                // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
                'raw'     => false,
                // Editor settings, see wp_editor() function: look4wp.com/wp_editor
                'options' => array(
                    'textarea_rows' => 7,
                    'teeny'         => false,
                    'media_buttons' => true,
                ),
            ),
            array(
                'name' => __('INTERIOR', 'textdomain'),
                'id' => "{$ins_prefix}interior",
                'type'    => 'wysiwyg',
                // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
                'raw'     => false,
                // Editor settings, see wp_editor() function: look4wp.com/wp_editor
                'options' => array(
                    'textarea_rows' => 7,
                    'teeny'         => false,
                    'media_buttons' => true,
                ),
            ),
            array(
                'name' => __('BODY', 'textdomain'),
                'id' => "{$ins_prefix}body",
                'type'    => 'wysiwyg',
                // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
                'raw'     => false,
                // Editor settings, see wp_editor() function: look4wp.com/wp_editor
                'options' => array(
                    'textarea_rows' => 7,
                    'teeny'         => false,
                    'media_buttons' => true,
                ),
            ),
            array(
                'name' => __('BRAKES & WHEELS', 'textdomain'),
                'id' => "{$ins_prefix}brakes_wheels",
                'type'    => 'wysiwyg',
                // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
                'raw'     => false,
                // Editor settings, see wp_editor() function: look4wp.com/wp_editor
                'options' => array(
                    'textarea_rows' => 7,
                    'teeny'         => false,
                    'media_buttons' => true,
                ),
            ),
            array(
                'name' => __('UNDER HOOD', 'textdomain'),
                'id' => "{$ins_prefix}under_hood",
                'type'    => 'wysiwyg',
                // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
                'raw'     => false,
                // Editor settings, see wp_editor() function: look4wp.com/wp_editor
                'options' => array(
                    'textarea_rows' => 7,
                    'teeny'         => false,
                    'media_buttons' => true,
                ),
            ),
            array(
                'name' => __('SUSPENSION', 'textdomain'),
                'id' => "{$ins_prefix}suspension",
                'type'    => 'wysiwyg',
                // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
                'raw'     => false,
                // Editor settings, see wp_editor() function: look4wp.com/wp_editor
                'options' => array(
                    'textarea_rows' => 7,
                    'teeny'         => false,
                    'media_buttons' => true,
                ),
            ),
            array(
                'name' => __('UNDERBODY', 'textdomain'),
                'id' => "{$ins_prefix}underbody",
                'type'    => 'wysiwyg',
                // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
                'raw'     => false,
                // Editor settings, see wp_editor() function: look4wp.com/wp_editor
                'options' => array(
                    'textarea_rows' => 7,
                    'teeny'         => false,
                    'media_buttons' => true,
                ),
            )
        ),
    );

    $meta_boxes[] = array(
        'title' => 'Bi-Weekly Price',
        'post_types' => 'listings',
        'fields' => array(
            array(
                'id' => 'car_biweekly_price',
                'name' => 'Enter Price',
                'type' => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'title' => 'Brief Price Text',
        'post_types' => 'listings',
        'fields' => array(
            array(
                'id' => 'car_pricing_text',
                'name' => 'Enter Text',
                'type' => 'textarea',
            ),
        )
    );

    /*}*/
    return $meta_boxes;
}

add_action('admin_enqueue_scripts', 'enqueue_listedco_admin_js' );
function enqueue_listedco_admin_js(){
    wp_enqueue_script( 'listing-category-js', get_template_directory_uri().'/js/listing-category.js', array( 'jquery', 'wp-color-picker' ), '', true  );
}

add_action( 'wp_enqueue_scripts', 'listedco_theme_scripts' );

function listedco_theme_scripts(){

    wp_enqueue_style('listedco-listedmotors_carmastercss-style', get_template_directory_uri().'/css/listedmotors_carmastercss.css');
    wp_enqueue_style('listedco-listedmotors_master_responsive-style', get_template_directory_uri().'/css/listedmotors_master_responsive.css');

    if(is_home() || is_front_page()){
        wp_enqueue_style('listedco-listedmotors_homecss-style', get_template_directory_uri().'/css/listedmotors_homecss.css', array(), rand(111,9999), 'all');
    }

    //wp_enqueue_style('listedco-fa-style', get_template_directory_uri().'/css/font-awesome/css/font-awesome.min.css');

    if(is_page() && (!is_home() || !is_front_page()) && !is_page(53)){
        wp_enqueue_style('listedco-genre-boot', get_template_directory_uri().'/css/bootstrap335.min.css');
        wp_enqueue_style('listedco-genre-page', get_template_directory_uri().'/css/listedmotors_coappcss.css');
        wp_enqueue_style('listedco-tpheader',  get_template_directory_uri().'/css/listedmotors_headertranscss.css');
    }

    wp_enqueue_style( 'listedco-style', get_stylesheet_uri());

    wp_enqueue_script('listedco-listedmotors_carmaster', get_template_directory_uri().'/js/listedmotors_carmaster.js', array(), rand(111,9999), true);
    wp_enqueue_script('listedco-listedmotors_master_responsive', get_template_directory_uri().'/js/listedmotors_master_responsive.js', array(), rand(111,9999), true);

    wp_localize_script('listedco-listedmotors_master_responsive','listed', array(
        'wpajaxurl' => admin_url('admin-ajax.php')
    ));

    if(is_home() || is_front_page()) {
        wp_enqueue_script('listedco-HomePageJs', get_template_directory_uri() . '/js/HomePageJs.js', array(), rand(111,9999), true);
    }

    if(is_page(53)) {
        wp_enqueue_style('listedco-ichecks-style', get_template_directory_uri().'/js/icheck/skins/all.css');
        wp_enqueue_script('listedco-listingjs', get_template_directory_uri() . '/js/listingpagejs.js', array(), rand(111,9999), true);
        wp_enqueue_script('listedco-icheck-js', get_template_directory_uri() . '/js/icheck/icheck.min.js', array(), rand(111,9999), true);
    }

    wp_enqueue_script('listedco-bannerjs', get_template_directory_uri().'/js/listedmotorsbannerjs.js', array(), rand(111,9999), true);

    if(is_singular('listings')){
        //wp_enqueue_style('listedco-single-style1', get_template_directory_uri().'/css/style-wide.css');
        wp_enqueue_style('listedco-single-style2', get_template_directory_uri().'/css/listedmotors_carpagecss.css');
        //wp_enqueue_style('listedco-single-style3', get_template_directory_uri().'/css/carpagestyle.css');

        wp_register_script('listedco-single-top-js', get_template_directory_uri() . '/js/listedmotors_carpagejs.js', array(), rand(111,9999), true);

        $carpage_string_array = array(
            'image_dir' => get_bloginfo('stylesheet_directory').'/images/',
            'css_dir' => get_bloginfo('stylesheet_directory').'/css/',
            'js_dir' => get_bloginfo('stylesheet_directory').'/js/'
        );

        wp_localize_script( 'listedco-single-top-js', 'carpage', $carpage_string_array );


        wp_enqueue_script('listedco-single-slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), rand(111,9999), true);
        wp_enqueue_script('listedco-single-top-js');
    }
    if(is_page('financing')){
        wp_enqueue_style('listedco-owl-css', get_template_directory_uri().'/css/owl.carousel.css');
        wp_enqueue_style('listedco-owl-theme-css', get_template_directory_uri().'/css/owl.theme.css');
        wp_enqueue_script('listedco-owl-js', get_template_directory_uri() . '/js/owl.carousel.js', array(), rand(111,9999), true);
        wp_enqueue_script('listedco-owl-js');
    }

}

add_action( 'init', 'listedco_setup' );
function listedco_setup() {
    register_nav_menus(
        array(
            'top_menu' => 'Top navigation',
            'mobile_menu' => 'Mobile navigation',
            'footer_menu' => 'Footer navigation 1',
            'footer_menu_2' => 'Footer navigation 2'
        )
    );
}
function listedco_classes_on_li($classes, $item, $args) {
    if($args->theme_location == 'footer_menu') {
        $classes[] = 'sfooter-link';
    }
    if($args->theme_location == 'footer_menu_2') {
        $classes[] = 'footer-link';
    }
    if($args->theme_location == 'mobile_menu'){
        $classes[] = 'sidebar-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class','listedco_classes_on_li',1,3);

class listedco_bootstrap_navwalker extends Walker_Nav_Menu {
    /**
     * @see Walker::start_lvl()
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int $depth Depth of page. Used for padding.
     */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul class=\" dropdown-menu headerlink-dropdown\">\n";
    }
    /**
     * @see Walker::start_el()
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item Menu item data object.
     * @param int $depth Depth of menu item. Used for padding.
     * @param int $current_page Menu item ID.
     * @param object $args
     */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        /**
         * Dividers, Headers or Disabled
         * =============================
         * Determine whether the item is a Divider, Header, Disabled or regular
         * menu item. To prevent errors we use the strcasecmp() function to so a
         * comparison that is not case sensitive. The strcasecmp() function returns
         * a 0 if the strings are equal.
         */
        if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="divider">';
        } else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="divider">';
        } else if ( strcasecmp( $item->attr_title, 'dropdown-header') == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr( $item->title );
        } else if ( strcasecmp($item->attr_title, 'disabled' ) == 0 ) {
            $output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr( $item->title ) . '</a>';
        } else {
            $class_names = $value = '';
            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $classes[] = 'menu-item-' . $item->ID;

            if($depth > 0){
                $classes[]= '';
            }else{
                $classes[] = 'headerLink ';
            }

            $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
            if ( $args->has_children )
                $class_names .= ' dropdown';
            if ( in_array( 'current-menu-item', $classes ) )
                $class_names .= '';
            $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
            $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
            $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
            $output .= $indent . '<li' . $id . $value . $class_names .'>';
            $atts = array();
            //$atts['title']  = ! empty( $item->title )	? $item->title	: '';
            $atts['target'] = ! empty( $item->target )	? $item->target	: '';
            $atts['rel']    = ! empty( $item->xfn )		? $item->xfn	: '';
            // If item has_children add atts to a.
            if ( $args->has_children && $depth === 0 ) {
                //$atts['href']   		= '#';
                $atts['data-toggle']	= 'dropdown';
                $atts['class']			= 'nav-item dropdown-link';
                $atts['aria-haspopup']	= 'true';
            } else {
                $atts['href'] = ! empty( $item->url ) ? $item->url : '';
                if($depth > 0){
                    $atts['class'] = 'dropdown-item';
                }else {
                    if (strpos($class_names, 'contact-link-wrap') !== false) {
                        $atts['class'] = 'contact-link nav-item visible-md visible-lg visible-sm';
                    }else {
                        $atts['class'] = 'nav-item visible-md visible-lg visible-sm';
                    }
                }
            }
            $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
            $attributes = '';
            foreach ( $atts as $attr => $value ) {
                if ( ! empty( $value ) ) {
                    $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }
            $item_output = $args->before;
            /*
             * Glyphicons
             * ===========
             * Since the the menu item is NOT a Divider or Header we check the see
             * if there is a value in the attr_title property. If the attr_title
             * property is NOT null we apply it as the class name for the glyphicon.
             */
            if ( ! empty( $item->attr_title ) )
                $item_output .= '<a'. $attributes .'><span class="glyphicon ' . esc_attr( $item->attr_title ) . '"></span>&nbsp;';
            else
                $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= ( $args->has_children && 0 === $depth ) ? ' </a><a class="dropdown-icon"></a>' : '</a>';
            $item_output .= $args->after;
            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }
    /**
     * Traverse elements to create list from elements.
     *
     * Display one element if the element doesn't have any children otherwise,
     * display the element and its children. Will only traverse up to the max
     * depth and no ignore elements under that depth.
     *
     * This method shouldn't be called directly, use the walk() method instead.
     *
     * @see Walker::start_el()
     * @since 2.5.0
     *
     * @param object $element Data object
     * @param array $children_elements List of elements to continue traversing.
     * @param int $max_depth Max depth to traverse.
     * @param int $depth Depth of current element.
     * @param array $args
     * @param string $output Passed by reference. Used to append additional content.
     * @return null Null on failure with no changes to parameters.
     */
    public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        if ( ! $element )
            return;
        $id_field = $this->db_fields['id'];
        // Display this element.
        if ( is_object( $args[0] ) )
            $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
    /**
     * Menu Fallback
     * =============
     * If this function is assigned to the wp_nav_menu's fallback_cb variable
     * and a manu has not been assigned to the theme location in the WordPress
     * menu manager the function with display nothing to a non-logged in user,
     * and will add a link to the WordPress menu manager if logged in as an admin.
     *
     * @param array $args passed from the wp_nav_menu function.
     *
     */
    public static function fallback( $args ) {
        if ( current_user_can( 'manage_options' ) ) {
            extract( $args );
            $fb_output = null;
            if ( $container ) {
                $fb_output = '<' . $container;
                if ( $container_id )
                    $fb_output .= ' id="' . $container_id . '"';
                if ( $container_class )
                    $fb_output .= ' class="' . $container_class . '"';
                $fb_output .= '>';
            }
            $fb_output .= '<ul';
            if ( $menu_id )
                $fb_output .= ' id="' . $menu_id . '"';
            if ( $menu_class )
                $fb_output .= ' class="' . $menu_class . '"';
            $fb_output .= '>';
            $fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">Add a menu</a></li>';
            $fb_output .= '</ul>';
            if ( $container )
                $fb_output .= '</' . $container . '>';
            echo $fb_output;
        }
    }
}

function listingNumberAbbreviation($number) {
    $abbrevs = array(12 => "T", 9 => "B", 6 => "M", 3 => "K", 0 => "");
    foreach($abbrevs as $exponent => $abbrev) {
        if($number >= pow(10, $exponent)) {
            $display_num = $number / pow(10, $exponent);
            $decimals = ($exponent >= 3 && round($display_num) < 100) ? 0 : 0;
            return number_format($display_num,$decimals) . $abbrev;
        }
    }
}

add_action('fullstripe_before_payment_charge', 'adjusted_car_price');
function adjusted_car_price($amount){
    $amount = 2345;
    return $amount;
}

add_shortcode('getcarid', 'getcarid_func');
function getcarid_func(){
    $car_id = '';
    if(isset($_REQUEST['car']) && !empty($_REQUEST['car'])){
        $car_id = $_REQUEST['car'];
    }
    return $car_id;
}

add_shortcode('getcarname', 'getcarname_func');
function getcarname_func(){
    $carname = '';
    if(isset($_REQUEST['car']) && !empty($_REQUEST['car'])){
        $car_id = $_REQUEST['car'];
        $car = get_post($car_id);
        $carname = $car->post_title;
    }else if(is_singular('listings')){
    		global $post;
      	$carname = 'Name: '.get_the_title($post->ID).', System ID: '.$post->ID;
    }
    return $carname;
}
add_shortcode('getcarprice', 'getcarprice_func');
function getcarprice_func(){
    $price_text  = 0;
    if(isset($_REQUEST['car']) && !empty($_REQUEST['car'])){
        $car_id = $_REQUEST['car'];
        $post_meta = get_post_meta_all($car_id);
        if(isset($post_meta['listing_options']) && !empty($post_meta['listing_options'])){
            $listing_options = unserialize(unserialize($post_meta['listing_options']));
        }
        $price_text  = 0;
        if(isset($listing_options['price']['value']) && !empty($listing_options['price']['value'])){
            $original = (isset($listing_options['price']['original']) && !empty($listing_options['price']['original']) ? $listing_options['price']['original'] : $listing_options['price']['value']);
            $price_text = !empty($original) ? format_currency($original) : 0;

        }
    }
    return $price_text;
}

add_shortcode('financing_slider', 'financing_slider_func');
function financing_slider_func(){
    global $listedco_options;
    ob_start();
    ?>
    <div class="financing-slider-wrap">
        <div class="row">
            <div class="col-md-4">
                <div class="finance-tab-title text-center active" id="finance-tab-1" data-slide="0">
                    <?php echo $listedco_options['finance_tab_1_title']; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="finance-tab-title text-center" id="finance-tab-2" data-slide="1">
                    <?php echo $listedco_options['finance_tab_2_title']; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="finance-tab-title text-center" id="finance-tab-3" data-slide="2">
                    <?php echo $listedco_options['finance_tab_3_title']; ?>
                </div>
            </div>
        </div>
        <div class="finance-slider-wrap">
            <div class="row">
                <div class="col-md-12">
                    <div id="finance-slider" class="owl-carousel">
                        <div><?php echo wpautop(do_shortcode($listedco_options['finance_tab_1_content'])); ?></div>
                        <div><?php echo wpautop(do_shortcode($listedco_options['finance_tab_2_content'])); ?></div>
                        <div><?php echo wpautop(do_shortcode($listedco_options['finance_tab_3_content'])); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function() {
            var owl = jQuery("#finance-slider");
            owl.owlCarousel({
                items : 1,
                singleItem : true,
                navigation : false,
                pagination : false,
                autoPlay : false,
                mouseDrag : false,
                touchDrag : false
            });
            // Custom Navigation Events
            jQuery(".finance-tab-title").click(function(){
                jQuery('.finance-tab-title').removeClass('active');
                jQuery(this).addClass('active');
                var go_slide = jQuery(this).data('slide');
                owl.trigger('owl.goTo', go_slide);
            });
        });
    </script>
    <?php
    return ob_get_clean();
}

function ssnm_row_scroll_exit_animations() {

    $exits = array(
        'none' => array(),
        'scale-smaller' => array(
            'data-top-bottom' => array(
                'transform-origin' => '50% 100%',
                'opacity' => 0.4,
                'transform' => array(
                    'scale' => 0.7,
                ),
            ),
            'data-%scenter-bottom' => array(
                'transform-origin' => '50% 100%',
                'opacity' => 1,
                'transform' => array(
                    'scale' => 1,
                ),
            ),
        ),

        'fade' => array(
            'data-top-bottom' => array(
                'opacity' => '0.0',
            ),
            'data-%scenter-bottom' => array(
                'opacity' => 1,
            ),
        ),

        'content-fade' => array(
            'data-top-bottom' => array(
                'opacity' => '0.0',
            ),
            'data-%scenter-bottom' => array(
                'opacity' => 1,
            ),
        ),

        'rotate-back' => array(
            'data-top-bottom' => array(
                'transform-origin' => '50% 100%',
                'transform' => array(
                    'perspective' => '1000px',
                    'rotateX' => '70deg',
                ),
            ),
            'data-%scenter-bottom' => array(
                'transform-origin' => '50% 100%',
                'transform' => array(
                    'perspective' => '1000px',
                    'rotateX' => '0deg',
                ),
            ),
        ),

        'rotate-forward' => array(
            'data-top-bottom' => array(
                'transform-origin' => '50% 100%',
                'transform' => array(
                    'perspective' => '1000px',
                    'rotateX' => '-70deg',
                ),
            ),
            'data-%scenter-bottom' => array(
                'transform-origin' => '50% 100%',
                'transform' => array(
                    'perspective' => '1000px',
                    'rotateX' => '0deg',
                ),
            ),
        ),

        'carousel' => array(
            'data-top-bottom' => array(
                'transform' => array(
                    'translateY' => '50vh',
                    'scale' => '0.4',
                ),
                'opacity' => 1,
                'z-index' => '0',
            ),
            'data--1-top-bottom' => array(
                'transform' => array(
                    'translateY' => '50vh',
                    'scale' => '0.4',
                ),
                'opacity' => 0,
                'z-index' => '0',
            ),
            'data--20p-center-bottom' => array(
                'transform' => array(
                    'translateY' => '0vh',
                    'scale' => '1',
                ),
                'opacity' => 1,
                'z-index' => '0',
            ),
            'data--19.999p-center-bottom' => array(
                'transform' => array(
                    'translateY' => '0vh',
                    'scale' => '1',
                ),
                'opacity' => 1,
                'z-index' => '1',
            ),
        ),

        'fly-up' => array(
            'data-top-bottom' => array(
                'transform' => array(
                    'translateY' => '-30vh',
                ),
            ),
            'data-%scenter-bottom' => array(
                'transform' => array(
                    'translateY' => '0vh',
                ),
            ),
        ),

        'content-fly-up' => array(
            'data-top-bottom' => array(
                'transform' => array(
                    'translateY' => '-20vh',
                ),
                'opacity' => 0,
            ),
            'data-%scenter-bottom' => array(
                'transform' => array(
                    'translateY' => '0vh',
                ),
                'opacity' => 1,
            ),
        ),

        'fly-left' => array(
            'data-top-bottom' => array(
                'transform' => array(
                    'translateX' => '-100vw',
                ),
            ),
            'data-%scenter-bottom' => array(
                'transform' => array(
                    'translateX' => '0vw',
                ),
            ),
        ),

        'content-fly-left' => array(
            'data-top-bottom' => array(
                'transform' => array(
                    'translateX' => '-100vw',
                ),
                'opacity' => 0,
            ),
            'data-%scenter-bottom' => array(
                'transform' => array(
                    'translateX' => '0vw',
                ),
                'opacity' => 1,
            ),
        ),

        'fly-right' => array(
            'data-top-bottom' => array(
                'transform' => array(
                    'translateX' => '100vw',
                ),
                'opacity' => 0,
            ),
            'data-%scenter-bottom' => array(
                'transform' => array(
                    'translateX' => '0vw',
                ),
                'opacity' => 1,
            ),
        ),

        'content-fly-right' => array(
            'data-top-bottom' => array(
                'transform' => array(
                    'translateX' => '100vw',
                ),
                'opacity' => 0,
            ),
            'data-%scenter-bottom' => array(
                'transform' => array(
                    'translateX' => '0vw',
                ),
                'opacity' => 1,
            ),
        ),

        // stick
        'stick' => array(
            'data--1-top-bottom' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'translateY' => '50vh',
                ),
                'opacity' => 0,
            ),
            'data-top-bottom' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'translateY' => '50vh',
                ),
                'opacity' => 1,
            ),
            'data-center-bottom' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'translateY' => '0vh',
                ),
            ),
        ),

        // stick-scale
        'stick-scale' => array(
            'data-top-bottom' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'perspective' => '1000px',
                    'translateZ' => '-300px',
                    'translateY' => '100vh',
                ),
                'opacity' => 0,
            ),
            'data-center-bottom' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'perspective' => '1000px',
                    'translateZ' => '0px',
                    'translateY' => '0vh',
                ),
                'opacity' => 1,
            ),
        ),

        // stick-flip-left
        'stick-flip-left' => array(
            'data-top-bottom' => array(
                'transform-origin' => '0% 100%',
                'transform' => array(
                    'perspective' => '1000px',
                    'translateY' => '100vh',
                    'rotateY' => '91deg',
                ),
                'opacity' => 0,
            ),
            'data-bottom-bottom' => array(
                'transform-origin' => '0% 100%',
                'transform' => array(
                    'perspective' => '1000px',
                    'translateY' => '0vh',
                    'rotateY' => '0deg',
                ),
                'opacity' => 1,
            ),
        ),

        // stick-flip-right
        'stick-flip-right' => array(
            'data-top-bottom' => array(
                'transform-origin' => '100% 100%',
                'transform' => array(
                    'perspective' => '1000px',
                    'translateY' => '100vh',
                    'rotateY' => '-91deg',
                ),
                'opacity' => 0,
            ),
            'data-bottom-bottom' => array(
                'transform-origin' => '100% 100%',
                'transform' => array(
                    'perspective' => '1000px',
                    'translateY' => '0vh',
                    'rotateY' => '0deg',
                ),
                'opacity' => 1,
            ),
        ),

        // stick-flip-top
        'stick-flip-top' => array(
            'data-top-bottom' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'perspective' => '1000px',
                    'translateY' => '100vh',
                    'rotateX' => '-91deg',
                ),
                'opacity' => 0,
            ),
            'data-bottom-bottom' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'perspective' => '1000px',
                    'translateY' => '0vh',
                    'rotateX' => '0deg',
                ),
                'opacity' => 1,
            ),
        ),

        // stick-flip-bottom
        'stick-flip-bottom' => array(
            'data-top-bottom' => array(
                'transform-origin' => '50% 100%',
                'transform' => array(
                    'perspective' => '1000px',
                    'translateY' => '100vh',
                    'rotateX' => '91deg',
                ),
                'opacity' => 0,
            ),
            'data-bottom-bottom' => array(
                'transform-origin' => '50% 100%',
                'transform' => array(
                    'perspective' => '1000px',
                    'translateY' => '0vh',
                    'rotateX' => '0deg',
                ),
                'opacity' => 1,
            ),
        ),

        // stick-fly-left
        'stick-fly-left' => array(
            'data-top-bottom' => array(
                'transform' => array(
                    'translateY' => '100vh',
                    'translateX' => '-100vw',
                ),
                'z-index' => '2',
            ),
            'data-bottom-bottom' => array(
                'transform' => array(
                    'translateY' => '0vh',
                    'translateX' => '0vw',
                ),
                'z-index' => '2',
            ),
            'data-1-bottom-bottom' => array(
                'transform' => array(
                    'translateY' => '0vh',
                    'translateX' => '0vw',
                ),
                'z-index' => '1',
            ),
        ),

        // stick-fly-right
        'stick-fly-right' => array(
            'data-top-bottom' => array(
                'transform' => array(
                    'translateY' => '100vh',
                    'translateX' => '100vw',
                ),
                'z-index' => '2',
            ),
            'data-bottom-bottom' => array(
                'transform' => array(
                    'translateY' => '0vh',
                    'translateX' => '0vw',
                ),
                'z-index' => '2',
            ),
            'data-1-bottom-bottom' => array(
                'transform' => array(
                    'translateY' => '0vh',
                    'translateX' => '0vw',
                ),
                'z-index' => '1',
            ),
        ),

        // stick-fly-down
        'stick-fly-down' => array(
            'data-top-bottom' => array(
                'transform' => array(
                    'translateY' => '200%',
                ),
                'z-index' => '2',
                'opacity' => 1,
            ),
            'data-bottom-bottom' => array(
                'transform' => array(
                    'translateY' => '0vh',
                ),
                'z-index' => '2',
                'opacity' => 1,
            ),
            'data-1-bottom-bottom' => array(
                'transform' => array(
                    'translateY' => '0vh',
                ),
                'z-index' => '1',
                'opacity' => 1,
            ),
            'data--1-top-bottom' => array(
                'transform' => array(
                    'translateY' => '0vh',
                ),
                'z-index' => '1',
                'opacity' => 0,
            ),
        ),

        // stick-rotate-left
        'stick-rotate-left' => array(
            'data-top-bottom' => array(
                'transform-origin' => '0% 100%',
                'transform' => array(
                    'translateY' => '100vh',
                    'rotate' => '-91deg',
                ),
                'z-index' => '2',
            ),
            'data-bottom-bottom' => array(
                'transform-origin' => '0% 100%',
                'transform' => array(
                    'translateY' => '0vh',
                    'rotate' => '0deg',
                ),
                'z-index' => '2',
            ),
            'data-1-bottom-bottom' => array(
                'transform-origin' => '0% 100%',
                'transform' => array(
                    'translateY' => '0vh',
                    'rotate' => '0deg',
                ),
                'z-index' => '1',
            ),
        ),

        // stick-rotate-right
        'stick-rotate-right' => array(
            'data-top-bottom' => array(
                'transform-origin' => '100% 100%',
                'transform' => array(
                    'translateY' => '100vh',
                    'rotate' => '91deg',
                ),
                'z-index' => '2',
            ),
            'data-bottom-bottom' => array(
                'transform-origin' => '100% 100%',
                'transform' => array(
                    'translateY' => '0vh',
                    'rotate' => '0deg',
                ),
                'z-index' => '2',
            ),
            'data-1-bottom-bottom' => array(
                'transform-origin' => '100% 100%',
                'transform' => array(
                    'translateY' => '0vh',
                    'rotate' => '0deg',
                ),
                'z-index' => '1',
            ),
        ),

        'cube' => array(
            'data-30p-top-bottom' => array(
                'transform-origin' => '50% 100%',
                'transform' => array(
                    'perspective' => '1000px',
                    'rotateX' => '91deg',
                ),
            ),
            'data-20p-center-bottom' => array(
                'transform-origin' => '50% 100%',
                'transform' => array(
                    'perspective' => '1000px',
                    'rotateX' => '0deg',
                ),
            ),
        ),
    );


    return $exits;
}
function ssnm_row_scroll_entrance_animations() {

    $entrances = array(
        'none' => array(),
        'scale-smaller' => array(
            'data-%scenter-top' => array(
                'transform-origin' => '50% 0%',
                'opacity' => 1,
                'transform' => array(
                    'scale' => 1,
                ),
            ),
            'data-bottom-top' => array(
                'transform-origin' => '50% 0%',
                'opacity' => 0.4,
                'transform' => array(
                    'scale' => 1.2,
                ),
            ),
        ),

        'fade' => array(
            'data-%scenter-top' => array(
                'opacity' => 1,
            ),
            'data-bottom-top' => array(
                'opacity' => '0.0',
            ),
        ),

        'content-fade' => array(
            'data-%scenter-top' => array(
                'opacity' => 1,
            ),
            'data-bottom-top' => array(
                'opacity' => '0.0',
            ),
        ),

        'rotate-forward' => array(
            'data-%scenter-top' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'perspective' => '1000px',
                    'rotateX' => '0deg',
                ),
            ),
            'data-bottom-top' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'perspective' => '1000px',
                    'rotateX' => '-70deg',
                ),
            ),
        ),

        'rotate-back' => array(
            'data-%scenter-top' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'perspective' => '1000px',
                    'rotateX' => '0deg',
                ),
            ),
            'data-bottom-top' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'perspective' => '1000px',
                    'rotateX' => '70deg',
                ),
            ),
        ),

        'carousel' => array(
            'data-20p-center-top' => array(
                'opacity' => 1.0,
                'transform' => array(
                    'scale' => '1',
                    'translateY' => '0vh',
                ),
                'z-index' => '0',
                'opacity' => 1,
            ),
            'data-19.9999p-center-top' => array(
                'opacity' => 1.0,
                'transform' => array(
                    'scale' => '1',
                    'translateY' => '0vh',
                ),
                'z-index' => '1',
                'opacity' => 1,
            ),
            'data-bottom-top' => array(
                'transform' => array(
                    'scale' => '0.4',
                    'translateY' => '-50vh',
                ),
                'z-index' => '1',
                'opacity' => 1,
            ),
            'data-1-bottom-top' => array(
                'transform' => array(
                    'scale' => '0.4',
                    'translateY' => '-50vh',
                ),
                'z-index' => '0',
                'opacity' => 0,
            ),
        ),

        'fly-up' => array(
            'data-%scenter-top' => array(
                'transform' => array(
                    'translateY' => '0vh',
                ),
            ),
            'data-bottom-top' => array(
                'transform' => array(
                    'translateY' => '30vh',
                ),
            ),
        ),

        'content-fly-up' => array(
            'data-%scenter-top' => array(
                'transform' => array(
                    'translateY' => '0vh',
                ),
                'opacity' => 1,
            ),
            'data-bottom-top' => array(
                'transform' => array(
                    'translateY' => '30vh',
                ),
                'opacity' => 0,
            ),
        ),

        'fly-left' => array(
            'data-%scenter-top' => array(
                'transform' => array(
                    'translateX' => '0vw',
                ),
            ),
            'data-bottom-top' => array(
                'transform' => array(
                    'translateX' => '100vw',
                ),
            ),
        ),

        'content-fly-left' => array(
            'data-%scenter-top' => array(
                'transform' => array(
                    'translateX' => '0vw',
                ),
                'opacity' => 1,
            ),
            'data-bottom-top' => array(
                'transform' => array(
                    'translateX' => '100vw',
                ),
                'opacity' => 0,
            ),
        ),

        'fly-right' => array(
            'data-%scenter-top' => array(
                'transform' => array(
                    'translateX' => '0vw',
                ),
            ),
            'data-bottom-top' => array(
                'transform' => array(
                    'translateX' => '-100vw',
                ),
            ),
        ),

        'content-fly-right' => array(
            'data-%scenter-top' => array(
                'transform' => array(
                    'translateX' => '0vw',
                ),
                'opacity' => 1,
            ),
            'data-bottom-top' => array(
                'transform' => array(
                    'translateX' => '-100vw',
                ),
                'opacity' => 0,
            ),
        ),


        // stick
        'stick' => array(
            'data-1-top-top' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'translateY' => '0vh',
                ),
                'opacity' => 1,

                'z-index' => 1,
            ),
            'data-2-top-top' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'translateY' => '0vh',
                ),
                'opacity' => 1,
                'z-index' => 0,
            ),
            'data-bottom-top' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'translateY' => '-100vh',
                ),
                'opacity' => 1,
                'z-index' => 0,
            ),
            'data-1-bottom-top' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'translateY' => '0vh',
                ),
                'opacity' => 0,
                'z-index' => 0,
            ),
        ),


        // stick-scale
        'stick-scale' => array(
            'data-1-center-top' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'translateY' => '0vh',
                    'scale' => 1,
                ),
                'opacity' => 1,
                'z-index' => 1,
            ),
            'data-2-center-top' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'translateY' => '0vh',
                    'scale' => 1,
                ),
                'opacity' => 1,
                'z-index' => 0,
            ),
            'data-bottom-top' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'translateY' => '-50vh',
                    'scale' => 1.2,
                ),
                'opacity' => 0,
                'z-index' => 0,
            ),
            'data-1-bottom-top' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'translateY' => '0vh',
                    'scale' => 1,
                ),
                'opacity' => 1,
                'z-index' => 0,
            ),
        ),

        'cube' => array(
            'data--20p-center-top' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'perspective' => '1000px',
                    'rotateX' => '0deg',
                ),
            ),
            'data--30p-bottom-top' => array(
                'transform-origin' => '50% 0%',
                'transform' => array(
                    'perspective' => '1000px',
                    'rotateX' => '-91deg',
                ),
            ),
        ),
    );

    return $entrances;
}
function ssnmGenerateScrollData( $entrance, $exit, $entranceOffset = '', $exitOffset = '' ) {

    // All the possible exits
    $exits = ssnm_row_scroll_exit_animations();


    // All the possible entrances
    $entrances = ssnm_row_scroll_entrance_animations();


    // These animations have Skrollr smooth scrolling turned off
    $smoothScrollOff = array(
        // 'cube',
        'stick',
        'stick-flip-left',
        'stick-flip-right',
        'stick-flip-top',
        'stick-flip-bottom',
        'stick-fly-left',
        'stick-fly-right',
        'stick-rotate-left',
        'stick-rotate-right',
    );


    // These are the only allowed styles & transforms along with their default values
    $defaults = array(
        'transform-origin' => '50% 50%',
        'opacity' => 1,
        'scale' => 1,
        'perspective' => '1000px',
        'translateX' => '0vw',
        'translateY' => '0vh',
        'translateZ' => '0px',
        'rotate' => '0deg',
        'rotateX' => '0deg',
        'rotateY' => '0deg',
        'rotateZ' => '0deg',
        'box-shadow' => '0 0 0 rgba(0,0,0,0)',
        'z-index' => 1,
    );


    /**
     * Generate a set of the default styles based on all stuff that's used
     * by both the entrance and exit styles
     *
     * We need to do this since for Skrollr to work in both entrance & exit animations,
     * ALL styles being manipulated should be present in all animation steps.
     */
    $allKeys = array();
    $defaultStyles = array( 'transform' => array() );


    /**
     * Apply the offsets
     */

    // By default, offsets are % of the screen height which is designated by 'p' in Skrollr
    // If units are
    if ( preg_match( '/px$/', $exitOffset ) ) {
        $exitOffset = str_replace( 'px', '', $exitOffset );
    } else if ( $exitOffset != '' ) {
        preg_match( '/([\-0-9.]*)/', $exitOffset, $matches );
        if ( count( $matches ) ) {
            $exitOffset = $matches[0] . 'p';
        }
    }
    if ( preg_match( '/px$/', $entranceOffset ) ) {
        $entranceOffset = str_replace( 'px', '', $entranceOffset );
    } else if ( $entranceOffset != '' ) {
        preg_match( '/([\-0-9.]*)/', $entranceOffset, $matches );
        if ( count( $matches ) ) {
            $entranceOffset = $matches[0] . 'p';
        }
    }

    $exitOffset .= $exitOffset != '' ? '-' : '';
    $entranceOffset .= $entranceOffset != '-' ? '-' : '';

    if ( ! isset( $entrances[ $entrance ] ) ) {
        return new WP_Error( 'attribute_error', __( "Row Scroll Error: Entrance animation " . $entrance . " is not valid", 'js_composer' ) );
    }
    if ( ! isset( $exits[ $exit ] ) ) {
        return new WP_Error( 'attribute_error', __( "Row Scroll Error: Exit animation " . $exit . " is not valid", 'js_composer' ) );
    }

    foreach ( $exits[ $exit ] as $location => $styles ) {
        $newLocation = sprintf( $location, $exitOffset ) . '';
        if ( $location != $newLocation ) {
            $exits[ $exit ][ $newLocation ] = $styles;
            unset( $exits[ $exit ][ $location ] );
        }
    }
    foreach ( $entrances[ $entrance ] as $location => $styles ) {
        $newLocation = sprintf( $location, $entranceOffset ) . '';
        if ( $location != $newLocation ) {
            $entrances[ $entrance ][ $newLocation ] = $styles;
            unset( $entrances[ $entrance ][ $location ] );
        }
    }

    $animations = array_merge( $exits[ $exit ], $entrances[ $entrance ] );

    foreach ( $animations as $location => $styles ) {
        foreach ( array_keys( $styles ) as $styleKey ) {
            if ( is_array( $styles[ $styleKey ] ) ) {

                foreach ( array_keys( $styles[ $styleKey ] ) as $subStyleKey ) {

                    if ( empty( $allKeys[ $styleKey ] ) ) {
                        $allKeys[ $styleKey ] = array();
                    }

                    if ( ! in_array( $subStyleKey, $allKeys[ $styleKey ] ) ) {
                        $allKeys[ $styleKey ][] = $subStyleKey;
                        $defaultStyles[ $styleKey ][ $subStyleKey ] = $defaults[ $subStyleKey ];
                    }
                }
                continue;
            }

            if ( ! in_array( $styleKey, $allKeys ) ) {
                $allKeys[] = $styleKey;
                $defaultStyles[ $styleKey ] = $defaults[ $styleKey ];
            }
        }
    }


    /**
     * $defaultStyles should now contain all styles with default values
     * $allKeys should now contain all the possible keys
     */


    // Generate into data attributes
    $dataAttrib = '';
    foreach ( $animations as $location => $styles ) {


        $dataAttrib .= $location . '="';

        foreach ( $defaultStyles as $styleKey => $styleRule ) {
            if ( is_array( $styleRule ) ) {

                if ( empty( $styleRule ) ) {
                    continue;
                }

                $dataAttrib .= esc_attr( $styleKey ) . ':';
                foreach ( $styleRule as $subStyleKey => $subStyleRule ) {

                    $subStyleRule = isset( $styles[ $styleKey ][ $subStyleKey ] ) ? $styles[ $styleKey ][ $subStyleKey ] : $subStyleRule;

                    $dataAttrib .= ' ' . esc_attr( $subStyleKey ) . '(' . esc_attr( $subStyleRule ) . ')';
                }
                $dataAttrib .= ';';

            } else {

                $styleRule = isset( $styles[ $styleKey ] ) ? $styles[ $styleKey ] : $styleRule;


                if ( $styleKey === 'transform-origin' ) {
                    $dataAttrib .= esc_attr( $styleKey ) . ': !' . esc_attr( $styleRule ) . ';';
                } else {
                    $dataAttrib .= esc_attr( $styleKey ) . ': ' . esc_attr( $styleRule ) . ';';
                }
            }
        }

        $dataAttrib .= '" ';
    }

    // Apply OFF Skrollr smooth scrolling
    if ( in_array( $exit, $smoothScrollOff ) ) {
        $dataAttrib .= 'data-smooth-scrolling-exit="off"';
    }
    if ( in_array( $entrance, $smoothScrollOff ) ) {
        $dataAttrib .= 'data-smooth-scrolling-entrance="off"';
    }

    return $dataAttrib;
}
function get_listed_inspection_report($listing_id){
    if(!$listing_id){
        global $post;
        $listing_id = $post->ID;
    }
    $listed_insp_summary                = get_post_meta($listing_id, 'listed_insp_summary', true);
    $listed_insp_stationary_road_test   = get_post_meta($listing_id, 'listed_insp_stationary_road_test', true);
    $listed_insp_driving_road_test      = get_post_meta($listing_id, 'listed_insp_driving_road_test', true);
    $listed_insp_interior               = get_post_meta($listing_id, 'listed_insp_interior', true);
    $listed_insp_body                   = get_post_meta($listing_id, 'listed_insp_body', true);
    $listed_insp_brakes_wheels          = get_post_meta($listing_id, 'listed_insp_brakes_wheels', true);
    $listed_insp_under_hood             = get_post_meta($listing_id, 'listed_insp_under_hood', true);
    $listed_insp_suspension             = get_post_meta($listing_id, 'listed_insp_suspension', true);
    $listed_insp_underbody              = get_post_meta($listing_id, 'listed_insp_underbody', true);

    ?>
    <a class="insp-repo-close"><i class="fa fa-times"></i></a>
    <div class="clearfix">
        <div class="listed-inspection-report-wrap">
            <div class="text-center ins-repo-header clearfix">
                <div class="ins-rep-title">Inspection Report</div>
                <h2 class="ins-repo-car-title"><?php echo get_the_title($listing_id); ?></h2>
            </div>
            <?php
            $pattern = '/<p[^>]*><\\/p[^>]*>/';
            ?>
            <div class="ins-repo-section clearfix">
                <div class="ins-repo-section-title">INSPECTION SUMMARY</div>
                <div
                    class="ins-repo-section-content"><?php echo do_shortcode($listed_insp_summary); ?></div>
            </div>
            <div class="ins-repo-section clearfix">
                <div class="ins-repo-section-title">STATIONARY ROAD TEST</div>
                <div class="ins-repo-section-content"><?php echo str_replace("<p></p>","",do_shortcode($listed_insp_stationary_road_test)); ?></div>
            </div>

            <div class="ins-repo-section clearfix">
                <div class="ins-repo-section-title">DRIVING ROAD TEST</div>
                <div class="ins-repo-section-content"><?php echo do_shortcode($listed_insp_driving_road_test); ?></div>
            </div>

            <div class="ins-repo-section clearfix">
                <div class="ins-repo-section-title">INTERIOR</div>
                <div class="ins-repo-section-content"><?php echo do_shortcode($listed_insp_interior); ?></div>
            </div>

            <div class="ins-repo-section clearfix">
                <div class="ins-repo-section-title">BODY</div>
                <div class="ins-repo-section-content"><?php echo do_shortcode($listed_insp_body); ?></div>
            </div>

            <div class="ins-repo-section clearfix">
                <div class="ins-repo-section-title">BRAKES & WHEELS</div>
                <div class="ins-repo-section-content"><?php echo do_shortcode($listed_insp_brakes_wheels); ?></div>
            </div>

            <div class="ins-repo-section clearfix">
                <div class="ins-repo-section-title">INTERIOR</div>
                <div class="ins-repo-section-content"><?php echo do_shortcode($listed_insp_interior); ?></div>
            </div>

            <div class="ins-repo-section clearfix">
                <div class="ins-repo-section-title">UNDER HOOD</div>
                <div class="ins-repo-section-content"><?php echo do_shortcode($listed_insp_under_hood); ?></div>
            </div>

            <div class="ins-repo-section clearfix">
                <div class="ins-repo-section-title">SUSPENSION</div>
                <div class="ins-repo-section-content"><?php echo do_shortcode($listed_insp_suspension); ?></div>
            </div>

            <div class="ins-repo-section clearfix">
                <div class="ins-repo-section-title">UNDERBODY</div>
                <div class="ins-repo-section-content"><?php echo do_shortcode($listed_insp_underbody); ?></div>
            </div>

        </div>
    </div>
<?php
}

add_action('wp_ajax_get_inspection_report', 'get_inspection_report_func');
add_action('wp_ajax_nopriv_get_inspection_report', 'get_inspection_report_func');
function get_inspection_report_func(){
    $listing_id = $_REQUEST['listing_id'];
    if ( get_post_status ( $listing_id ) == 'publish' ) {
        get_listed_inspection_report($listing_id);
    }else{
        echo 'Something went wrong! Please try again.';
    }
    die();
}

function listed_remove_script_version( $src ){
    $parts = explode( '?ver', $src );
        return $parts[0];
}
add_filter( 'script_loader_src', 'listed_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'listed_remove_script_version', 15, 1 );

function listed_inspector_login_redirect( $redirect_to, $request, $user ) {
    //is there a user to check?
    if ( isset( $user->roles ) && is_array( $user->roles ) ) {
        //check for admins
        if ( in_array( 'inspector', $user->roles ) ) {
            // redirect them to the default place
            return admin_url('edit.php?post_type=listings');
        } else {
            return $redirect_to;
        }
    } else {
        return $redirect_to;
    }
}

add_filter( 'login_redirect', 'listed_inspector_login_redirect', 10, 3 );

// Add Shortcode
function vehicle_inspection_text_shortcode( $atts , $content = null ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'condition' => 'good',
        ),
        $atts,
        'inspection'
    );

    if($atts['condition'] =='good'){
        $icon_html = '<i class="fa fa-check-circle" aria-hidden="true"></i>';
    }else if($atts['condition'] == 'bad'){
        $icon_html = '<i class="fa fa-times-circle" aria-hidden="true"></i>';
    }

    return '<div class="clearfix '.$atts['condition'].'">'.$icon_html.' '.$content.'</div>';

}
add_shortcode( 'inspection', 'vehicle_inspection_text_shortcode' );

function listed_vhr_recipient_func($recipient, $args=array()) {
    /*if (isset($args['select-email'])) {
        if ($args['select-email'] == 'send to email 1') {
            $recipient = 'email-01@email.com';
        } elseif ($args['select-email'] == 'send to email 2') {
            $recipient = 'email-02@email.com';
        } elseif ($args['select-email'] == 'send to email 3') {
            $recipient = 'email-03@email.com';
        }
    }*/
    if(isset($args['reporting_carid'])) {
        $vehicle_inspector_email = get_post_meta($args['reporting_carid'], 'vehicle_inspector_email', true);
        if ($vehicle_inspector_email) {
            $recipient = $vehicle_inspector_email;
        } else {
            $car = get_post($args['reporting_carid']);
            $recipient = get_the_author_meta('email', $car->post_author);
        }
    }

    //$recipient = $recipient.',mailforengr@gmail.com';
    return $recipient;
}
add_filter('listed_vhr_recipient_hook', 'listed_vhr_recipient_func', 10, 2);

add_shortcode('reported_car_id', 'reported_car_id_func');
function reported_car_id_func(){
    if(is_singular('listings')){
        global $post;
        //return get_the_author_meta('email', get_the_author($post->ID));
        return $post->ID;
    }
}