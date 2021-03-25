<?php get_header();
//Template name: Blog
?>
<div class="main">
    <?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=5');
    ?>
    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post();?>

    <article>
        <?php 
        the_excerpt();
        ?>
    </article>
    <?php endwhile; ?>
</div>