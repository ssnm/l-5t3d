<?php get_header(); 

if (have_posts()) : while (have_posts()) : the_post();

    listing_content();
    
endwhile; ?>

<?php else : ?>
<?php _e("Post not found", "listings"); ?>!
<?php endif; ?>
<script>jQuery(document).ready(function(){jQuery(document).on('click', '.seemore', function(){ jQuery(this).prev('.seemore-div').css({'height' : 'auto', 'overflow':'inherit'}); jQuery(this).remove(); });});</script>
<?php get_footer(); ?>