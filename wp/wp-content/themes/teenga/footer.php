    <div id="footer">
        <div class="links dashed">
            <a href="#">公司介绍</a> | 
            <a href="#">常见问题</a> | 
            <a href="#">联系我们</a> | 
            <a href="#">关于退/换货</a> | 
            服务专线：<span class="bignumber">400-0510-550</span>
        </div>
        <div class="copyright">
            <p>版权所有： 无锡天易生态农业有限公司 </p>
            <p>苏ICP备10226898号-1  @2010 All Rights Reserved</p>
        </div>
    </div>
  </div> <!--! end of #container -->

  <!-- JavaScript at the bottom for fast page loading -->
  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
  <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script> -->
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>
  <script src="js/libs/jquery.anythingslider.js" ></script>

  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script type="text/javascript" charset="utf-8">
    $(function($){
        $('#sidebar .menu > a').each(function(i){
            var icon=$(this).attr('icon');
            if(icon != undefined){
                $(this).prepend($('<img>').attr('src','img/'+icon))
            }
            var a=$(this);
            var href=a.attr('href');
            if(href.match(new RegExp(page_slug))){
                a.addClass('current');
            }
            var sub=a.next();
            if(sub.hasClass('submenu')){
                sub.children().each(function(){
                    if($(this).attr('href').match(new RegExp(page_slug))){
                        $(this).addClass('current');
                        a.addClass('current');
                    }
                });
            }
        });
        $('#sidebar .submenu > a').prepend('· ');
        var sub=$('#sidebar a.current').next();
        if(sub.hasClass('submenu')){
            sub.show();
        }
        if ( $('.slider').length == 1 && $('.slider li').length > 1 ) {
          $('.slider').anythingSlider({
            easing: "swing",                // Anything other than "linear" or "swing" requires the easing plugin
            autoPlay: true,                 // This turns off the entire FUNCTIONALY, not just if it starts running or not
            startStopped: false,            // If autoPlay is on, this can force it to start stopped
            delay: 3000,                    // How long between slide transitions in AutoPlay mode
            animationTime: 600,            // How long the slide transition takes
            hashTags: false,                // Should links change the hashtag in the URL?
            buildNavigation: true,          // If true, builds and list of anchor links to link to each slide
            pauseOnHover: false,             // If true, and autoPlay is enabled, the show will pause on hover
            startText: "",             // Start text
            stopText: "",               // Stop text
            navigationFormatter: null       // Details at the top of the file on this use (advanced use)
          });
        }
    })
  </script>
  <!-- end scripts-->


  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
  <![endif]-->
  <?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>

