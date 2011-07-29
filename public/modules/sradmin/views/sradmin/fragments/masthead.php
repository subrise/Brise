<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
	     More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $page_title ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

	<!-- CSS: implied media="all" -->
	<link rel="stylesheet" href="/assets/sradmin/css/style.css">

	<!-- More ideas for your <head> here: h5bp.com/docs/#head-Tips -->

	<!-- All JavaScript at the bottom, except for Modernizr and Respond.
	     Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
	     For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
	<script src="/assets/js/libs/modernizr-2.0.min.js"></script>
	<script src="/assets/js/libs/respond.min.js"></script>
</head>

<body>
	
	<?php if (Auth::instance()->logged_in('admin')) : ?>
	<nav id="menu_main" class="clearfix">
		<ul>
			<?php $active = isset($activemenu_brise) ? ' class="active"' : ''; ?>
			<li<?php echo $active ?>><a href="<?php echo Route::url('sradmin') ?>">Brise</a></li>
			<?php $active = isset($activemenu_pages) ? ' class="active"' : ''; ?>
			<li<?php echo $active ?>>Pages</li>
			<?php $active = isset($activemenu_settings) ? ' class="active"' : ''; ?>
			<li<?php echo $active ?>>Settings</li>
			<li><a href="<?php echo Route::url('sradmin', array('controller'=>'auth','action'=>'logout')) ?>">Logout</a></li>
		</ul>
	</nav><!-- #menu_main -->
	<?php endif; ?>
	
	<?php echo Msg::instance()->render();?>
	