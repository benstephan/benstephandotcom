<?php
/*
The Page Title
=============
*/
?>
<div id="page-title">
<h1><?php if(is_home() || is_single() || is_category()){echo "Labs"; }else{ the_title(); } ?></h1>
<p><?php if(is_home() || is_single() || is_category()){echo "A collection of posts, ideas, and experiments around design and web."; }else{ the_field('page_title'); } ?></p>
</div>