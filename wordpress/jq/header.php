<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
<?php if ( is_home() ) { ?><?php bloginfo('description'); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_search() ) { ?><?php echo $s; ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_single() ) { ?><?php wp_title(''); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_page() ) { ?><?php wp_title(''); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_category() ) { ?>Archive <?php single_cat_title(); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_month() ) { ?>Archive <?php the_time('F'); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_tag() ) { ?><?php single_tag_title();?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_404() ) { ?>Sorry, not found! - <?php bloginfo('name'); ?><?php } ?>
</title>
<?php
/* This code retrieves all our admin options. */
global $options;
foreach ($options as $value) {
	if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
<?php /* Style Schemes */
if ($jq_style_scheme == 'Default') { ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php } ?>
<?php
if ($jq_style_scheme == 'Serif') { ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/lib/css/style_serif.css" type="text/css" media="screen" />
<?php } ?>
<?php
if ($jq_style_scheme == 'Dark') { ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/lib/css/style_dark.css" type="text/css" media="screen" />
<?php } ?>
<?php
if ($jq_style_scheme == 'Green') { ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/lib/css/style_green.css" type="text/css" media="screen" />
<?php } ?>
<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lib/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lib/js/superfish.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lib/js/supersubs.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lib/js/cookies.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lib/js/fontResizer.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lib/js/theme.js"></script>

<style type="text/css">
<?php /* Sidebar position */
if (!($jq_sidebar_left == "false")) { ?>
div#left {float: right; padding: 10px 0 10px 20px;} 
div#right {float: left; padding: 10px 20px 10px 0;}   
<?php } ?>
<?php /* Custom bg colour */
if ($jq_bg_color) { ?>    
body {background: <?php echo $jq_bg_color; ?>;}               
<?php } ?>
<?php /* Custom page colour */
if ($jq_page_color) { ?>    
div#content {background: <?php echo $jq_page_color; ?>;}  
div#appendix {background: <?php echo $jq_page_color; ?>;}     
<?php } ?>
</style>
<!--[if IE]>
<style type="text/css">
div.date {float:left; position:static; margin:10px 10px 0 0; padding:0;}
div.preview {margin:15px 0;}
.comment-link {background:none;}
#search-submit {margin: 10px 0 0 0; height: 28px;}
</style>
<![endif]-->
<!-- wp_head -->
<?php wp_head(); ?>
</head>
<body>
<div id="outline">
<div id="blog-line">
<!-- blog title and tag line -->
<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> | <?php bloginfo('description'); ?></h1>
</div>
<!-- page navigation -->
<div id="nav" class="clearfix">
<ul class="sf-menu">
<li class="page_item <?php if ( is_home() ) { ?>current_page_item<?php } ?>"><a href="<?php bloginfo('url'); ?>">Home</a></li>
<?php /* Navigation */
if ($jq_nav_display == "false") {
wp_list_pages('title_li=&depth=4&sort_column=menu_order'); 
} else { 
wp_list_categories('depth=2&title_li=0&orderby=name&show_count=0');
} ?>			
</ul>
<ul id="mail_rss">
<?php /* Navigation */
if ($jq_mail_display == "false") { ?>
<li><a href="mailto:<?php bloginfo('admin_email'); ?>">Mail</a></li>
<?php } ?>
<li><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
</ul>			
</div>
<!-- ending header template -->
