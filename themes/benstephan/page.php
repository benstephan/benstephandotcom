<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/loops/content', 'page-title'); ?>
<div id="main-content">
<?php if (is_page('portfolio')){ ?>

<div class="toolbar mb2 mt2">
<div class="container">
<?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
<p id="filter-nav">Filter:
<button class="fil-cat" href="" data-rel=".all">All</button>
<button class="fil-cat" data-rel=".web">Web</button>
<button class="fil-cat" data-rel=".graphic">Graphics</button>
<button class="fil-cat" data-rel=".logo">Logos</button>
</p>
</div>
</div> 
 
<div class="clearfix"></div>
<div class="container-fluid">
<div id="portfolio">     
<div class="gutter"></div>
<?php get_template_part('includes/loops/content', 'portfolio'); ?>  
</div>
</div>
<?php }else{ ?>
<div class="container">
<div class="row">

<div class="col-xs-12">
<div id="content" role="main">

<?php get_template_part('includes/loops/content', 'page'); ?>

</div>

</div><!-- /.row -->
</div><!-- /.container -->
</div>
<?php } ?>
</div>
<?php get_template_part('includes/footer'); ?>
