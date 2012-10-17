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
    <div id = "page_middle_content" class="row">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php if ( is_front_page() ) { ?>
            <h2 class="entry-title"><?php the_title(); ?></h2>
          <?php } else { ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
          <?php } ?>

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
            <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-content -->
        </div><!-- #post-## -->
    </div><!-- end page_middle_content -->
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
