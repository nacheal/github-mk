<?php
/**
 * Template Name: Fancy page
 */
?>
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage v
 * @since Twenty Ten 1.0
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>vbecomputing</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Michael Johndok">

<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />

<!-- Le styles -->
<link href="<?php bloginfo(stylesheet_directory); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo(stylesheet_directory); ?>/style.css" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="../assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo(stylesheet_directory); ?>/img/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo(’template_url’); ?>/img/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo(stylesheet_directory); ?>/img/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo(stylesheet_directory); ?>/img/apple-touch-icon-57-precomposed.png">
</head>

<body>
<div id = "body">
  

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


