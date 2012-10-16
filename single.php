<?php
/**
 * Single page
 */
?>
<?php  get_header();  ?>

  <div id="content" class="container_in">
    <div id = "explain" class="row">
          <h2>Book the best reviewed hotels in the Haiti</h2>
          <div class="desclimeline"></div>
          <p>We’ve hand selected hotels that are consistently rated the best <img src="<?php bloginfo(stylesheet_directory); ?>/img/mifeng.png"></p>
    </div><!-- end explain -->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id = "single_middle_content" class="row">
        <div class="top">
          <div class="left">
            <?php the_post_thumbnail(array(98,103)); ?> 
          </div>
          <div class="right">
            <div class = "stars">
              <img src="<?php bloginfo(stylesheet_directory); ?>/img/startsrate.png">
            </div>
            <div class="title">
              <h4><a href="<?php the_permalink(); ?>" ><?php the_title() ;?></a></h4>
             <span class="price">From $99</span>
            </div>
            <div class="tagbg">
              <img src="<?php bloginfo(stylesheet_directory); ?>/img/checktagselect.png">
            </div>
          </div><!-- end right -->
        </div><!--end top -->
        <div class="middle">
          <div class="left">
            <div class="cocntent">
              <p>
                <?php the_content(); ?>
              </p>
            </div>

              <div class = "checktime">
                <p>Email | Save to My Trips</p>
                <p><b>Check-in time:3:00p</b> <b>Check-Out time:3:00p</b></p>
              </div><!-- end checktime -->
              <div class="conditins">
                <ul>
                  <li class = "true">Air-conditioned</li>
                  <li class = "false">Airport Shuttle</li>
                  <li class = "true">Casino</li>
                  <li class = "true">Fitness</li>
                  <li class = "true">Golf</li>
                  <li class = "false">Internet</li>
                  <li class = "true">Kitchenette</li>
                  <li class = "true">Parking</li>
                  <li class = "true">Pool</li>
                  <li class = "false">Resturant</li>
                  <li class = "true">Spa</li>
                </ul>
              </div><!--end conditions -->

          </div><!-- end left -->
          <div class="right">

            <div class="contact">
              <h4>Contact info</h4>
              <p class = 'Address1'>555 Northwest 53 nd Street</p>
              <p class = 'Address2'>Fort Lauderdale,Fl 33390</p>
              <p>United State</p>
              <p class="map"><a href="">show On Map</a></p> 
              <p class="phone">+ 1954 772 5400</p>
              <p class="website">www.examplehotel.com</p>
            </div><!-- end contact -->
          </div><!-- end right -->
        </div><!-- end middle -->
        <div class="poplimeline"></div>
        <div class="bottom">
          <h5>Rates</h5>
          <div class="left">
            <div class="singletable">
              <table>
                <tr>
                  <td class="website">
                    $112 Kayak
                  </td>
                  <td class="price">
                    $125 total
                  </td>
                  <td class="check book">
                    <p >Book</p>
                  </td>
                </tr>
                <tr>
                  <td class="website">
                    $112 Kayak
                  </td>
                  <td class="price">
                    $125 total
                  </td>
                  <td class="check go">
                    <p>Go</p>
                  </td>
                </tr>
                <tr>
                  <td class="website">
                    $112 Kayak
                  </td>
                  <td class="price">
                    $125 total
                  </td>
                  <td class="check go">
                    <p>Go</p>
                  </td>
                </tr>
                <tr>
                  <td class="website">
                    $112 Kayak
                  </td>
                  <td class="price">
                    $125 total
                  </td>
                  <td class="check go">
                    <p>Go</p>
                  </td>
                </tr>
                <tr>
                  <td class="website">
                    $112 Kayak
                  </td>
                  <td class="price">
                    $125 total
                  </td>
                  <td class="check go">
                    <p>Go</p>
                  </td>
                </tr>
              </table>
          </div><!-- end singletable -->

          </div><!-- end left -->
          <div class="middle">
            <h4>User Reviews</h4>

            <div class="left">
              <p class = "reviewquan">Trip Advistor <b>263 reviews</b></p>
              <p class = "reviewtiao">My Travel Guide <b>33 reviews</b></p>
              <p class = "reviewtiao">Travelocity <b>9 reviews</b></p>
            </div>
            <div class="right">
              <img src="<?php bloginfo(stylesheet_directory); ?>/img/popmiddlebg.png">
            </div> 
          </div><!-- end middle -->
          <div class="right">
            <img  class = "popmap" src="<?php bloginfo(stylesheet_directory); ?>/img/popmapbg.png">
          </div><!-- end right -->
        </div><!-- end bottom -->
    </div><!-- end middle_content -->
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
