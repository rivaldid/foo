</div></div>

<div id="sidebar">

	<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" value="Search..." name="s" id="s"  onclick="document.getElementById('searchform').s.value=''" />
		<input type="hidden" id="searchsubmit" value="Search" />
	</form>

	<ul class="buttons">
		<li class="<?php echo $highlight; ?>"><a href="<?php echo get_settings('home'); ?>">Home</a></li>
		<?php wp_list_pages('depth=1&title_li=' ); ?> 
		<li class="page_item"><a href="http://www.deelab.org/">deelab.org Home</a></li>
		<li class="page_item"><a href="http://www.deelab.org/gallery">my Gallery</a></li>
	</ul>
	
	<div id="sidelinks">
		<ul>
			
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	
			<li><h3>Categories</h3>
				<ul>
					<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
				</ul>
			</li>	

			<li><h3>Archives</h3>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php if (is_home()) { ?>
			<li><h3>Links</h3>
				<ul>
					<?php get_links('-1', '<li>', '</li>', ' ', TRUE, 'url', FALSE); ?>
				</ul>
			</li>
			<?php } ?>
			
			<?php endif; ?>
			
		</ul>
	</div>
	
	<p align="center">
        <a href="http://italian-96150464673.spampoison.com"><img src="http://pics3.inxhost.com/images/sticker.gif" alt="poison" border="0" width="80" height="15"/></a>
        <a href="http://www.archlinux.it/" title="archlinux.it"><img src="/imgs/synd/archlinux.png" alt="archlinux.it"></a>
	<a href="http://www.mypagerank.net" target="_blank"><img src="http://www.mypagerank.net/services/pagerankbutton/pagerankbutton.php?aut=de510918abea71980383b09443225a155e570e24b771e609390d21c3d3ad0c" border="0" alt="Pagerank" /></a></p>

	<p align="center"><script type="text/javascript" src="http://widget.criteo.com/autoroll/display?bi=2136306733"> </script></p>

	<p align="center"><a href="http://www.mypagerank.net"><img src="http://www.mypagerank.net/services/gbla/gbla.php?s=de510918abea71980383b0944322095b081c536dfc68d33c03781bb79edb7ac2f33c40" title="Googlebot last access" border="0" alt="Googlebot" /></a></p>
		
	<p align="center">
	<script type="text/javascript">
	<!--
		google_ad_client = "pub-6517787767461597";
		google_ad_width = 120;
		google_ad_height = 600;
		google_ad_format = "120x600_as";
		google_ad_type = "text";
		//2007-06-06: beryl, flickr, linux, macosx, wordpress
		google_ad_channel = "5046992849+1134992392+4834754884+6052126813+6534298772";
		google_color_border = "FFFFFF";
		google_color_bg = "b3b2b2";
		google_color_link = "336699";
		google_color_text = "000000";
		google_color_url = "708090";
	//-->
	</script>
	<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
	</p>	
	
	<script type="text/javascript" src="http://embed.technorati.com/embed/hm2jmvyj67.js"></script>
		
</div>
				
<div id="footer">
    <div id="fcontent">
    	<a href="http://validator.w3.org/check?uri=referer">Valid XHTML</a> | 
    	<a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a> | 
    	<a href="http://wordpress.org">WordPress</a> | 
    	Theme of <a href="http://me.mywebsight.ws/">LobsterMan</a> modded by <b><a href="http://www.deelab.org">dax</a></b> | 
    	<a href="feed:<?php bloginfo('rss2_url'); ?>">RSS Feed</a> | 
    	<?php bloginfo('name'); ?> &copy; <?php print(date('Y')); ?> 
    </div>
</div>

</div>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1394524-3";
urchinTracker();
</script>
</body>
</html>