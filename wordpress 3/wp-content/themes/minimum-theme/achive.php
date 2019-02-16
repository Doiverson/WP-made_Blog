<?php
/**
 * Created by PhpStorm.
 * User: doiverson
 * Date: 2019-02-13
 * Time: 17:52
 */
?>


<?php get_header()?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<?php endwhile; else : ?>

    <p><?php _e( 'Sorry, page found.', 'treehouse-portfolio' ); ?></p>

<?php endif; ?>



<?php get_footer() ?>