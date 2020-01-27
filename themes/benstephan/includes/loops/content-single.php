<?php
/*
The Single Posts Loop
=====================
*/
?> 

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="entry">
    	 <h1 class="single-title"><?php the_title(); ?></h1>
		<?php $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
        $thumb_url = $thumb_url_array[0]; ?>
    
            <?php if($thumb_url != ''){ ?>
            <img src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>" class="img-responsive" />
            <?php }else{ ?>
            <img src="https://placehold.it/768x400" alt="<?php the_title(); ?>" class="img-responsive" />
            <?php } ?>
        <div class="entry-content">
            <div class="col-sm-3">
                <ul class="meta">
                    <li><i class="fa fa-clock-o"></i> <?php the_date(); ?></li>
                    <li><i class="fa fa-archive"></i> <?php $category = get_the_category(); $firstCategory = $category[0]->cat_name; echo $firstCategory; ?>                                </ul>
                    <div class="clearfix"></div>
            </div>
            <div class="col-sm-9">
               
                <p><?php the_content(); ?></p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
<?php endwhile; ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
<?php endif; ?>
