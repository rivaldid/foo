<?php get_header(); ?>


    <?php if (have_posts()) : ?>

        <div class="postinfo"><h2>Search Results for "<?php echo wp_specialchars($s, 1); ?>"</h2></div>

        <div class="navigation">
            <div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
            <div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
            <br />
        </div>


        <?php while (have_posts()) : the_post(); ?>

            <div class="post">
                <div class="postinfo">
                <small><?php the_time('l, F jS, Y') ?></small>
                <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                </div>

                <div class="entry">
                    <?php the_excerpt() ?>
                </div>

                <p class="postmetadata">Posted in <?php the_category(', ') ?> <strong>|</strong> <?php edit_post_link('Edit','','<strong>|</strong>'); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
            </div>

        <?php endwhile; ?>

        <div class="navigation">
            <div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
            <div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
        </div>

    <?php else : ?>

        <div class="postinfo"><h2>Not Found</h2></div>
        <p>Sorry, No results found for "<?php echo wp_specialchars($s, 1); ?>"</p>
    <?php endif; ?>




<?php get_footer(); ?>
