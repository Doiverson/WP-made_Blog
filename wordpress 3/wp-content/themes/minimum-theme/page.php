<?php
/**
 * Created by PhpStorm.
 * User: doiverson
 * Date: 2019-02-11
 * Time: 16:20
 */
?>

<?php get_header()?>

<div id="page-site-wrapper">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1 style="margin-top: 0"><?php the_title(); ?></h1>

<?php endwhile; else : ?>

    <p><?php _e( 'Sorry, page found.', 'treehouse-portfolio' ); ?></p>

<?php endif; ?>

<?php

$args = array(
    'posts_per_page' => 10,
);

$query = new WP_Query($args);

?>

<div class="articleList-container">
    <div class="item-grid">

        <?php if($query -> have_posts()) : while($query -> have_posts()) : $query -> the_post() ?>

            <a href="<?php the_permalink(); ?>">
                <div class="item">
                    <div class="link-img" style= "background: url(<?php the_post_thumbnail_url() ?>) no-repeat center / cover"></div>
                    <h4 class="article-title"><?php the_title() ?></h4>
                    <p><?php echo wp_strip_all_tags( get_the_excerpt() ) ?></p>
                </div>
            </a>

        <?php endwhile; endif; wp_reset_postdata() ?>

    </div>
</div>

</div>


<?php get_footer() ?>
