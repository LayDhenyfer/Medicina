<?php

/**
 * Template Name: Video
 *
 * @package W5
 * @since 1.0.0
 */

get_header();

while (have_posts()) : the_post();
    $post->post_content = apply_filters('the_content', $post->post_content);
?>

    <main class="videos">
        <section class="content">
            <div class="wrapper">
                <h2 class="content__heading">
                    <?php echo get_the_title(); ?>
                </h2>
                <div class="content__cards">
                    <?php
                    $args = array(
                        'post_type'      => 'videos',
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
                            <div class="content__cards--items">
                                <figure>
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <span>
                                            <svg width="63" height="44" viewBox="0 0 63 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.6311 37C26.1104 36.7749 20.4424 36.6249 14.9217 36.3248C10.4315 36.0247 9.10652 34.1493 8.44403 29.4981C7.85515 24.8469 7.92876 20.0456 8.2232 15.3194C8.29681 13.4439 8.51764 11.4934 8.88569 9.69296C9.62179 6.24207 11.8301 4.8167 14.9217 4.59164C22.2827 3.99149 29.7173 3.91647 37.0782 4.06651C40.0962 4.06651 43.1878 4.21655 46.2058 4.36658C47.678 4.4416 49.1502 4.59164 50.4752 5.41685C51.5793 6.09203 52.3154 7.06728 52.8307 8.26759C53.4932 10.1431 53.6404 12.0186 53.7876 13.9691C54.0821 18.2452 54.0821 22.4462 53.714 26.7223C53.6404 28.2978 53.4196 29.8732 53.0515 31.4486C52.2418 34.5994 50.4752 36.0998 47.2364 36.3248C43.3351 36.5499 39.5073 36.6249 35.606 36.7749C34.2811 36.85 32.9561 36.85 31.6311 36.85C31.6311 36.9 31.6311 36.95 31.6311 37Z" fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.6311 37C26.1104 36.7749 20.4424 36.6249 14.9217 36.3248C10.4315 36.0247 9.10652 34.1493 8.44403 29.4981C7.85515 24.8469 7.92876 20.0456 8.2232 15.3194C8.29681 13.4439 8.51764 11.4934 8.88569 9.69296C9.62179 6.24207 11.8301 4.8167 14.9217 4.59164C22.2827 3.99149 29.7173 3.91647 37.0782 4.06651C40.0962 4.06651 43.1878 4.21655 46.2058 4.36658C47.678 4.4416 49.1502 4.59164 50.4752 5.41685C51.5793 6.09203 52.3154 7.06728 52.8307 8.26759C53.4932 10.1431 53.6404 12.0186 53.7876 13.9691C54.0821 18.2452 54.0821 22.4462 53.714 26.7223C53.6404 28.2978 53.4196 29.8732 53.0515 31.4486C52.2418 34.5994 50.4752 36.0998 47.2364 36.3248C43.3351 36.5499 39.5073 36.6249 35.606 36.7749C34.2811 36.85 32.9561 36.85 31.6311 36.85C31.6311 36.9 31.6311 36.95 31.6311 37Z" fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M32.1032 43.7887C24.3032 43.7887 17.2032 43.5887 9.70317 43.1887C3.60317 42.7887 1.50317 40.1887 0.60317 33.9887C-0.19683 27.7887 -0.0968302 21.3887 0.30317 15.0887C0.40317 12.5887 0.70317 9.98866 1.20317 7.58866C2.20317 2.98866 5.20317 1.08866 9.40317 0.78866C19.4032 -0.0113401 29.5032 -0.11134 39.5032 0.0886599C43.6032 0.0886599 47.8032 0.28866 51.9032 0.48866C53.9032 0.58866 55.9032 0.78866 57.7032 1.88866C59.2032 2.78866 60.2032 4.08866 60.9032 5.68866C61.8032 8.18866 62.0032 10.6887 62.2032 13.2887C62.6032 18.9887 62.6032 24.5887 62.1032 30.2887C62.0032 32.3887 61.7032 34.4887 61.2032 36.5887C60.1032 40.7887 57.7032 42.7887 53.3032 43.0887C48.0032 43.3887 42.8032 43.4887 37.5032 43.6887C35.7032 43.7887 33.9032 43.7887 32.1032 43.7887ZM24.9032 30.3887C30.4032 27.3887 35.6032 24.4887 40.8032 21.6887C39.3032 20.4887 26.1032 13.6887 24.9032 13.5887C24.9032 19.0887 24.9032 24.4887 24.9032 30.3887Z" fill="#FF0000" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M32.1032 43.7887C24.3032 43.7887 17.2032 43.5887 9.70317 43.1887C3.60317 42.7887 1.50317 40.1887 0.60317 33.9887C-0.19683 27.7887 -0.0968302 21.3887 0.30317 15.0887C0.40317 12.5887 0.70317 9.98866 1.20317 7.58866C2.20317 2.98866 5.20317 1.08866 9.40317 0.78866C19.4032 -0.0113401 29.5032 -0.11134 39.5032 0.0886599C43.6032 0.0886599 47.8032 0.28866 51.9032 0.48866C53.9032 0.58866 55.9032 0.78866 57.7032 1.88866C59.2032 2.78866 60.2032 4.08866 60.9032 5.68866C61.8032 8.18866 62.0032 10.6887 62.2032 13.2887C62.6032 18.9887 62.6032 24.5887 62.1032 30.2887C62.0032 32.3887 61.7032 34.4887 61.2032 36.5887C60.1032 40.7887 57.7032 42.7887 53.3032 43.0887C48.0032 43.3887 42.8032 43.4887 37.5032 43.6887C35.7032 43.7887 33.9032 43.7887 32.1032 43.7887ZM24.9032 30.3887C30.4032 27.3887 35.6032 24.4887 40.8032 21.6887C39.3032 20.4887 26.1032 13.6887 24.9032 13.5887C24.9032 19.0887 24.9032 24.4887 24.9032 30.3887Z" fill="#FF0000" />
                                            </svg>
                                        </span>
                                    </a>
                                </figure>
                                <div>
                                    <a href="<?php echo get_permalink(); ?>">
                                        <h2><?php echo get_the_title(); ?></h2>
                                        <p><?php echo limittext(get_the_excerpt($post->ID), 150); ?>
                                        </p>
                                        <span><?php echo get_the_date('d/m/y'); ?></span>
                                    </a>
                                </div>
                            </div>
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
