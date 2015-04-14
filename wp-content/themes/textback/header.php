<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<style type="text/css" media="screen">
	<!--
	@import url(<?php bloginfo('stylesheet_directory'); ?>/data/global.css);
	@import url(<?php bloginfo('stylesheet_directory'); ?>/data/articles.css);
	-->
	</style>
</head><body><div id="main">
<div id="intro">
  <p><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.gif" alt="WALLFLOWERS" border="0" height="218" width="724" /></p>
  </div>
	<div class="clearer">
		&nbsp;
	</div>
		<ul id="localnav">
		<li><h3><a class="<?php if ( is_page(Home) ) { ?>hi<?php } else { ?>all<?php } ?>" href="/" id="localnav_home">Home</a></h3></li>
   		<!-- <li><h><a class="<?php if ( is_home() ) { ?>hi<?php } else { ?><?php if ( is_single() ) { ?>hi<?php } else { ?>all<?php } ?><?php } ?>" href="/blog" id="localnav_blog">Stylists</a></h6></li> -->
		<li><h6><a class="<?php if ( is_page(photos) ) { ?>hi<?php } else { ?>all<?php } ?>" href="/stylists" id="localnav_photos">Stylists</a></h6></li>
		<li><h6><a class="<?php if ( is_page(rates) ) { ?>hi<?php } else { ?>all<?php } ?>"href="/rates" id="localnav_rates">Rates</a></h6></li>
		<li><h6><a class="<?php if ( is_page(photos) ) { ?>hi<?php } else { ?>all<?php } ?>" href="/photos" id="localnav_photos">Photos</a></h6></li>
	</ul>

	</body></html>