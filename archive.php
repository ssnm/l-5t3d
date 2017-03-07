<?php get_header(); ?>
<style>
.item-content h4 {
    padding: 5px 0px !important;
    font-weight: bold;
    font-size: 21px;
    line-height: 30px;
}
  .item .item-media img {
    width: 100%;
}
  .item .item-content .readmore-link a {
    font-weight: bold;
}
  .navigation.pagination h2.screen-reader-text {
    display: none;
}
  .navigation.pagination .nav-links a.page-numbers,
   .navigation.pagination .nav-links span.page-numbers{
    background: #009bff;
    border: 1px solid #009bff;
    color: rgb(255, 255, 255);
    cursor: pointer;
    font-size: inherit;
    line-height: inherit;
    padding: 3px 10px;
    text-decoration: none;
    vertical-align: middle;
    display: inline-block;
}
.navigation.pagination .nav-links a.page-numbers:hover,
.navigation.pagination .nav-links span.page-numbers{
    opacity: 0.6;
}
</style>
<?php global $listedco_options; ?>
    <listedmotors-message></listedmotors-message>
    <div class="wrapper">
        <div id="sb-site">
            <div ui-view="" autoscroll="true" class="base-view">
                    <div class="page-content-wrapper single-post-wrapper">
                    <?php if ( have_posts() ) : ?>
                        <div class="margin-bottom-30 text-center">
                            <?php
                            the_archive_title( '<h1 class="archive-page-title margin-bottom-30">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description margin-bottom-30">', '</div>' );
                            ?>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php while ( have_posts() ) : the_post(); ?>
                                        <div class="item margin-bottom-30">
                                            <?php if(has_post_thumbnail()): ?>
                                            <div class="item-media">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('large'); ?>
                                                </a>
                                            </div>
                                            <?php endif; ?>
                                            <div class="item-content">
                                                <h4><?php the_title(); ?></h4>
                                              	<div><?php the_excerpt(); ?></div>
                                              	<div class="readmore-link"><a href="<?php the_permalink(); ?>">Read more</a></div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <?php
                            the_posts_pagination( array(
                                'prev_text'          => '<i class="fa fa-angle-double-left" aria-hidden="true"></i> Previous',
                                'next_text'          => 'Next <i class="fa fa-angle-double-right" aria-hidden="true"></i>',
                                'before_page_number' => '',
                            ) );
                            ?>
                        </div>
                    <?php else: ?>
                        <h1 class="archive-page-title">Nothing Found</h1>
                    <?php endif; ?>
                    </div>
            </div>
        </div>
        <div class="push"></div>
    </div>
<?php get_footer(); ?>