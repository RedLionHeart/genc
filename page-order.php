<?php
/*
Template Name: Страница заказа
*/

get_header();

$post_id = $_GET['id'];
?>


<section class="form-sta">
    <div class="margin">
        <h1 class="h1"><?php the_title();?></h1>
        <form action="/" class="d-flex flex-column ajax-form" method="post" id="order">
            <input type="hidden" name="email_to" value="<?= get_field('email_dlya_zayavok', 'options'); ?>">
            <h2 class="h2"><?php the_field('artikul', $post_id); ?></h2>
            <input type="hidden" name="articul" value="<?php the_field('artikul', $post_id); ?>">
            <h3 class="h3"><?= get_the_title($post_id); ?></h3>
            <input type="hidden" name="name_product" value="<?= get_the_title($post_id); ?>">
            <div class="d-flex flex-column">
                <div class="input-valid">
                    <input class="entryfield h4" type="text" autocomplete="off" id="volume" placeholder="Объем"
                           name="volume">
                    <img class="entry-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/entry.svg">
                </div>
                <div class="input-valid">
                    <input class="entryfield h4" type="text" autocomplete="off" id="colour" placeholder="Цвет"
                           name="colour">
                    <img class="entry-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/entry.svg">
                </div>
                <div class="input-valid">
                    <input class="entryfield h4" type="text" autocomplete="off" id="shine" placeholder="Блеск"
                           name="shine">
                    <img class="entry-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/entry.svg">
                </div>
                <label class="check-filter">
                    <input type="checkbox" name="hardener">
                    <div class="box-check">
                        <div class="box-plus">
                            <div></div>
                            <div></div>
                        </div>
                        <h4 class="h5">Добавить отвердитель</h4>
                    </div>
                </label>
                <label class="check-filter">
                    <input type="checkbox" name="solvent">
                    <div class="box-check">
                        <div class="box-plus">
                            <div></div>
                            <div></div>
                        </div>
                        <h4 class="h5">Добавить растворитель</h4>
                    </div>
                </label>
                <div class="input-valid">
                    <input class="entryfield name h4" type="text" autocomplete="off"
                           pattern="[\D]*([-][\D]*)?\s?[\D]*?\s?[\D]*?" id="name" placeholder="ФИО"
                           name="name" required>
                    <img class="entry-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/entry.svg">
                    <img class="valid-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                    <img class="invalid-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                </div>
                <div class="input-valid">
                    <input class="entryfield organization h4" type="text" autocomplete="off"
                           id="region" placeholder="Регион"
                           name="region" required>
                    <img class="entry-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/entry.svg">
                    <img class="valid-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                    <img class="invalid-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                </div>
                <div class="input-valid">
                    <input class="entryfield organization h4" type="text" autocomplete="off"
                           id="organization" placeholder="Название компании" name="organization">
                    <img class="entry-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/entry.svg">
                    <img class="valid-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                    <img class="invalid-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                </div>
                <div class="input-valid">
                    <input class="entryfield input-mask__mail mail h4" type="email"
                           id="mail" placeholder="Email"
                           name="mail" required>
                    <img class="entry-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/entry.svg">
                    <img class="valid-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                    <img class="invalid-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                </div>
                <div class="input-valid">
                    <input class="entryfield input-mask__phone phone h4" type="text" id="phone"
                           pattern="[+]?[0-9]{4,}"
                           placeholder="Телефон" name="phone" required>
                    <img class="entry-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/entry.svg">
                    <img class="valid-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                    <img class="invalid-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                </div>
            </div>
            <div class="d-flex align-items-center box-check-ico">
                <label class="check-ico" id="variable">
                    <input class="consent" type="checkbox" onclick="check();" id="consent" value=""
                           autocomplete="off" name="choice" required>
                    <span class="d-flex align-items-center text-medium-16"></span>
                </label>
                <div class="d-flex flex-wrap">
                    <p class="text-medium-16">Я согласен с</p><a class="text-medium-16" target="_blank" href="<?= get_field('politika_konfidenczialnosti', 'options');?>">Политикой конфиденциальности</a>
                </div>
            </div>
            <button type="submit" name="submit" class="button-blue" disabled>Отправить заявку</button>
        </form>
    </div>
</section>

<?php
get_footer();
?>