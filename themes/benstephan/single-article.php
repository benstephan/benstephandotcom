<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/loops/content', 'page-title'); ?>
<div id="articles">
<div class="toolbar">
<div class="container">
<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
<div id="filter-nav">
<div class="dropdown pull-right">
<a id="dLabel" data-target="#" href="http://example.com" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
Categories
<span class="caret"></span>
</a>

<ul class="dropdown-menu" aria-labelledby="dLabel">
<?php
$categories = wp_get_post_categories(get_the_ID());

foreach($categories as $category){
echo '<li><a href=' . get_category_link($category) . '>' . get_cat_name($category) . '</a></li>';
}
?>
</ul>
</div>

</div>
</div>
</div>
<div class="container">
<div class="row">

<div class="col-xs-12">
<div id="content" role="main">
<?php get_template_part('includes/loops/content', 'single'); ?>
</div><!-- /#content -->
</div>

</div><!-- /.row -->
</div><!-- /.container -->
</div>

<?php get_template_part('includes/footer'); ?>
