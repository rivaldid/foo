<?php get_header(); ?>
<?php include(TEMPLATEPATH . "/extra.php"); ?>		
<div id="toggler"> </div>
<?php get_sidebar(); ?>

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
	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<h1 class="title">Not Found</h1>
		<p>I'm Sorry, I am really embarrased, I dont know how to say this, I actually hate to say this. But no other go, I must tell you and tell you now itself..that..  YOU are looking for something that ISN'T HERE. I swear. It was never here</p>

<?php endif; ?>

</div>

<?php get_footer(); ?>