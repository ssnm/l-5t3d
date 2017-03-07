<?php
/*
Template Name: Payment
*/
?>
<?php get_header(); ?>
<?php global $listedco_options; ?>
    <listedmotors-message></listedmotors-message>
    <div class="wrapper generic-page-wrapper">
        <div id="sb-site">
            <div ui-view="" autoscroll="true" class="base-view">
                <?php while (have_posts()) : the_post(); ?>

                    <?php if (rwmb_meta('listedco_page_video_header')) { ?>

                        <div class="headerImage8">
                            <div class="videoHolder">
                                <div class="videoHolderText">
                                    <?php if (rwmb_meta('listedco_page_hero_header_content')) { ?>
                                        <div class="videoText text-center">
                                            <?php echo rwmb_meta('listedco_page_hero_header_content'); ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php $video_file = rwmb_meta('listedco_page_video_header');
                            foreach ($video_file as $file) {
                                $file_url = $file['url'];
                            } ?>
                            <div class="video_loop_header">
                                <div id="video_loop">
                                    <video id="video_loop_repro" preload="auto" autoplay="" loop=""
                                           style="height: auto; width: 100%;">
                                        <source src="<?php echo $file_url; ?>"
                                                type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
                                    </video>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                    <?php if (!rwmb_meta('listedco_page_video_header') && has_post_thumbnail()) { ?>
                        <div class="container-fluid full-width">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="about-hero">
                                        <full-width-background-image-section img-text="<?php the_title(); ?>"
                                                                             img-url="<?php the_post_thumbnail_url('full'); ?>"
                                                                             img-sub-text="We're building a radically transparent and easy way to buy and sell cars online."
                                                                             class="ng-isolate-scope">
                                            <div class="hero-wrapper"
                                                 style="background-image:url(<?php the_post_thumbnail_url('full'); ?>);">
                                                <div class="hero-text text-center">
                                                    <div class="center-wrapper">
                                                        <h1 style="color: white;"><?php if (rwmb_meta('listedco_page_alt_title')) {
                                                                echo rwmb_meta('listedco_page_alt_title');
                                                            } else {
                                                                the_title();
                                                            } ?></h1>
                                                        <?php if (rwmb_meta('listedco_page_subtitle')) { ?>
                                                            <div class="hero-sub-text">
                                                                <?php echo rwmb_meta('listedco_page_subtitle'); ?>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </full-width-background-image-section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (rwmb_meta('listedco_page_video_header')) { ?>
                        <div class="content-wrapper-outer">
                    <?php } ?>
                    <div class="page-content-wrapper">
                        <?php
                        $proceed = false;
                        if (isset($_REQUEST['car']) && !empty($_REQUEST['car'])) {
                            $car_id = $_REQUEST['car'];
                            $car_info = get_post($car_id, ARRAY_A);
                            if ($car_info) {
                                $proceed = true;
                            } else {
                                $proceed = false;
                            }
                        }
                        ?>
                        <?php if ($proceed) { ?>
                            <?php
                            $post_meta       = get_post_meta_all($car_id);
                            if(isset($post_meta['listing_options']) && !empty($post_meta['listing_options'])){
                                $listing_options = unserialize(unserialize($post_meta['listing_options']));
                            }

                            $price_text  = 0;
                            $deposit_text = 0;
                            if(isset($listing_options['price']['value']) && !empty($listing_options['price']['value'])){
                                $original = (isset($listing_options['price']['original']) && !empty($listing_options['price']['original']) ? $listing_options['price']['original'] : $listing_options['price']['value']);
					
                                if(!empty($original)){
                                  	//echo $original;
                                  	if($listedco_options['car-tax-percent'] && is_numeric($listedco_options['car-tax-percent'])){
                                    	$original = $original + ($original * ($listedco_options['car-tax-percent']/100));
                                      $tax_text = ' <small><em>('.$listedco_options['car-tax-percent'] . '% tax included)</em></small>';
                                    } 
                                  //echo $original;
                                    if($original <= 1000) {
                                        $deposit = 300;
                                        $rest = $original - $deposit;
                                    }else{
                                        $deposit = 500;
                                        $rest = $original - $deposit;
                                    }
                                }
                                $rest_text = !empty($rest) ? format_currency($rest) : 0;
                                $deposit_text = !empty($deposit) ? format_currency($deposit) : 0;
                                $price_text = !empty($original) ? format_currency($original) . ' ' . $tax_text : 0;
																//echo format_currency($original);
                            }
                            ?>
                            <div class="car-summary-wrap clearfix">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="clearfix"><strong><?php echo $car_info['post_title']; ?></strong></div>
                                        <div class="clearfix">Mileage: <?php echo $post_meta['mileage'] ? $post_meta['mileage'].' Km' : "NA"; ?></div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="clearfix">Deposit: <?php echo (isset($_REQUEST['financing']) && !empty($_REQUEST['financing'])) ? '0' : $deposit_text; ?></div>
                                        <div class="clearfix">Price: <?php echo $price_text; ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row payment-option-wrap">
                                <div class="col-xs-6">
                                    <div
                                        class="payment-option text-center <?php if (isset($_REQUEST['financing']) && !empty($_REQUEST['financing'])) { ?>active<?php } ?>">
                                        <?php if (isset($_REQUEST['fullpay']) && !empty($_REQUEST['fullpay'])) { ?>
                                            <a href="<?php echo site_url('payment/?car=' . $_REQUEST['car'] . '&financing=true'); ?>">Financing</a>
                                        <?php } else { ?>Financing<?php } ?>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div
                                        class="payment-option text-center <?php if (isset($_REQUEST['fullpay']) && !empty($_REQUEST['fullpay'])) { ?>active<?php } ?>">
                                        <?php if (isset($_REQUEST['financing']) && !empty($_REQUEST['financing'])) { ?>
                                            <a href="<?php echo site_url('payment/?car=' . $_REQUEST['car'] . '&fullpay=true'); ?>">Pay
                                                in Full</a>
                                        <?php } else { ?>Pay in Full<?php } ?>
                                    </div>
                                </div>
                            </div>
							
                            <?php if($price_text){ ?>
                            
								<?php if (isset($_REQUEST['financing']) && !empty($_REQUEST['financing'])) { ?>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="payment-form-wrap margin-top-30 financing-form">
                                                <h4 class="text-left"><strong>Fill Out The Form Below To Apply For Financing</strong></h4>
                                                <p class="text-left">If you're happy with your current vehicle but are interested in lowering your existing payments, we can help with that too.  Speak with one of our sales consultants today about refinancing options or fill out the form below and someone will be in touch with you shortly!</p>
                                                <div class="clearfix text-left">
                                                	<?php echo do_shortcode('[contact-form-7 id="200" title="Financing Application Form"]'); ?>
                                                    <?php
													wp_enqueue_script('jquery-ui-datepicker');
													wp_enqueue_style('jquery-style', '//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css');
													?>
													<script type="text/javascript">
                                                    jQuery(document).ready(function() {
													var u=(new Date).getFullYear();
                                                    jQuery('#dob').datepicker({changeMonth:!0,changeYear:!0,showOtherMonths:!0,selectOtherMonths:!0,showButtonPanel:!0,yearRange:u-100+":"+(u-19),defaultDate:"-30y", controls: false});
                                                    });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
    
                                <?php if (isset($_REQUEST['fullpay']) && !empty($_REQUEST['fullpay'])) { ?>
                                    <div class="pay_in_full_summary clearfix">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="pifs_wrap clearfix topaynow">
                                                    <div class="visible-xs visible-sm">
                                                        <div class="checkout-step">1</div>
                                                    </div>
                                                    <div class="pifs_title">Reserve your car!</div>
                                                    <div data-amount="<?php echo ($deposit * 100); ?>" class="pifs_price"><?php echo $deposit_text; ?> deposit</div>
                                                </div>
                                                <div class="payment-form-wrap margin-top-30">
                                                    <p class="margin-bottom-30">After you put your deposit, we will send you a confirmation email with bank transfer information.</p>
                                                    <?php echo do_shortcode('[fullstripe_payment form="PayInFull"]'); ?>
                                                </div>
                                                <div class="pifs_seperator visible-xs visible-sm"><div class="bg-white"><span>+</span></div></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="pifs_wrap pifs_remaining clearfix">
                                                    <div class="visible-xs visible-sm">
                                                        <div class="checkout-step">2</div>
                                                    </div>
                                                    <div class="pifs_title">Transfer the remaining</div>
                                                    <div class="pifs_price"><?php echo $rest_text; ?></div>
                                                </div>
                                                <div class="margin-top-30 clearfix">
                                                    <p>Please transfer the remaining amount via bank transfer within two (2) business days or inform us if you need more time.</p>
                                                </div>
                                                <div class="margin-top-30 clearfix">
                                                    <table width="100%">
                                                        <tr><td>Reference</td><td>xxxx</td></tr>
                                                        <tr><td>Company Name</td><td>xxxx xxx.</td></tr>
                                                        <tr><td>Sort Code</td><td>xxxxxx</td></tr>
                                                        <tr><td>Account no:</td><td>xxxxx</td></tr>
                                                        <tr><td>IBAN</td><td>xxxxxxxxxxxxxxx</td></tr>
                                                        <tr><td>Swift Code</td><td>xxxxxx</td></tr>
                                                    </table>
                                                </div>
                                                <div class="pifs_seperator visible-xs visible-sm margin-top-15"><div class="bg-white"><span>=</span></div></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="pifs_wrap pifs_total clearfix">
                                                    <div class="visible-xs visible-sm">
                                                        <div class="checkout-step">3</div>
                                                    </div>
                                                    <div class="pifs_title">And it’s yours!</div>
                                                    <div class="pifs_price"><?php echo $price_text; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            
                            <?php }else{ ?>
                            
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h2>The vehicle <u>PRICE</u> is <u>UNKNOWN</u> or <u>UNAVAILABLE</u>.</h2>
                                    <p><a href="<?php echo site_url('buy'); ?>">Go back to see more cars.</a></p>
                                </div>
                            </div>
                            
                            <?php } ?>

                        <?php } else {
                            ?>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h2>Invalid selection.</h2>
                                    <p><a href="<?php echo site_url('buy'); ?>">Go Back</a></p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <?php if (rwmb_meta('listedco_page_video_header')) { ?>
                        </div>
                    <?php } ?>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="push"></div>
    </div>
<?php if (rwmb_meta('listedco_page_video_header')) { ?>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            var cloned_ = jQuery('footer').clone();
            jQuery('.content-wrapper-outer').append(cloned_);
            jQuery('footer').eq(1).remove();
        });
    </script>
<?php } ?>
<?php if (isset($_REQUEST['fullpay']) && !empty($_REQUEST['fullpay'])) { ?>
<style>
.pf-email-modal .modal-title {
    background-color: rgba(222, 105, 105, 0.6);
    color: #fff;
    margin-bottom: 15px;
}
  .pf-email-modal .close-icon-grey {
    background: none;
    top: 5px;
    padding-top: 0;
    font-size: 2em;
    font-weight: 300;
    color: #fff;
    width: auto;
    height: auto;
    right: 15px;
}
</style>
    <div class="pf-email-overlay" style="display:none">
        <div class="email-modal-wrap">
            <div class="pf-email-modal" style="max-width:500px;">
                <a class="close-icon-grey"><i class="fa fa-times"></i></a>
                <div class="col-sm-12 modal-title center-align">Payment Error!</div>
                <div class="email_modal_form_wrap"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            var amount = jQuery('.topaynow .pifs_price').data('amount');
            jQuery('#payment-form input[type="hidden"][name="amount"]').val(amount);
            jQuery('#fullstripe_address_zip').attr('placeholder', 'Postal Code');

            jQuery(".pf-email-modal .close-icon-grey").on('click', function(){
                jQuery('.pf-email-overlay').fadeOut(200);
                jQuery('.pf-email-modal').fadeOut(200);
      					jQuery("body").toggleClass("disable-scrolling");
            });
        });
    </script>
<?php } ?>
<?php get_footer(); ?>