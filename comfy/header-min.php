<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/images/touch.png" rel="apple-touch-icon-precomposed">

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
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-3.png" alt="img"></a></strong>
		</div>
		<!-- /logo -->
    <div class="navigation-row">
        <div class="header-3-top-box">
          <div class="top-search"> <a href="#" class="search-icon" id="search-push"><i class="fa fa-search"></i></a> </div>
          <!--BURGER NAVIGATION SECTION START-->
          <div class="cp-burger-nav home-3">
            <!--BURGER NAV BUTTON-->
            <div id="cp_side-menu-btn" class="cp_side-menu"><a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/menu-icon-3.png" alt="img"></a>Menu</div>
            <!--BURGER NAV BUTTON-->

            <!--SIDEBAR MENU START-->
            <div id="cp_side-menu"> <a href="#" id="cp-close-btn" class="crose"><i class="fa fa-close"></i></a>
              <div class="content mCustomScrollbar">
                <div id="content-1" class="content">
                  <div class="cp_side-navigation">
                    <nav>
                      <ul class="navbar-nav">
                        <li class="active"><a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="index.html">Lord Theme</a></li>
                            <li><a href="index-4.html">Children’s Ministry</a></li>
                            <li><a href="index-3.html">Church Events</a></li>
                            <li><a href="index-2.html">Church Store</a></li>
                            <li><a href="index-5.html">Pastor</a></li>
                            <li><a href="index-6.html">Causes</a></li>
                          </ul>
                        </li>
                        <li><a href="job-seekers.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sermons<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="sermons.html">Sermons</a></li>
                            <li><a href="sermons-grid.html">Sermons Grid</a></li>
                            <li><a href="sermons-list.html">Sermons With Sidebar</a></li>
                            <li><a href="sermons-detail.html">Sermons Details</a></li>
                          </ul>
                        </li>
                        <li><a href="employers.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="about-2.html">I’M New Here</a></li>
                          </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ministries<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="ministries.html">Ministries</a></li>
                            <li><a href="senior-ministry-detail.html">Senior Ministry</a></li>
                            <li><a href="youth-ministry-detail.html">Youth Ministry</a></li>
                            <li><a href="wedding-ministry-detail.html">Wedding Ministry</a></li>
                            <li><a href="family-ministry-detail.html">Family Ministry</a></li>
                            <li><a href="childrens-ministry-detail.html">Childrens Ministry</a></li>
                          </ul>
                        </li>
                        <li class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Events<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="event-box.html">Event Box</a></li>
                            <li><a href="event-grid.html">Event Grid</a></li>
                            <li><a href="event-list.html">Event List</a></li>
                            <li><a href="event-calendar.html">Event Calendar</a></li>
                            <li><a href="event-list-with-sidebar.html">Event With Sidebar</a></li>
                            <li><a href="event-timeline.html">Event Timeline</a></li>
                            <li><a href="event-detail.html">Event Details</a></li>
                          </ul>
                        </li>
                        <li><a href="jobs.html" data-toggle="dropdown" role="button" aria-expanded="false">Pages<span class="caret"></span></a>
                          <ul  class="dropdown-menu" role="menu">
                            <li><a href="product.html">Product</a></li>
                            <li><a href="product-detail.html">Product Detail</a></li>
                            <li><a href="product-with-sidebar.html">Product With Sidebar</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="empty-cart.html">Empty Cart</a></li>
                            <li><a href="error-page-1.html">404</a></li>
                            <li><a href="error-page-2.html">Oppss</a></li>
                            <li><a href="comingsoon.html">Comingsoon</a></li>
                          </ul>
                        </li>
                        <li><a href="companies.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-detail.html">Blog Detail</a></li>
                          </ul>
                        </li>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gallery<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="gallery-1-col.html">Gallery One Column</a></li>
                            <li><a href="gallery-2-col.html">Gallery Two Column</a></li>
                            <li><a href="gallery-3-col.html">Gallery Three Column</a></li>
                            <li><a href="gallery-4-col.html">Gallery Four Column</a></li>
                            <li><a href="gallery-full.html">Gallery Full</a></li>
                          </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                      </ul>
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
              <div class="sidebar-social">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
            <!--SIDEBAR MENU END-->

          </div>
          <!--BURGER NAVIGATION SECTION END-->
        </div>
        <div class="small-menu">
          <ul>
            <li><a href="#">Locations &amp; Times</a></li>
            <li><a href="#">Giving</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!--HEADER END-->
