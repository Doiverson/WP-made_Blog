<?php
/**
 *Template Name: Contact Page
 * Created by PhpStorm.
 * User: doiverson
 * Date: 2019-02-11
 * Time: 16:20
 */
?>

<?php get_header()?>

<div id="page-site-wrapper">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h3 style="text-align:center"><?php the_title() ?></h3>
        <?php the_content() ?>

    <?php endwhile; else : ?>

        <p><?php _e( 'Sorry, page found.', 'treehouse-portfolio' ); ?></p>

    <?php endif; ?>
</div>

<?php get_footer() ?>
