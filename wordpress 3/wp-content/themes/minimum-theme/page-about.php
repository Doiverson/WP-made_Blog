<?php
/**
 *Template Name: About Page
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

        </div>

    </div>

    <div class="sns-links">
        <ul>
            <li><p><a target="_blank" href="https://www.instagram.com/doiverson/">Instagram</a></p></li>
            <li><p><a target="_blank" href="https://twitter.com/Doiverson_JPN">Twitter</a></p></li>
            <li><p><a target="_blank" href="https://github.com/Doiverson">Github</a></p></li>
            <li><p><a target="_blank" href="https://www.linkedin.com/in/shovancouver/">LinkedIn</a></p></li>
            <li><p><a target="_blank" href="https://open.spotify.com/user/doiverson?si=oNUn8-ZwS-qVUCKjCbvAEA">Spotify</a></p></li>
        </ul>
    </div>

</div>


<?php get_footer() ?>
