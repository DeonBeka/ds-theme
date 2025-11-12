<?php get_header() ?>
<main class="blog_list">
    <h1 class="blog_title">Latest Blog Posts</h1>
    <?php if(have_posts()):?>
        <?php while(have_posts()): the_post() ?>

    