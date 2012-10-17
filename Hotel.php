<?php
/**
 * Template Name: Hotel
 */
?>
<?php  get_header();  ?>

  <div id="content" class="container_in">
    <div id = "explain" class="row">
          <h2>Book the best reviewed hotels in the Haiti</h2>
          <div class="desclimeline"></div>
          <p>We’ve hand selected hotels that are consistently rated the best <img src="<?php bloginfo(stylesheet_directory); ?>/img/mifeng.png"></p>
    </div><!-- end explain -->

    <div id = "middle_content" class="row">
      <div class="">
        <div id = "middle_content_left" class="">
          <div class="" >
            <div class="form_mk">
              <?php 
                require_once('hotelform.php');
              ?>
            </div><!-- end form_mk -->
          </div>
          <div class=" why" >
            <h3>Why book with us ?</h3>
            <div class="list dotted one">
                <strong>Trust the World's largest online travel company</strong>
                <p>31 million travellers globally book with us.</p>
            </div>
            <div class="list dotted good">
              <strong>Choice</strong>
              <p>Access to more than 150,000 hotels</p>
            </div>
            <div class="list dotted earth">
              <strong>All Asia</strong>
              <p>AirAsia The Only Online Travel Agent selling Air Asia Flights &</p>
            </div>
            <div class="list dotted money">
              <strong>Combine & Save</strong>
              <p>Book flight + hotel together to save time and money with 'Build</p>
            </div>
            <div class="list best">
              <strong>Best Price Guarantee</strong>
              <p>If you find a lower hotel price on an Indian travel site, we wi</p>
            </div>
          </div><!-- end why -->
        </div><!-- middle_content_left -->
        <div id = "middle_content_right" class="">
          <div id = "mk-slidershow" class="bridge">
            <div id="slideshow">
              <img src="<?php bloginfo(stylesheet_directory); ?>/img/hotel/bridge3.jpg" alt=""  class="active"/>
              <img src="<?php bloginfo(stylesheet_directory); ?>/img/hotel/bridge4.jpg" alt="" />
            </div>
          </div><!-- end bridge -->
          <div class="diandian">
            <ul id = "diandiantong">
              <li class="red"></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div><!-- end diandian -->
          <div class="hipmunk ">
            <h3>What is Hipmunk ?</h3>
            <img src="<?php bloginfo(stylesheet_directory); ?>/img/xiong.png">
          </div><!-- end hipmunk -->
        </div><!-- middle_content_right -->
      </div>
    </div><!-- end middle_content -->

<?php get_footer(); ?>
