<?php
/*
The Single Posts Loop
=====================
*/
?> 

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
?>
<div class="work-posts__post">
<div class="work-posts__image">
<img src="<?php echo $thumb_url; ?>" class="img-responsive" alt="<?php the_title(); ?>" />
</div>
<div class="work-posts__content col-md-10 col-md-offset-1">
<?php the_content(); ?>
</div>
</div>
<?php endwhile; ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
<?php endif; ?>
