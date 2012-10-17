<?php
/**
 * Archive
 */
?>
<?php  get_header();  ?>

  <div id="content" class="container_in">
    <div id = "explain" class="row">
          <h2>Book the best reviewed hotels in the Haiti</h2>
          <p>We’ve hand selected hotels that are consistently rated the best</p>
    </div><!-- end explain -->

    <?php 
    	get_template_part( 'loop', 'category' );
    ?>
<?php get_footer(); ?>