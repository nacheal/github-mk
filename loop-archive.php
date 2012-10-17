<?php
  $args = array(
'post_type' => 'hotel',
);
$query = new WP_Query( $args );

?>

<div id = "check_middle_content" class="row">
      <div id="checkoutsearchform">
        <?php get_search_form(); ?>
      </div><!-- end checkoutsearchform -->
      <div id="checkmiddle">
        <div id="checkleft">
          <div id="sort">
            <img src="<?php bloginfo(stylesheet_directory); ?>/img/sort.png">
          </div>
          <div class="limeline"></div>
          <div id="checkloop">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="checklist">
                <div class="thumbimg">
                  <?php the_post_thumbnail(array(98,103)); ?> 
                </div>
                <div class="postcontent">

                  <div class="postcontentimddle">
                    <div class="postcmleft">
                      <div class="titlestars">
                        <h4><a href="<?php the_permalink(); ?>" ><?php the_title() ;?></a></h4>
                        <img src="<?php bloginfo(stylesheet_directory); ?>/img/startsrate.png">
                      </div>
                      <span class="starts">
                        <img src="">
                      </span>
                      <p>Zahran Street, Po Box 52 | <img src="<?php bloginfo(stylesheet_directory); ?>/img/reviewsbg.png"> 84 reviews</p>
                    </div><!-- end postcmleft -->
                    <div class="postcmright">
                      <span class="price">$156</span>
                    </div><!-- end  postcmright-->
                  </div><!-- end postcontentimddle -->

                  <p>Orbitz $156 | Cheaptickets $156 | Booking.com | Hotelclub |Venere| Expedia <img src="<?php bloginfo(stylesheet_directory); ?>/img/selectbt.png"> </p>
                  
                </div><!-- end postcontent -->
                <div class="limeline"></div>
              </div>
            <?php endwhile; ?>
            <?php endif; ?>
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