<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="text">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php $attachment_link = get_the_attachment_link($post->ID, true, array(450, 800)); // This also populates the iconsize for the next line ?>
<?php $_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 128 ? 'small' : '') . 'attachment'; // This lets us style narrow icons specially ?>

			<div class="post">
				<h1 class="title"><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h1>
				<?php the_time('F j, Y'); ?>
				<div class="contentCenter">
					<p><?php echo $attachment_link; ?></p>
					<p><strong><?php echo basename($post->guid); ?></strong></p>
					<?php the_content(); ?>
				</div>
			</div>
			<div class="postline"></div>
			
	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<h1 class="title">Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
		
<?php endif; ?>

</div>

<?php get_footer(); ?>