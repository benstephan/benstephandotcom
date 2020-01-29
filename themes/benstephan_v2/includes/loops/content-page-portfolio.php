<?php
/*
The Page Loop
=============
*/
?>
<div id="portfolio">
<div class="grid">
<?php 
$images = get_field('portfolio_gallery');
$size = 'full';
if( $images ): ?>
<?php foreach( $images as $image ): ?>
<?php if($image['title'] == 'web'){ ?>
<div class="grid-item"><a href="<?php echo $image['description']; ?>"><img src="<?php echo $image['sizes']['large']; ?>" width="100%" /></a></div>
<?php }else{ ?>
<div class="grid-item"><img src="<?php echo $image['sizes']['large']; ?>" width="100%" /></div>
<?php } ?>

<?php endforeach; ?>
<?php endif; ?>
</div>
</div>