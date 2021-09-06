<?php
/*
Template Name: Страница о компании
*/

get_header(); ?>

<section class="back-top">
    <div class="video-back back-about">
        <img src="<?= get_template_directory_uri() ?>/assets/img/back_about.jpg">
        <!--        <div class="back-gradient"></div>-->
    </div>
</section>
<section class="about">
    <div class="margin">
        <h1 class="h1"><?php the_title();?></h1>
        <div class="banner-about-top mb-16">
            <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/img/banner_about_top.jpg">
        </div>
        <div class="d-flex">
            <div class="col-lg-6">
                <h4 class="h4">«Genç» – один из мировых лидеров в области производства
                    мебельных красок и лаков, является брендом компании «Kayalar Kimya».
                    «Kayalar Kimya», приступившая к производству в 1976 году в Стамбуле,
                    сегодня, в качестве глобальной организации, управляет стандартами сектора.</h4>
                <div class="img-mob-about img">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/about_mob1.jpg">
                </div>
                <h4 class="h4">«Kayalar Kimya», с 23% долей рынка, производственной
                    мощностью в 500 различных продуктов и 3000 различных видов, является
                    лидером в сфере производства мебельных красок и лаков в Турции, и
                    одной из ведущих компаний на рынке в сфере производства строительных
                    красок.</h4>
                <h4 class="h4">Стратегия роста компании «Kayalar Kimya» основана на миссии,
                    направленной на разработку инновационных продуктов и услуг, обладающей
                    способностью к разработке быстрых и гибких действий, с горизонтом,
                    открытым к мировым рынкам.</h4>
                <div class="img-mob-about img">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/about_mob2.jpg">
                </div>
                <h4 class="h4">«Kayalar Kimya», обеспечивает стабильную и надежную
                    производственную среду на предприятиях, оборудованных по последнему
                    слову техники, с самыми передовыми системами автоматизации,
                    расположенных в Турции и Испании, на общей площади в 59 тысяч м².
                    «Kayalar Kimya», с производственной мощностью являющаяся 5-ым по
                    величине производителем мебельных красок и лаков в Европе, в 2013
                    году заняла 76 место в списке «Coatings World», определяющем самые
                    престижные компании сектора по всему миру.</h4>
                <h4 class="h4">«Kayalar Kimya», повышающая конкурентоспособность
                    принятым во всем мире передовым опытом и инициативами, с показателями
                    экспорта, в настоящее время реализуемого в 60 стран мира, Ассамблеей
                    экспортеров Турции удостоена награды «Звезда Экспорта».</h4>
            </div>
            <div class="col-lg-6">
                <div class="img-mob-about img">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/about_mob1.jpg">
                </div>
                <div class="img-mob-about img">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/about_mob2.jpg">
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>

