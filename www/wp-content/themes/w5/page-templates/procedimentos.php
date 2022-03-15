<?php

/**
 * Template Name: Procedimentos
 *
 * @package W5
 * @since 1.0.0
 */

get_header();

while (have_posts()) : the_post();
    $post->post_content = apply_filters('the_content', $post->post_content);
?>
    <main class="procedimento">
        <section class="content">
            <div class="wrapper">
                <h2 class="content__heading">
                    <?php echo get_the_title(); ?>
                </h2>
                <div class="content__cards">
                    <?php
                    $args = array(
                        'post_type'      => 'procedimentos',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post_status' => ['publish'],
                        'posts_per_page' => -1,
                    );

                    $wp_query = new WP_Query($args);
                    if ($wp_query->have_posts()) :
                        while ($wp_query->have_posts()) :
                            $wp_query->the_post();
                    ?>
                            <figure>
                                <div>
                                    <a href="<?php echo get_permalink(); ?>">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" />
                                    </a>
                                </div>
                                <figcaption><?php echo get_the_title(); ?></figcaption>
                            </figure>
                    <?php
                        endwhile;
                        wp_reset_query();
                    endif;
                    ?>
                </div>
            </div>
        </section>
    </main>

<?php
endwhile;

wp_reset_postdata();

get_footer();
