<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/loops/content', 'page-title'); ?>
<?php if(is_page('home')){
get_template_part('includes/loops/content', 'page-home');
}elseif(is_page('about')){
get_template_part('includes/loops/content', 'page-about');
}else{ ?>
<div id="work-posts">
<div class="container">
<div class="col-md-8 col-md-offset-2">
<div class="row">
<?php get_template_part('includes/loops/content', 'page'); ?>
<?php if(is_page('site-map')){get_template_part('includes/loops/content', 'site-map'); } ?>
</div>
</div>
</div>
</div>
<?php } ?>
<?php get_template_part('includes/footer'); ?>
