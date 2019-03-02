<?php
/**
 * Created by PhpStorm.
 * User: doiverson
 * Date: 2019-02-11
 * Time: 16:25
 */
?>

<?php get_header()?>


    <div id="site-wrapper">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article <?php post_class(); ?>>

            <div class="article-top">

                <div class="article-img" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat center/cover"></div>

                <div class="title-lead">
                    <h1><?php the_title(); ?></h1>
                    <p>Our awesome trip to Vietnam, Mind blowing experience and Breathtaking landacapes.</p>
                </div>

            </div>

            <div class="articlePage-container">

                <div class="article-content">
                    <?php the_content(); ?>
                </div>

                <div class="related-article">
                    <h3>Related Articles</h3>

                    <ul class="article-flex">

                        <li>
                            <a href="#">
                                <div class="article-inner-flex">
                                    <div class="related-img">
                                        <img src="../img/vietnam.jpg">
                                    </div>
                                    <div class="related-article-dsc">
                                        <span>TESTTESTTEST</span>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="article-inner-flex">
                                    <div class="related-img">
                                        <img src="../img/vietnam.jpg">
                                    </div>
                                    <div class="related-article-dsc">
                                        <span>TESTTESTTEST</span>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="article-inner-flex">
                                    <div class="related-img">
                                        <img src="../img/vietnam.jpg">
                                    </div>
                                    <div class="related-article-dsc">
                                        <span>TESTTESTTEST</span>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul>

                </div>




                    <?php endwhile; else : ?>

                        <p><?php _e( 'Sorry, no posts found.', 'treehouse-portfolio' ); ?></p>

                    <?php endif; ?>




            </div>

        </article>

    </div>


<?php get_footer() ?>