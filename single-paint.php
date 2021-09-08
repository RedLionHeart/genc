<?php
get_header();
$paint_id = get_the_ID();
?>

<section class="back-top">
    <div class="video-back">
        <img src="<?php the_field('izobrazhenie-fon'); ?>">
        <div class="back-gradient"></div>
    </div>
</section>
<section class="card-description">
    <div class="d-flex justify-content-between content-card">
        <div class="img-card">
            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($paint_id),'full', true)[0];?>">
        </div>
        <div class="info-card">
            <div class="d-flex align-items-end justify-content-between box-h1">
                <h1 class="h1"><?php the_field('artikul'); ?></h1>
                <div class="img-card">
                    <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($paint_id),'full', true)[0];?>">
                </div>
            </div>
            <h2 class="h2 mb-64"><?php the_title(); ?></h2>
            <?php $oblast_primenenia = get_field('oblast_primeneniya');
            if($oblast_primenenia):?>
            <h3 class="h3 mb-16">Область применения</h3>
            <h4 class="h4 mb-30"><?=$oblast_primenenia; ?></h4>
            <?php endif;?>
            <div class="import-info mb-30">
                <h3 class="h3 mb-16">Ключевая информация</h3>
                <?php $key_information = get_field('klyuchevaya_informacziya');
                if($key_information['opisanie']):?>
                <h4 class="h4 mb-30"><?= $key_information['opisanie']; ?></h4>
                <?php endif;?>
                <?php if($key_information['ikonki']):?>
                <div class="d-flex ico-card-flex">
                    <?php foreach ($key_information['ikonki'] as $icon): ?>
                        <div class="ico-card">
                            <?= $icon; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php endif;?>
            </div>
            <div class="d-flex justify-content-between properties-color mb-56">
                <?php $properties = get_field('svojstva');
                if($properties):?>
                <div class="properties">
                    <h3 class="h3 mb-16">Свойства</h3>
                    <ul>
                        <?php
                        foreach ($properties as $prop):?>
                            <li class="h4"><?= $prop['svojstvo']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif;
                $color = get_field('czvet');
                if($color):?>
                <div class="box-color">
                    <h3 class="h3 mb-16">Цвет</h3>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="color" style="background-color:<?= $color['czvet']; ?>"></div>
                        <h4 class="h4"><?= $color['nazvanie_czveta']; ?></h4>
                    </div>
                </div>
                <?php endif;?>
            </div>
            <?php $levels = get_field('uroven_bleska');
            if($levels):?>
            <div class="gloss-level mb-56">
                <h3 class="h3 mb-16">Уровень блеска</h3>
                <ul>
                    <?php
                    foreach ($levels as $level):?>
                        <li><?= $level['punkt']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif;
            $nanesenie = get_field('nanesenie');
            if($nanesenie):?>
            <div class="application mb-56">
                <h3 class="h3 mb-16">Нанесение</h3>
                <div class="d-flex box-application-ico">
                    <?php  ?>
                    <?php foreach ($nanesenie as $item): ?>
                        <div class="application-ico">
                            <?= $item; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif;?>
            <?php $proportions = get_field('proporczii_smeshivaniya');
            if($proportions):?>
            <div class="mixing-ratio mb-56">
                <h3 class="h3 mb-16">Пропорции смешивания</h3>
                <div class="row">
                    <h5 class="col-9 h5">Смешивание</h5>
                    <h5 class="col-3 h5">По объему</h5>
                </div>
                <?php foreach ($proportions as $proportion): ?>
                    <div class="row">
                        <h4 class="col-9 h4"><?= $proportion['smeshivanie']; ?></h4>
                        <h4 class="col-3 h4"><?= $proportion['po_obemu']; ?></h4>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif;?>
            <?php $drying_time = get_field('vremya_sushki');
            if($drying_time):?>
            <div class="drying-time mb-56">
                <h3 class="h3 mb-16">Время сушки</h3>
                <?php
                $vysyhanie_na_otlip = $drying_time['vysyhanie_na_otlip'];
                $suhoj_dlya_shlifovki = $drying_time['suhoj_dlya_shlifovki'];
                ?>
                <div class="row">
                    <h5 class="col-6 h5">Температура</h5>
                    <h5 class="col-3 h5">20°С</h5>
                    <h5 class="col-3 h5">50°С</h5>
                </div>
                <?php if($vysyhanie_na_otlip):?>
                <div class="row">
                    <h4 class="col-6 h4">Высыхание на отлип</h4>
                    <h4 class="col-3 h4"><?= $vysyhanie_na_otlip['20']; ?></h4>
                    <h4 class="col-3 h4"><?= $vysyhanie_na_otlip['50s']; ?></h4>
                </div>
                <?php endif;?>
                <?php if($suhoj_dlya_shlifovki):?>
                <div class="row">
                    <h4 class="col-6 h4">Сухой для шлифовки</h4>
                    <h4 class="col-3 h4"><?= $suhoj_dlya_shlifovki['20s']; ?></h4>
                    <h4 class="col-3 h4"><?= $suhoj_dlya_shlifovki['50s']; ?></h4>
                </div>
                <?php endif;?>
            </div>
            <?php endif;?>
            <?php $documentation = get_field('dokumentacziya');
            $tds = $documentation['tds'];
            $msds = $documentation['msds'];
            ?>

            <div class="documentation">
                <?php if (is_user_role('tds') || is_user_role('msds') || is_user_role('administrator')): ?>
                    <h3 class="h3 mb-16">Документация</h3>
                    <?php if ($tds): ?>
                        <a download href="<?= $tds ?>" class="button-download mb-16">
                            <div class="tds">
                                <h3 class="h3-bold">TDS</h3>
                            </div>
                            <div class="d-flex align-items-center justify-content-center download-box">
                                <div class="img-download">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/download.svg">
                                </div>
                                <h5 class="h5">Скачать</h5>
                            </div>
                        </a>
                    <?php endif;
                    if (is_user_role('msds') || is_user_role('administrator')):
                        if ($msds):?>
                            <a download href="<?= $msds ?>" class="button-download mb-56">
                                <div class="tds">
                                    <h3 class="h3-bold">MSDS</h3>
                                </div>
                                <div class="d-flex align-items-center justify-content-center download-box">
                                    <div class="img-download">
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/download.svg">
                                    </div>
                                    <h5 class="h5">Скачать</h5>
                                </div>
                            </a>
                        <?php endif;
                    endif;
                endif; ?>
                <a href="<?= get_permalink(77) . '?id=' . get_the_ID(); ?>" class="button-blue h5">Оставить заявку</a>
            </div>

        </div>
    </div>
</section>
<?php
get_footer();
?>
