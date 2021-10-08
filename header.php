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

    <!--favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Disable screen scaling-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="yandex-verification" content="a7f9ae4f97203e0c" />
    <meta name="google-site-verification" content="5lDZSJIshe0Baoy6iHZtca4LwMlU3wQExy4GBA9WQKc" />

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(85552006, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/85552006" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9MHFFF45QS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-9MHFFF45QS');
    </script>

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
                $youtube = get_field('youtube', 'options');
                ?>
                <?php if($facebook):?>
                    <a href="<?=$facebook?>">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.4286 0H2.57143C1.88944 0 1.23539 0.270918 0.753154 0.753154C0.270918 1.23539 0 1.88944 0 2.57143L0 21.4286C0 22.1106 0.270918 22.7646 0.753154 23.2468C1.23539 23.7291 1.88944 24 2.57143 24H9.92411V15.8405H6.54911V12H9.92411V9.07286C9.92411 5.74339 11.9063 3.90429 14.9421 3.90429C16.3961 3.90429 17.9164 4.16357 17.9164 4.16357V7.43143H16.2413C14.5907 7.43143 14.0759 8.45571 14.0759 9.50625V12H17.7605L17.1712 15.8405H14.0759V24H21.4286C22.1106 24 22.7646 23.7291 23.2468 23.2468C23.7291 22.7646 24 22.1106 24 21.4286V2.57143C24 1.88944 23.7291 1.23539 23.2468 0.753154C22.7646 0.270918 22.1106 0 21.4286 0Z" fill="#808080"/>
                        </svg>
                    </a>
                <?php endif;?>
                <?php if($twitter):?>
                    <a href="<?=$twitter?>">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.786 0H2.92885C1.50921 0 0.357422 1.15179 0.357422 2.57143V21.4286C0.357422 22.8482 1.50921 24 2.92885 24H21.786C23.2056 24 24.3574 22.8482 24.3574 21.4286V2.57143C24.3574 1.15179 23.2056 0 21.786 0ZM19.1664 8.50714C19.1771 8.65714 19.1771 8.8125 19.1771 8.9625C19.1771 13.6071 15.6414 18.9589 9.18064 18.9589C7.18778 18.9589 5.33956 18.3804 3.78599 17.3839C4.06992 17.4161 4.34314 17.4268 4.63242 17.4268C6.27706 17.4268 7.78778 16.8696 8.99314 15.9268C7.45028 15.8946 6.15385 14.8821 5.70921 13.4893C6.25028 13.5696 6.73778 13.5696 7.29492 13.425C5.68778 13.0982 4.48242 11.6839 4.48242 9.975V9.93214C4.94849 10.1946 5.49492 10.3554 6.06814 10.3768C5.58622 10.0562 5.19116 9.62136 4.91821 9.11098C4.64526 8.60059 4.5029 8.03057 4.50385 7.45179C4.50385 6.79821 4.67528 6.19821 4.98064 5.67857C6.71099 7.81071 9.30921 9.20357 12.2235 9.35357C11.7253 6.96964 13.5092 5.03571 15.6521 5.03571C16.6646 5.03571 17.5753 5.45893 18.2181 6.14464C19.011 5.99464 19.7717 5.7 20.4467 5.29821C20.1842 6.1125 19.6324 6.79821 18.9039 7.23214C19.611 7.15714 20.2967 6.95893 20.9289 6.68571C20.4521 7.3875 19.8521 8.00893 19.1664 8.50714Z" fill="#808080"/>
                        </svg>
                    </a>
                <?php endif;?>
                <?php if($instagram):?>
                    <a href="<?=$instagram?>">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.71436 0C1.60979 0 0.714355 0.89543 0.714355 2V22C0.714355 23.1046 1.60979 24 2.71435 24H22.7143C23.8189 24 24.7143 23.1046 24.7143 22V2C24.7143 0.89543 23.8189 0 22.7143 0H2.71436ZM6.19884 12.3769C6.19884 8.90614 8.99837 6.10661 12.4691 6.10661C15.9399 6.10661 18.7394 8.90614 18.7394 12.3769C18.7394 15.8477 15.9399 18.6472 12.4691 18.6472C8.99837 18.6472 6.19884 15.8477 6.19884 12.3769ZM8.39262 12.3769C8.39262 14.6253 10.2262 16.4534 12.4691 16.4534C14.712 16.4534 16.5456 14.6253 16.5456 12.3769C16.5456 10.1285 14.7175 8.30039 12.4691 8.30039C10.2208 8.30039 8.39262 10.1285 8.39262 12.3769ZM18.9959 7.31264C19.8036 7.31264 20.4584 6.66324 20.4584 5.85012C20.4584 5.04246 19.8036 4.3876 18.9959 4.3876C18.1883 4.3876 17.5334 5.04246 17.5334 5.85012C17.5334 6.65778 18.1828 7.31264 18.9959 7.31264Z" fill="#808080"/>
                        </svg>
                    </a>
                <?php endif;?>
                <?php if($youtube):?>
                    <a href="<?=$youtube?>">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.4266 9.72676L15.5266 12.625L10.4266 15.5232V9.72676ZM24.4194 3.18569V22.0428C24.4194 23.4625 23.2676 24.6143 21.848 24.6143H2.99086C1.57122 24.6143 0.419434 23.4625 0.419434 22.0428V3.18569C0.419434 1.76604 1.57122 0.614258 2.99086 0.614258H21.848C23.2676 0.614258 24.4194 1.76604 24.4194 3.18569ZM22.1694 12.6303C22.1694 12.6303 22.1694 9.43747 21.7623 7.90533C21.5373 7.0589 20.8784 6.39461 20.0373 6.16961C18.5212 5.75711 12.4194 5.75712 12.4194 5.75712C12.4194 5.75712 6.31765 5.75711 4.80158 6.16961C3.96051 6.39461 3.30158 7.0589 3.07658 7.90533C2.66943 9.43212 2.66943 12.6303 2.66943 12.6303C2.66943 12.6303 2.66943 15.8232 3.07658 17.3553C3.30158 18.2018 3.96051 18.8393 4.80158 19.0643C6.31765 19.4714 12.4194 19.4714 12.4194 19.4714C12.4194 19.4714 18.5212 19.4714 20.0373 19.0589C20.8784 18.8339 21.5373 18.1964 21.7623 17.35C22.1694 15.8232 22.1694 12.6303 22.1694 12.6303V12.6303Z" fill="#808080"/>
                        </svg>
                    </a>
                <?php endif;?>
            </div>
            <div class="d-flex box-search-login">
                <div class="header-box-search close-header-box-search">
                    <form class="form-search" method="get" action="<?php echo home_url( '/' ); ?>">
                        <label>
                            <div class="box-search">
                                <input class="h5" id="search" type="search" value="" name="s" placeholder="Поиск товара" minlength="2">
                                <button type="submit">
                                    <div class="d-flex align-items-center">
                                        <p class="h4">Найти!</p>
                                        <div class="img-search d-flex align-items-center justify-content-center">
                                            <svg width="27" height="26" viewBox="0 0 27 26" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M25.6562 24.9726L20.0623 19.3687L25.6562 24.9726ZM23.1623 11.8795C23.1623 14.6905 22.0456 17.3865 20.0578 19.3742C18.0701 21.362 15.3741 22.4787 12.5631 22.4787C9.75198 22.4787 7.05603 21.362 5.0683 19.3742C3.08056 17.3865 1.96387 14.6905 1.96387 11.8795C1.96387 9.06838 3.08056 6.37244 5.0683 4.3847C7.05603 2.39697 9.75198 1.28027 12.5631 1.28027C15.3741 1.28027 18.0701 2.39697 20.0578 4.3847C22.0456 6.37244 23.1623 9.06838 23.1623 11.8795V11.8795Z"
                                                      stroke="#5C87AF" stroke-width="2" stroke-linecap="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="box-search-result"></div>
                        </label>

                    </form>
                    <div class="button-search">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/button_search.svg">
                    </div>
                </div>
                <?php
                if ( !is_user_logged_in() ) { ?>
                    <div class="d-flex align-items-center login" data-bs-toggle="modal" data-bs-target="#formModalpasswork">
                        <svg width="31" height="33" viewBox="0 0 31 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.2117 26.3724C28.4592 24.5761 27.3671 22.9445 25.9963 21.5684C24.6297 20.1883 23.0108 19.088 21.2291 18.3282C21.2131 18.3201 21.1971 18.3161 21.1812 18.3081C23.6665 16.499 25.2822 13.5523 25.2822 10.2277C25.2822 4.72012 20.8541 0.257812 15.3887 0.257812C9.92328 0.257812 5.49512 4.72012 5.49512 10.2277C5.49512 13.5523 7.1108 16.499 9.59616 18.3121C9.5802 18.3201 9.56424 18.3241 9.54829 18.3322C7.76106 19.092 6.15735 20.1814 4.78103 21.5724C3.41153 22.9495 2.31963 24.5809 1.56563 26.3764C0.824894 28.1342 0.425401 30.0188 0.388772 31.9282C0.387707 31.9711 0.395175 32.0138 0.410736 32.0537C0.426297 32.0937 0.449637 32.1301 0.479379 32.1608C0.509121 32.1915 0.544665 32.2159 0.583915 32.2326C0.623165 32.2492 0.665328 32.2578 0.707918 32.2578H3.10152C3.27705 32.2578 3.41668 32.1171 3.42067 31.9442C3.50045 28.8407 4.73715 25.9342 6.9233 23.7312C9.18526 21.4518 12.1892 20.1975 15.3887 20.1975C18.5881 20.1975 21.5921 21.4518 23.854 23.7312C26.0402 25.9342 27.2769 28.8407 27.3567 31.9442C27.3607 32.1211 27.5003 32.2578 27.6758 32.2578H30.0694C30.112 32.2578 30.1542 32.2492 30.1934 32.2326C30.2327 32.2159 30.2682 32.1915 30.298 32.1608C30.3277 32.1301 30.351 32.0937 30.3666 32.0537C30.3822 32.0138 30.3896 31.9711 30.3886 31.9282C30.3487 30.0066 29.9537 28.1372 29.2117 26.3724ZM15.3887 17.1422C13.5576 17.1422 11.8342 16.4226 10.5376 15.1161C9.24111 13.8096 8.52702 12.0729 8.52702 10.2277C8.52702 8.38244 9.24111 6.64575 10.5376 5.33922C11.8342 4.03269 13.5576 3.31309 15.3887 3.31309C17.2198 3.31309 18.9432 4.03269 20.2397 5.33922C21.5362 6.64575 22.2503 8.38244 22.2503 10.2277C22.2503 12.0729 21.5362 13.8096 20.2397 15.1161C18.9432 16.4226 17.2198 17.1422 15.3887 17.1422Z" fill="#808080"/>
                        </svg>
                        <p class="h3">Логин</p>
                    </div>
                <?php } else {?>
                    <a href="<?= wp_logout_url( home_url() ); ?>" title="Выход" class="d-flex align-items-center login" >
                        <svg width="31" height="33" viewBox="0 0 31 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.6488 10.7563C25.6488 5.24875 21.1914 0.786438 15.6899 0.786438C10.1885 0.786438 5.73108 5.24875 5.73108 10.7563C5.73108 14.0849 7.36143 17.0357 9.86721 18.8447C9.85114 18.8528 9.8391 18.8568 9.83107 18.8608C8.03606 19.6206 6.42579 20.7101 5.04038 22.101C3.65498 23.4879 2.57075 25.104 1.81179 26.905C1.06889 28.6658 0.671342 30.5352 0.631185 32.4568C0.62717 32.6377 0.771733 32.7864 0.952438 32.7864H3.35782C3.53049 32.7864 3.67506 32.6457 3.67907 32.4729C3.75939 29.3694 5.00023 26.4628 7.19679 24.2598C9.46564 21.9804 12.4774 20.7261 15.6899 20.7261C21.1914 20.7261 25.6488 16.2638 25.6488 10.7563ZM15.6899 17.6709C11.875 17.6709 8.78298 14.5754 8.78298 10.7563C8.78298 6.93719 11.875 3.84171 15.6899 3.84171C19.5048 3.84171 22.5969 6.93719 22.5969 10.7563C22.5969 14.5754 19.5048 17.6709 15.6899 17.6709ZM28.5807 26.9573L16.0112 26.8179C15.8345 26.8179 15.6899 26.9626 15.6899 27.1395V29.3908C15.6899 29.5677 15.8345 29.7124 16.0112 29.7124L25.2628 29.5355L23.1716 32.2678C23.1274 32.3241 23.1033 32.3965 23.1033 32.4648C23.1033 32.6417 23.2479 32.7864 23.4246 32.7864H26.3399C26.5367 32.7864 26.7214 32.694 26.8459 32.5412L29.5966 29.0397C29.7733 28.8146 29.8697 28.5332 29.8697 28.2437C29.8657 27.5322 29.2914 26.9573 28.5807 26.9573Z" fill="#808080"/>
                            <path d="M28.5807 29.5355L16.0112 29.7124C15.8345 29.7124 15.6899 29.5677 15.6899 29.3908V27.1395C15.6899 26.9626 15.8345 26.8179 16.0112 26.8179L25.2628 26.8583L23.1716 24.2249C23.1274 24.1687 23.1033 24.0963 23.1033 24.028C23.1033 23.8511 23.2479 23.7064 23.4246 23.7064H26.3399C26.5367 23.7064 26.7214 23.7988 26.8459 23.9516L29.5966 27.4531C29.7733 27.6782 29.8697 27.9596 29.8697 28.2491C29.8657 28.9606 29.2914 29.5355 28.5807 29.5355Z" fill="#808080"/>
                        </svg>
                        <p class="h3">Выход</p>
                    </a>
                <?php }?>
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
                    $youtube = get_field('youtube', 'options');
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
                    <?php if($youtube):?>
                        <a href="<?=$youtube?>">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.4266 9.72676L15.5266 12.625L10.4266 15.5232V9.72676ZM24.4194 3.18569V22.0428C24.4194 23.4625 23.2676 24.6143 21.848 24.6143H2.99086C1.57122 24.6143 0.419434 23.4625 0.419434 22.0428V3.18569C0.419434 1.76604 1.57122 0.614258 2.99086 0.614258H21.848C23.2676 0.614258 24.4194 1.76604 24.4194 3.18569ZM22.1694 12.6303C22.1694 12.6303 22.1694 9.43747 21.7623 7.90533C21.5373 7.0589 20.8784 6.39461 20.0373 6.16961C18.5212 5.75711 12.4194 5.75712 12.4194 5.75712C12.4194 5.75712 6.31765 5.75711 4.80158 6.16961C3.96051 6.39461 3.30158 7.0589 3.07658 7.90533C2.66943 9.43212 2.66943 12.6303 2.66943 12.6303C2.66943 12.6303 2.66943 15.8232 3.07658 17.3553C3.30158 18.2018 3.96051 18.8393 4.80158 19.0643C6.31765 19.4714 12.4194 19.4714 12.4194 19.4714C12.4194 19.4714 18.5212 19.4714 20.0373 19.0589C20.8784 18.8339 21.5373 18.1964 21.7623 17.35C22.1694 15.8232 22.1694 12.6303 22.1694 12.6303V12.6303Z" fill="#808080"/>
                            </svg>
                        </a>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>