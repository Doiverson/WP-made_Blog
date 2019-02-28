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

<div id="page-site-wrapper" class="contact-only">

    <div class="contact-title">
        <h1>Say Hello</h1>
        <h2>We are always ready to serve you!</h2>
    </div>

    <div class="contact-form">
        <form id="contact-form" method="post" action="contact-form-handler.php">
            <input name="name" type="text" class="form-control" placeholder="Your Name" required><br>
            <input name="email" type="email" class="form-control" placeholder="Your Email" required><br>
            <textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>
            <input type="submit" class="form-control submit" value="SEND MESSAGE">
        </form>
    </div>

</div>

<?php get_footer() ?>
