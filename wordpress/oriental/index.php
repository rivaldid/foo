<?php get_header(); ?>
<?php include(TEMPLATEPATH . "/extra.php"); ?>		
<div id="toggler"> </div>
<div id="content"><a name="content"></a>
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">
<div class="title">
<?php the_time('F j, Y'); ?> 
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>
<div class="entry">
<?php the_content('Continue reading &raquo;'); ?>
</div>

<div class="postmetadata">

	<div class="alignleft">Posted under <?php the_category(', '); ?></div>
	<div class="alignright"><a href="<?php the_permalink(); ?>#comments">Comments (<?php comments_number('0','1','%'); ?>)</a></div>
</div>

</div>
					
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<div class="post">
			<h1 class="title">Not Found</h1>
			<p>I'm Sorry, The page you are looking is not here!!</p>
		</div>

	<?php endif; ?>	

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
