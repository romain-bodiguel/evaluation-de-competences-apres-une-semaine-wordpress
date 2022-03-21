<?php
get_header();

if (have_posts()) {
    the_post();     
?>

<main class="right">
    <h2 class="right__title"><?php the_title(); ?></h2>
    <div class="posts">
        <article class="post post--solo">
        <p><?php the_content(); ?></p>
        <a href="<?= home_url(); ?>" class="post__link">Back to home</a>
        </article>
    </div>
</main>
<?php

}

get_footer();
?>
