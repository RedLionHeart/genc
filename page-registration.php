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
                           pattern="([а-яА-Яa-zA-z]+[\-\s]?+)" id="name" placeholder="ФИО"
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
                           pattern="\+375\s?[\(]{0,1}(25|29|33|44)[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                           title="+375 (25/29/33/44) XXX-XX-XX"
                           placeholder="Телефон" name="phone" required>
                    <img class="entry-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/entry.svg">
                    <img class="valid-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                    <img class="invalid-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                </div>
            </div>

            <button type="submit" name="submit" class="button-blue">Получить пароль</button>
        </form>
    </div>
</section>

<?php
get_footer();
?>
