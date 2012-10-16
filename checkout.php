<?php
/**
 * Template Name: Check out
 */
?>
<?php  get_header();  ?>

  <div id="content" class="container_in">
    <div id = "explain" class="row">
          <h2>Book the best reviewed hotels in the Haiti</h2>
          <p>We’ve hand selected hotels that are consistently rated the best</p>
    </div><!-- end explain -->

    <div id = "check_middle_content" class="row">
      <div id="checkoutsearchform">
        <?php get_search_form(); ?>
      </div><!-- end checkoutsearchform -->
      <div id="checkmiddle">
        <div id="checkleft">
          <div id="sort">
            <img src="<?php bloginfo(stylesheet_directory); ?>/img/sort.png">
          </div>
          <div id="checkloop">
            <div class="limeline">
            </div>
            <div class="checklist">
              <img src="<?php bloginfo(stylesheet_directory); ?>/img/checklistcontent.png">
            </div>
            <div class="checklist">
              <img src="<?php bloginfo(stylesheet_directory); ?>/img/checklistcontent.png">
            </div>
            <div class="checklist">
              <img src="<?php bloginfo(stylesheet_directory); ?>/img/checklistcontent.png">
            </div>
            <div class="checklist">
              <img src="<?php bloginfo(stylesheet_directory); ?>/img/checklistcontent.png">
            </div>
            <div class="checklist">
              <img src="<?php bloginfo(stylesheet_directory); ?>/img/checklistcontent.png">
            </div>
            <div class="checklist">
              <img src="<?php bloginfo(stylesheet_directory); ?>/img/checklistcontent.png">
            </div>
            <div class="checklist">
              <img src="<?php bloginfo(stylesheet_directory); ?>/img/checklistcontent.png">
            </div>
          </div><!-- end checkloop-->
          <div id="pagenav">
              <img src="<?php bloginfo(stylesheet_directory); ?>/img/pagenav.png">
          </div>
        </div><!-- end checkright -->
        <div id="checkright">
          <div id="maplist">
            <img src="<?php bloginfo(stylesheet_directory); ?>/img/maplist.png">
          </div><!-- emd maplist -->
          <div id="starts">
            <img src="<?php bloginfo(stylesheet_directory); ?>/img/starts.png">
          </div><!-- emd starts -->
          <div id="morefilters">
            <img src="<?php bloginfo(stylesheet_directory); ?>/img/morefilters.png">
          </div><!-- emd morefilters -->
          <div id="ad">
            <img src="<?php bloginfo(stylesheet_directory); ?>/img/ad.jpg">
          </div><!-- emd ad -->
        </div><!-- end check left -->
      </div><!-- end checkmiddle -->
      
    </div><!-- end check_middle_content -->
<?php get_footer(); ?>