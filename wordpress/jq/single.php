<?php get_header(); ?>
<div id="content" class="clearfix">
<?php get_sidebar(); ?>
<div id="left">
<!-- single post -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="headline clearfix">
<div class="date">
<?php the_time('M/y'); ?>
<p class="date-month"><?php the_time('j'); ?></p>
</div>
<h1><?php the_title(); ?></h1>
<div class="clearfix"></div>
<p class="post_info">         
<a href="<?php the_permalink(); ?>#respond" class="comment-link info-icon"><?php comments_number(__('0 Comments'), __('1 Comment'), __('% Comments ')); ?></a> | 
<span class="preview-article">Posted by <i><?php the_author(); ?></i></span> in <?php the_category(', '); ?>
</p>
</div>
<div class="single_content">
<?php the_content(); ?>
<div class="clearfix"></div>
<p class="next-posts"><?php wp_link_pages(); ?></p>
<p class="post_info"><span class="tag-link info-icon"><?php $tag = get_the_tags(); if (! $tag) {echo "No tags";} else {the_tags('', ', ', '');} ?></span></p>
</div>
<div class="bookmarks">
<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/feed.png" class="post_icon" title="RSS Feed for this article" alt="RSS Feed" /></a>
</div>
<?php comments_template(); ?>
<?php endwhile; ?><p class="previous-posts"><?php next_post_link('<< %link') ?></p>
<p class="next-posts"><?php previous_post_link('%link >>') ?></p>
<?php else : ?>
<?php _e('Sorry, no posts matched your criteria.'); ?>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?></div>
</div>
<?php get_footer(); ?>
