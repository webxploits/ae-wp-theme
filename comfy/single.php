<?php get_header(); ?>

	<main role="main">
		
		<!--BLOG SECTION START-->
		    
		    <section class="blog-section">
		      <div class="container">
		        <div class="row">
		          <div class="col-md-9 col-sm-8">
			
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		            <div class="post-box">
		              
		               <div class="frame"><?php the_post_thumbnail('medium_large'); ?></div>

		                <div class="text-box"> <strong class="date"><?php the_time('F j, Y'); ?></strong>
		                <h2><?php the_title(); ?></h2>
		                <?php the_content(); ?>
		                
		                                
		                  <div class="btm-col">
		                
			              <div class="thumb">
			              	<?php the_post_thumbnail('small'); ?>

			              </div>
			          	  		                  

		                  </div>
		                  <div class="text-col"> <strong class="title"><?php the_author_posts_link(); ?></strong> <a href="#"><i class="fa fa-comment" aria-hidden="true"></i>Comment</a> <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>2 Share</a> </div>
		                </div>
		                <?php comments_template(); ?>

		                 </div>
		            </div>
			

		            <?php endwhile; ?>

					<?php else: ?>

							<h2><?php _e( 'Sorry, nothing to display.', 'comfy' ); ?></h2>

					<?php endif; ?>

					</section>
					<!-- /section -->
				</main>

			<?php get_sidebar(); ?>

			<?php get_footer(); ?>