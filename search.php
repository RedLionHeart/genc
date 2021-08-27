<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package genc
 */

get_header();

$medias = get_posts([
    'post_type' => 'media',
    's' => $_GET['s'],
    'numberposts' => 30,
]);

$paints = get_posts([
    'post_type' => 'paint',
    's' => $_GET['s'],
    'numberposts' => 30,
]);

$count_paints = count($paints);
$count_medias = count($medias);

?>

    <section class="back-top">
        <div class="video-back back-catalog">
            <img src="<?= get_template_directory_uri() ?>/assets/img/back_catalog.jpg">
            <div class="back-gradient"></div>
        </div>
    </section>
    <section class="search-results">
        <div class="margin">
            <div class="d-flex flex-column">
                <h1 class="h1"><?php printf(esc_html__('Результаты поиска для: %s', 'mebel'), get_search_query()); ?></h1>
                <div class="d-flex justify-content-between">
                    <div class="container-search-card">
                        <?php get_search_form(); ?>
                        <div class="d-flex categories-search">
                            <label class="check-filter">
                                <input type="radio" name="search-categories" id="input-card" checked>
                                <div class="box-check">
                                    <div class="box-plus">
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <h2 class="h2">Каталог (<?= $count_paints; ?>)</h2>
                                </div>
                            </label>
                            <label class="check-filter">
                                <input type="radio" name="search-categories" id="input-video">
                                <div class="box-check">
                                    <div class="box-plus">
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <h2 class="h2">Медиа (<?= $count_medias; ?>)</h2>
                                </div>
                            </label>
                        </div>
                        <div class="flex-wrap" id="container-card">
                            <?php if (isset($paints) && $count_paints !== 0): ?>
                                <div class="flex-wrap container-card">
                                    <?php

                                    foreach ($paints as $post):
                                        setup_postdata($post);
                                        get_template_part('template-parts/catalog/item', '');
                                    endforeach;
                                    wp_reset_postdata(); ?>

                                </div>
                                <div>
                                    <nav class="navigation pagination" role="navigation">
                                        <div class="d-flex align-items-center nav-links">
                                            <a class="prev" href="http://wptest.ru/page/2/">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_pagination_prev.svg">
                                            </a>
                                            <span class="page-numbers current h4"><span
                                                        class="meta-nav screen-reader-text"></span>1</span>
                                            <a class="page-numbers h4" href="http://wptest.ru/page/2/"><span
                                                        class="meta-nav screen-reader-text"></span>2</a>
                                            <a class="page-numbers h4" href="http://wptest.ru/page/3/"><span
                                                        class="meta-nav screen-reader-text"></span>3</a>
                                            <a class="page-numbers h4" href="http://wptest.ru/page/4/"><span
                                                        class="meta-nav screen-reader-text"></span>4</a>
                                            <span class="page-numbers dots h4">…</span>
                                            <a class="page-numbers h4" href="http://wptest.ru/page/6/"><span
                                                        class="meta-nav screen-reader-text"></span>6</a>
                                            <a class="next" href="http://wptest.ru/page/2/">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_pagination_next.svg">
                                            </a>
                                        </div>
                                    </nav>
                                </div>
                            <?php else:
                                echo '<p>Нет результатов по данной категории</p>';
                            endif; ?>
                        </div>
                        <div class="flex-wrap" id="seacrh-container-video" style="display: none">
                            <?php if (isset($medias) && $count_medias !== 0): ?>
                                <div class="flex-wrap container-video">
                                    <?php
                                    foreach ($medias as $post):
                                        setup_postdata($post);
                                        get_template_part('template-parts/content', 'media');
                                    endforeach;
                                    wp_reset_postdata(); ?>
                                </div>
                                <div>
                                    <nav class="navigation pagination" role="navigation">
                                        <div class="d-flex align-items-center nav-links">
                                            <a class="prev" href="http://wptest.ru/page/2/">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_pagination_prev.svg">
                                            </a>
                                            <span class="page-numbers current h4"><span
                                                        class="meta-nav screen-reader-text"></span>1</span>
                                            <a class="page-numbers h4" href="http://wptest.ru/page/2/"><span
                                                        class="meta-nav screen-reader-text"></span>2</a>
                                            <a class="page-numbers h4" href="http://wptest.ru/page/3/"><span
                                                        class="meta-nav screen-reader-text"></span>3</a>
                                            <a class="page-numbers h4" href="http://wptest.ru/page/4/"><span
                                                        class="meta-nav screen-reader-text"></span>4</a>
                                            <span class="page-numbers dots h4">…</span>
                                            <a class="page-numbers h4" href="http://wptest.ru/page/6/"><span
                                                        class="meta-nav screen-reader-text"></span>6</a>
                                            <a class="next" href="http://wptest.ru/page/2/">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_pagination_next.svg">
                                            </a>
                                        </div>
                                    </nav>
                                </div>
                            <?php
                            else:
                                echo '<p>Нет результатов по данной категории</p>';
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

get_footer();
