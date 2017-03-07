<?php get_header(); ?>
<?php global $listedco_options; ?>
    <listedmotors-message></listedmotors-message>

    <div class="wrapper">
        <?php /*?><div id="divMasterProcessingLoader" class="processingLoader" style="display: none;" >
            <div style="margin-top: 300px;">
                <img id='imgMasterProcessingLoader' src='<?php bloginfo('stylesheet_directory'); ?>/images/listedmotors_spinner.gif' alt="Please wait, loading..." style="height:80px; width:80px;"/><br />
                <br /><br />
                <span style="-webkit-font-smoothing: antialiased; font-size: 18px; font-weight: bold;">Listed will be right with you...</span>
            </div>
        </div><?php */?>
        <div id="sb-site">
            <div class="bscontainer-fluid">
                <div id="videowrap">
                                                <video id="vidlistedmotorsClip" preload="metadata">
                                                    <?php if($listedco_options['hero-video-mp4']['url']){ ?>
                                                        <source src="<?php echo $listedco_options['hero-video-mp4']['url']; ?>" type='video/mp4' />
                                                    <?php } ?>
                                                    <?php if($listedco_options['hero-video-ogv']['url']){ ?>
                                                        <source src="<?php echo $listedco_options['hero-video-ogv']['url']; ?>" type='video/ogg' />
                                                    <?php } ?>
                                                    <?php if($listedco_options['hero-video-webm']['url']){ ?>
                                                        <source src="<?php echo $listedco_options['hero-video-webm']['url']; ?>" type='video/webm' />
                                                    <?php } ?>
                                                </video>
                                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/bt_close_transparent.png" id="closebutton" style="width: 37px; height: 37px;" alt="Close">
                                            </div> 
                <div class="bsrow">
                    <div id="demo-wrapper">
                        <div id="demo-canvas" style=" ">
                            <div class="col-sm-12">
                                <div class="centercont">
                                    <h1><?php if($listedco_options['home-slider-title']){echo $listedco_options['home-slider-title']; }else{ ?>Every car is hand-inspected.<br>Hand-wrapped. And<a href=""> hand-delivered.</a><?php } ?></h1>
                                    <div class="title homepageCarPhoto">
                                        <?php if($listedco_options['hero-video-mp4']['url'] || $listedco_options['hero-video-ogv']['url'] || $listedco_options['hero-video-webm']['url']){ ?>
                                            <div id="divPlayButton" class="videoPlayButton">
                                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/HomePageVideoPlay.png" id="playbutton" alt="Play ListedCo Video!">
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <?php if($listedco_options['buy-circle-title'] || $listedco_options['buy-circle-content']){ ?>
                                <div id="buy-menu">
                                    <div id="buywrap" class="hidden-xs hidden-sm"> <!-- buy -->
                                        <a class="btn btn-lg" href="<?php echo $listedco_options['buy-circle-url'] ? $listedco_options['buy-circle-url'] : '#'; ?>" id="buycircle"><span>BUY <i class="fa fa-angle-right"></i></span>
                                            <?php /* ?><img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow_buy.png" id="arrowbuy" alt=""><?php */ ?></a>
                                        <div id="buy-content">
                                            <?php if($listedco_options['buy-circle-title']){ ?>
                                                <h2><?php echo $listedco_options['buy-circle-title']; ?></h2>
                                            <?php } ?>
                                            <?php echo $listedco_options['buy-circle-content']; ?>
                                            <a class="listedmotorsblue learnmore" href="<?php echo $listedco_options['buy-circle-url'] ? $listedco_options['buy-circle-url'] : '#'; ?>">LEARN MORE</a>
                                            <a href="<?php echo $listedco_options['buy-circle-url'] ? $listedco_options['buy-circle-url'] : '#'; ?>" class="buy_but"><span>BUY A CAR</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if($listedco_options['sell-circle-title'] || $listedco_options['sell-circle-content']){ ?>
                                <div id="sell-menu">
                                    <div id="sellwrap" class="hidden-xs hidden-sm"> <!-- sell -->
                                        <a class="btn btn-lg" href="<?php echo $listedco_options['sell-circle-url'] ? $listedco_options['sell-circle-url'] : '#'; ?>" id="sellcircle"><span><i class="fa fa-angle-left"></i> SELL</span>
                                            <?php /* ?><img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow_sell.png" id="arrowsell" alt="" class=""><?php */ ?></a>
                                        <div id="sell-content">
                                            <?php if($listedco_options['sell-circle-title']){ ?>
                                                <h2><?php echo $listedco_options['sell-circle-title']; ?></h2>
                                            <?php } ?>
                                            <?php echo $listedco_options['sell-circle-content']; ?>
                                            <a class="listedmotorsgreen learnmore" href="<?php echo $listedco_options['sell-circle-url'] ? $listedco_options['sell-circle-url'] : '#'; ?>">LEARN MORE</a>
                                            <a href="<?php echo $listedco_options['sell-circle-url'] ? $listedco_options['sell-circle-url'] : '#'; ?>" class="sell_but"><span>SELL YOUR CAR</span></a>
                                        </div>
                                    </div>

                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="bsrow visible-xs visible-sm" id="buysellsmall">
                    <!-- Nav tabs -->
                    <ul id="sticky-bar" class="home-nav">
                        <li role="presentation" class="sellcircle">
                            <a class="ssellcircle" href="<?php echo $listedco_options['sell-circle-url'] ? $listedco_options['sell-circle-url'] : '#'; ?>" >Sell my car</a>
                        </li>
                        <li role="presentation" class="buycircle">
                            <a class="sbuycircle" href="<?php echo $listedco_options['buy-circle-url'] ? $listedco_options['buy-circle-url'] : '#'; ?>">Buy a Car</a>
                        </li>
                    </ul>

                    <div class="fixed-buttons" style="display:none">
                        <a href="<?php echo $listedco_options['sell-circle-url'] ? $listedco_options['sell-circle-url'] : '#'; ?>" class="sell-button">Sell my car</a>
                        <a href="<?php echo $listedco_options['buy-circle-url'] ? $listedco_options['buy-circle-url'] : '#'; ?>" class="buy-button active">Buy a Car</a>
                    </div>

                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="tab-containers">
                            <!-- Tab panes -->
                            <?php if($listedco_options['buy-circle-title'] || $listedco_options['buy-circle-content']){ ?>
                                <div class="tab-content-buy">
                                    <div id="buy-tab">
                                        <?php if($listedco_options['buy-circle-title']){ ?>
                                            <h2><?php echo $listedco_options['buy-circle-title']; ?></h2>
                                        <?php } ?>
                                        <?php echo $listedco_options['buy-circle-content']; ?>
                                        <a class="listedmotorsblue" href="<?php echo $listedco_options['buy-circle-url'] ? $listedco_options['buy-circle-url'] : '#'; ?>">Learn more</a>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if($listedco_options['sell-circle-title'] || $listedco_options['sell-circle-content']){ ?>
                                <div class="tab-content-sell">
                                    <div id="sell-tab">
                                        <?php if($listedco_options['sell-circle-title']){ ?>
                                            <h2><?php echo $listedco_options['sell-circle-title']; ?></h2>
                                        <?php } ?>
                                        <?php echo $listedco_options['sell-circle-content']; ?>
                                        <a class="listedmotorsgreen" href="<?php echo $listedco_options['sell-circle-url'] ? $listedco_options['sell-circle-url'] : '#'; ?>">Learn more</a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php /*if($listedco_options['home-magazine-logos']){ ?>
                    <div class="bsrow mag">
                        <?php echo $listedco_options['home-magazine-logos']; ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/divider.jpg" id="magfoot" class="img-responsive" alt="">
                    </div>
                <?php }*/ ?>
            </div>

            <div class="container margin-bottom-50">
                <div class="text-center howitworks-header margin-bottom-30 margin-top-30">
                    <h2>How It Works</h2>
                    <p>In 4 easy steps</p>
                </div>
                <div class="row">
                    <div class="col-md-3 text-center margin-bottom-30">
                        <div class="hiw-step">
                            <div class="hiw-step-image"><a target="_blank" href="<?php echo get_page_link(53); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/hiw-1.png" /></a></div>
                            <p>Choose a <strong>Listed</strong><br/>certified & inspected car</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center margin-bottom-30">
                        <div class="hiw-step">
                            <div class="hiw-step-image"><a target="_blank" href="<?php echo get_page_link(53); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/hiw-2.png" /></a></div>
                            <p>Select a payment method<br/>(finance or buy)</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center margin-bottom-30">
                        <div class="hiw-step">
                            <div class="hiw-step-image"><a target="_blank" href="<?php echo get_page_link(53); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/hiw-3.png" /></a></div>
                            <p>We deliver the car<br/>straight to your doorstep</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center margin-bottom-30">
                        <div class="hiw-step">
                            <div class="hiw-step-image no-arrow-right"><a target="_blank" href="<?php echo get_page_link(53); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/hiw-4.png" /></a></div>
                            <p>Relax with our 10 Day<br/>Money-back Guarantee</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container margin-bottom-50">
                <?php $home_content = get_post(437); ?>
                <?php if($home_content){
                    echo do_shortcode($home_content->post_content);
                } ?>
            </div>
        </div>
        <div class="push"></div>
    </div>
<?php get_footer(); ?>