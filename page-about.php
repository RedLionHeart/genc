<?php
/*
Template Name: Страница о компании
*/

get_header(); ?>

<section class="back-top">
    <div class="video-back back-about">
        <img src="<?= get_field('fonovoe_izobrazhenie');?>">
        <!--        <div class="back-gradient"></div>-->
    </div>
</section>
<section class="about">
    <div class="margin">
        <h1 class="h1"><?php the_title();?></h1>
        <div class="banner-about-top mb-16">
            <img class="w-100" src="<?= get_field('kartinka_pod_zagolovkom');?>">
        </div>
        <div class="d-flex">
            <div class="col-lg-6">
                <h4 class="h4"><?= get_field('pervyj_abzacz');?></h4>
                <div class="img-mob-about img">
                    <img src="<?= get_field('kartinka_1');?>">
                </div>
                <h4 class="h4"><?= get_field('vtoroj_abzacz');?></h4>
                <h4 class="h4"><?= get_field('tretij_abzacz');?></h4>
                <div class="img-mob-about img">
                    <img src="<?= get_field('kartinka_2');?>">
                </div>
                <h4 class="h4"><?= get_field('chetvertyj_abzacz');?></h4>
                <h4 class="h4"><?= get_field('pyatyj_abzacz');?></h4>
            </div>
            <div class="col-lg-6">
                <div class="img-mob-about img">
                    <img src="<?= get_field('kartinka_1');?>">
                </div>
                <div class="img-mob-about img">
                    <img src="<?= get_field('kartinka_2');?>">
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>

