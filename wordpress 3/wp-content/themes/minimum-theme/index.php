<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package minimum-theme
 */
?>

<?php get_header()?>

    <div id="site-wrapper">

        <!--New article on the left & some articles on the right with scroll-->
        <div class="top">
            <div class="fix">
                <div class="new-article-container">

                    <?php

                    $args = array(
                            'posts_per_page' => 1
                    );

                    $query = new WP_Query($args);

                    ?>

                    <?php if($query -> have_posts()) : while($query -> have_posts()) : $query -> the_post() ?>

                        <div class="new-article-bg" style="background: url(<?php the_post_thumbnail_url() ?>) no-repeat center center/cover"></div>
                        <div class="new-article-dsc">
                            <h1><?php the_title(); ?></h1>
                            <p><?php echo wp_strip_all_tags( get_the_excerpt() ) ?></p>
                            <a href="<?php the_permalink(); ?>">Read Article</a>
                        </div>

                    <?php endwhile; endif; wp_reset_postdata() ?>

                </div>
            </div>

            <div class="article-container">
                <div class="articles grid">

                    <!--Masonry grid-->
                    <div class="grid-sizer"></div>

                    <?php if( have_posts() ): while( have_posts() ) : the_post();  ?>

                        <div class="grid-item mb">

                                <div class="link-img">
                                    <a href="<?php the_permalink(); ?>" style="background: url(<?php the_post_thumbnail_url() ?>) no-repeat center / cover"></a>
                                </div>
                                <h4 class="article-title"><?php the_title() ?></h4>
                                <p><?php echo wp_strip_all_tags( get_the_excerpt() ) ?></p>

                        </div>

                    <?php endwhile; else: ?>

                        <p><?php _e( 'Sorry, page found.', 'treehouse-portfolio' ); ?></p>

                    <?php endif; ?>


                </div>
                <a href="<?php echo get_page_link(44) ?>">See all Articles</a>
            </div>

        </div>

        <!--Small self-intro-->
        <div class="self-dsc">
            <div class="left-img" style="background: url(<?php echo get_template_directory_uri() ?>/img/self-img.JPG) no-repeat center top / cover"></div>
            <div class="right-content">
                <div class="small-about">
                    <h4>Shosuke Doi</h4>
                    <p>Co-founder and technical director of Funkhaus, an LA-based creative agency. He is passionate about bringing a human-centric perspective to digital design.</p>
                </div>

                <div class="sns-list">
                    <a href="#" target="_blank"><i class="icn fa fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="icn fa fa-twitter-square"></i></a>
                    <a href="#" target="_blank"><i class="icn fa fa-linkedin-square"></i></a>
                    <a href="#" target="_blank"><i class="icn fa fa-github-square"></i></a>
                </div>

            </div>
        </div>

    </div>

<?php get_footer() ?>