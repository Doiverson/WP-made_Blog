<?php
/**
 *Template Name:  Page
 * Created by PhpStorm.
 * User: doiverson
 * Date: 2019-02-11
 * Time: 16:20
 */
?>

<?php get_header()?>

<div id="page-site-wrapper" class="about-only">

    <div class="about-wrapper">

        <div class="about-img">
            <img src="<?php the_post_thumbnail_url() ?>" alt="">
        </div>

        <div class="about-dsc">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content() ?>

            <?php endwhile; else : ?>

                <p><?php _e( 'Sorry, page found.', 'treehouse-portfolio' ); ?></p>

            <?php endif; ?>

<!--            <div class="left-dsc">-->
<!--                <h4>Shosuke Doi</h4>-->
<!--                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>-->
<!--            </div>-->
<!---->
<!--            <div class="right-dsc">-->
<!--                <h4>Hobby</h4>-->
<!--                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>-->
<!--            </div>-->

        </div>

    </div>

    <div class="sns-links">
        <ul>
            <li><p><a href="">Instagram</a></p></li>
            <li><p><a href="">Twitter</a></p></li>
            <li><p><a href="">Github</a></p></li>
            <li><p><a href="">LinkedIn</a></p></li>
            <li><p><a href="">Spotify</a></p></li>
        </ul>
    </div>

</div>


<?php get_footer() ?>
