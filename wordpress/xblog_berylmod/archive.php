<?php get_header(); ?>

        <?php if (have_posts()) : ?>

        <div class="postinfo">
         <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
        <h2>Archive for the '<?php echo single_cat_title(); ?>' Category</h2>

      <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h2>Archive for <?php the_time('F jS, Y'); ?></h2>

     <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h2>Archive for <?php the_time('F, Y'); ?></h2>

        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h2>Archive for <?php the_time('Y'); ?></h2>

      <?php /* If this is a search */ } elseif (is_search()) { ?>
        <h2>Search Results</h2>

      <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h2>Author Archive</h2>

        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2>Blog Archives</h2>

        <?php } ?>
        </div>

        <div class="navigation">
            <div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
            <div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
            <br />
        </div>
        <div class="post"></div>

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
            <br />
        </div>

    <?php else : ?>

        <h2>Not Found</h2>
        <?php include (TEMPLATEPATH . '/searchform.php'); ?>

    <?php endif; ?>




<?php get_footer(); ?>
