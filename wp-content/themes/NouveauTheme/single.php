<?php get_header(); ?>

<div class="main">

    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php
    the_title(); ?></a></h3>
<div class="image">
    <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('blogpage_thumb'); ?>
        <?php endif; ?>
</div>

    <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>

        <?php
$Google = get_field('url');
if ($Google): ?>
    <a class="button" href="<?php echo esc_url($Google); ?>">Go sur Google</a>
    <?php endif; ?>

<br>

    <?php if (get_field('fichier')) : ?>
	<a href="<?php the_field('fichier'); ?>">Voir l'image</a>
<?php endif; ?>


</div>

<?php endif; ?>     
<?php get_footer(); ?>