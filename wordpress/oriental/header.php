<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="/img/favicon.ico" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/moo.js"></script>
		<script type="text/javascript">
		window.addEvent('domready', function(){
			//-vertical

var mySlide = new Fx.Slide('extra');


$('toggler').addEvent('click', function(e){
	e = new Event(e);
	mySlide.toggle();
	e.stop();
	
});

mySlide.hide();


//--horizontal
	});
	</script>

	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
<!--[if lte IE 6]>

<style type="text/css">
.class {
	behavior:url("pngbehavior.htc");
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_directory'); ?>/images/im.png');
	background:url(images/blank.gif);
	}
</style>

<![endif]-->

</head>
<body>

	<div class="wrapper">

		<div class="top">
			<div class="blogname">
				<h1><a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>"><?php bloginfo('name');?></a></h1> 
				<h2><?php bloginfo('description'); ?></h2>
			</div>	
						
		</div>
			<div id="foxmenucontainer">
			<div id="foxmenu">
			<ul>
				<li><a href="<?php bloginfo('home'); ?>/">Home</a></li>
				<?php wp_list_pages('title_li=&depth=1'); ?>
                                <li><a href="/gallery">gallery</a></li>
                                <li><a href="/">deelab.org Home</a></li>
			</ul>
	</div>		
	</div>
		<div class="content">