<?php
/**
 * Template Name: Realisaties
 */
?>
<?php get_template_part('templates/page', 'header'); ?>

<div class="realisaties">
<?php while (have_posts()) : the_post(); ?>
    <div class="realisatie">
        <a href="<?php the_permalink();  ?>" class="realisatie-img"><?php the_post_thumbnail() ?></a>
        <h3 class="realisatie-naam">
            <?php echo get_the_title(); ?>
        </h3>

        <?php the_excerpt(); ?>
        <p class="diensten"><?php the_terms($post->ID, 'diensten'); ?></p>
    </div>
<?php endwhile; ?>
</div>