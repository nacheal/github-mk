<?php
/**
 * Template Name: Ride
 */
?>
<?php  get_header();  ?>

  <div id="content" class="container_in">
    <div id = "explain" class="row">
          <h2>Book the best reviewed hotels in the Haiti</h2>
          <p>We’ve hand selected hotels that are consistently rated the best</p>
    </div><!-- end explain -->

    <div id = "ride_middle_content" class="row">
      <div id="ridestep">
        <img src="<?php bloginfo(stylesheet_directory); ?>/img/ridestep.png">
      </div><!--end ridestep -->
      <div id="call">
        <img src="<?php bloginfo(stylesheet_directory); ?>/img/call.png">
      </div><!--end ridestep -->
      <div id="ridemiddle">
        <div id="tranform">
          <img src="<?php bloginfo(stylesheet_directory); ?>/img/tranform.png">
        </div><!--end tranform -->
        <div id="map">
          <img src="<?php bloginfo(stylesheet_directory); ?>/img/map.png">
        </div><!--end map -->
      </div><!--end  ridemiddle -->
      <div id="makesure">
        <img src="<?php bloginfo(stylesheet_directory); ?>/img/makesure.png">
      </div><!--end  makesure -->
    </div><!-- end trip_middle_content -->

<?php get_footer(); ?>