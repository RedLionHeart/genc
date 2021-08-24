<?php $item_id = get_the_ID();?>
<a href="<?php the_permalink();?>" class="box-card">
    <div class="img-card">
        <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($item_id),'full', true)[0];?>">
    </div>
    <div class="txt-card">
        <h3 class="h3"><?= get_field('artikul');?></h3>
        <h4 class="h4"><?php the_title();?></h4>
    </div>
</a>