<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package Comfy
 * @since Comfy 2.0
 */

get_header(); ?>


  <div id="main">
    <section class="about-top-row">
      <div class="container-fluid">
        <div class="col-md-6">
          <div class="left-box">
            <div class="holder"> <span class="icon-halloween-october-31-calendar-page-sketch"></span>
              <div class="text-hold"> <strong class="title">Upcoming Event</strong>
                <p>"The Law Demands, but Grace Supplies" - Paster J.P.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-box">
            <div class="holder"> <span class="icon-customer-service"></span>
              <div class="text-hold"> <strong class="title">Service Times</strong>
                <p>7:00am - Bible Study    10am-Awaken Service &amp; Bible Study</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--HOME ABOUT SECTION START-->
    <section class="home-about">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="heading-left">
              <h2>About Our Church</h2>
              <span>WE LIVE TO PRAISE HIM</span> </div>
            <strong class="title">We exist to reach people far from God and lead them to an authentic relationship with Jesus.</strong>
            <p>Aenean arcu tortor, suscipit vitae, hendrerit condimentum, dapibus ac, nulla. Curabitur sit consectetuer ipsum dolor sit amet justo et sit amet justo consectetuer adipiscing elit.Maecenas porttitor neque eu sem nullam lectus neque, blandit quis mattis quis varius eu eros. Vivamus ads metus. Mauris at tellus at sapien.</p>
            <a href="about.html" class="btn-style-1">Know More</a> </div>
          <div class="col-md-6">
            <div class="frame-1"><img src="<?php bloginfo( 'template_url' ); ?>/images/about-img-1.jpg" alt="img"></div>
            <div class="frame-2"><img src="<?php bloginfo( 'template_url' ); ?>/images/about-img-2.jpg" alt="img"></div>
          </div>
        </div>
      </div>
    </section>
    <!--HOME ABOUT SECTION END-->

    <!--RECENT SERMONS SECTION START-->
    <section class="recent-sermons">
      <div class="container">
        <div class="heading-center">
          <h2>Recent Sermons</h2>
          <div class="heading-line"> <span><b><em>Listen to our sermons</em></b></span> </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <div class="round-box"><span class="icon-favorite"></span></div>
            <div class="text-box">
              <h3><a href="sermons.html">Chronicles 16:11</a> </h3>
              <p>Seek the LORD and his strength;  seek his presence continually!</p>
              <div class="links">
                <ul>
                  <li><a href="#"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-music" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="round-box"> <span class="icon-bell-ringing"></span> </div>
            <div class="text-box">
              <h3><a href="sermons.html">Call to worship 14:02</a></h3>
              <p>Seek the LORD and his strength;  seek his presence continually!</p>
              <div class="links">
                <ul>
                  <li><a href="#"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-music" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="round-box"><span class="icon-bible"></span> </div>
            <div class="text-box">
              <h3><a href="sermons.html">Open bible study 12:09</a></h3>
              <p>Seek the LORD and his strength;  seek his presence continually!</p>
              <div class="links">
                <ul>
                  <li><a href="#"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-music" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--RECENT SERMONS SECTION END-->

    <!--OUR EVENTS SECTION START-->
    <section class="our-events">
      <div class="container-fluid">
        <div class="col-md-7 col-sm-7">
          <div class="holder">
            <div class="heading-left">
              <h2>Our Events</h2>
              <span>we remember moments</span> </div>
            <a href="#" class="btn-all">View All Events</a>
            <div class="event-col">
              <div class="thumb"> <img src="<?php bloginfo( 'template_url' ); ?>/images/event-img-1.jpg" alt="img"> <strong class="date">18 <span>JuLY</span></strong> </div>
              <div class="text-box"> <a href="event-detail.html">Join us throughout the week to serve our city.</a> <span>Saturday, 10:00 am - 2:00 pm Upcoming. State Route </span>
                <ul class="links">
                  <li><a href="#"><span class="icon-compass"></span></a></li>
                  <li><a href="#"><span class="icon-share-button-outline"></span></a></li>
                  <li><a href="#"><span class="icon-e-mail-envelope"></span></a></li>
                </ul>
                <a href="event-detail.html" class="btn-register">Register Now<i class="fa fa-angle-right" aria-hidden="true"></i></a> </div>
            </div>
            <div class="event-col">
              <div class="thumb"> <img src="<?php bloginfo( 'template_url' ); ?>/images/event-img-2.jpg" alt="img"> <strong class="date">16 <span>JuLY</span></strong> </div>
              <div class="text-box"> <a href="event-detail.html">Join us throughout the week to serve our city.</a> <span>Saturday, 10:00 am - 2:00 pm Upcoming. State Route </span>
                <ul class="links">
                  <li><a href="#"><span class="icon-compass"></span></a></li>
                  <li><a href="#"><span class="icon-share-button-outline"></span></a></li>
                  <li><a href="#"><span class="icon-e-mail-envelope"></span></a></li>
                </ul>
                <a href="event-detail.html" class="btn-register">Register Now<i class="fa fa-angle-right" aria-hidden="true"></i></a> </div>
            </div>
            <div class="event-col">
              <div class="thumb"> <img src="<?php bloginfo( 'template_url' ); ?>/images/event-img-3.jpg" alt="img"> <strong class="date">12 <span>JuLY</span></strong> </div>
              <div class="text-box"> <a href="event-detail.html">Join us throughout the week to serve our city.</a> <span>Saturday, 10:00 am - 2:00 pm Upcoming. State Route </span>
                <ul class="links">
                  <li><a href="#"><span class="icon-compass"></span></a></li>
                  <li><a href="#"><span class="icon-share-button-outline"></span></a></li>
                  <li><a href="#"><span class="icon-e-mail-envelope"></span></a></li>
                </ul>
                <a href="event-detail.html" class="btn-register">Register Now<i class="fa fa-angle-right" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-sm-5">
          <div class="upcoming-col">
            <div class="holder">
              <div class="countdown countdown-container">
                <div class="clock row">
                  <div class="clock-item clock-days countdown-time-value col-sm-6 col-md-3">
                    <div class="wrap">
                      <div class="inner">
                        <div id="canvas-days" class="clock-canvas"></div>
                        <div class="text">
                          <p class="val">0</p>
                          <p class="type-days type-time">DAYS</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="clock-item clock-hours countdown-time-value col-sm-6 col-md-3">
                    <div class="wrap">
                      <div class="inner">
                        <div id="canvas-hours" class="clock-canvas"></div>
                        <div class="text">
                          <p class="val">0</p>
                          <p class="type-hours type-time">HOURS</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="clock-item clock-minutes countdown-time-value col-sm-6 col-md-3">
                    <div class="wrap">
                      <div class="inner">
                        <div id="canvas-minutes" class="clock-canvas"></div>
                        <div class="text">
                          <p class="val">0</p>
                          <p class="type-minutes type-time">MINUTES</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="clock-item clock-seconds countdown-time-value col-sm-6 col-md-3">
                    <div class="wrap">
                      <div class="inner">
                        <div id="canvas-seconds" class="clock-canvas"></div>
                        <div class="text">
                          <p class="val">0</p>
                          <p class="type-seconds type-time">SECONDS</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-box"> <strong class="title">Join us throughout the week to serve our city.</strong> <span>Saturday, 10:00 am - 2:00 pm Upcoming. State Route </span>
                <p>Maecenas porttitor neque eu sem nullam lectus neque, blandit quis mattis quis varius eu eros. Vivamus ads metus auris at tellus at sapien.</p>
                <ul class="links">
                  <li><a href="#"><span class="icon-compass"></span></a></li>
                  <li><a href="#"><span class="icon-share-button-outline"></span></a></li>
                  <li><a href="#"><span class="icon-e-mail-envelope"></span></a></li>
                </ul>
                <div class="btn-row"><a href="sermons-detail.html" class="btn-style-1">See full Detail</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--OUR EVENTS SECTION END-->

    <!--OUR PASTORE SECTION START-->
    <section class="our-pastore">
      <div class="container">
        <div class="heading-center">
          <h2>Recent Sermons</h2>
          <span><b><em>WE LIVE TO PRAISE HIM</em></b></span> </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="frame"> <img src="<?php bloginfo( 'template_url' ); ?>/images/pastor-img-1.jpg" alt="img">
              <div class="caption">
                <div class="holder"> <a href="#" class="title">Dana Amberbach</a> <span>Gabriel Singer</span> </div>
              </div>
              <div class="hover-box">
                <div class="holder"> <strong class="name"><a href="pastors-detail.html">Dana Amberbach</a></strong> <span>Gabriel Singe</span>
                  <div class="social">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="frame"> <img src="<?php bloginfo( 'template_url' ); ?>/images/pastor-img-2.jpg" alt="img">
              <div class="caption">
                <div class="holder"> <a href="#" class="title">Jonatha Doe</a> <span>Senior Member </span> </div>
              </div>
              <div class="hover-box">
                <div class="holder"> <strong class="name"><a href="pastors-detail.html">Jonatha Doe</a></strong> <span>Senior Member </span>
                  <div class="social">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="frame"> <img src="<?php bloginfo( 'template_url' ); ?>/images/pastor-img-3.jpg" alt="img">
              <div class="caption">
                <div class="holder"> <a href="#" class="title">David Anaial</a> <span>Senior Pastor</span> </div>
              </div>
              <div class="hover-box">
                <div class="holder"> <strong class="name"><a href="pastors-detail.html">David Anaial</a></strong> <span>Senior Pastor</span>
                  <div class="social">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="frame"> <img src="<?php bloginfo( 'template_url' ); ?>/images/pastor-img-4.jpg" alt="img">
              <div class="caption">
                <div class="holder"> <a href="#" class="title">Jonatha Doe</a> <span>Senior Member</span> </div>
              </div>
              <div class="hover-box">
                <div class="holder"> <strong class="name"><a href="pastors-detail.html">Jonatha Doe</a></strong> <span>Senior Member</span>
                  <div class="social">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--OUR PASTORE SECTION END-->

    <!--DONATE SECTION START-->
    <section class="donate-section">
      <div class="container">
        <h2>Help Us Build a New Church Online School</h2>
        <span>We exist to reach people far from God and lead them to an authentic relationship with Jesus.</span> <strong class="amount">$6560.00</strong>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
        </div>
        <strong class="goal">Pledged of $15000 goal</strong>
        <div class="btn-row"><a href="#" class="btn-style-1">online Donetaion</a></div>
      </div>
    </section>
    <!--DONATE SECTION END-->

    <!--SERMONS SECTION START-->
    <section class="sermons-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="heading-left">
              <h2>Sermons library</h2>
              <span>Listen Our Sermons</span> </div>
            <a href="sermons.html" class="btn-all">View All</a>
            <div class="sermon-box">
              <div class="round-frame"><img src="<?php bloginfo( 'template_url' ); ?>/images/sermon-img-1.jpg" alt="img"></div>
              <div class="holder"> <a href="#" class="btn-play"><span class="icon-play-button"></span></a>
                <div class="text-box"> <a href="sermons-detail.html" class="title">Join us throughout the week</a> <b>6/26 S/2016 . Speaker: Pastor Johan Doe</b> </div>
              </div>
              <div class="holder-hover-1">
                <h3><a href="sermons-detail.html">Have Faith. Trust in Lord and He Guide You</a></h3>
                <strong class="title">6/26/2016 / Speaker: Pastor John Doe</strong>
                <div class="mp3-player-box">
                  <audio preload="auto" controls>
                    <source src="audio/BlueDucks_FourFlossFiveSix.mp3">
                    <source src="audio/BlueDucks_FourFlossFiveSix.ogg">
                    <source src="audio/BlueDucks_FourFlossFiveSix.wav">
                  </audio>
                </div>
              </div>
            </div>
            <div class="sermon-box">
              <div class="round-frame"><img src="<?php bloginfo( 'template_url' ); ?>/images/sermon-img-2.jpg" alt="img"></div>
              <div class="holder"> <a href="#" class="btn-play"><span class="icon-play-button"></span></a>
                <div class="text-box"> <a href="sermons-detail.html" class="title">Have Faith. Trust in Lord and He</a> <b>6/26 S/2016 . Speaker: Pastor Johan Doe</b> </div>
              </div>
              <div class="holder-hover-1">
                <h3><a href="sermons-detail.html">Have Faith. Trust in Lord and He Guide You</a></h3>
                <strong class="title">6/26/2016 / Speaker: Pastor John Doe</strong>
                <div class="mp3-player-box">
                  <audio preload="auto" controls>
                    <source src="audio/BlueDucks_FourFlossFiveSix.mp3">
                    <source src="audio/BlueDucks_FourFlossFiveSix.ogg">
                    <source src="audio/BlueDucks_FourFlossFiveSix.wav">
                  </audio>
                </div>
              </div>
            </div>
            <div class="sermon-box">
              <div class="round-frame"><img src="<?php bloginfo( 'template_url' ); ?>/images/sermon-img-3.jpg" alt="img"></div>
              <div class="holder"> <a href="#" class="btn-play"><span class="icon-play-button"></span></a>
                <div class="text-box"> <a href="sermons-detail.html" class="title">God’s Design For Marriage</a> <b>6/26 S/2016 . Speaker: Pastor Johan Doe</b> </div>
              </div>
              <div class="holder-hover-1">
                <h3><a href="sermons-detail.html">Have Faith. Trust in Lord and He Guide You</a></h3>
                <strong class="title">6/26/2016 / Speaker: Pastor John Doe</strong>
                <div class="mp3-player-box">
                  <audio preload="auto" controls>
                    <source src="audio/BlueDucks_FourFlossFiveSix.mp3">
                    <source src="audio/BlueDucks_FourFlossFiveSix.ogg">
                    <source src="audio/BlueDucks_FourFlossFiveSix.wav">
                  </audio>
                </div>
              </div>
            </div>
            <div class="sermon-box">
              <div class="round-frame"><img src="<?php bloginfo( 'template_url' ); ?>/images/sermon-img-4.jpg" alt="img"></div>
              <div class="holder"> <a href="#" class="btn-play"><span class="icon-play-button"></span></a>
                <div class="text-box"> <a href="sermons-detail.html" class="title">Holy Spirit: Strategic Thinking</a> <b>6/26 S/2016 . Speaker: Pastor Johan Doe</b> </div>
              </div>
              <div class="holder-hover-1">
                <h3><a href="sermons-detail.html">Have Faith. Trust in Lord and He Guide You</a></h3>
                <strong class="title">6/26/2016 / Speaker: Pastor John Doe</strong>
                <div class="mp3-player-box">
                  <audio preload="auto" controls>
                    <source src="audio/BlueDucks_FourFlossFiveSix.mp3">
                    <source src="audio/BlueDucks_FourFlossFiveSix.ogg">
                    <source src="audio/BlueDucks_FourFlossFiveSix.wav">
                  </audio>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="heading-left">
              <h2>Our Charity Store</h2>
              <span>See our shop</span> </div>
            <div class="store-box">
              <div class="store-banner owl-carousel owl-theme">
                <div class="item">
                  <div class="store-box-social">
                    <ul>
                      <li><a href="#"><span class="icon-shopping-cart"></span></a></li>
                      <li><a href="#"><span class="icon-share-button-outline"></span></a></li>
                      <li><a href="#"><span class="icon-like"></span></a></li>
                    </ul>
                  </div>
                  <div class="frame"><img src="<?php bloginfo( 'template_url' ); ?>/images/store-home-img-1.jpg" alt="img"></div>
                  <div class="text-box">
                    <h3>Join us throughout the week</h3>
                    <strong class="amount">$143.00   -   $120:00</strong>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pharetra risus in elit luctus, sit amet volutpat diam mollis</p>
                    <div class="btn-row"> <a href="product-detail.html" class="btn-style-1">See Full Colection</a> </div>
                  </div>
                </div>
                <div class="item">
                  <div class="store-box-social">
                    <ul>
                      <li><a href="#"><span class="icon-shopping-cart"></span></a></li>
                      <li><a href="#"><span class="icon-share-button-outline"></span></a></li>
                      <li><a href="#"><span class="icon-like"></span></a></li>
                    </ul>
                  </div>
                  <div class="frame"><img src="<?php bloginfo( 'template_url' ); ?>/images/store-home-img-2.jpg" alt="img"></div>
                  <div class="text-box">
                    <h3>Join us throughout the week</h3>
                    <strong class="amount">$143.00   -   $120:00</strong>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pharetra risus in elit luctus, sit amet volutpat diam mollis</p>
                    <div class="btn-row"> <a href="product-detail.html" class="btn-style-1">See Full Colection</a> </div>
                  </div>
                </div>
                <div class="item">
                  <div class="store-box-social">
                    <ul>
                      <li><a href="#"><span class="icon-shopping-cart"></span></a></li>
                      <li><a href="#"><span class="icon-share-button-outline"></span></a></li>
                      <li><a href="#"><span class="icon-like"></span></a></li>
                    </ul>
                  </div>
                  <div class="frame"><img src="<?php bloginfo( 'template_url' ); ?>/images/store-home-img-3.jpg" alt="img"></div>
                  <div class="text-box">
                    <h3>Join us throughout the week</h3>
                    <strong class="amount">$143.00   -   $120:00</strong>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pharetra risus in elit luctus, sit amet volutpat diam mollis</p>
                    <div class="btn-row"> <a href="product-detail.html" class="btn-style-1">See Full Colection</a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--SERMONS SECTION END-->

    <!--GALLERY STYLE 1 START-->
    <section class="gallery-style-1">
      <div class="heading-center">
        <h2>From The Gallery</h2>
        <span><b><em>Here is our Galery</em></b></span> </div>
      <div class="container-fluid">
        <div class="col-md-2 col-sm-4">
          <div class="frame"> <img src="<?php bloginfo( 'template_url' ); ?>/images/gallery/gallery-style-1-img-1.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a> <strong class="title">Holy Spirit: Strategic </strong> <span>Chruch- Furniture</span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="frame"> <img src="<?php bloginfo( 'template_url' ); ?>/images/gallery/gallery-style-1-img-2.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a> <strong class="title">Holy Spirit: Strategic </strong> <span>Chruch- Furniture</span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="frame"> <img src="<?php bloginfo( 'template_url' ); ?>/images/gallery/gallery-style-1-img-3.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a> <strong class="title">Holy Spirit: Strategic </strong> <span>Chruch- Furniture</span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="frame"> <img src="<?php bloginfo( 'template_url' ); ?>/images/gallery/gallery-style-1-img-4.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a> <strong class="title">Holy Spirit: Strategic </strong> <span>Chruch- Furniture</span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="frame"> <img src="<?php bloginfo( 'template_url' ); ?>/images/gallery/gallery-style-1-img-5.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a> <strong class="title">Holy Spirit: Strategic </strong> <span>Chruch- Furniture</span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="frame"> <img src="<?php bloginfo( 'template_url' ); ?>/images/gallery/gallery-style-1-img-6.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a> <strong class="title">Holy Spirit: Strategic </strong> <span>Chruch- Furniture</span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="frame"> <img src="<?php bloginfo( 'template_url' ); ?>/images/gallery/gallery-style-1-img-7.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a> <strong class="title">Holy Spirit: Strategic </strong> <span>Chruch- Furniture</span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="frame"> <img src="<?php bloginfo( 'template_url' ); ?>/images/gallery/gallery-style-1-img-8.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a> <strong class="title">Holy Spirit: Strategic </strong> <span>Chruch- Furniture</span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="frame"> <img src="<?php bloginfo( 'template_url' ); ?>/images/gallery/gallery-style-1-img-9.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a> <strong class="title">Holy Spirit: Strategic </strong> <span>Chruch- Furniture</span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="frame"> <img src="<?php bloginfo( 'template_url' ); ?>/images/gallery/gallery-style-1-img-10.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a> <strong class="title">Holy Spirit: Strategic </strong> <span>Chruch- Furniture</span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="frame"> <img src="<?php bloginfo( 'template_url' ); ?>/images/gallery/gallery-style-1-img-11.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a> <strong class="title">Holy Spirit: Strategic </strong> <span>Chruch- Furniture</span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="frame"> <img src="<?php bloginfo( 'template_url' ); ?>/images/gallery/gallery-style-1-img-12.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a> <strong class="title">Holy Spirit: Strategic </strong> <span>Chruch- Furniture</span> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--GALLERY STYLE 1 END-->

    <!--HOME BLOG SECTION START-->
    <section class="home-blog">
      <div class="container">
        <div class="heading-center">
          <h2>From The Blog</h2>
          <span><b><em>Here Our Latest New</em></b>s</span> </div>
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <div class="blog-style-1"> <a href="blog-detail.html" class="title">The Lord, GOD Of Our Lifes</a> <span>6/26 S/2016 . Category Religion</span>
              <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pharetra risus in elit luctus, sit a mollis...{+}</p>
              <div class="round-frame"><img src="<?php bloginfo( 'template_url' ); ?>/images/blog-style-1-img-1.jpg" alt="img"></div>
              <strong class="name">Rona Thanki</strong> </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="blog-style-1"> <a href="blog-detail.html" class="title">Reaching Kids Education</a> <span>6/26 S/2016 . Category Religion</span>
              <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pharetra risus in elit luctus, sit a mollis...{+}</p>
              <div class="round-frame"><img src="<?php bloginfo( 'template_url' ); ?>/images/blog-style-1-img-2.jpg" alt="img"></div>
              <strong class="name">Jeena Kate</strong> </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="blog-style-1"> <a href="blog-detail.html" class="title">Service Day: A Family Affair!</a> <span>6/26 S/2016 . Category Religion</span>
              <p>hendrerit condimentum, dapibus ac, nulla. Curabitur sit consectetuer ipsum dolor sit amet justo et sit amet justo consectetuer adipiscing elit....{+}</p>
              <div class="round-frame"><img src="<?php bloginfo( 'template_url' ); ?>/images/blog-style-1-img-3.jpg" alt="img"></div>
              <strong class="name">David Issiq</strong> </div>
          </div>
        </div>
        <div class="btn-row"><a href="blog.html" class="btn-style-1">View All Posts</a></div>
      </div>
    </section>
    <!--HOME BLOG SECTION END-->
  </div>


<?php get_footer(); ?>
