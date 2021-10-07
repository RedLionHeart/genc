<?php
/*
Template Name: Страница техническая поддержка
*/

get_header(); ?>
<section class="back-top">
    <div class="video-back back-about">
        <img src="<?= get_field('fonovaya_kartinka');?>">
        <!--        <div class="back-gradient"></div>-->
    </div>
</section>
<section class="support">
    <div class="margin">
        <div class="d-flex justify-content-between link-support">
            <a href="<?php echo get_option('home'); ?>/service/"><h1 class="h1">Техническая поддержка</h1></a>
            <a href="<?php echo get_option('home'); ?>/tinting-system/" class="h1"><h2 class="h1">Система колеровки</h2></a>
        </div>
        <div class="d-flex">
            <div class="col-lg-6">
                <h4 class="h4"><?= get_field('pervyj_abzacz');?></h4>
                <div class="img">
                    <img src="<?= get_field('kartinka_1');?>">
                </div>
                <h4 class="h4"><?= get_field('vtoroj_abzacz');?></h4>
                <div class="img">
                    <img src="<?= get_field('kartinka_1');?>">
                </div>
                <h4 class="h4"><?= get_field('tretij_abzacz');?></h4>
                <ul>
                    <?php $list = get_field('spisok');?>
                    <?php foreach ($list as $list_item):?>
                    <li class="h4"><?= $list_item['element'];?></li>
                    <?php endforeach;?>
                </ul>
                <div class="img">
                    <img src="<?= get_field('kartinka_2');?>">
                </div>
                <div class="img">
                    <img src="<?= get_field('kartinka_2');?>">
                </div>
                <h4 class="h4"><?= get_field('chetvertyj_abzacz');?></h4>
            </div>
            <div class="col-lg-6">
                <div class="img">
                    <img src="<?= get_field('kartinka_1');?>">
                </div>
                <div class="img">
                    <img src="<?= get_field('kartinka_2');?>">
                </div>
                <div class="img">
                    <img src="<?= get_field('kartinka_1');?>">
                </div>
                <div class="img">
                    <img src="<?= get_field('kartinka_2');?>">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>

