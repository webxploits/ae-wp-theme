<?php

/**
* Template Name: Event Listing
*/

?>

<?php get_header(); ?>

 <div id="main"> 
    <!--EVENT STYLE 2 START-->
    <section class="event-style-2 event-list">
      <div class="container">
      <div class="row">

      <?php query_posts( 'post_type=events'); ?>
      
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <div class="col-md-12 col-sm-6">
        <div class="event-style-2-box">
         <div class="thumb"><a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a></div>
         <div class="text-box"> <strong class="date">
           <?php the_time('d'); ?>
           <span><?php the_time('F'); ?></span>
           </strong>
            <div class="holder">
             <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <b><?php the_excerpt(); ?></b>
              <div class="social">
                <ul>
                  <li><a href="#"><span class="icon-compass"></span></a></li>
                  <li><a href="#"><span class="icon-share-button-outline"></span></a></li>
                  <li><a href="#"><span class="icon-closed-envelope"></span></a></li>
                </ul>
              </div>
            </div>
            <a href="<?php the_permalink(); ?>" class="btn-style-1">REGISTER Now</a> </div>
        </div>
        </div>
    
        <?php endwhile; ?>

        <?php else: ?>

    
        <h3><?php _e( 'Sorry, nothing to display.', 'comfy' ); ?></h3>

      
        <?php endif; ?>
        
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