<?php
/**
 * Template Name: My trip
 */
?>
<?php  get_header();  ?>
    <div id="content" class="container_in">
    <div id = "explain" class="row">
          <h2>Book the best reviewed hotels in the Haiti</h2>
          <div class="desclimeline"></div>
          <p>We’ve hand selected hotels that are consistently rated the best <img src="<?php bloginfo(stylesheet_directory); ?>/img/mifeng.png"></p>
    </div><!-- end explain -->

    <div id = "trip_middle_content" class="row">
      <div id="trip_top">
        <h3>My Trips - a free trip planner. Your travel plans on one page. Share with friends and family. <strong>Learn more</strong> </h3>
      </div><!-- end trip_top -->
      <div id="trip_desc">
        <h3>Made a booking on Perie <b class= "red">Look it up by confirmation number. </b></h4>
        <p>Getting started with My Trips  – <b>forward your booking confirmation from your email inbox to trips@perie.com.</b></p>
      </div><!-- end trip_desc -->
      <div id="trip_content">
        <div id="trip_content_left">
          <div class="trip_list">
            <img src="<?php bloginfo(stylesheet_directory); ?>/img/emailbg.png">
            <div class="trip_desc">
              <strong>Forward booking receipt emails</strong>
            </div>
          </div>
          <div class="trip_list">
            <img src="<?php bloginfo(stylesheet_directory); ?>/img/webpagebg.png">
            <div class="trip_desc">
              <strong>Your trip planner on a web page</strong>
            </div>
          </div>
          <div class="trip_list">
            <img src="<?php bloginfo(stylesheet_directory); ?>/img/appflightbg.png">
            <div class="trip_desc">
              <strong>Get flight status by email or SMS</strong>
            </div>
          </div>
          <div class="trip_list">
            <img src="<?php bloginfo(stylesheet_directory); ?>/img/appemailbg.png">
            <div class="trip_desc">
              <strong>Get flight status by email or SMS</strong>
            </div>
          </div>
        </div><!-- end trip_content_left -->
        <div id="trip_content_right">
          <div id="into">
            <h3 class="title">
              Your itinerary in seconds(example)
            </h3>
            <ul>
              <li class = "bottom">100% FREE</li>
              <li class = "bottom">Flight status alerts</li>
              <li class = "bottom">Share with friends & family</li>
              <li>Syncs with your phone</li>
            </ul>
            <h3 class="bottomtitle">
              iPhone | Android
            </h3>
          </div><!-- end into -->
          <div id="signin">
            <div class ='singin'>
              <p>Sign up for my trips</p>
            </div>
            <div class = 'sinbt'>
              <input type="submit">
            </div>
          </div><!-- end into -->
        </div><!-- end trip_content_right -->
      </div><!-- end trip_content -->
    </div><!-- end trip_middle_content -->
<?php get_footer(); ?>