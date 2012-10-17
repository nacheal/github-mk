<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$argsmeta = array();

if (!empty($_POST['findhotels'])) {
  
  //!empty city
  if (!empty($_POST['city'])){
    $argsmeta[] = array(
      'key' => 'wpcf-city',
      'value' => $_POST['city'],
      'compare' => 'LIKE',
    );
  }

  //!empty city
  if (!empty($_POST['hotelname'])){
    $argsmeta[] = array(
      'key' => 'wpcf-hotelname',
      'value' => $_POST['hotelname'],
      'compare' => 'LIKE',
    );
  }
}


$args = array(
  'post_type' => 'hotel',
  'posts_per_page' => 2,
  'paged' => $paged,
  // 'meta_key' => 'wpcf-location', // The name of the metakey to orderby
  // 'orderby' => 'meta_value_num',
  // 'order' => 'ASC',

  // This is the problem area! (See below)
  'meta_query' => $argsmeta,
);

global $wp_query;
$temp = $wp_query;
$wp_query = null ;
$wp_query = new WP_Query( $args );
?>

<div id = "check_middle_content" class="row">
      <div id="checkoutsearchform">
        <!-- hotel search form -->
          <form class="form-inline" method = "POST" action = "http://localhost/job/vbecomputing/?cat=5">
            <input type="text" class="input-medium" name = "city"  placeholder="City">
            <input type="text" class="input-medium" name = "hotelname" placeholder="Hotel Name">
            <input type="text" id = "datepickerin" class="input-medium" placeholder="Check In">
            <input type="text" id = "datepickerout" class="input-medium" placeholder="Check Our">

            <select name = "room" class="input-small">
              <option>1 Room</option>
              <option>2 Room</option>
              <option>3 Room</option>
              <option>4 Room</option>
            </select>

            <select name = "Guest" class="input-small">
              <option>1 Guest</option>
              <option>2 Guest</option>
              <option>3 Guest</option>
              <option>4 Guest</option>
            </select>

            <button type="submit" class="btn" name = "findhotels" value = "findhotels">Find Hotels</button>
          </form>
        <!-- end hotel search form  -->
      </div><!-- end checkoutsearchform -->
      <div id="checkmiddle">
        <div id="checkleft">
          <div id="sort">
            <img src="<?php bloginfo(stylesheet_directory); ?>/img/sort.png">
          </div>
          <div class="limeline"></div>
          <div id="checkloop">
            <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
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

                  <p>Orbitz $156 | Cheaptickets $156 | Booking.com | Hotelclub |Venere| Expedia <a class="various fancybox.ajax" href="<?php the_permalink(); ?>"><img src="<?php bloginfo(stylesheet_directory); ?>/img/selectbt.png"></a></p>
                  
                </div><!-- end postcontent -->
                <div class="limeline"></div>
              </div>
            <?php endwhile; ?>
            <?php endif; ?>
          </div><!-- end checkloop-->
          <div id="pagenav">
              <?php if (  $wp_query->max_num_pages > 1 ) : ?>
             
                <div style="text-align:center;">
                  <?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
  'format' => '?paged=%#%',
  'current' => max( 1, get_query_var('paged') ),
  'total' => $wp_query->max_num_pages
) );
?>
                </div>
              <?php endif; ?>
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

      <?php 
      //change it back 
      $temp = $wp_query;

      ?>
      
    </div><!-- end check_middle_content -->