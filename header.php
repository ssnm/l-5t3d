
<?php global $listedco_options; ?>
    <!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <title><?php if(is_home()) { echo bloginfo("name"); echo " | "; echo bloginfo("description"); } else { echo wp_title(" | ", false, 'right'); echo bloginfo("name"); } ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="content-language" content="en-us" />
        <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,user-scalable=no">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,900" rel="stylesheet">
        <!--<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,500,600,700,800" rel="stylesheet" type="text/css" />-->
        <?php if(is_home() || is_front_page()){ ?>
            <style>
                .homepageCarPhoto {
                    background-image: url("<?php if($listedco_options['home-slider-main-image']){echo $listedco_options['home-slider-main-image']['url']; }else{ bloginfo('stylesheet_directory'); ?>/images/auto_1800.jpg<?php } ?>");
                    background-position: center top;
                    background-repeat: no-repeat;
                    height: 87%;
                    background-size: contain;
                    position: relative;
                    bottom: 23%;
                }
            </style>
        <?php } ?>
        <script>
            internal = {};
            internal.messageCount = 0;
            internal.log = function(){
                if (__listedmotorsProperties.isInternal && arguments.length) {
                    if (internal.messageCount === 0) console.log('internal:')
                    for (i = 0; i < arguments.length; i++) {
                        console.log(arguments[i]);
                    }
                    internal.messageCount++;
                }
            };

            __listedmotorsProperties = {
                server: "listedmotors-IIS-2",
                version: "1209",
                imageSource: 'cloudinary',
                isInternal: false,
                headerType: "DEFAULT",
                isBaseView: false,
                facebookAppID: 1376721145916556,
                pageName : ""
            }

            internal.log('listedmotorsProperties',__listedmotorsProperties);
        </script>
        <!--<script src="<?php /*bloginfo('stylesheet_directory'); */?>/js/3010190190.js"></script>-->

        <?php /*?><link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/android-chrome-192x1925e1f.png" sizes="192x192" />
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/apple-touch-icon-180x1805e1f.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/apple-touch-icon-152x1525e1f.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/apple-touch-icon-144x1445e1f.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/apple-touch-icon-120x1205e1f.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/apple-touch-icon-114x1145e1f.png" />
        <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/favicon-96x965e1f.png" sizes="96x96" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/apple-touch-icon-76x765e1f.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/apple-touch-icon-72x725e1f.png" />
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/apple-touch-icon-60x605e1f.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/apple-touch-icon-57x575e1f.png" />
        <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/favicon-16x165e1f.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/favicon-32x325e1f.png" sizes="32x32" /><?php */?>
        <link rel="shortcut icon" href="<?php echo $listedco_options["site-favicon"]["url"] ? $listedco_options["site-favicon"]["url"] : get_bloginfo('stylesheet_directory').'/images/favicon/favicon.ico';?>" />
        <link rel="apple-touch-icon" href="<?php echo $listedco_options["site-favicon"]["url"] ? $listedco_options["site-favicon"]["url"] : get_bloginfo('stylesheet_directory').'/images/favicon/favicon.ico';?>" />
        <?php /*?><link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/images/listedmotorsIcon.png" /><?php */?>

        <script type="text/javascript">
            function ShowProcessingLoader() {
                divMasterProcessingLoader.style.display = '';
            }
            function ShowProcessingLoadIfValid(validationGroup) {
                if (Page_ClientValidate(validationGroup)) {
                    ShowProcessingLoader();
                }
            }
            function HideProcessingLoader() {
                divMasterProcessingLoader.style.display = 'none';
            }
        </script>
        <?php wp_head(); ?>
    </head>
<?php
//$body_clasess_extra = array('main-body', 'footer-default');
$body_clasess_extra = array('main-body');
if(is_singular('listings')){
    global $post;
    $body_clasess_extra = array('main-body', 'footer-default', 'wait-loading-car');
    ?>
    <style>.footer-default .wrapper{opacity:0;}</style>
    <style>
        body.wait-loading-car{
            overflow-y: hidden;
            height: 100vh;
            position: fixed;
            left: 0;
            right: 0;
        }
        .car-loading-wait {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 999;
        }

        .car-loading-wait .car-circle-loader {
            border: 10px solid #f3f3f3;
            border-radius: 50%;
            border-top: 10px solid #009bff;
            width: 60px;
            height: 60px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
            margin: 50vh auto;
            position: relative;
            z-index: 999999;
            top: -30px;
        }

        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    <script type="text/javascript">
        jQuery(document).ready(function(){jQuery('input[name="car-name"]').val("<?php echo $post->post_title; ?>").attr('readonly', true);});
        jQuery(window).load(function(){jQuery('body').removeClass('wait-loading-car');jQuery('.car-loading-wait').fadeOut("slow"); jQuery('.footer-default .wrapper').fadeTo( "slow" , 1);});
    </script>
<?php
}else{
?>
    <script type="text/javascript">
        jQuery(document).ready(function(){jQuery('input[name="car-name"]').parents('.form-group').remove();});
    </script>
<?php
}
if(is_page(53)){
    $body_clasess_extra[] = 'noSearch';
    $body_clasess_extra[] = 'noOptions';
    /*$body_clasess_extra[] = 'hideSearch';
    $body_clasess_extra[] = 'hideSearchControls';
    $body_clasess_extra[] = 'hideResultsBar';
    if (($key = array_search('footer-default', $body_clasess_extra)) !== false) {
        unset($body_clasess_extra[$key]);
    }*/
}
?>
<body <?php body_class($body_clasess_extra); ?>>
<div class="car-loading-wait"><div class="car-circle-loader"></div></div>
    <div class="" id="content"></div>
    <div class="email-overlay" style="display: none;">
        <div class="email-modal-wrap">
            <div class="email-modal" style="max-width:500px;">
                <a class="close-icon-grey"></a>
                <div class="col-sm-12 modal-title center-align">What can we help you with?</div>
                <div class="email_modal_form_wrap">
                    <?php echo do_shortcode('[contact-form-7 id="88"]'); ?>
                </div>
            </div>
        </div>
    </div>
  
  	<div class="oc-email-overlay" style="display: none;">
        <div class="email-modal-wrap">
            <div class="oc-email-modal" style="max-width:500px;">
                <a class="close-icon-grey"></a>
                <div class="col-sm-12 modal-title center-align">What can we help you with?</div>
                <div class="email_modal_form_wrap">
                    <?php echo do_shortcode('[contact-form-7 id="562" title="24/7 Support"]'); ?>
                </div>
            </div>
        </div>
    </div>
  
    <div class="car-email-overlay" style="display: none;">
        <div class="email-modal-wrap">
            <div class="car-email-modal" style="max-width:500px;">
                <a class="close-icon-grey"></a>
                <div class="col-sm-12 modal-title center-align">Don't find the car for you?</div>
                <div class="col-sm-12 modal-subtitle center-align">Let us know!</div>
                <div class="email_modal_form_wrap">
                    <?php echo do_shortcode('[contact-form-7 id="476" title="Ask Us (Popup)"]'); ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="inspection-report-overlay" style="display:none;">
        <div class="inspection-report-wrap">
            <div class="inspection-report-body"></div>
        </div>
    </div>
<?php
$logo_style = '';
if($listedco_options["site-logo"]["url"]){

    $logo_url = $listedco_options["site-logo"]["url"];
    $logo_width = $listedco_options["site-logo"]["width"];
    $logo_height = $listedco_options["site-logo"]["height"];

    if(is_page() && !is_page_template( 'page-generic.php' ) && (!is_home() || !is_front_page()) && !is_page(53)){
        $logo_url = $listedco_options["site-logo-trans"]["url"];
        $logo_width = $listedco_options["site-logo-trans"]["width"];
        $logo_height = $listedco_options["site-logo-trans"]["height"];
    }

    $logo_style = 'style="';
    $logo_style .= 'background-image:url('.$logo_url.') !important;';
    $logo_style .= 'width:'.$logo_width.'px;';
    $logo_style .= 'height:'.$logo_height.'px;';
    $logo_style .= 'background-position: 0 0;';
    $logo_style .= 'background-size: auto;';
	$logo_style .= 'background-repeat: no-repeat;';
    $logo_style .='"';

    ?>
    <style type="text/css">
        @media screen and (max-width : 530px) {
            div#smallLogo{ width: 100%; }
            .no-padding-in-mobile{ padding:0 }
        }
        @media screen and (max-width : 480px) {
            div#smallLogo a#listedmotorsLogo{ background-size: 100% !important; width: 100% !important; display: block;  }
        }
    </style>
<?php
}
?>
    <?php /*?><div class="download-overlay" style="display: none;"></div>
    <div class="listedmotors-modal" style="display: none;">
        <div class="download-modal" style="display: none;">
            <a class="close-icon-grey"></a>
            <div id="download_modal_form" class="form-horizontal" >
                <div class="width50 phone-image-wrapper">
                    <img class="phone-image" />
                </div>
                <div class="width50 form-wrapper">
                    <form id="download_modal_form" class="form-horizontal"  autocomplete="false">
                        <div class="modal-title center-align">
                            ListedCo on the go!
                        </div>
                        <div class="modal-subtitle center-align">
                            Enter your phone number and we’ll text you a link to download the app.
                        </div>
                        <input autofocus id="phone" class="form-control input-group-lg" placeholder="Mobile Number*" data-parsley-errors-messages-disabled data-parsley-required data-parsley-pattern="/^\(?\d{3}\)?[- ]?\d{3}[- ]?\d{4}$/">
                        <button type="submit" class="send_download_link inactive" disabled>Text me the link</button>
                        <div class="center-align conditions">
                            *Message and data rates may apply.
                        </div>
                        <div class="modal-title center-align">
                            <a class="ios-download" href="https://itunes.apple.com/us/app/listedmotors/id997496785" target="_blank "></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><?php */?>

    <div id="sidebar-lightbox" style="display: none"></div>
    <div class="listedmotors-sidebar" style="display: none">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'mobile_menu',
                'depth' => 1,
                'container' => false,
                'menu_class' => 'sidebar-items',
            )
        );
        ?>
    </div>

    <div id="contact-lightbox" style="display: none"></div>
    <div id="mobile-contact-overlay" class="contact-overlay mobile" style="display: none">
        <div>
            <div class="crow">
                <div class="col-md-12 contact-header">We'd love to hear from you!</div>
            </div>
            <div class="crow">
                <div class="col-md-12 contact-description">Our support team is available by email and phone.</div>
            </div>
            <div class="crow contact-icons-row">
                <div class="col-md-12 contact-icons-wrap">
                    <a class="contact-section" href="tel:5879690077">
                    <span class="icon-wrap contact-phone">
                        <span class="contact-icon contact-phone"></span>
                    </span>
                        <span href="#" class= "contact-icon-text">5879690077</span>
                    </a>
                    <a class="contact-section" href="mailto:info@listedmotors.ca">
                    <span class="icon-wrap">
                        <span class="contact-icon contact-email"></span>
                    </span>
                        <span href="#" class= "contact-icon-text">info@listedmotors.ca</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php if(is_page() && !is_page_template( 'page-generic.php' ) && (!is_home() || !is_front_page()) && !is_page(53)){ ?>
<div class="header-transparent t-wrapper">
<?php } ?>
    <header <?php if(is_page(53)){ echo 'class="reveal"'; } ?>>
        <div class="hwrap visible-xs visible-ms transition-fade-long">
            <div class="bscontainer-fluid header transition-all-fade-long">
                <div class="bsrow">
                    <div class="col-xs-12" id="logowrap">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="ham-burger-wrap">
                                    <a class="ham-burger"></a>
                                </div>
                            </div>
                            <div class="col-xs-4 text-center no-padding-in-mobile">
                                <div id="smallLogo" class=""><!--header-center-->
                                    <a href="<?php bloginfo('home'); ?>" id="listedmotorsLogo" <?php echo $logo_style; ?> ></a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <ul class="mobile-header-right">
                                    <li>
                                        <a id="phone" class="chat-icon"></a>
                                    </li>
                                    <li style="display:none;">
                                        <a id="phone" href="<?php echo site_url('sell'); ?>" class="mobile-button sell-icon">SELL</a>
                                    </li>
                                    <li style="display:none;">
                                        <a id="phone" href="<?php echo site_url('buy'); ?>" class="mobile-button buy-icon">BUY</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hwrap header-large visible-lg visible-md visible-sm transition-fade-long">
            <div class="bscontainer-fluid header transition-all-fade-long">
                <div class="bsrow">
                    <div class="col-sm-2 col-lg-2 header-left-wrap">
                        <div id="spriteLogo">
                            <a <?php echo $logo_style; ?> href="<?php bloginfo('home'); ?>" id="listedmotorsLogo"></a>
                        </div>
                        <?php /*?><div id="pnlHeaderSearch" class="headersearch visible-lg visible-sm visible-md">
                            <a class="search-icon"></a>
                            <input name="ctl00$ctl00$cphMain$tbHeaderSearch" type="text" id="cphMain_tbHeaderSearch_large" class="headerNewForm visible-lg-inline-block visible-md-inline-block" placeholder="Search cars by make, model or year">
                            <input name="ctl00$ctl00$cphMain$tbHeaderSearch" type="text" id="cphMain_tbHeaderSearch_small" class="headerNewForm small visible-sm-inline-block" placeholder="Search cars">
                            <input type="submit" name="ctl00$ctl00$cphMain$btnSearchHeader" value="" id="cphMain_btnSearchHeader" style="display: none;">
                        </div><?php */?>
                    </div>
                    <div class="col-sm-10 col-lg-10">
                        <nav class="navbar navbar-default">
                            <div>
                                <div id="navbar" class="navbar-collapse collapse">
                                    <?php

                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'top_menu',
                                            'depth' => 2,
                                            'container' => false,
                                            'menu_id' => 'headerlinks',
                                            'menu_class' => 'nav navbar-nav',
                                            'walker' => new listedco_bootstrap_navwalker()
                                        )
                                    );

                                    ?>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <div id="desktop-contact-lightbox" style="display: none"></div>
            <div class="bscontainer-fluid contact-dropdown" style="display: none">
                <div class="bsrow visible-lg visible-sm visible-md">
                    <div id="contact-overlay" class="contact-overlay">
                        <div class="contact-overlay-background"></div>
                        <div class="contact-content">
                            <div class="crow">
                                <div class="col-md-12 contact-header">We'd love to hear from you!</div>
                            </div>
                            <div class="crow">
                                <div class="col-md-12 contact-description">Our support team is available by email and phone.</div>
                            </div>
                            <div class="crow contact-icons-row">
                                <div class="col-md-12 contact-icons-wrap">
                                    <a class="contact-section" href="tel:5879690077">
                                    <span class="icon-wrap">
                                    	<span class="contact-icon contact-phone"></span>
                                    </span>
                                        <span class="contact-icon-text">5879690077</span>
                                    </a>
                                    <a class="contact-section dropdown_email">
                                    <span class="icon-wrap">
                                    	<span class="contact-icon contact-email"></span>
                                    </span>
                                        <span class="contact-icon-text">info@listedmotors.ca</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php if(is_page() && !is_page_template( 'page-generic.php' ) && (!is_home() || !is_front_page()) && !is_page(53)){ ?>
    </div>
<?php } ?>