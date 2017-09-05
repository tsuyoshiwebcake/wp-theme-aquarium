<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	
	<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
	
	<meta name="Keywords" content="水族館,九州,博多,人気,アクア" />
	<meta name="Description" content="<?php bloginfo('description') ?>" />
	
	<link href="<?php bloginfo( 'template_directory' ); ?>/css/import.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/Scroll.js"></script>
	<!--[if IE]>
		<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/ie.css" type="text/css" />
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body id="<?php echo ( is_home() ) ? 'index' : 'common'; ?>" <?php body_class() ?>>
	<!-- #HeaderBox -->
	<div id="HeaderBox">
	
		<!-- #logo -->
		<p id="logo">
			<a href="<?php bloginfo( 'url' ); ?>">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/logo.jpg" width="348" height="94" alt="<?php bloginfo( 'name' ); ?>" />
			</a>
		</p><!-- /#logo -->
		
		<h1><?php bloginfo( 'description' ); ?></h1>
		
		<p id="tel"><img src="<?php bloginfo( 'template_directory' ); ?>/images/tel.jpg" width="225" height="40" /></p>
		<p id="mail"><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images//mail.jpg" width="212" height="47" /></a></p>
		
		<!-- #GlobalNav -->
		<ul id="GlobalNavi">
			<li><a href="<?php echo get_post_type_archive_link( 'event' ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/gnavi_01.jpg" width="178" height="40" /></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/gnavi_02.jpg" width="156" height="40" /></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/gnavi_03.jpg" width="168" height="40" /></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/gnavi_04.jpg" width="164" height="40" /></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/gnavi_05.jpg" width="170" height="40" /></a></li>
			<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/gnavi_06.jpg" width="164" height="40" /></a></li>
		</ul><!-- /#GlobalNav -->
	</div><!-- /#HeaderBox -->