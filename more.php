<?php
/**
 * Template Name: More
 */
?>
<?php  get_header();  ?>

  <div id="content" class="container_in">
    <div id = "explain" class="row">
          <h2>Book the best reviewed hotels in the Haiti</h2>
          <div class="desclimeline"></div>
          <p>We’ve hand selected hotels that are consistently rated the best <img src="<?php bloginfo(stylesheet_directory); ?>/img/mifeng.png"></p>
    </div><!-- end explain -->

    <div id = "more_middle_content" class="row">
     <div id = "moreleft" class="">
          <div id="step">
            <img src="<?php bloginfo(stylesheet_directory); ?>/img/step.png">
          </div><!-- end step -->
          <h4>Manage Your Travel</h2>
          <div class="morelinebg"></div>
          <div id="managetrv">
              <div class="morelist mobile">
                <strong>Free Mobile App</strong>
                <p> Free Mobile App iPhone Android iPad  Windows More </p>
              </div>
              <div class="morelist trips">
                <strong>My Trips</strong>
                <p>Manage, sync & share your itinerary </p>
              </div>
              <div class="morelist alerts">
                <strong>Price Alerts</strong>
                <p>Get flight/hotel prices by email</p>
              </div>
              <div class="morelist account">
                <strong>Account</strong>
                <p>Login, bookings, travel preferences, history </p>
              </div>
              <div class="morelist airlines">
                <strong>Airlines</strong>
                <p>Airline phone numbers</p>
              </div>
          </div><!-- end managetrv -->
          <h4>Find Travel</h2>
          <div class="morelinebg"></div>
          <div id="managetrv">
            <div class="morelist vacations">
              <strong>Vacations</strong>
                <p>Find discount vacations </p>
            </div>
            <div class="morelist explore">
              <strong>Explore </strong>
                <p>Where you can go for how much </p>
            </div>
            <div class="morelist flights">
              <strong>Direct Flights</strong>
                <p>Schedule of nonstop flights </p>
            </div>
            <div class="morelist fare">
              <strong>Low Fare Tips</strong>
                <p>Guide to getting the best airfare prices</p>
            </div>
            <div class="morelist fees">
              <strong>Airline Fees </strong>
                <p>Baggage and other airline fees </p>
            </div>
            <div class="morelist cruises">
              <strong>Cruises </strong>
                <p>Find discount cruise deals </p>
            </div>

          </div><!-- end managetrv -->
     </div><!-- end moreleft -->
      <div id = "moreright" class="">
          <?php require_once('moreform.php') ?>
     </div><!-- end moreright -->


    </div><!-- end middle_content -->
<?php get_footer(); ?>