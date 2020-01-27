<?php
/*
The Page Loop
=============
*/
?>
<div id="main-content">
<div class="container">
<?php the_field('into_paragraph'); ?>  	
</div>

<div class="container">
<?php if(have_posts()): while(have_posts()): the_post(); ?>

 <?php the_content()?>
 <?php if(is_page('davinci-graphics')){ 

// check if the repeater field has rows of data
if( have_rows('skills') ):

 	// loop through the rows of data
    while ( have_rows('skills') ) : the_row();

        // display a sub field value
$skillImage = get_field('skill_icon');
$size = 'full';
$skillTitle = get_field('skill_title');
?>
<div class="col-md-4">
	<img src="<?php echo $skillImage['url']; ?>" alt="<?php echo $skillImage['alt']; ?>" class="aligncenter img-responsive" />
    <h3 class="textcenter"><?php echo $skillTitle; ?></h3>
</div>
<?php

    endwhile;

else :

    // no rows found

endif;

} ?>
 <?php wp_link_pages(); ?>

<?php endwhile; else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); ?>
<?php exit; ?>
<?php endif; ?>
</div>
</div>
