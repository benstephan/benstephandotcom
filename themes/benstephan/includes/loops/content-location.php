<?php
/*
The Single Posts Loop
=====================
*/
?> 

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="entry">
    	 <h1 class="single-title"><?php the_title(); ?></h1>
         <?php $serviceMap = get_field('service_area_map'); ?>
		
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195601.28838505058!2d-75.25845452142431!3d40.0024132631623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6b7d8d4b54beb%3A0x89f514d88c3e58c1!2sPhiladelphia%2C%20PA!5e0!3m2!1sen!2sus!4v1574815763344!5m2!1sen!2sus" class="embed-responsive-item" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
     
        <div class="entry-content">

            <div class="col-sm-12">
               
                <p><?php the_content(); ?></p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
<?php endwhile; ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
<?php endif; ?>
