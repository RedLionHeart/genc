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
    'numberposts' => -1,
]);

$paints = get_posts([
    'post_type' => 'paint',
    's' => $_GET['s'],
    'numberposts' => -1,
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
    <section class="search-results-box">
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
                                    $paged_paints = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                                    $args = array(
                                        'post_type' => 'paint',
                                        'posts_per_page' => '9',
                                        's' => $_GET['s'],
                                        'paged' => $paged_paints,
                                    );

                                    $paints = new WP_Query($args);
                                    if ($paints->have_posts()) {

                                        while ($paints->have_posts()) {

                                            $paints->the_post();

                                            get_template_part('template-parts/catalog/item', '');
                                        }
                                    }

                                    wp_reset_postdata(); ?>

                                </div>
                                <div>
                                    <?php
                                    if ($paints->max_num_pages > 1) :?>
                                        <script>
                                            var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                                            var true_posts_paints = `<?php echo serialize($paints->query_vars); ?>`;
                                            var current_page_paints = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                                            var max_pages_paints = <?php echo $paints->max_num_pages; ?>;
                                        </script>
                                        <button class="btn btn-loadmore btn-loadmore-paints">Загрузить еще</button>
                                    <?php endif; ?>
                                </div>
                            <?php else: ?>
                                <p>К сожалению, по вашему запросу мы ничего не нашли</p>
                                <?php $popular_paints = get_posts(array(
                                    "post_type" => "paint",
                                    'numberposts' => 10,
                                    'order' => 'DESC',
                                    'orderby' => 'meta_value_num',
                                    'meta_query' => array(
                                        array(
                                            'key' => 'views',
                                            "type" => "DECIMAL(16,4)",
                                        )
                                    )
                                )); ?>
                                <div class="popular-product">
                                    <h2 class="h2">Популярные продукты</h2>
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($popular_paints as $post):
                                                setup_postdata($post); ?>
                                                <div class="swiper-slide">
                                                    <a href="<?php the_permalink(); ?>" class="box-card">
                                                        <div class="img-card">
                                                            <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', true)[0]; ?>">
                                                        </div>
                                                        <div class="txt-card">
                                                            <h3 class="h3"><?= get_field('artikul'); ?></h3>
                                                            <h4 class="h4"><?php the_title(); ?></h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php endforeach;
                                            wp_reset_postdata(); ?>
                                        </div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="flex-wrap" id="seacrh-container-video" style="display: none">
                            <?php if (isset($medias) && $count_medias !== 0): ?>
                                <div class="flex-wrap container-video">
                                    <?php
                                    $paged_medias = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                                    $args = array(
                                        'post_type' => 'media',
                                        'posts_per_page' => '9',
                                        's' => $_GET['s'],
                                        'paged' => $paged_medias,
                                    );

                                    $medias = new WP_Query($args);
                                    if ($medias->have_posts()) {

                                        while ($medias->have_posts()) {

                                            $medias->the_post();

                                            get_template_part('template-parts/content', 'media');
                                        }
                                    }

                                    wp_reset_postdata(); ?>
                                </div>
                                <div class="button-load h3">
                                    <?php
                                    if ($medias->max_num_pages > 1) :?>
                                        <script>
                                            var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                                            var true_posts_medias = `<?php echo serialize($medias->query_vars); ?>`;
                                            var current_page_medias = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                                            var max_pages_medias = <?php echo $medias->max_num_pages; ?>;
                                        </script>
                                        <button class="btn btn-loadmore btn-loadmore-medias">Загрузить еще</button>
                                    <?php endif; ?>
                                </div>
                            <?php else: ?>
                                <p>К сожалению, по вашему запросу мы ничего не нашли</p>
                                <?php $popular_paints = get_posts(array(
                                    "post_type" => "paint",
                                    'numberposts' => 10,
                                    'order' => 'DESC',
                                    'orderby' => 'meta_value_num',
                                    'meta_query' => array(
                                        array(
                                            'key' => 'views',
                                            "type" => "DECIMAL(16,4)",
                                        )
                                    )
                                )); ?>
                                <div class="popular-product">
                                    <h2 class="h2">Популярные продукты</h2>
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($popular_paints as $post):
                                                setup_postdata($post); ?>
                                                <div class="swiper-slide">
                                                    <a href="<?php the_permalink(); ?>" class="box-card">
                                                        <div class="img-card">
                                                            <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', true)[0]; ?>">
                                                        </div>
                                                        <div class="txt-card">
                                                            <h3 class="h3"><?= get_field('artikul'); ?></h3>
                                                            <h4 class="h4"><?php the_title(); ?></h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php endforeach;
                                            wp_reset_postdata(); ?>
                                        </div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

get_footer();
