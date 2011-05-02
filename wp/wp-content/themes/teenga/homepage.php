<?php
/**
 * Template Name: homepage

 */

?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <base href="<?php echo get_option('home','http://teenga.com/') ?>">
  <title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
  <meta name="description" content="">
  <meta name="author" content="xtunes.cc">
  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-1.7.min.js"></script>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body class="home" id="index">

  <div id="container">
    <div id="top">
        <div class="userlinks">
            <a class="signup pink" href="#">免费注册</a>
            <a class="signin green" href="#">登陆账户</a>
        </div>
    </div>
    <div id="header">
        <div class="logo">
            <img src="img/home_logo.png">
        </div>
        <div class="navbar">
             <a href="/天家农场/天家介绍">天家农场</a>
             <a href="/安心宣言">安心宣言</a>
             <a href="/绿色健康/转基因食品">绿色健康</a>
             <a href="/自然饮食/吃出健康">自然饮食</a>
             <a href="/网上订购/叶菜类">网上订购</a>
        </div>
    </div>
    <div id="main">
        <img src="img/home_main.jpg" width="801" height="364" alt="Home Main">
    </div>
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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts-->


  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
  <![endif]-->
</body>
</html>