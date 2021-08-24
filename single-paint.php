<?php
get_header();
?>

<section class="back-top">
    <div class="video-back">
        <img src="<?= get_template_directory_uri() ?>/assets/img/back_card.jpg">
        <div class="back-gradient"></div>
    </div>
</section>
<section class="card-description">
    <div class="d-flex justify-content-between content-card">
        <div class="img-card">
            <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.svg">
        </div>
        <div class="info-card">
            <h1 class="h1"><?php the_field('artikul'); ?></h1>
            <h2 class="h2 mb-64"><?php the_title(); ?></h2>
            <h3 class="h3 mb-16">Область применения</h3>
            <h4 class="h4 mb-30"><?php the_field('oblast_primeneniya'); ?></h4>
            <div class="import-info mb-30">
                <h3 class="h3 mb-16">Ключевая информация</h3>
                <?php $key_information = get_field('klyuchevaya_informacziya'); ?>
                <h4 class="h4 mb-30"><?= $key_information['opisanie']; ?></h4>
                <div class="d-flex ico-card-flex">
                    <?php foreach ($key_information['ikonki'] as $icon): ?>
                        <div class="ico-card">
                            <?= $icon; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="d-flex justify-content-between properties-color mb-56">
                <div class="properties">
                    <h3 class="h3 mb-16">Свойства</h3>
                    <ul>
                        <?php $properties = get_field('svojstva');
                        foreach ($properties as $prop):?>
                            <li class="h4"><?= $prop['svojstvo']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="box-color">
                    <h3 class="h3 mb-16">Цвет</h3>
                    <?php $color = get_field('czvet'); ?>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="color" style="background-color:<?= $color['czvet']; ?>"></div>
                        <h4 class="h4"><?= $color['nazvanie_czveta']; ?></h4>
                    </div>
                </div>
            </div>
            <div class="gloss-level mb-56">
                <h3 class="h3 mb-16">Уровень блеска</h3>
                <ul>
                    <?php $levels = get_field('uroven_bleska');
                    foreach ($levels as $level):?>
                        <li><?= $level['punkt']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="application mb-56">
                <h3 class="h3 mb-16">Нанесение</h3>
                <div class="d-flex box-application-ico">
                    <?php $nanesenie = get_field('nanesenie'); ?>
                    <?php foreach ($nanesenie as $item):?>
                    <div class="application-ico">
                        <?= $item;?>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="mixing-ratio mb-56">
                <h3 class="h3 mb-16">Пропорции смешивания</h3>
                <?php $proportions = get_field('proporczii_smeshivaniya');?>
                <div class="row">
                    <h5 class="col-lg-9 h5">Смешивание</h5>
                    <h5 class="col-lg-3 h5">По объему</h5>
                </div>
                <?php foreach ($proportions as $proportion):?>
                <div class="row">
                    <h4 class="col-lg-9 h4"><?=$proportion['smeshivanie'];?></h4>
                    <h4 class="col-lg-3 h4"><?=$proportion['po_obemu'];?></h4>
                </div>
                <?php endforeach;?>
            </div>
            <div class="drying-time mb-56">
                <h3 class="h3 mb-16">Время сушки</h3>
                <?php $drying_time = get_field('vremya_sushki');?>
                <div class="row">
                    <h5 class="col-lg-6 h5">Температура</h5>
                    <h5 class="col-lg-3 h5">20°С</h5>
                    <h5 class="col-lg-3 h5">50°С</h5>
                </div>
                <?php foreach ($drying_time as $item):?>
                <div class="row">
                    <h4 class="col-lg-6 h4"><?= $item['temperatura']?></h4>
                    <h4 class="col-lg-3 h4"><?= $item['20']?></h4>
                    <h4 class="col-lg-3 h4"><?= $item['50s']?></h4>
                </div>
                <?php endforeach;?>
            </div>
            <div class="documentation">
                <?php $documentation = get_field('dokumentacziya');
                    $tds = $documentation['tds'];
                    $msds = $documentation['msds'];
                ?>
                <h3 class="h3 mb-16">Документация</h3>
                <?php if($tds):?>
                <a download href="<?= $tds?>" class="button-download mb-16">
                    <div class="tds">
                        <h3 class="h3-bold">TDS</h3>
                    </div>
                    <div class="d-flex align-items-center justify-content-center download-box">
                        <div class="img-download">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/download.svg">
                        </div>
                        <h5 class="h5">Скачать пдф</h5>
                    </div>
                </a>
                <?php endif;
                if($msds):?>
                <a download href="<?= $msds?>" class="button-download mb-56">
                    <div class="tds">
                        <h3 class="h3-bold">MSDS</h3>
                    </div>
                    <div class="d-flex align-items-center justify-content-center download-box">
                        <div class="img-download">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/download.svg">
                        </div>
                        <h5 class="h5">Скачать пдф</h5>
                    </div>
                </a>
                <?php endif;?>
                <button class="button-blue h5" id="filter-entry">Оставить заявку</button>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
