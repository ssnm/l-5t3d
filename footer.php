<?php global $listedco_options; ?>
<!-- footer -->
<footer <?php if(is_page(53)){ echo 'class="reveal"'; } ?>>
    <div class="bscontainer-fluid" id="fwrap">
        <div class="visible-lg visible-md sfooter bsrow">
            <div class="footer-links-wrap">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'footer_menu',
                        'theme_location' => 'footer_menu',
                        'depth' => 1,
                        'container' => false,
                        'menu_class' => 'footer-links'
                    )
                );
                ?>
            </div>
        </div>
        <div class="bfooter bsrow">
            <div class="footer-links-wrap">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'footer_menu_2',
                        'theme_location' => 'footer_menu_2',
                        'depth' => 1,
                        'container' => false,
                        'menu_class' => 'footer-links'
                    )
                );
                ?>
            </div>
            <?php if($listedco_options['facebook'] || $listedco_options['twitter'] || $listedco_options['linkedin']){ ?>
                <div class="social-links-wrap">
                    <ul class="social-links">
                        <?php if($listedco_options['facebook']){ ?>
                            <li class="social-link">
                                <a href="<?php echo $listedco_options['facebook']; ?>" target="_blank" class="facebook"><i class="fa fa-facebook-square"></i></a>
                            </li>
                        <?php } ?>
                        <?php if($listedco_options['twitter']){ ?>
                            <li class="social-link">
                                <a href="<?php echo $listedco_options['twitter']; ?>" target="_blank" class="twitter"><i class="fa fa-twitter-square"></i></a>
                            </li>
                        <?php } ?>
                        <?php if($listedco_options['linkedin']){ ?>
                            <li class="social-link">
                                <a href="<?php echo $listedco_options['linkedin']; ?>" target="_blank" class="linkedin"><i class="fa fa-linkedin-square"></i></a>
                            </li>
                        <?php } ?>
                      <?php if($listedco_options['instagram']){ ?>
                            <li class="social-link">
                                <a href="<?php echo $listedco_options['instagram']; ?>" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
            <?php if($listedco_options['copyright_text']){ ?>
                <div class="copyright-wrap"><?php echo $listedco_options['copyright_text']; ?></div>
            <?php } ?>
        </div>
    </div>
</footer>

<listedmotors-login-modal></listedmotors-login-modal>
<contactus-modal></contactus-modal>
<script></script>
<?php if(is_home() || is_front_page()){ ?>
<script>
        //preload first car in slider
        (function () {
            //var carImg1 = new Image();
            var leftArrowAsset = new Image();
            var leftArrowAssetHover = new Image();
            var rightArrowAsset = new Image();
            var rightArrowAssetHover = new Image();
            var firstCarImage = "";
            

            //carImg1.src = firstCarImage;
            leftArrowAsset.src = '<?php bloginfo('stylesheet_directory'); ?>/images/SlickSlider/arrow_left.png';
            leftArrowAssetHover.src = '<?php bloginfo('stylesheet_directory'); ?>/images/SlickSlider/arrow_left_hover.png';
            rightArrowAsset.src = '<?php bloginfo('stylesheet_directory'); ?>/images/SlickSlider/arrow_right.png';
            rightArrowAssetHover.src = '<?php bloginfo('stylesheet_directory'); ?>/images/SlickSlider/arrow_left_hover.png';
        })();
    </script>
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>