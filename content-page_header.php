<div class="container-fluid full-width">
    <div class="row">
        <div class="col-md-12">
            <div id="about-hero">
                <full-width-background-image-section img-text="<?php the_title(); ?>" img-url="<?php the_post_thumbnail_url('full'); ?>" img-sub-text="We're building a radically transparent and easy way to buy and sell cars online." class="ng-isolate-scope">
                    <div class="hero-wrapper" style="background-image:url(<?php the_post_thumbnail_url('full'); ?>);">
                        <div class="hero-text text-center">
                            <div class="center-wrapper">
                                <h1 style="color: white;"><?php if(rwmb_meta('listedco_page_alt_title')){ echo rwmb_meta('listedco_page_alt_title'); }else{the_title();} ?></h1>
                                <?php if(rwmb_meta('listedco_page_subtitle')){ ?>
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