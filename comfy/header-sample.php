<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
	    <link href="<?php echo get_template_directory_uri(); ?>/wp-content/uploads/2016/12/favicon.ico" rel="shortcut icon">
	    <link href="<?php echo get_template_directory_uri(); ?>/wp-content/uploads/2016/12/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div id="wrapper">

			<header id="header" class="header-style-3">

				<!-- logo -->
				<div class="container-fluid"> <strong class="logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/wp-content/uploads/2016/12/logo.png" alt="img"></a></strong>
						<p><?php bloginfo('description'); ?></p>
				

				<!-- nav -->
		   <div class="navigation-row" role="navigation">
		   		<div class="header-3-top-box">
		        <div class="top-search"> <a href="#" class="search-icon" id="search-push"><i class="fa fa-search"></i></a> </div>
		        <!--BURGER NAVIGATION SECTION START-->
		        <div class="cp-burger-nav home-3">
		          <!--BURGER NAV BUTTON-->
		          <div id="cp_side-menu-btn" class="cp_side-menu"><a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/uploads/2016/12/menu-icon3.png" alt="img">Menu</a></div>
		          <!--BURGER NAV BUTTON-->

				  <!--SIDEBAR MENU START-->
		          <div id="cp_side-menu"> <a href="#" id="cp-close-btn" class="crose"><i class="fa fa-close"></i></a>
		            <div class="content mCustomScrollbar">
		              <div id="content-1" class="content">
		                <div class="cp_side-navigation">
		                  <nav class="navbar-nav">
		                  	<?php

		                  	$args =  array(
		                  		'theme_location' => 'sidebar-menu'

		                  		);
		                  		?>

		                   		<?php wp_nav_menu( $args ); ?>
		                  </nav>
		                </div>
		              </div>
		              </div>
		              <div class="btn-row"> <a href="#" class="btn-style-1">Know More</a> </div>
		              <strong class="copy">Contact us <b>+</b>660 252265866</strong>
		              <div class="currency-language-row">
		                <div class="currency-box">
		                  <div class="dropdown">
		                    <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cur <span class="caret"></span> </button>
		                    <nav class="dropdown-menu" aria-labelledby="dLabel">
		                  	<?php

		                  	$args =  array(
		                  		'theme_location' => 'currencysymbol-menu'

		                  		);
		                  		?>

		                   		<?php wp_nav_menu( $args ); ?>
		                  </nav>
		                  </div>
		                  </div>
		                <div class="currency-box">
		                  <div class="dropdown">
		                    <button id="dLabel2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Eng <span class="caret"></span> </button>
		                    <nav class="dropdown-menu" aria-labelledby="dLabel">
		                  	<?php

		                  	$args =  array(
		                  		'theme_location' => 'currencylang-menu'

		                  		);
		                  		?>

		                   		<?php wp_nav_menu( $args ); ?>
		                  </nav>
		                  </div>
		                </div>
		              </div>
		              <div class="sidebar-social">
		                  <nav class="navbar-nav">
		                  	<?php

		                  	$args =  array(
		                  		'theme_location' => 'social-menu'

		                  		);
		                  		?>

		                   		<?php wp_nav_menu( $args ); ?>
		                  </nav>
		                </div>
		              
		            </div>
		            <!--SIDEBAR MENU END--> 
		         
		        </div>
		        <!--BURGER NAVIGATION SECTION END-->

				<!--BURGER NAVIGATION SECTION END--> 
				        </div>
				        <div >
					        <nav class="small-menu">
			                  	<?php

			                  	$args =  array(
			                  		'theme_location' => 'small-menu'

			                  		);
			                  		?>

			                   	<?php wp_nav_menu( $args ); ?>
			                </nav>
				        </div>
				      </div>
				    </div>
				    <!-- /logo -->
				  </header>
				  <!--HEADER END--> 
                 
  
				  <!--HEADER SEARCH-->
				  <div id="cp-slide-search" class="cp_side-search">
				    <form method="get">
				      <input type="text" placeholder="Enter Your Search..." required>
				      <button type="submit"><i class="fa fa-search"></i></button>
				    </form>
				  </div>
				  <!--HEADER SEARCH--> 











            