<?php /* Template Name: Event Listing */ get_header(); ?>

<!--HEADER SEARCH-->
  <div id="cp-slide-search" class="cp_side-search">
    <form method="get">
      <input type="text" placeholder="Enter Your Search..." required>
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <!--HEADER SEARCH--> 
  
  <!--INNER BANNER START-->
  <div id="inner-banner">
    <div class="container">
      <div class="inner-banner-heading">
        <h1>event list</h1>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li class="active">event list</li>
        </ol>
      </div>
    </div>
  </div>
  <!--INNER BANNER END-->

	<!-- <main role="main">
		section 
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		 
	</main>-->


  
  <div id="main"> 
    <!--EVENT STYLE 2 START-->
    <section class="event-style-2 event-list">
      <div class="container">
      <div class="row">

<?php

// Default $args
$args = array(
	'post_type' => 'event', // required
	'suppress_filters' => FALSE, // required
	'posts_per_page' => -1 // optional
);

// The Query
$events = new WP_Query($args); ?>

<div class="col-md-12 col-sm-6">
<?php if ( $events->have_posts()) : while( $events->have_posts()) : $events->the_post(); ?>

		  
        <div class="event-style-2-box">
          <div class="thumb"><a href="event-detail.html"><img src="images/event-style-2-img-1.jpg" alt="img"></a></div>
          <div class="text-box"> <strong class="date">23 <span>June</span></strong>
            <div class="holder">
              <h3><a href="event-detail.html">Art lessons for children</a></h3>
              <b>Saturday, 10:00 am - 2:00 pm Upcoming. State Route H, Saint Louis, MO, USA </b>
              <div class="social">
                <ul>
                  <li><a href="#"><span class="icon-compass"></span></a></li>
                  <li><a href="#"><span class="icon-share-button-outline"></span></a></li>
                  <li><a href="#"><span class="icon-closed-envelope"></span></a></li>
                </ul>
              </div>
            </div>
            <a href="event-detail.html" class="btn-style-1">REGISTER Now</a> </div>
        </div>
        
		
<?php endwhile; ?>
<?php else : ?>
	<p><?php _e( 'no events found' ); ?></p>
<?php endif; ?>

wp_reset_postdata(); ?>

</div>    


        </div>
        <!--PAGINATION START-->
        <div class="pagination-box">
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">Previous </span> </a> </li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">....</a></li>
              <li> <a href="#" aria-label="Next"> <span aria-hidden="true">Next</span> </a> </li>
            </ul>
          </nav>
        </div>
        <!--PAGINATION END--> 
      </div>
    </section>
    <!--EVENT STYLE 2 END--> 
  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
