<?php
/*
Template Name: Каталог
*/

get_header();
?>

    <section class="back-top">
        <div class="video-back back-catalog">
            <img src="<?= get_field('izobrazhenie_fona');?>">
            <div class="back-gradient"></div>
        </div>
    </section>
<?php get_template_part('template-parts/catalog/catalog') ?>


<?php
get_footer();
