<div id="headingContainer">
    <div class="title">
        <h1 class="main-title"><?php if(rwmb_meta('listedco_page_alt_title')){ echo rwmb_meta('listedco_page_alt_title'); }else{the_title();} ?></h1>
        <?php if(rwmb_meta('listedco_page_subtitle')){ ?>
            <div class="main-subtitle">
                <?php echo rwmb_meta('listedco_page_subtitle'); ?>
            </div>
        <?php } ?>
    </div>

    <div id="videoContainer" class="">
      <?php if(has_post_thumbnail()){ ?>
        <img class="content" src="<?php the_post_thumbnail_url('full'); ?>">
      <?php } ?>
        <?php /* ?><video class="content" id="mainVideo" loop="" preload="auto" autoplay="" poster="<?php bloginfo('stylesheet_directory'); ?>/images/posterFade-large.jpg"><source src="<?php bloginfo('stylesheet_directory'); ?>/videos/BuyFade.mp4" type="video/mp4"><!--<source src="//static2.listedmotors.com/videos/Buy/BuyFade.webm" type="video/webm">--><!--<source src="//static2.listedmotors.com/videos/Buy/BuyFade.ogv" type="video/ogv">--></video><?php */ ?>
    </div>
</div>