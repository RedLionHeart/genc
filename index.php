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
                <button class="video__button" style="z-index:5;" aria-label="запустить видео">
                    <svg width="219" height="226" viewBox="0 0 219 226" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M13.7616 112.859V225.071L178.936 128.734C183.043 131.55 187.852 132.974 193.33 132.974C200.498 132.974 206.447 130.537 211.249 125.663C216.051 120.717 218.488 114.625 218.488 107.243C218.488 99.7884 216.051 93.6243 211.249 88.8221C206.447 83.9482 200.498 81.5112 193.33 81.5112C187.182 81.5112 181.964 83.269 177.59 86.8285L13.7616 0.832031V103.113L4.90043 82.1563H0.671631L13.7616 112.859ZM13.7616 112.859L22.2458 132.759H25.0411L46.1136 82.1563H42.0998L23.751 126.738L13.7616 103.113V112.859ZM181.442 88.8506L177.59 86.8285C176.813 87.4601 176.064 88.1484 175.34 88.8938C170.538 93.8393 168.172 99.9317 168.172 107.243C168.172 114.697 170.538 120.861 175.34 125.735C176.471 126.866 177.67 127.866 178.936 128.734L182.786 126.489C185.888 128.335 189.389 129.247 193.33 129.247C199.423 129.247 204.44 127.168 208.382 122.939C212.143 118.905 214.142 113.958 214.318 108.098L216.114 107.051L214.309 106.103C214.079 100.302 212.076 95.4499 208.239 91.5457C204.225 87.3169 199.279 85.2383 193.33 85.2383C188.822 85.2383 184.849 86.432 181.442 88.8506ZM214.309 106.103L181.442 88.8506C180.353 89.6236 179.322 90.5216 178.35 91.5457C174.336 95.7029 172.33 100.935 172.33 107.243C172.33 113.478 174.336 118.711 178.35 122.939C179.729 124.367 181.206 125.549 182.786 126.489L214.318 108.098C214.327 107.815 214.331 107.53 214.331 107.243C214.331 106.859 214.324 106.479 214.309 106.103ZM84.7784 132.401C82.1981 132.329 80.1912 132.329 78.8293 132.329H78.1843V82.1563H78.9727C80.1195 82.1563 82.0547 82.1563 84.7066 82.0846C85.2599 82.0697 85.7914 82.0547 86.2996 82.0404C88.2278 81.9862 89.823 81.9413 91.0141 81.9413C111.083 81.8696 119.182 93.5527 119.182 106.526C119.182 114.052 116.674 120.287 111.657 125.161C106.711 130.035 99.6151 132.472 90.4407 132.472H90.4399C89.2214 132.472 87.3581 132.472 84.7784 132.401ZM108.933 91.4741C104.847 87.6036 98.8267 85.6684 90.8708 85.6684C89.3107 85.6684 87.5891 85.729 85.9739 85.7858L85.9735 85.7859H85.9733C84.5462 85.8361 83.2023 85.8834 82.1264 85.8834V128.602C86.2279 128.656 88.8259 128.71 89.9511 128.733C90.3203 128.741 90.531 128.745 90.5841 128.745C98.3967 128.745 104.417 126.667 108.646 122.581C112.875 118.424 115.025 113.048 115.025 106.526C115.025 100.362 113.018 95.3445 108.933 91.4741ZM60.5382 132.329V82.1563H56.5961V132.329H60.5382ZM159.486 132.329V128.602H134.973V108.748H156.619V105.021H134.973V85.8834H158.769V82.1563H131.031V132.329H159.486Z"
                              fill="white"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
?>
