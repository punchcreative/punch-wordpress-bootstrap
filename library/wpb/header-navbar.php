<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">
            <div class="container">
                <div class="jumbotron" style="background-image: url('<?php echo $featured_src[0]; ?>'); background-color: #FFFFFF; background-repeat: no-repeat; background-position: 0 0;">
                    
                	<?php
                    if ( file_exists( TEMPLATEPATH . '/library/wpb/images/logo-200.png' ) ) {
                    	?>
                        <div class="header-logo">
                        	<a href="<?php echo site_url(); ?>" title="Homepage" class=""><img src="<?php echo get_template_directory_uri(); ?>/library/wpb/images/logo-200.png" alt="Logo" class="img-responsive"></a>
                        </div>
                        <?php
					} else {
						?>
                        <div class="page-header">
                            <h2><?php bloginfo('title'); ?><small><?php echo get_post_meta($post->ID, 'custom_tagline' , true);?></small></h2>
                            <h3><?php echo $pagename; ?></h3>
                    	</div>
                        <?php
					}
					?>			
                    
                </div>	
                <div class="navbar navbar-default">
              
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- <a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a> -->
                    </div>

                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>

                        <?php //if(of_get_option('search_bar', '1')) {?>
                        <form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                            <div class="form-group">
                                <input name="s" id="s" type="text" class="search-query form-control" autocomplete="off" placeholder="<?php _e('Search','wpbootstrap'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
                            </div>
                        </form>
                        <?php //} ?>
                    </div>

                </div> <!-- end .navbar -->
			</div> <!-- end .container -->
		</header> <!-- end header -->
		
		<div class="container">
