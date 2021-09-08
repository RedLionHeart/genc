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
            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($paint_id), 'full', true)[0]; ?>">
        </div>
        <div class="info-card">
            <div class="d-flex align-items-end justify-content-between box-h1">
                <h1 class="h1"><?php the_field('artikul'); ?></h1>
                <div class="img-card">
                    <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($paint_id), 'full', true)[0]; ?>">
                </div>
            </div>
            <h2 class="h2 mb-64"><?php the_title(); ?></h2>
            <?php $oblast_primenenia = get_field('oblast_primeneniya');
            if ($oblast_primenenia):?>
                <h3 class="h3 mb-16">Область применения</h3>
                <h4 class="h4 mb-30"><?= $oblast_primenenia; ?></h4>
            <?php endif; ?>
            <div class="import-info mb-30">
                <h3 class="h3 mb-16">Ключевая информация</h3>
                <?php $key_information = get_field('klyuchevaya_informacziya');
                if ($key_information['opisanie']):?>
                    <h4 class="h4 mb-30"><?= $key_information['opisanie']; ?></h4>
                <?php endif; ?>
                <?php if ($key_information['ikonki']): ?>
                    <div class="d-flex ico-card-flex">
                        <?php foreach ($key_information['ikonki'] as $icon): ?>
                            <div class="ico-card">
                                <?= $icon; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="d-flex justify-content-between properties-color mb-56">
                <?php $properties = get_field('svojstva');
                if ($properties):?>
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
                if ($color):?>
                    <div class="box-color">
                        <h3 class="h3 mb-16">Цвет</h3>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="color" style="background-color:<?= $color['czvet']; ?>"></div>
                            <h4 class="h4"><?= $color['nazvanie_czveta']; ?></h4>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php $levels = get_field('uroven_bleska');
            if ($levels):?>
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
            if ($nanesenie):?>
                <div class="application mb-56">
                    <h3 class="h3 mb-16">Нанесение</h3>
                    <div class="d-flex box-application-ico">
                        <?php ?>
                        <?php foreach ($nanesenie as $item): ?>
                            <div class="application-ico">
                                <?= $item; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php $proportions = get_field('proporczii_smeshivaniya');
            if ($proportions):?>
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
            <?php endif; ?>
            <?php $drying_time = get_field('vremya_sushki');
            if ($drying_time):?>
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
                    <?php if ($vysyhanie_na_otlip): ?>
                        <div class="row">
                            <h4 class="col-6 h4">Высыхание на отлип</h4>
                            <h4 class="col-3 h4"><?= $vysyhanie_na_otlip['20']; ?></h4>
                            <h4 class="col-3 h4"><?= $vysyhanie_na_otlip['50s']; ?></h4>
                        </div>
                    <?php endif; ?>
                    <?php if ($suhoj_dlya_shlifovki): ?>
                        <div class="row">
                            <h4 class="col-6 h4">Сухой для шлифовки</h4>
                            <h4 class="col-3 h4"><?= $suhoj_dlya_shlifovki['20s']; ?></h4>
                            <h4 class="col-3 h4"><?= $suhoj_dlya_shlifovki['50s']; ?></h4>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php $documentation = get_field('dokumentacziya');
            $tds = $documentation['tds'];
            $msds = $documentation['msds'];
            $can_user_tds = false;
            $can_user_msds = false;

            if (is_user_role('tds') || is_user_role('msds') || is_user_role('administrator')) {
                $can_user_tds = true;
            }

            if (is_user_role('msds') || is_user_role('administrator')) {
                $can_user_msds = true;
            }
            ?>
            <div class="documentation">
                <?php if ($tds || $msds): ?>
                    <h3 class="h3 mb-16">Документация</h3>
                    <?php if ($tds): ?>
                        <a <?= $can_user_tds ? 'download' : ''; ?> href="<?= $can_user_tds ? $tds : ''; ?>"
                                                                   class="button-download mb-16 <?= $can_user_tds ? '' : 'button-download-disabled'; ?>">
                            <div class="tds">
                                <h3 class="h3-bold">TDS</h3>
                            </div>
                            <div class="d-flex align-items-center justify-content-center download-box">
                                <div class="img-download">
                                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M35.8096 23.7589H33.9219C33.7101 23.7589 33.5368 23.9321 33.5368 24.1439V32.5556H2.85233V24.1439C2.85233 23.9321 2.67907 23.7589 2.46731 23.7589H0.579607C0.367842 23.7589 0.19458 23.9321 0.19458 24.1439V33.6733C0.19458 34.5252 0.882815 35.2134 1.73469 35.2134H34.6545C35.5063 35.2134 36.1946 34.5252 36.1946 33.6733V24.1439C36.1946 23.9321 36.0213 23.7589 35.8096 23.7589Z"
                                                  fill="#5C87AF"/>
                                            <path d="M17.4133 25.985L17.0595 1.69105C17.0595 1.51436 17.2042 1.3698 17.3811 1.3698L19.6324 1.3698C19.8093 1.3698 19.954 1.51436 19.954 1.69105L20.0905 22.6671L22.7238 20.5759C22.7801 20.5317 22.8525 20.5076 22.9208 20.5076C23.0977 20.5076 23.2424 20.6522 23.2424 20.8289L23.2424 23.7442C23.2424 23.941 23.15 24.1257 22.9972 24.2502L19.4957 27.0009C19.2706 27.1776 18.9892 27.274 18.6997 27.274C17.9882 27.27 17.4133 26.6957 17.4133 25.985Z"
                                                  fill="#808080"/>
                                            <path d="M19.7969 25.985L19.7969 1.73631C19.7969 1.55962 19.6522 1.41505 19.4753 1.41505L17.2241 1.41505C17.0472 1.41505 16.9024 1.55962 16.9024 1.73631L17.1197 22.6671L14.4864 20.5759C14.4301 20.5317 14.3577 20.5076 14.2894 20.5076C14.1125 20.5076 13.9678 20.6522 13.9678 20.8289L13.9678 23.7442C13.9678 23.941 14.0602 24.1257 14.213 24.2502L17.7145 27.0009C17.9396 27.1776 18.221 27.274 18.5105 27.274C19.222 27.27 19.7969 26.6958 19.7969 25.985Z"
                                                  fill="#808080"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="36" height="36" fill="white"
                                                      transform="translate(0.19458 0.272217)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <h5 class="h5">Скачать</h5>
                            </div>
                        </a>
                    <?php endif;
                    if ($msds):?>
                        <a <?= $can_user_msds ? 'download' : ''; ?> href="<?= $can_user_msds ? $msds : ''; ?>"
                                                                    class="button-download mb-56 <?= $can_user_msds ? '' : 'button-download-disabled'; ?>">
                            <div class="tds">
                                <h3 class="h3-bold">MSDS</h3>
                            </div>
                            <div class="d-flex align-items-center justify-content-center download-box">
                                <div class="img-download">
                                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M35.8096 23.7589H33.9219C33.7101 23.7589 33.5368 23.9321 33.5368 24.1439V32.5556H2.85233V24.1439C2.85233 23.9321 2.67907 23.7589 2.46731 23.7589H0.579607C0.367842 23.7589 0.19458 23.9321 0.19458 24.1439V33.6733C0.19458 34.5252 0.882815 35.2134 1.73469 35.2134H34.6545C35.5063 35.2134 36.1946 34.5252 36.1946 33.6733V24.1439C36.1946 23.9321 36.0213 23.7589 35.8096 23.7589Z"
                                                  fill="#5C87AF"/>
                                            <path d="M17.4133 25.985L17.0595 1.69105C17.0595 1.51436 17.2042 1.3698 17.3811 1.3698L19.6324 1.3698C19.8093 1.3698 19.954 1.51436 19.954 1.69105L20.0905 22.6671L22.7238 20.5759C22.7801 20.5317 22.8525 20.5076 22.9208 20.5076C23.0977 20.5076 23.2424 20.6522 23.2424 20.8289L23.2424 23.7442C23.2424 23.941 23.15 24.1257 22.9972 24.2502L19.4957 27.0009C19.2706 27.1776 18.9892 27.274 18.6997 27.274C17.9882 27.27 17.4133 26.6957 17.4133 25.985Z"
                                                  fill="#808080"/>
                                            <path d="M19.7969 25.985L19.7969 1.73631C19.7969 1.55962 19.6522 1.41505 19.4753 1.41505L17.2241 1.41505C17.0472 1.41505 16.9024 1.55962 16.9024 1.73631L17.1197 22.6671L14.4864 20.5759C14.4301 20.5317 14.3577 20.5076 14.2894 20.5076C14.1125 20.5076 13.9678 20.6522 13.9678 20.8289L13.9678 23.7442C13.9678 23.941 14.0602 24.1257 14.213 24.2502L17.7145 27.0009C17.9396 27.1776 18.221 27.274 18.5105 27.274C19.222 27.27 19.7969 26.6958 19.7969 25.985Z"
                                                  fill="#808080"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="36" height="36" fill="white"
                                                      transform="translate(0.19458 0.272217)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <h5 class="h5">Скачать</h5>
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
                <a href="<?= get_permalink(77) . '?id=' . get_the_ID(); ?>" class="button-blue h5">Оставить заявку</a>
            </div>

        </div>
    </div>
</section>
<?php
get_footer();
?>
