<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div class="rightcol">
    <h2>Archives by Month:</h2>
    <ul>
        <?php wp_get_archives('type=monthly'); ?>
    </ul>
</div>

<div class="leftcol">
    <h2>Archives by Subject:</h2>
    <ul>
        <?php wp_list_cats(); ?>
    </ul>
</div>

<?php get_footer(); ?>
