<?php
/**
 * Created by PhpStorm.
 * User: doiverson
 * Date: 2019-02-03
 * Time: 15:00
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div>
        <span>Stay Geek</span>

        <?php

        $defaults = array(
            'container' => false,
            'theme_location' => 'primary-menu',
            'menu_class' => 'no-bullet'
        );

        wp_nav_menu( $defaults );

        ?>
    </div>
</header>