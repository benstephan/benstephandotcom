<?php
/*
The Portfolio Loop
=============
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<?php 

$images = get_field('portfolio_gallery');
$size = 'full';

if( $images ): ?>
<?php foreach( $images as $image ): list($width, $height) = getimagesize($image['url']); ?>
<?php if($image['title'] == 'web'){ ?>
<div class="project all <?php echo $image['title']; ?>">
<div class="project-overlay textcenter">
<a class="btn btn-default" href="<?php echo $image['description']; ?>" target="_blank">Visit Site <i class="fa fa-external-link"></i></a>
</div>
<img src="<?php if($height > $width){echo $image['sizes']['large'];}else{echo $image['sizes']['medium'];} ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" />
</div>
<?php }else{ ?>
<div class="project all <?php echo $image['title']; ?>">
<div class="project-overlay textcenter">
<a class="btn btn-default box" href="<?php echo $image['url']; ?>">View Project <i class="fa fa-arrows-alt"></i></a>
</div>
<img src="<?php if($height > $width){echo $image['sizes']['large'];}else{echo $image['sizes']['medium'];} ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" />
</div>

<?php } ?>
<?php endforeach; ?>
<?php endif; ?>
<?php wp_link_pages(); ?>
<?php endwhile; else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); ?>
<?php exit; ?>
<?php endif; ?>
