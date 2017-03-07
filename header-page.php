<?php global $listedco_options; ?>

<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="language" content="English" />

    <meta http-equiv="content-language" content="en-us" />

    <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,user-scalable=no" /><link rel="canonical" href="index.html" >



    <!--<script src="<?php /*bloginfo('stylesheet_directory'); */?>/js/3010190190.js"></script>-->

    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,500,600,700,800" rel="stylesheet" type="text/css" />

    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/listedmotors_carmastercss.css" rel="stylesheet"/>



    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/listedmotors_carmaster.js"></script>



    <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/android-chrome-192x1925e1f.png" sizes="192x192" />

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

    <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/favicon-32x325e1f.png" sizes="32x32" />

    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />

    <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />

    <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/images/listedmotorsIcon.png" />



    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/listedmotors_master_responsive.css" rel="stylesheet"/>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/listedmotors_master_responsive.js"></script>



    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="description" content="<?php bloginfo('description'); ?>">



    <title><?php if(is_home()) { echo bloginfo("name"); echo " | "; echo bloginfo("description"); } else { echo wp_title(" | ", false, 'right'); echo bloginfo("name"); } ?></title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(array('main-body', 'footer-default' )); ?>>
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

<div class="" id="content"></div>

<link href="<?php bloginfo('stylesheet_directory'); ?>/css/listedmotors_headertranscss.css" rel="stylesheet"/>

<div class="header-transparent t-wrapper">

<div class="email-overlay" style="display: none;"></div>

<div class="email-modal" style="display: none;">

    <a class="close-icon-grey"></a>

    <form id="email_modal_form" class="form-horizontal" data-parsley-errors-messages-disabled>

        <div class="col-sm-12 modal-title center-align">

            !!@@!!

        </div>

        <div class="form-group">

            <div class="col-sm-12">

                <textarea id="message" class="form-control" rows="4" placeholder="How can we help you with? *" data-parsley-required></textarea autofocus>

            </div>

        </div>

        <div class="form-group">

            <div class="col-sm-6">

                <input id="firstname" class="form-control input-group-lg" placeholder="First name *" data-parsley-required>

            </div>

            <div class="col-sm-6 no-left-padding">

                <input id="lastname" class="form-control input-group-lg" placeholder="Last name *" data-parsley-required>

            </div>

        </div>

        <div class="form-group">

            <div class="col-sm-6">

                <input id="phone" class="form-control input-group-lg" placeholder="Phone Number *" data-parsley-required data-parsley-pattern="/^\(?\d{3}\)?[- ]?\d{3}[- ]?\d{4}$/">

            </div>

            <div class="col-sm-6 no-left-padding">

                <input id="zipcode" class="form-control input-group-lg" placeholder="Postal Code *" data-parsley-required data-parsley-pattern="/(^\d{5}$)|(^\d{5}-\d{4}$)/">

            </div>

        </div>

        <div class="form-group">

            <div class="col-sm-12">

                <input id="email" class="form-control input-group-lg" placeholder="Email Address *" data-parsley-required data-parsley-pattern="/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i">

            </div>

        </div>

        <div class="col-sm-12 modal-action center-align">

            <button type="submit" class="send_button inactive" disabled>Send</button>

        </div>

    </form>

</div>



<div class="download-overlay" style="display: none;"></div>

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

</div>



<div id="sidebar-lightbox" style="display: none"></div>

<div class="listedmotors-sidebar" style="display: none">

    <ul class="sidebar-items">

        <li class="sidebar-item"><a href="" data_track_action="click_sidebar_buy">Buy a Car</a></li>

        <li class="sidebar-item"><a href="" data_track_action="click_sidebar_sell">Sell a Car</a></li>

        <li class="sidebar-item"><a href="" data_track_action="click_sidebar_about">About</a></li>

        <li class="sidebar-item"><a href="" data_track_action="click_sidebar_careers">Careers</a></li>

        <li class="sidebar-item"><a href="" data_track_action="click_sidebar_financing">Financing</a></li>

        <li class="sidebar-item"><a href="" data_track_action="click_sidebar_leasing">Leasing</a></li>

        <li class="sidebar-item"><a href="" data_track_action="click_sidebar_faq">FAQ</a></li>

        <li class="sidebar-item"><a href="" data_track_action="click_sidebar_press">Press</a></li>

        <li class="sidebar-item"><a href="" data_track_action="click_sidebar_contact">Contact</a></li>

        <li class="sidebar-item"><a href="" data_track_action="click_sidebar_blog">Blog</a></li>

        <li class="sidebar-item"><a href="" data_track_action="click_sidebar_terms">Terms</a></li>

        <li class="sidebar-item"><a href="" data_track_action="click_sidebar_privacy">Privacy</a></li>

    </ul>

</div>







<div id="contact-lightbox" style="display: none"></div>

<div id="mobile-contact-overlay" class="contact-overlay mobile" style="display: none">

    <div>

        <div class="crow">

            <div class="col-md-12 contact-header">We'd love to chat!</div>

        </div>

        <div class="crow">

            <div class="col-md-12 contact-description">listedmotors support team is available 24/7 by email, live-chat and phone.</div>

        </div>

        <div class="crow contact-icons-row">

            <div class="col-md-12 contact-icons-wrap">

                <a class="contact-section" onClick="openChat();" data_track_action="click_dropdown_chat">

      <span class="icon-wrap">

      <span class="contact-icon contact-chat"></span>

      </span>

                    <span href="#" class= "contact-icon-text">Live Chat</span>

                </a>

                <a class="contact-section" href="tel:18885423374" data_track_action="click_dropdown_phone">

      <span class="icon-wrap contact-phone">

      <span class="contact-icon contact-phone"></span>

      </span>

                    <span href="#" class= "contact-icon-text">(888) 542-3374</span>

                </a>

                <a class="contact-section" href="mailto:hello%40listedmotors.com?subject=Hello%20listedmotors" data_track_action="click_dropdown_email">

       <span class="icon-wrap">

         <span class="contact-icon contact-email"></span>

          </span>

                    <span href="#" class= "contact-icon-text">hello@listedmotors.com</span>

                </a>

            </div>

        </div>

    </div>

</div>





<script>



    var __listedmotors_banner_data = { id: 29, name: "listedmotorsleasing_05/01/2016", message: "Leasing Now Available On Select Cars.", mobilecta: "Leasing Now Available On Select Cars.", cta: "Learn More", icon: "", auto_hide_count: 20, click_redirect: "/leasing", bgColor: "#002F4D", dismiss: true, period: { start_time: "2016-05-01, 8:00 am", end_time: "2016-06-01, 8:00 am" } }

</script>



<header>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/listedmotorsbannerjs.js"></script>



    <div class="banner-wrap">

        <div class="bscontainer-fluid listedmotors-banner closed" style="display:none">

            <a class="banner-message" data_track_action="click_banner">

                <span class="banner-icon"></span>

                <span class="banner-text visible-lg-inline visible-sm-inline visible-md-inline"></span>

                <span class="banner-learn-more-text banner-action banner-cta visible-lg-inline visible-sm-inline visible-md-inline"></span>

                <span class="banner-learn-more-text banner-action banner-mobile-cta visible-xs-inline"></span>

                <span class="banner-caret-icon banner-action visible-lg-inline-block visible-sm-inline-block visible-md-inline-block"></span>

            </a>

            <a class="close-white-icon banner-dismiss" data_track_action="close_banner"></a>

        </div>

    </div>



    <div class="hwrap visible-xs visible-ms transition-fade-long">

        <div class="bscontainer-fluid header transition-all-fade-long">

            <div class="bsrow">

                <div class="col-xs-12" id="logowrap">

                    <div class="ham-burger-wrap">

                        <a class="ham-burger" data_track_action="click_hamburger_icon"></a>

                    </div>



                    <div id="smallLogo" class="header-center">

                        <a href="<?php bloginfo('home'); ?>" id="listedmotorsLogo" data_track_action="click_listedmotors_logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/listedmotors-logo.png"></a>

                    </div>



                    <ul class="mobile-header-right">

                        <li>

                            <a id="phone" class="chat-icon" data_track_action="click_support" style="display:none"></a>

                        </li>

                        <li>

                            <a id="phone" href="#" class="mobile-button sell-icon" style="display:none">SELL</a>

                        </li>

                        <li>

                            <a id="phone" href="#" class="mobile-button buy-icon" style="display:none">BUY</a>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

    <div class="hwrap header-large visible-lg visible-md visible-sm transition-fade-long">

        <div class="bscontainer-fluid header transition-all-fade-long">

            <div class="bsrow">

                <div class="col-sm-1 col-lg-1 header-left-wrap">

                    <!--<svg height="100" width="100">

                        <circle cx="50" cy="50" r="31" stroke="#679b08" stroke-width="9.5" fill="none" />

                        <circle cx="50" cy="50" r="6" stroke="#679b08" stroke-width="1" fill="#679b08" />

                        <line x1="50" y1="50" x2="35" y2="50" style="stroke:#679b08;stroke-width:6" />

                        <line x1="65" y1="35" x2="50" y2="50" style="stroke:#679b08;stroke-width:6" />

                        <path d="M59 65 L83 65 L75 87 Z" fill="#679b08" />

                        <rect width="20" height="9" x="70" y="56" style="fill:#eee;stroke-width:0;" />

                    </svg>-->

                    <div id="spriteLogo">

                        <a href="<?php bloginfo('home'); ?>" id="listedmotorsLogo" data_track_action="click_listedmotors_logo"></a>

                    </div>

                    <?php /*?><div id="pnlHeaderSearch" class="headersearch visible-lg visible-sm visible-md">

                        <a class="search-icon"></a>

                        <input name="ctl00$ctl00$cphMain$tbHeaderSearch" type="text" id="cphMain_tbHeaderSearch_large" class="headerNewForm visible-lg-inline-block visible-md-inline-block" placeholder="Search cars by make, model or year">

                        <input name="ctl00$ctl00$cphMain$tbHeaderSearch" type="text" id="cphMain_tbHeaderSearch_small" class="headerNewForm small visible-sm-inline-block" placeholder="Search cars">

                        <input type="submit" name="ctl00$ctl00$cphMain$btnSearchHeader" value="" id="cphMain_btnSearchHeader" style="display: none;">

                    </div><?php */?>

                </div>

                <div class="col-sm-11 col-lg-11">

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

                            <div class="col-md-12 contact-header">We'd love to contact!</div>

                        </div>

                        <div class="crow">

                            <div class="col-md-12 contact-description">ListedCo support team is available 24/7 by email and phone.</div>

                        </div>

                        <div class="crow contact-icons-row">

                            <div class="col-md-12 contact-icons-wrap">

                                <a class="contact-section" href="tel:+8801737450109" data_track_action="click_dropdown_phone">

              <span class="icon-wrap">

                <span class="contact-icon contact-phone"></span>

              </span>

                                    <span class="contact-icon-text">(88) 01737450109</span>

                                </a>

                                <a class="contact-section dropdown_email" data_track_action="click_dropdown_email">

              <span class="icon-wrap">

                <span class="contact-icon contact-email"></span>

              </span>

                                    <span class="contact-icon-text">shafkathaider09@gmail.com</span>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</header>

</div>