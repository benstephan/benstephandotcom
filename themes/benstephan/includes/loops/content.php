<?php if(have_posts()): while(have_posts()): the_post();?>
    <article role="article" id="post_<?php the_ID()?>">
        <header>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
            <h4>
              <em>
                <span class="text-muted author"><?php _e('By', 'bsd'); echo " "; the_author() ?>,</span>
                <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
              </em>
            </h4>
        </header>
        <section>
            <?php the_post_thumbnail(); ?>
            <?php the_content( __( '&hellip; ' . __('Continue reading', 'bsd' ) . ' <i class="glyphicon glyphicon-arrow-right"></i>', 'bsd' ) ); ?>
        </section>
        <footer>
            <p class="text-muted" style="margin-bottom: 20px;">
                <i class="glyphicon glyphicon-folder-open"></i>&nbsp; <?php _e('Category', 'bsd'); ?>: <?php the_category(', ') ?><br/>
                <i class="glyphicon glyphicon-comment"></i>&nbsp; <?php _e('Comments', 'bsd'); ?>: <?php comments_popup_link(__('None', 'bsd'), '1', '%'); ?>
            </p>
        </footer>
    </article>
<?php endwhile; ?>

<?php if ( function_exists('bsd_pagination') ) { bsd_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous', 'bsd')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Next', 'bsd') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>
<?php else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; endif; ?>
