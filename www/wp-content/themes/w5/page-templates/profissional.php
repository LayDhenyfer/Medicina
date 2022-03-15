<?php

/**
 * Template Name: O Profissional
 *
 * @package W5
 * @since 1.0.0
 */

get_header();

while (have_posts()) : the_post();
    $post->post_content = apply_filters('the_content', $post->post_content);
?>

    <main class="profissional">
        <section class="banner">
            <div class="wrapper">
                <figure>
                    <?php the_post_thumbnail(); ?>
                    <figcaption>
                        <span class="motivation"><?php echo get_field('frase'); ?>”.</span>
                        <span class="author">
                            <?php echo get_field('autor'); ?>
                        </span>
                    </figcaption>
                </figure>
            </div>
        </section>

        <section class="content">
            <div class="wrapper">
                <span class="content__dots">
                    . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .
                </span>
                <?php the_content(); ?>
            </div>
        </section>

        <section class="places">
            <div class="wrapper">
                <h2 class="places__heading"><?php echo get_field('principais_locais'); ?></h2>
                <div class="places__cards">
                    <?php
                    if (have_rows('locais')) :
                        while (have_rows('locais')) : the_row();
                    ?>
                            <figure><img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_field('principais_locais'); ?>"></figure>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <p class="places__warning">*<?php echo get_field('warning'); ?></p>
            </div>
        </section>
    </main>

<?php
endwhile;

wp_reset_postdata();

get_footer();
