<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="<?php bloginfo('url');?>/wp-content/uploads/2016/12/favicon.ico" />
	    <link href="<?php bloginfo('url');?>/wp-content/uploads/2016/12/touch.png" rel="apple-touch-icon-precomposed">

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

	<body <?php body_class(); ?> class="theme-style-1">
				<!--WRAPPER START-->
				<div id="wrapper">

				  <!--HEADER START-->
				  <header id="header" class="header-style-3">
						<!-- logo -->
						<div class="container-fluid"> <strong class="logo">

							<?php theme_prefix_the_custom_logo()?></strong>							  
							<p><?php bloginfo('description'); ?></p>
						
						<div class="navigation-row">
					        <div class="header-3-top-box">
					          <div class="top-search"> <a href="#" class="search-icon" id="search-push"><i class="fa fa-search"></i></a> </div>
					          <!--BURGER NAVIGATION SECTION START-->
					          <div class="cp-burger-nav home-3"> 
					            <!--BURGER NAV BUTTON-->
					            <div id="cp_side-menu-btn" class="cp_side-menu"><a href="#" class=""><img src="<?php bloginfo('url');?>/wp-content/uploads/2016/12/menu-icon-3.png" ></a>Menu</div>



					           
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
					                    <ul class="dropdown-menu" aria-labelledby="dLabel">
					                      <li><a href="#">Euro</a></li>
					                      <li><a href="#">Pound</a></li>
					                      <li><a href="#">Euro</a></li>
					                    </ul>
					                  </div>
					                </div>
					                <div class="currency-box">
					                  <div class="dropdown">
					                    <button id="dLabel2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Eng <span class="caret"></span> </button>
					                    <ul class="dropdown-menu" aria-labelledby="dLabel">
					                      <li><a href="#">FR</a></li>
					                      <li><a href="#">EN</a></li>
					                      <li><a href="#">RU</a></li>
					                    </ul>
					                  </div>
					                </div>
					              </div>
					              <nav class="sidebar-social">
				                  	<?php

				                  	$args =  array(
				                  		'theme_location' => 'sidebar-social-menu'

				                  		);
				                  		?>

			                   		<?php wp_nav_menu( $args ); ?>
			                  	</nav>
					            </div>
					            <!--SIDEBAR MENU END--> 
					            
					          </div>
					          <!--BURGER NAVIGATION SECTION END--> 
					        </div>
					        <nav class="small-menu">
			                  	<?php

			                  	$args =  array(
			                  		'theme_location' => 'primary-menu'

			                  		);
			                  		?>

			                    <?php wp_nav_menu( $args ); ?>
			                </nav>
				          </div>
				      <!-- /Navigation Row -->

				     </div> 
				     <!-- /Container -->
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

					  