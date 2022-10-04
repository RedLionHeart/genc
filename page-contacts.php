<?php
/*
Template Name: Страница контакты
*/

get_header(); ?>

<section class="back-top">
    <div class="video-back back-about">
        <img src="<?= get_field('fonovoe_izobrazhenie'); ?>">
    </div>
</section>
<section class="contacts">
    <div class="margin">
        <h1 class="h1"><?php the_title(); ?></h1>
        <div class="container-contacts">
            <div class="land">
                <?php $predstavitel = get_field('predstavitel_po_sng'); ?>
                <div class="height-box">
                    <div class="d-flex box-contact">

                        <div class="box-name-city">
                            <h3 class="h3-bold">Представитель по продажам в России</h3>
                        </div>
                        <div class="adress">

                            <div class="box-adress">
                                <p class="h4"><?= $predstavitel['imya_familiya']; ?></p>
                                <a href="tel:+<?= parse_phone_number($predstavitel['telefon']); ?>"
                                   class="h4">тел.: +<?= $predstavitel['telefon']; ?></a>
                                <a href="mailto:<?= $predstavitel['email']; ?>"
                                   class="h4"><?= $predstavitel['email']; ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-gradient"></div>
                    <p class="button-collapsed h4">смотреть еще</p>
                </div>
                <div class="map">
                    <script type="text/javascript" charset="utf-8" async
                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A24481e8c0fc95a0b97fd7abf0d739eac6e0bc72a91cc3c0c0e011a5048b39c15&amp;width=100%25&amp;height=385&amp;lang=ru_RU&amp;scroll=true">
                    </script>
                </div>
                <?php $countries = get_field('strany');
                foreach ($countries as $country):
                    $organizations = $country['organizacziya'];?>
                <h2 class="h2"><?=$country['nazvanie_strany'];?></h2>
                <div class="height-box">
                    <?php foreach ($organizations as $organization):?>
                    <div class="d-flex box-contact">

                        <div class="box-name-city">
                            <h3 class="h3-bold"><?= $organization['nazvanie'];?></h3>
                            <p class="h5"><?= $organization['gorod'];?></p>
                        </div>
                        <div class="adress">
                            <div class="box-adress">
                                <p class="h4"><?= $organization['tochnyj_adres'];?></p>
                                <a href="tel:+<?= parse_phone_number($organization['telefon']);?>" class="h4">тел.: +<?= $organization['telefon'];?></a>
                                <a href="mailto:<?= $organization['email'];?>" class="h4"><?= $organization['email'];?></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <div class="contact-gradient"></div>
                    <p class="button-collapsed h4">смотреть еще</p>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>

