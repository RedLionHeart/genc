<?php
/*
Template Name: Каталог
*/

get_header();
?>

    <section class="back-top">
        <div class="video-back back-catalog">
            <img src="<?= get_template_directory_uri() ?>/assets/img/back_catalog.jpg">
            <div class="back-gradient"></div>
        </div>
    </section>
<?php get_template_part('template-parts/catalog/catalog') ?>


<?php
get_footer();
