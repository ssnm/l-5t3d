<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/listingpagecss.css">
    <div class="wrapper">
        <div id="sb-site">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part('content','listing_header'); ?>
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-md-12"><?php the_content(); ?></div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php listing_template("boxed_fullwidth"); ?>
        </div>
    </div>
<?php get_footer(); ?>