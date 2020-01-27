<?php /* Template Name: Case Study */
get_template_part('includes/header'); ?>

<div id="casestudy">
	<div id="section-<?php if(is_page('bemarketing')){echo '2';}elseif(is_page('iqnection')){echo'3';}elseif(is_page('davinci-graphics')){echo '4';} ?>" class="section">
    	<div class="container">
            <h1><?php the_title(); ?></h1>
            <h2><?php the_field('position_title'); ?></h2>
            <h3><?php the_field('position_years'); ?></h3>
            <p><?php the_field('position_description'); ?></p>
            <?php if(is_page('bemarketing')){ ?>
            <img src="<?php bloginfo('template_directory'); ?>/img/bemarketing-logo.svg" alt="beMarketing Solutions" class="work-logo" />
            <?php }elseif(is_page('iqnection')){ ?>
            <img src="<?php bloginfo('template_directory'); ?>/img/iqnection-logo.svg" alt="IQnection" class="work-logo" />
            <?php }elseif(is_page('davinci-graphics')){ ?>
            <img src="<?php bloginfo('template_directory'); ?>/img/davinci-logo.svg" alt="DaVinci Graphics" class="work-logo" />
            <?php } ?>
     
        </div>
    </div>
	<div id="section-5" class="section">
    	<?php get_template_part('includes/loops/content', 'casestudy'); ?>
        
	</div>
</div>

<?php get_template_part('includes/footer'); ?>