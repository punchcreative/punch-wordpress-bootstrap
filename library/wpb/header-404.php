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
        
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


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
                <div class="wpb-header">
                	<div class="row">
					<?php
                    if ( file_exists( TEMPLATEPATH . '/library/wpb/images/logo-200.png' ) ) {
                        ?>
                        <div class="col-xs-12 col-sm-3 col-md-3 wpb-header-logo">
                            <a href="<?php echo site_url(); ?>" title="Homepage" class="home-link"><img src="<?php echo get_template_directory_uri(); ?>/library/wpb/images/logo-200.png" alt="Logo" class="img-responsive"></a>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="col-xs-12 col-md-6 wpb-header-title">
                            <h2><a href="<?php echo site_url(); ?>" title="Homepage" class="home-link"><?php bloginfo('title'); ?></a></h2>
                            <small><?php echo $pagename; ?></small>
                        </div>
						<?php
                    }
                    $postid = get_the_ID();
                    $headerText = get_post_meta($postid, 'headerText', true);
                    if (isset($headerText) && $headerText != "") {
                        ?>
                        <div class="col-xs-12 col-sm-9 col-md-6 wpb-header-text">
                        	<p><?php echo $headerText; ?></p>
                        </div>
                        <?php
                    }
                    ?>
                    </div>
                </div>
			</div>
		</header> <!-- end header -->
        
		<div class="container">
        	
