<?php
/*
Template Name: Медиа
*/

get_header();
$terms_playlists = get_terms(array(
    'taxonomy' => 'category',
    'order' => "DESC",
) );
$medias = get_posts(array(
    'post_type' => 'media',
    'post_status' => 'publish',
    'numberposts' => -1,
)); ?>
<section class="media-container">
    <div class="margin">
        <h2 class="h1"><?php the_title();?></h2>
        <div class="d-flex justify-content-between">
            <div class="col-lg-4 pr-24">
                <h2 class="h2">Плейлисты</h2>
                <div class="playlist">
                    <?php foreach ($terms_playlists as $key => $term):?>
                    <button class="button-playlist h4 <?= $key === 0 ? 'button-discard-active' : '';?>" id="<?=$term->slug;?>"><?=$term->name;?></button>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="col-lg-8">
                <h2 class="h2">Видео</h2>
                <div class="d-flex flex-wrap justify-content-between" id="container-video">
                    <?php foreach ($medias as $post):
                        setup_postdata($post);
                        $terms_media = get_the_terms($post->ID, 'category');

                        $video_link = get_field('ssylka_na_youtube');
                        $parsed_id = parse_video_youtube($video_link); ?>
                    <div class="d-flex flex-column box-media <?php foreach ($terms_media as $term){echo $term->slug.' ';}?>">
                        <div class="box-video">
                            <div class="video__link">
                                <img class="video__media" src="https://i.ytimg.com/vi/<?=$parsed_id;?>/maxresdefault.jpg">
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-grow-1 box-video-desc">
                            <div class="d-flex align-items-center name-video">
                                <div class="time-video">
                                    <div>
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/video.svg">
                                    </div>
                                    <p class="h6"><?= get_field('prodolzhitelnost');?></p>
                                </div>
                                <h3 class="h4"><?php the_title();?></h3>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;
                    wp_reset_postdata();?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
