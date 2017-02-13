<?php /* Template Name: Home - Events */ get_header(); ?>

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
        <h1>event Detail</h1>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li class="active">event Detail</li>
        </ol>
      </div>
    </div>
  </div>
  <!--INNER BANNER END-->
  
  <div id="main"> 
    <!--EVENT DETAIL START-->
    <section class="event-detail">
      <section class="event-detail-section-1">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="frame"><img src="<?php echo get_template_directory_uri(); ?>/images/event-detail-img-1.jpg" alt="img"></div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="text-box">
                <div class="heading-left">
                  <h2>Join us throughout the  Church.</h2>
                  <span>we remember moments</span> </div>
                <strong class="title">We exist to reach people far from God and lead them to an authentic relationship with Jesus.</strong>
                <p>Aenean arcu tortor, suscipit vitae, hendrerit condimentum, dapibus ac, nulla. Curabitur sit consectetuer ipsum dolor sit amet justo et sit amet justo consectetuer adipiscing elit.Maecenas porttitor neque eu sem nullam lectus neque, blandit quis mattis quis varius eu eros. Vivamus ads metus. Mauris at tellus at sapien.</p>
                <p>tortor, suscipit vitae, hendrerit condimentum, dapibus ac, nulla. Curabitur sit consectetuer ipsum dolor sit amet justo et sit amet justo consectetuer adipiscing elit.Maecenas porttitor neque eu sem nullam lectus neque, blandit quis mattis quis varius eu eros. Vivamus ads metus. Mauris at tellus at.</p>
                <p>suscipit vitae, hendrerit condimentum, dapibus ac, nulla. Curabitur sit consectetuer ipsum dolor sit amet justo et sit amet justo consectetuer adipiscing elit.Maecenas porttitor neque eu sem nullam lectus neque, blandit quis mattis quis varius eu eros. Vivamus ads metus. Mauris at tellus at.tortor, suscipit vitae, hendrerit condimentum, dapibus ac, nulla. Curabitur sit consectetuer ipsum dolor. </p>
                <a href="#" class="btn-style-1">register now</a> <a href="#" class="btn-style-1">Event calendar</a> </div>
            </div>
          </div>
        </div>
      </section>
      <section class="event-detail-section-2">
        <div id="map_contact_2" class="map_canvas active"></div>
      </section>
      <section class="event-detail-section-3">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="sermons-detail-row">
                <div class="left-box">
                  <div class="holder"> <strong class="title">Details</strong>
                    <ul>
                      <li> <span>Start:</span>
                        <p>July 25 @ 10:30 am</p>
                      </li>
                      <li> <span>End:</span>
                        <p>Aug 10 @ 8:pm</p>
                      </li>
                      <li> <span>Sermons Category:</span>
                        <p>Charity for Poors</p>
                      </li>
                      <li> <span>Sermons Place:</span>
                        <p>Lord Church</p>
                      </li>
                    </ul>
                  </div>
                  <div class="holder pull-right"> <strong class="title">Organizer</strong>
                    <ul>
                      <li> <span>Place:</span>
                        <p>Lord’s Church</p>
                      </li>
                      <li> <span>Phone:</span>
                        <p>+660 252265866</p>
                      </li>
                      <li> <span>Emal:</span> <a href="mailto:">support@CrunchPres.com</a> </li>
                      <li> <span>Website:</span> <a href="#">www.CrunchPress.com</a> </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="sermons-detail-row">
                <div class="left-box">
                  <div class="holder"> <strong class="title">Venue</strong>
                    <ul>
                      <li>
                        <p>825 Jhon street,World Vision UK
                          Opal Drive Fox Milne Milton MK15 0ZR </p>
                      </li>
                      <li> <span>Phone:</span>
                        <p>+660 252265866</p>
                      </li>
                      <li> <span>SEmal:</span> <a href="mailto:">support@CrunchPres.com</a> </li>
                      <li> <span>Website:</span> <a href="#">www.CrunchPress.com </a> </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <!--EVENT DETAIL END--> 
  </div>

<?php get_footer(); ?>
