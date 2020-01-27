<?php /* Template Name: Homepage */
get_template_part('includes/header'); ?>

<div id="homepage">
	<div id="section-1" class="section">
    	<div class="container">
            <h1>An Appetite for Creativity</h1>
            <h2>Front-End Web Developer &amp; Graphic Designer from Philadelphia </h2>
            
              <a class="btn btn-default" href="<?php bloginfo('url'); ?>/labs/" title="Portfolio of Ben Stephan" data-text="View Labs"><span>Ideas &amp; Updates</span></a>
           <a id="first-down"><i class="fa fa-arrow-circle-down"></i></a>
            <img src="<?php bloginfo('template_directory'); ?>/img/ben-logo.svg" alt="Ben Stephan" class="work-logo" />
        </div>        
	</div>
	<div id="section-2" class="section">
    	<div class="container">
            <h1>beMarketing</h1>
            <h2>Creative Manager</h2>
            <h3>2014-Present</h3>
            <p>Designing and developing websites. Designing print and brand collateral.</p>
            <a class="btn btn-default" href="https://bemarketing.com/" title="Web and Graphic Designer at beMarketing Solutions" data-text="View" target="_blank"><span>beMarketing</span></a>
            <img src="<?php bloginfo('template_directory'); ?>/img/bemarketing-logo.svg" alt="beMarketing Solutions" class="work-logo" />
        </div>
    </div>
	<div id="section-3" class="section">
    	<div class="container">
            <h1>IQnection</h1>
            <h2>Project Coordinator</h2>
            <h3>2013-2014</h3>
            <p>Strategy development &amp; client management.</p>
            <a class="btn btn-default" href="https://iqnection.com/" title="Project Coordinator at IQnection Internet Services" data-text="View" target="_blank"><span>IQnection</span></a>
            <img src="<?php bloginfo('template_directory'); ?>/img/iqnection-logo.svg" alt="IQnection" class="work-logo" />
        </div>
	</div>
	<div id="section-4" class="section">
    	<div class="container">
            <h1>DaVinci Graphics</h1>
            <h2>Print Production Artist &amp; Designer</h2>
            <h3>2007-2013</h3>
            <p>Producing print collateral from start to finish.</p>
            <!-- <a class="btn btn-default" href="http://davincigraphicsinc.com/" title="Graphic Designer and Production Artist at DaVinci Graphics" data-text="View" target="_blank"><span>DaVinci Graphics</span></a> -->
            <img src="<?php bloginfo('template_directory'); ?>/img/davinci-logo.svg" alt="DaVinci Graphics" class="work-logo" />
        </div>
	</div>
</div>

<?php get_template_part('includes/footer'); ?>