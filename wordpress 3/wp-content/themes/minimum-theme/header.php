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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <span>Stay Geek</span>
</header>