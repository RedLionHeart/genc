<?php
/*
Template Name: Страница регистрации
*/

get_header(); ?>

<section class="form-passwork">
    <div class="margin">
        <h1 class="h1">Форма получения пароля</h1>
        <form action="/" class="d-flex flex-column ajax-form" method="post" id="registration">
            <input type="hidden" name="email_to" value="<?= get_field('email_dlya_zayavok', 'options'); ?>">

            <div class="d-flex flex-column">
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
                           id="organization" placeholder="Название компании" name="organization" required>
                    <img class="entry-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/entry.svg">
                    <img class="valid-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                    <img class="invalid-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                </div>
                <div class="input-valid">
                    <input class="entryfield input-mask__mail mail h4" type="text"
                           pattern="(\w+[.]?\w+?@\w+?\.[a-z]{2,4})" id="mail" placeholder="Email"
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
                    <p class="text-medium-16">Я согласен с</p><a class="text-medium-16" target="_blank" href=href="<?= get_template_directory_uri() ?>/assets/src/files/politics.pdf">Политикой конфиденциальности</a>
                </div>
            </div>
            <button type="submit" name="submit" class="button-blue" disabled>Получить пароль</button>
        </form>
    </div>
</section>

<?php
get_footer();
?>
