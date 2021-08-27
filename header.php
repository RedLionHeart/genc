<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package genc
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <!-- Disable screen scaling-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="margin">
        <div class="d-flex">
            <a href="<?=get_home_url();?>" class="top-logo">
                <img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg">
            </a>
            <nav>
                <?php wp_nav_menu( [
                    'menu' => 'Меню',
                    'container' => false,
                    'menu_class' => "d-flex justify-content-between",
                    'link_class' => 'h3',
                ] ); ?>
            </nav>
            <div class="d-flex justify-content-between ico-top">
                <?php
                $facebook = get_field('facebook', 'options');
                $twitter = get_field('twitter', 'options');
                $instagram = get_field('instagram', 'options');
                ?>
                <?php if($facebook):?>
                    <a href="<?=$facebook?>">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/fb.svg">
                    </a>
                <?php endif;?>
                <?php if($twitter):?>
                    <a href="<?=$twitter?>">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/tw.svg">
                    </a>
                <?php endif;?>
                <?php if($instagram):?>
                    <a href="<?=$instagram?>">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/inst.svg">
                    </a>
                <?php endif;?>
            </div>
            <?php
            if ( !is_user_logged_in() ) { ?>
            <div class="d-flex align-items-center login" data-bs-toggle="modal" data-bs-target="#formModalpasswork">
                <svg width="31" height="33" viewBox="0 0 31 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M29.2117 26.3724C28.4592 24.5761 27.3671 22.9445 25.9963 21.5684C24.6297 20.1883 23.0108 19.088 21.2291 18.3282C21.2131 18.3201 21.1971 18.3161 21.1812 18.3081C23.6665 16.499 25.2822 13.5523 25.2822 10.2277C25.2822 4.72012 20.8541 0.257812 15.3887 0.257812C9.92328 0.257812 5.49512 4.72012 5.49512 10.2277C5.49512 13.5523 7.1108 16.499 9.59616 18.3121C9.5802 18.3201 9.56424 18.3241 9.54829 18.3322C7.76106 19.092 6.15735 20.1814 4.78103 21.5724C3.41153 22.9495 2.31963 24.5809 1.56563 26.3764C0.824894 28.1342 0.425401 30.0188 0.388772 31.9282C0.387707 31.9711 0.395175 32.0138 0.410736 32.0537C0.426297 32.0937 0.449637 32.1301 0.479379 32.1608C0.509121 32.1915 0.544665 32.2159 0.583915 32.2326C0.623165 32.2492 0.665328 32.2578 0.707918 32.2578H3.10152C3.27705 32.2578 3.41668 32.1171 3.42067 31.9442C3.50045 28.8407 4.73715 25.9342 6.9233 23.7312C9.18526 21.4518 12.1892 20.1975 15.3887 20.1975C18.5881 20.1975 21.5921 21.4518 23.854 23.7312C26.0402 25.9342 27.2769 28.8407 27.3567 31.9442C27.3607 32.1211 27.5003 32.2578 27.6758 32.2578H30.0694C30.112 32.2578 30.1542 32.2492 30.1934 32.2326C30.2327 32.2159 30.2682 32.1915 30.298 32.1608C30.3277 32.1301 30.351 32.0937 30.3666 32.0537C30.3822 32.0138 30.3896 31.9711 30.3886 31.9282C30.3487 30.0066 29.9537 28.1372 29.2117 26.3724ZM15.3887 17.1422C13.5576 17.1422 11.8342 16.4226 10.5376 15.1161C9.24111 13.8096 8.52702 12.0729 8.52702 10.2277C8.52702 8.38244 9.24111 6.64575 10.5376 5.33922C11.8342 4.03269 13.5576 3.31309 15.3887 3.31309C17.2198 3.31309 18.9432 4.03269 20.2397 5.33922C21.5362 6.64575 22.2503 8.38244 22.2503 10.2277C22.2503 12.0729 21.5362 13.8096 20.2397 15.1161C18.9432 16.4226 17.2198 17.1422 15.3887 17.1422Z" fill="#808080"/>
                </svg>
                <p class="h3">Логин</p>
            </div>
           <?php }?>

        </div>
    </div>
</header>