<div class="sidebar">
	<ul>
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar') ) : else : ?>
			<?php wp_list_categories('orderby=name&show_count=0&title_li=<h2>Categories</h2>'); ?>
			<li>
				<h2>Archives</h2>
				<ul>
					<?php wp_get_archives('type=monthly&limit=12'); ?>
				</ul>
			</li>	
			<li>
				<h2>Pages</h2>
				<ul>
				<?php wp_list_pages('title_li='); ?>
				</ul>
			</li>
			<li>
				<h2>Meta</h2>
				<ul>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://www.wpthemesfree.com/" title="Wordpress Themes">Wordpress Themes</a></li>
				</ul>
			</li>
			<li>
				<h2>Blogroll</h2>
				<ul>
					<?php get_links(-1, '<li>', '</li>', 'between', FALSE, 'name', FALSE, FALSE, -1, FALSE); ?>
				</ul>
			</li>
	<?php endif; ?>
	
	</ul>

<style type="text/css">table.lfmWidget5026ee4b59b6efb8fef780d4873932a0 td {margin:0 !important;padding:0 !important;border:0 !important;}table.lfmWidget5026ee4b59b6efb8fef780d4873932a0 tr.lfmHead a:hover {background:url(http://cdn.last.fm/widgets/images/en/header/quilt/album_vertical_black.png) no-repeat 0 0 !important;}table.lfmWidget5026ee4b59b6efb8fef780d4873932a0 tr.lfmEmbed object {float:left;}table.lfmWidget5026ee4b59b6efb8fef780d4873932a0 tr.lfmFoot td.lfmConfig a:hover {background:url(http://cdn.last.fm/widgets/images/en/footer/black.png) no-repeat 0px 0 !important;;}table.lfmWidget5026ee4b59b6efb8fef780d4873932a0 tr.lfmFoot td.lfmView a:hover {background:url(http://cdn.last.fm/widgets/images/en/footer/black.png) no-repeat -85px 0 !important;}table.lfmWidget5026ee4b59b6efb8fef780d4873932a0 tr.lfmFoot td.lfmPopup a:hover {background:url(http://cdn.last.fm/widgets/images/en/footer/black.png) no-repeat -159px 0 !important;}</style>
<table class="lfmWidget5026ee4b59b6efb8fef780d4873932a0" cellpadding="0" cellspacing="0" border="0" style="width:184px;"><tr class="lfmHead"><td><a title="Top albums" href="http://www.last.fm/user/deefm/charts/" target="_blank" style="display:block;overflow:hidden;height:20px;width:184px;background:url(http://cdn.last.fm/widgets/images/en/header/quilt/album_vertical_black.png) no-repeat 0 -20px;text-decoration:none;border:0;"></a></td></tr><tr class="lfmEmbed"><td><object type="application/x-shockwave-flash" data="http://cdn.last.fm/widgets/quilt/13.swf" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="184" height="270" > <param name="movie" value="http://cdn.last.fm/widgets/quilt/13.swf" /> <param name="flashvars" value="type=user&amp;variable=deefm&amp;file=topalbums&amp;bgColor=black&amp;theme=black&amp;lang=en&amp;widget_id=5026ee4b59b6efb8fef780d4873932a0" /> <param name="bgcolor" value="000000" /> <param name="quality" value="high" /> <param name="allowScriptAccess" value="always" /> <param name="allowNetworking" value="all" /> </object></td></tr><tr class="lfmFoot"><td style="background:url(http://cdn.last.fm/widgets/images/footer_bg/black.png) repeat-x 0 0;text-align:right;"><table cellspacing="0" cellpadding="0" border="0" style="width:184px;"><tr><td class="lfmConfig"><a href="http://www.last.fm/widgets/?url=user%2Fdeefm%2Fpersonal&amp;colour=black&amp;quiltType=album&amp;orient=vertical&amp;height=small&amp;from=code&amp;widget=quilt" title="Get your own widget" target="_blank" style="display:block;overflow:hidden;width:85px;height:20px;float:right;background:url(http://cdn.last.fm/widgets/images/en/footer/black.png) no-repeat 0px -20px;text-decoration:none;border:0;"></a></td><td class="lfmView" style="width:74px;"><a href="http://www.last.fm/user/deefm/" title="View deefm's profile" target="_blank" style="display:block;overflow:hidden;width:74px;height:20px;background:url(http://cdn.last.fm/widgets/images/en/footer/black.png) no-repeat -85px -20px;text-decoration:none;border:0;"></a></td><td class="lfmPopup"style="width:25px;"><a href="http://www.last.fm/widgets/popup/?url=user%2Fdeefm%2Fpersonal&amp;colour=black&amp;quiltType=album&amp;orient=vertical&amp;height=small&amp;from=code&amp;widget=quilt&amp;resize=1" title="Load this quilt in a pop up" target="_blank" style="display:block;overflow:hidden;width:25px;height:20px;background:url(http://cdn.last.fm/widgets/images/en/footer/black.png) no-repeat -159px -20px;text-decoration:none;border:0;" onclick="window.open(this.href + '&amp;resize=0','lfm_popup','height=370,width=234,resizable=yes,scrollbars=yes'); return false;"></a></td></tr></table></td></tr></table>



</div>