<?php
/*
Template Name: Guestbook
*/
?>
<?php get_header(); ?>

				
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="postinfo">
			<small><?php the_time('F jS, Y') ?> at <?php the_time() ?></small>
			<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			</div>
			
			<div class="navigation postnav">
				<div class="alignleft"><?php previous_post_link('&laquo; Previous: %link') ?></div>
				<div class="alignright"><?php next_post_link('Next:%link &raquo;') ?></div>
				<br />
			</div>
			
			<div class="entrytext">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
	
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
	
				<div class="postmetadata">
					<?php comments_rss_link('Comments RSS'); ?> | 
						
					<?php if ('open' == $post->ping_status) {
							// Both Comments and Pings are open ?>
					<a href="<?php trackback_url(true); ?>" rel="trackback">Trackback URL</a>
					<?php }; ?>
						
				</div>
	
			</div>
		</div>
		
	<?php paged_comments_template('/guestcomments.php'); ?>
	
	<?php endwhile; else: ?>
	
		<p>Sorry, no posts matched your criteria.</p>
	
<?php endif; ?>
	

<?php get_footer(); ?>
