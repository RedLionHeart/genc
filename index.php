<?php
/*
Template Name: Главная
*/

get_header();

$medias = get_posts(array(
    'post_type' => 'media',
    'post_status' => 'publish',
    'numberposts' => 3,
));
?>

<section class="back-top back-index">
    <div class="video-back">

        <?php if (is_mobile()) { ?>
            <div>
                <img src="<?= get_template_directory_uri(); ?>/assets/img/bg-mobile.jpg" alt="gencpaints">
            </div>
        <?php } else { ?>
            <div style="padding:56.49% 0 0 0;position:relative;">
                <iframe src="https://player.vimeo.com/video/593213120?h=6d9c4360d0&autoplay=1&mute=1&loop=1&background=1"
                        style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
                        allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            </div>
        <?php } ?>
        <div class="back-gradient"></div>
    </div>
</section>
<?php get_template_part('template-parts/catalog/catalog') ?>
<section class="media">
    <div class="margin">
        <h2 class="h1">Медиа</h2>
        <div class="d-flex flex-wrap justify-content-between">
            <?php foreach ($medias as $post):
                setup_postdata($post);
                get_template_part('template-parts/content', 'media');
            endforeach;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<section class="tinting">
    <div class="d-flex justify-content-between margin">
        <div class="tinting-txt">
            <h2 class="h1"><?php the_field('zagolovok'); ?></h2>
            <div class="box-video">
                <div class="video__link">
                    <img class="video__media" src="https://i.ytimg.com/vi/cdf1OpL7-_4/maxresdefault.jpg">
                </div>
            </div>
            <h4 class="h4"><?php the_field('tekst'); ?></h4>
            <a class="button-discard h5" href="<?= get_permalink(296);?>"><?php the_field('tekst_knopki'); ?></a>
        </div>
        <div class="padding-video">
            <div class="box-video">
                <div class="video__link">
                    <?php $parsed_id = parse_video_youtube(get_field('video')); ?>
                    <img class="video__media" src="https://i.ytimg.com/vi/<?= $parsed_id; ?>/maxresdefault.jpg">
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
?>
