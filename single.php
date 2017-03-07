<?php get_header(); ?>
<?php global $listedco_options; ?>
    <listedmotors-message></listedmotors-message>
    <div class="wrapper">
        <div id="sb-site">
            <div ui-view="" autoscroll="true" class="base-view">
                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="page-content-wrapper single-post-wrapper">
                        <div class="margin-bottom-30 text-center">
                            <h1 class="single-post-title margin-bottom-30 margin-top-0"><?php the_title(); ?></h1>
                            <div class="margin-bottom-30">
                              <p>Posted on: <?php the_date(); ?></p>
                                <?php
                                $categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentysixteen' ) );
                                if ( $categories_list ) {
                                    printf( '<span class="cat-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
                                        _x( 'Categories: ', 'Used before category names.', 'twentysixteen' ),
                                        $categories_list
                                    );
                                }

                                $tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'twentysixteen' ) );
                                if ( $tags_list ) {
                                    printf( '<span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
                                        _x( 'Tags: ', 'Used before tag names.', 'twentysixteen' ),
                                        $tags_list
                                    );
                                }
                                ?>
                            </div>
                            <div class="margin-bottom-30"><?php echo do_shortcode('[addtoany]'); ?></div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    if(has_post_thumbnail()){
                                        ?>
                                        <div class="text-left">
                                            <?php
                                            the_post_thumbnail('large');
                                            ?>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-post-navigation text-center margin-bottom-30">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    the_post_navigation( array(
                                        'next_text' => '<span class="screen-reader-text">Next post <i class="fa fa-angle-double-right" aria-hidden="true"></i></span> ',
                                        'prev_text' => '<span class="screen-reader-text"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Previous post</span> ',
                                    ) );
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="push"></div>
    </div>
<?php get_footer(); ?>