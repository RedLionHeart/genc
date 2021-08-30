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

    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Disable screen scaling-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="margin">
        <div class="d-flex justify-content-between align-items-center">
            <div class="button-burger btn btn-primary" data-bs-toggle="modal" data-bs-target="#burgerModal">
                <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 0.680176V2.48018H0V0.680176H18ZM0 11.4802H18V9.68017H0V11.4802ZM0 6.98018H18V5.18018H0V6.98018Z" fill="#808080"/>
                </svg>
            </div>
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
            <div class="d-flex align-items-center login" data-bs-toggle="modal" data-bs-target="#formModalpasswork">
                <svg width="31" height="33" viewBox="0 0 31 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.6488 10.7563C25.6488 5.24875 21.1914 0.786438 15.6899 0.786438C10.1885 0.786438 5.73108 5.24875 5.73108 10.7563C5.73108 14.0849 7.36143 17.0357 9.86721 18.8447C9.85114 18.8528 9.8391 18.8568 9.83107 18.8608C8.03606 19.6206 6.42579 20.7101 5.04038 22.101C3.65498 23.4879 2.57075 25.104 1.81179 26.905C1.06889 28.6658 0.671342 30.5352 0.631185 32.4568C0.62717 32.6377 0.771733 32.7864 0.952438 32.7864H3.35782C3.53049 32.7864 3.67506 32.6457 3.67907 32.4729C3.75939 29.3694 5.00023 26.4628 7.19679 24.2598C9.46564 21.9804 12.4774 20.7261 15.6899 20.7261C21.1914 20.7261 25.6488 16.2638 25.6488 10.7563ZM15.6899 17.6709C11.875 17.6709 8.78298 14.5754 8.78298 10.7563C8.78298 6.93719 11.875 3.84171 15.6899 3.84171C19.5048 3.84171 22.5969 6.93719 22.5969 10.7563C22.5969 14.5754 19.5048 17.6709 15.6899 17.6709ZM28.5807 26.9573L16.0112 26.8179C15.8345 26.8179 15.6899 26.9626 15.6899 27.1395V29.3908C15.6899 29.5677 15.8345 29.7124 16.0112 29.7124L25.2628 29.5355L23.1716 32.2678C23.1274 32.3241 23.1033 32.3965 23.1033 32.4648C23.1033 32.6417 23.2479 32.7864 23.4246 32.7864H26.3399C26.5367 32.7864 26.7214 32.694 26.8459 32.5412L29.5966 29.0397C29.7733 28.8146 29.8697 28.5332 29.8697 28.2437C29.8657 27.5322 29.2914 26.9573 28.5807 26.9573Z" fill="#808080"/>
                    <path d="M28.5807 29.5355L16.0112 29.7124C15.8345 29.7124 15.6899 29.5677 15.6899 29.3908V27.1395C15.6899 26.9626 15.8345 26.8179 16.0112 26.8179L25.2628 26.8583L23.1716 24.2249C23.1274 24.1687 23.1033 24.0963 23.1033 24.028C23.1033 23.8511 23.2479 23.7064 23.4246 23.7064H26.3399C26.5367 23.7064 26.7214 23.7988 26.8459 23.9516L29.5966 27.4531C29.7733 27.6782 29.8697 27.9596 29.8697 28.2491C29.8657 28.9606 29.2914 29.5355 28.5807 29.5355Z" fill="#808080"/>
                </svg>
                <p class="h3">Выход</p>
            </div>

        </div>
    </div>
</header>
<div class="modal fade" id="burgerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="margin">
                    <div class="d-flex justify-content-between align-items-center">
                            <h2 class="h2">Меню</h2>
                        <div class="button-burger" data-bs-toggle="modal" data-bs-target="#burgerModal">
                            <img alt="certification" src="<?= get_template_directory_uri() ?>/assets/img/close.svg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <nav>
                    <?php wp_nav_menu( [
                        'menu' => 'Меню',
                        'container' => false,
                        'menu_class' => "d-flex flex-column justify-content-between",
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
            </div>
        </div>
    </div>
</div>