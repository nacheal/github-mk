<?php
/**
 * The footer for our theme.
 *
 * Displays all of the <footer> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage v
 * @since Twenty Ten 1.0
 */
?>

    <div id = "footer" class="row">
      <p class = "link">Mini | Privacy Policy | Terms of condition </p>  
      <p class = "copyright">Copyright (c) 2012 Hipmunk, Inc. Hipmunk is a trademark of Hipm</p>
    </div><!-- end footer -->

  </div><!-- end content -->
</div><!-- end container -->




<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php bloginfo(stylesheet_directory); ?>/js/jquery.js"></script>
<script src="<?php bloginfo(stylesheet_directory); ?>/js/bootstrap-transition.js"></script>
<script src="<?php bloginfo(stylesheet_directory); ?>/js/bootstrap-alert.js"></script>
<script src="<?php bloginfo(stylesheet_directory); ?>/js/bootstrap-modal.js"></script>
<script src="<?php bloginfo(stylesheet_directory); ?>/js/bootstrap-dropdown.js"></script>
<script src="<?php bloginfo(stylesheet_directory); ?>/js/bootstrap-scrollspy.js"></script>
<script src="<?php bloginfo(stylesheet_directory); ?>/js/bootstrap-tab.js"></script>
<script src="<?php bloginfo(stylesheet_directory); ?>/js/bootstrap-tooltip.js"></script>
<script src="<?php bloginfo(stylesheet_directory); ?>/js/bootstrap-popover.js"></script>
<script src="<?php bloginfo(stylesheet_directory); ?>/js/bootstrap-button.js"></script>
<script src="<?php bloginfo(stylesheet_directory); ?>/js/bootstrap-collapse.js"></script>
<script src="<?php bloginfo(stylesheet_directory); ?>/js/bootstrap-carousel.js"></script>
<script src="<?php bloginfo(stylesheet_directory); ?>/js/bootstrap-typeahead.js"></script>

<link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/jcssjquery.fancybox.css?v=2.1.2" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo(stylesheet_directory); ?>/js/jquery.fancybox.pack.js?v=2.1.2"></script>

<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
 <script>
    $(function() {
        $( "#datepickerin" ).datepicker();
        $( "#datepickerout" ).datepicker();
    });

 //    $(document).ready(function() {
	// 	$(".various").fancybox({
	// 		maxWidth	: 1190,
	// 		maxHeight	: 850,
	// 		fitToView	: false,
	// 		// width		: '70%',
	// 		// height		: '70%',
	// 		autoSize	: false,
	// 		closeClick	: false,
	// 		openEffect	: 'none',
	// 		closeEffect	: 'none'
	// 	});
	// });

      function slideSwitch() {
      var $active = $('#slideshow IMG.active');
      var $diandianred = $('#diandiantong li.red');

      if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

      if ( $diandianred.length == 0 ) $diandianred = $('#diandiantong li:last');

      var $next =  $active.next().length ? $active.next()
        : jQuery('#slideshow IMG:first');

      var $diandianbai =  $diandianred.next().length ? $diandianred.next()
        : jQuery('#diandiantong li:first');

      $active.addClass('last-active');

      $diandianred.addClass('red');
        
      $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });

      $diandianbai.css({opacity: 0.0})
        .addClass('red')
        .animate({opacity: 1.0}, 1000, function() {
            $diandianred.removeClass('red last-active');
        });
         
      }

      jQuery(function() {
      setInterval( "slideSwitch()", 4000 );
      });
</script>

</body>
</html>