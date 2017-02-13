 <section class="home-blog theme-style-3">

      <div class="container">
        <div class="heading-style-3">
          <h2>Our blog posts</h2>
          <a href="blog.html" class="btn-all">View All Posts</a> </div>
          <div class="row">

                <?php 

                // post loop begins here
                $sermonPosts = new WP_Query('cat=5&posts_per_page=3');

                if ( $sermonPosts->have_posts() ) : 

                while ($sermonPosts->have_posts() ) : $sermonPosts->the_post(); ?>          

                 <div class="col-md-4 col-sm-4">

                  <div class="blog-box-outer">
                  <div class="frame"><?php the_post_thumbnail(); ?></div>

                  <div class="blog-style-1"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span><?php the_time('F j, Y'); ?>. Category Religion</span> 
                  <p><?php the_excerpt(); ?></p>
                
                  <div class="round-frame"> <?php the_post_thumbnail('small'); ?></div>
                  <strong class="name"><?php the_author_posts_link(); ?></strong> </div>
                  </div>
                </div>

              <?php endwhile; ?>

              
            <?php else : ?>

              <?php get_template_part( 'no-results', 'none' ); ?>

            <?php endif; 

            wp_reset_postdata();
            ?>

         
            </div>
          </div>
        </section>
        <!--HOME BLOG SECTION END-->