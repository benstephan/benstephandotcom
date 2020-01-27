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
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="entry">
<?php $thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0]; ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<?php if($thumb_url != ''){ ?>
<img src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>" class="img-responsive" />
<?php }else{ ?>
<img src="https://placehold.it/768x400" alt="<?php the_title(); ?>" class="img-responsive" />
<?php } ?>
</a>
<div class="entry-content">
<div class="col-sm-3">
<ul class="meta">
<li><i class="fa fa-clock-o"></i> <?php the_date(); ?></li>
<li><i class="fa fa-archive"></i> <?php $category = get_the_category(); $firstCategory = $category[0]->cat_name; echo $firstCategory; ?>                                </ul>
<div class="clearfix"></div>
</div>
<div class="col-sm-9">
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
</div>
</div>
<div class="clearfix"></div>
</div>
<?php endwhile; else : ?>
<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php if ( function_exists('bsd_pagination') ) { bsd_pagination(); } else if ( is_paged() ) { ?>
<ul class="pagination">
<li class="older"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous', 'bsd')) ?></li>
<li class="newer"><?php previous_posts_link(__('Next', 'bsd') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
</ul>
<?php } ?>

</div><!-- /#content -->
</div>

</div><!-- /.row -->
</div><!-- /.container -->
</div>
<?php get_template_part('includes/footer'); ?>
