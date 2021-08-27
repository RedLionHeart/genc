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
<?php
get_footer();
?>