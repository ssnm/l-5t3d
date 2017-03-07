<?php
/*
Template Name: Terms & Privacy
*/
?>
<?php get_header(); ?>
<?php global $listedco_options; ?>
<listedmotors-message></listedmotors-message>
    <div class="wrapper generic-page-wrapper">
        <div id="sb-site">
            <div ui-view="" autoscroll="true" class="base-view">
                <?php while ( have_posts() ) : the_post(); ?>
                
                <?php if(rwmb_meta('listedco_page_video_header')){ ?>
                
                <div class="headerImage8">
                    <div class="videoHolder">
                        <div class="videoHolderText">
                        	<?php if(rwmb_meta('listedco_page_hero_header_content')){ ?>
                            <div class="videoText text-center">
                                <?php echo rwmb_meta('listedco_page_hero_header_content'); ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php $video_file = rwmb_meta('listedco_page_video_header'); foreach($video_file as $file){ $file_url = $file['url']; } ?>
                    <div class="video_loop_header">
                        <div id="video_loop">
                            <video id="video_loop_repro" preload="auto" autoplay="" loop="" style="height: auto; width: 100%;">
                                <source src="<?php echo $file_url; ?>" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;"></video>
                        </div>
                    </div>
                </div>
                              
                <?php } ?>
                <?php if(!rwmb_meta('listedco_page_video_header') && has_post_thumbnail()){ ?>
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
                <?php } ?>
                <?php if(rwmb_meta('listedco_page_video_header')){  ?>
                <div class="content-wrapper-outer">
				<?php } ?>
                    <div class="page-content-wrapper">
                        <div class="row">
                            <div class="col-md-12"><?php the_content(); ?></div>
                        </div>
                    </div>
                <?php if(rwmb_meta('listedco_page_video_header')){  ?>
                </div>
				<?php } ?>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="push"></div>
    </div>
<?php if(rwmb_meta('listedco_page_video_header')){  ?>
<script type="text/javascript">
jQuery(document).ready(function(){
	var cloned_ = jQuery('footer').clone();
	jQuery('.content-wrapper-outer').append(cloned_);
	jQuery('footer').eq(1).remove();
});
</script>
<?php } ?>
<?php get_footer(); ?>