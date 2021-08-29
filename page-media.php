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
                        get_template_part('template-parts/content', 'media');
                     endforeach;
                    wp_reset_postdata();?>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="button-bottom-filters">
    <div class="margin">
    <button class="button-blue w-100 h5" data-bs-toggle="modal" data-bs-target="#formModalplaylist">Плейлисты</button>
    </div>
</div>
<div class="modal fade" id="formModalplaylist" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="h2">Плейлисты</h2>
                        <div class="button-burger" data-bs-dismiss="modal" aria-label="Close">
                            <img alt="certification" src="<?= get_template_directory_uri() ?>/assets/img/close.svg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                    <div class="playlist">
                        <?php foreach ($terms_playlists as $key => $term):?>
                            <button class="button-playlist h4 <?= $key === 0 ? 'button-discard-active' : '';?>" id="<?=$term->slug;?>"><?=$term->name;?></button>
                        <?php endforeach;?>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>
