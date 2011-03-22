<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <title><?php bloginfo('name'); ?><?php wp_title('-'); ?></title>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<meta name="generator" content="Bluefish 1.0.7"/> <!-- leave this for stats -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="shortcut icon" href="/imgs/favicon.ico" />
		<?php wp_head(); ?>
    </head>
    	<body>
    		<div id="container">
    			<div id="header">
    				<div id="hcontents">
    					<div class="h1"><a href="<?php echo get_settings('home'); ?>" id="headerlink"><?php bloginfo('name'); ?></a></div>
    					<div class="h2"><?php bloginfo('description'); ?></div>
    				</div>
    			</div>
				
    			<div id="content"><div id="inner">