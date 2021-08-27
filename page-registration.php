<?php
/*
Template Name: Страница регистрации
*/

get_header(); ?>

<section class="form-passwork">
    <div class="margin">
        <h1 class="h1">Форма получения пароля</h1>
        <form action="/" class="d-flex flex-column ajax-form" method="post">
            <input type="hidden" name="email_to" value="<?= get_field('email_для_заявок', 'options'); ?>">

            <div class="d-flex flex-column">
                <div class="input-valid">
                    <input class="entryfield name h4" type="text" autocomplete="off"
                           pattern="([а-яА-Яa-zA-z]+)" id="name" placeholder="ФИО"
                           name="name">
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
                    <input class="entryfield input-mask__mail mail h4" type="text"
                           pattern="(\w+[.]?\w+?@\w+?\.[a-z]{2,4})" id="mail" placeholder="Email"
                           name="mail">
                    <img class="entry-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/entry.svg">
                    <img class="valid-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                    <img class="invalid-img"
                         src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                </div>
                <div class="input-valid">
                    <input class="entryfield input-mask__phone phone h4" type="text" id="phone"
                           placeholder="Телефон" name="phone">
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
