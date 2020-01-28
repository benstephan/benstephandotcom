<?php if(have_posts()): while(have_posts()): the_post();?>
<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
?>
<div class="work-posts__post">
<div class="work-posts__image">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<img src="<?php echo $thumb_url; ?>" class="lazy img-responsive" alt="<?php the_title(); ?>" data-src="<?php echo $thumb_url; ?>" />
</a>
</div>
<div class="work-posts__content col-md-10 col-md-offset-1">
<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
<?php the_excerpt( __( '&hellip; ' . __('Continue reading', 'bsd' ) . ' <i class="glyphicon glyphicon-arrow-right"></i>', 'bsd' ) ); ?>
<a class="btn" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
</div>
</div>
<?php endwhile; ?>

<?php if ( function_exists('bsd_pagination') ) { bsd_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous', 'bsd')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Next', 'bsd') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>
<?php else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; endif; ?>
