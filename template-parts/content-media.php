<?php
$media_id = get_the_ID();
$terms_media = get_the_terms($media_id, 'category');
$video_link = get_field('ssylka_na_youtube');
$parsed_id = parse_video_youtube($video_link);
?>

<div class="d-flex flex-column box-media <?php foreach ($terms_media as $term){echo $term->slug.' ';}?>">
    <div class="box-video">
        <div class="box-video-blue"></div>
        <div class="video__link">
            <img class="video__media" src="https://i.ytimg.com/vi/<?=$parsed_id;?>/maxresdefault.jpg">
        </div>
    </div>
    <div class="d-flex align-items-center box-video-desc">
        <div class="d-flex align-items-center name-video">
            <div class="time-video">
                <div>
                    <img src="<?= get_template_directory_uri() ?>/assets/img/video.svg">
                </div>
                <p class="h6"><?= get_field('prodolzhitelnost');?></p>
            </div>
            <h4 class="h4"><?php the_title();?></h4>
        </div>
    </div>
</div>