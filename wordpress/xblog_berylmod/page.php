<?php get_header(); ?>


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post" id="post-<?php the_ID(); ?>">
            <div class="postinfo">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="entry">
                <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
            </div>
        </div>
      <?php endwhile; endif; ?>
    <?php edit_post_link('Edit this page', '', ''); ?>



<?php get_footer(); ?>
