
<!--BANNER START-->
		<div id="banner" class="banner-style-4">
			<div id="home-banner" class="owl-carousel owl-theme">
				<div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/banner-style-4-img-1.jpg" alt="img">
					<div class="caption">
						<div class="holder-caption-4">
							<h1>Stop Child</h1>
							<span>Abuse</span> <a href="#" class="btn-style-1">Join Now</a> </div>
					</div>
				</div>
				<div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/banner-style-4-img-2.jpg" alt="img">
					<div class="caption">
						<div class="holder-caption-4">
							<h1>Stop the</h1>
							<span>Slienece</span> <a href="#" class="btn-style-1">Join Now</a> </div>
					</div>
				</div>
				<div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/banner-style-4-img-3.jpg" alt="img">
					<div class="caption">
						<div class="holder-caption-4">
							<h1>Join the</h1>
							<span>Cause</span> <a href="#" class="btn-style-1">Join Now</a> </div>
					</div>
				</div>
			</div>
		</div>
		<!--BANNER END-->

		<div id="slider">
 
    <?php
    $carousel_cat = get_theme_mod('carousel_setting','1');
    $carousel_count = get_theme_mod('count_setting','4');
    $new_query = new WP_Query( array( 'cat' => $carousel_cat  , 'showposts' => $carousel_count ));
    while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
 
    <div class="item">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'carousel-pic' ); ?></a>
        <h3> <?php the_title();?> </h3>
    </div>
 
    <?php 
        endwhile;
        wp_reset_postdata(); 
    ?>
 
</div>