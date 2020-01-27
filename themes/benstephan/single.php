<?php
if (is_singular('service_areas')) {include (TEMPLATEPATH . '/single-location.php');
}
else { include (TEMPLATEPATH . '/single-article.php');
}
?>