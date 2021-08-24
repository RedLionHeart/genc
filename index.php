<?php
/*
Template Name: Главная
*/

get_header();

$medias = get_posts(array(
    'post_type' => 'media',
    'post_status' => 'publish',
    'numberposts' => 3,
));
?>

    <section class="back-top">
        <div class="video-back">
            <video autoplay playsinline loop muted>
                <source src="<?= get_template_directory_uri() ?>/assets/img/waves.mp4" type="video/mp4">
                <source src="<?= get_template_directory_uri() ?>/assets/img/waves.webm" type="video/webm">
            </video>
            <div class="back-gradient"></div>
        </div>
    </section>
    <section class="catalog">
        <div class="margin">
            <div class="d-flex flex-column">
                <h1 class="h1">Каталог</h1>
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column filters">
                        <h2 class="h2">Фильтр</h2>
                        <form class="accordion" action="/" method="post">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1">
                                    Химическая основа
                                </button>
                                <div id="collapse1" class="accordion-collapse collapse">
                                    <div class="d-flex flex-column accordion-body">
                                        <label>
                                            <input type="checkbox" name="полиуретановые">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">полиуретановые</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="акриловые">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">акриловые</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="полиэфирные">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">полиэфирные</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="кислотного отверждения">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">кислотного отверждения</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="нитроцеллюлозные">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">нитроцеллюлозные</h4>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2">
                                    Тип разбавителя
                                </button>
                                <div id="collapse2" class="accordion-collapse collapse">
                                    <div class="d-flex flex-column accordion-body">
                                        <label>
                                            <input type="checkbox" name="органические">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">органические</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="водоразбавляемые">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">водоразбавляемые</h4>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3">
                                    Тип материала
                                </button>
                                <div id="collapse3" class="accordion-collapse collapse">
                                    <div class="d-flex flex-column accordion-body">
                                        <label>
                                            <input type="checkbox" name="морилки">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">морилки</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="барьеры и изоляторы">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">барьеры и изоляторы</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="прозрачные грунты">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">прозрачные грунты</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="пигментированные грунты">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">пигментированные грунты</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="лаки">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">лаки</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="эмали">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">эмали</h4>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4">
                                    Колеровочная система
                                </button>
                                <div id="collapse4" class="accordion-collapse collapse">
                                    <div class="d-flex flex-column accordion-body">
                                        <label>
                                            <input type="checkbox" name="конвертеры">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">конвертеры</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="пасты">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">пасты</h4>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5">
                                    Cпециальные материалы
                                </button>
                                <div id="collapse5" class="accordion-collapse collapse">
                                    <div class="d-flex flex-column accordion-body">
                                        <label>
                                            <input type="checkbox" name="декоративные">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">декоративные</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="огнезащитные">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">огнезащитные</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="термостойкие">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">термостойкие</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="специальных применений">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">специальных применений</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="металлические пасты">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">металлические пасты</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="добавки">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">добавки</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="разбавители">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">разбавители</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="вспомогательные материалы">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">вспомогательные материалы</h4>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse6">
                                    Вид отделки
                                </button>
                                <div id="collapse6" class="accordion-collapse collapse">
                                    <div class="d-flex flex-column accordion-body">
                                        <label>
                                            <input type="checkbox" name="матовая">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">матовая</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="высокоглянцевая">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">высокоглянцевая</h4>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse7">
                                    Особые методы нанесения
                                </button>
                                <div id="collapse7" class="accordion-collapse collapse">
                                    <div class="d-flex flex-column accordion-body">
                                        <label>
                                            <input type="checkbox" name="окунанием">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">окунанием</h4>
                                            </div>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="электростатическим распылением">
                                            <div class="box-check">
                                                <div class="box-plus">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <h4 class="h4">электростатическим распылением</h4>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="separate-input">
                                <label>
                                    <input type="checkbox" name="Материалы УФ-отверждения"
                                           value="Материалы УФ-отверждения">
                                    <div class="box-check">
                                        <div class="box-plus">
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <h4 class="h4">Материалы УФ-отверждения</h4>
                                    </div>
                                </label>
                                <label>
                                    <input type="checkbox" name="WOODTEC лаки">
                                    <div class="box-check">
                                        <div class="box-plus">
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <h4 class="h4">WOODTEC лаки</h4>
                                    </div>
                                </label>
                            </div>
                            <button class="button-blue w-100 h5" id="filter-entry">Применить</button>
                            <button class="button-discard w-100 h5">Сбросить фильтр</button>
                        </form>
                    </div>
                    <div class="container-search-card">
                        <form class="form-search" method="get">
                            <input class="р5" type="search" name="s" placeholder="Поиск товара">
                            <button type="submit">
                                <div class="d-flex align-items-center">
                                    <p class="h4">Найти!</p>
                                    <div class="img-search d-flex align-items-center justify-content-center">
                                        <svg width="27" height="26" viewBox="0 0 27 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M25.6562 24.9726L20.0623 19.3687L25.6562 24.9726ZM23.1623 11.8795C23.1623 14.6905 22.0456 17.3865 20.0578 19.3742C18.0701 21.362 15.3741 22.4787 12.5631 22.4787C9.75198 22.4787 7.05603 21.362 5.0683 19.3742C3.08056 17.3865 1.96387 14.6905 1.96387 11.8795C1.96387 9.06838 3.08056 6.37244 5.0683 4.3847C7.05603 2.39697 9.75198 1.28027 12.5631 1.28027C15.3741 1.28027 18.0701 2.39697 20.0578 4.3847C22.0456 6.37244 23.1623 9.06838 23.1623 11.8795V11.8795Z"
                                                  stroke="#5C87AF" stroke-width="2" stroke-linecap="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </button>
                        </form>
                        <div class="d-flex flex-wrap justify-content-between container-card">
                            <a href="card.html" class="box-card">
                                <div class="img-card">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.svg">
                                </div>
                                <div class="txt-card">
                                    <h3 class="h3">H1 - BS100.78</h3>
                                    <h4 class="h4">Синтетический антикоррозийный грунт</h4>
                                </div>
                            </a>
                            <div class="box-card">
                                <div class="img-card">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.svg">
                                </div>
                                <div class="txt-card">
                                    <h3 class="h3">H1 - BS100.78</h3>
                                    <h4 class="h4">Синтетический антикоррозийный грунт</h4>
                                </div>
                            </div>
                            <div class="box-card">
                                <div class="img-card">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.svg">
                                </div>
                                <div class="txt-card">
                                    <h3 class="h3">H1 - BS100.78</h3>
                                    <h4 class="h4">Синтетический антикоррозийный грунт</h4>
                                </div>
                            </div>
                            <div class="box-card">
                                <div class="img-card">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.svg">
                                </div>
                                <div class="txt-card">
                                    <h3 class="h3">H1 - BS100.78</h3>
                                    <h4 class="h4">Синтетический антикоррозийный грунт</h4>
                                </div>
                            </div>
                            <div class="box-card">
                                <div class="img-card">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.svg">
                                </div>
                                <div class="txt-card">
                                    <h3 class="h3">H1 - BS100.78</h3>
                                    <h4 class="h4">Синтетический антикоррозийный грунт</h4>
                                </div>
                            </div>
                            <div class="box-card">
                                <div class="img-card">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.svg">
                                </div>
                                <div class="txt-card">
                                    <h3 class="h3">H1 - BS100.78</h3>
                                    <h4 class="h4">Синтетический антикоррозийный грунт</h4>
                                </div>
                            </div>
                            <div class="box-card">
                                <div class="img-card">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.svg">
                                </div>
                                <div class="txt-card">
                                    <h3 class="h3">H1 - BS100.78</h3>
                                    <h4 class="h4">Синтетический антикоррозийный грунт</h4>
                                </div>
                            </div>
                            <div class="box-card">
                                <div class="img-card">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.svg">
                                </div>
                                <div class="txt-card">
                                    <h3 class="h3">H1 - BS100.78</h3>
                                    <h4 class="h4">Синтетический антикоррозийный грунт</h4>
                                </div>
                            </div>
                            <div class="box-card">
                                <div class="img-card">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.svg">
                                </div>
                                <div class="txt-card">
                                    <h3 class="h3">H1 - BS100.78</h3>
                                    <h4 class="h4">Синтетический антикоррозийный грунт</h4>
                                </div>
                            </div>
                            <div class="box-card">
                                <div class="img-card">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.svg">
                                </div>
                                <div class="txt-card">
                                    <h3 class="h3">H1 - BS100.78</h3>
                                    <h4 class="h4">Синтетический антикоррозийный грунт</h4>
                                </div>
                            </div>
                            <div class="box-card">
                                <div class="img-card">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.svg">
                                </div>
                                <div class="txt-card">
                                    <h3 class="h3">H1 - BS100.78</h3>
                                    <h4 class="h4">Синтетический антикоррозийный грунт</h4>
                                </div>
                            </div>
                            <div class="box-card">
                                <div class="img-card">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.svg">
                                </div>
                                <div class="txt-card">
                                    <h3 class="h3">H1 - BS100.78</h3>
                                    <h4 class="h4">Синтетический антикоррозийный грунт</h4>
                                </div>
                            </div>
                        </div>
                        <nav class="navigation pagination" role="navigation">
                            <div class="d-flex align-items-center nav-links">
                                <a class="prev" href="http://wptest.ru/page/2/">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/arrow_pagination_prev.svg">
                                </a>
                                <span class="page-numbers current h4"><span class="meta-nav screen-reader-text"></span>1</span>
                                <a class="page-numbers h4" href="http://wptest.ru/page/2/"><span
                                            class="meta-nav screen-reader-text"></span>2</a>
                                <a class="page-numbers h4" href="http://wptest.ru/page/3/"><span
                                            class="meta-nav screen-reader-text"></span>3</a>
                                <a class="page-numbers h4" href="http://wptest.ru/page/4/"><span
                                            class="meta-nav screen-reader-text"></span>4</a>
                                <span class="page-numbers dots h4">…</span>
                                <a class="page-numbers h4" href="http://wptest.ru/page/6/"><span
                                            class="meta-nav screen-reader-text"></span>6</a>
                                <a class="next" href="http://wptest.ru/page/2/">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/arrow_pagination_next.svg">
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="media">
        <div class="margin">
            <h2 class="h1">Медиа</h2>
            <div class="d-flex justify-content-between">
                <?php foreach ($medias as $post):
                    setup_postdata($post);
                    get_template_part('template-parts/content', 'media');
                endforeach;
                wp_reset_postdata();?>
            </div>
        </div>
    </section>
    <section class="tinting">
        <div class="d-flex justify-content-between margin">
            <div class="tinting-txt">
                <h2 class="h1">Колеровка</h2>
                <h4 class="h4">Компания «Kayalar Kimya», считающая, что техническая поддержка до и
                    после продажи является одним из основных требований сектора, поставив перед
                    собой миссию быть для клиентов партнером по разработке системных решений, в
                    2004 году основала первый в Турции «Центр по обучению и применению мебельной
                    краски».</h4>
                <a class="button-discard h5" href="#">Узнать подробнее</a>
            </div>
            <div class="box-video">
                <div class="video__link">
                    <img class="video__media" src="https://i.ytimg.com/vi/cdf1OpL7-_4/maxresdefault.jpg">
                </div>
                <button class="video__button" aria-label="запустить видео">
                    <svg width="219" height="226" viewBox="0 0 219 226" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M13.7616 112.859V225.071L178.936 128.734C183.043 131.55 187.852 132.974 193.33 132.974C200.498 132.974 206.447 130.537 211.249 125.663C216.051 120.717 218.488 114.625 218.488 107.243C218.488 99.7884 216.051 93.6243 211.249 88.8221C206.447 83.9482 200.498 81.5112 193.33 81.5112C187.182 81.5112 181.964 83.269 177.59 86.8285L13.7616 0.832031V103.113L4.90043 82.1563H0.671631L13.7616 112.859ZM13.7616 112.859L22.2458 132.759H25.0411L46.1136 82.1563H42.0998L23.751 126.738L13.7616 103.113V112.859ZM181.442 88.8506L177.59 86.8285C176.813 87.4601 176.064 88.1484 175.34 88.8938C170.538 93.8393 168.172 99.9317 168.172 107.243C168.172 114.697 170.538 120.861 175.34 125.735C176.471 126.866 177.67 127.866 178.936 128.734L182.786 126.489C185.888 128.335 189.389 129.247 193.33 129.247C199.423 129.247 204.44 127.168 208.382 122.939C212.143 118.905 214.142 113.958 214.318 108.098L216.114 107.051L214.309 106.103C214.079 100.302 212.076 95.4499 208.239 91.5457C204.225 87.3169 199.279 85.2383 193.33 85.2383C188.822 85.2383 184.849 86.432 181.442 88.8506ZM214.309 106.103L181.442 88.8506C180.353 89.6236 179.322 90.5216 178.35 91.5457C174.336 95.7029 172.33 100.935 172.33 107.243C172.33 113.478 174.336 118.711 178.35 122.939C179.729 124.367 181.206 125.549 182.786 126.489L214.318 108.098C214.327 107.815 214.331 107.53 214.331 107.243C214.331 106.859 214.324 106.479 214.309 106.103ZM84.7784 132.401C82.1981 132.329 80.1912 132.329 78.8293 132.329H78.1843V82.1563H78.9727C80.1195 82.1563 82.0547 82.1563 84.7066 82.0846C85.2599 82.0697 85.7914 82.0547 86.2996 82.0404C88.2278 81.9862 89.823 81.9413 91.0141 81.9413C111.083 81.8696 119.182 93.5527 119.182 106.526C119.182 114.052 116.674 120.287 111.657 125.161C106.711 130.035 99.6151 132.472 90.4407 132.472H90.4399C89.2214 132.472 87.3581 132.472 84.7784 132.401ZM108.933 91.4741C104.847 87.6036 98.8267 85.6684 90.8708 85.6684C89.3107 85.6684 87.5891 85.729 85.9739 85.7858L85.9735 85.7859H85.9733C84.5462 85.8361 83.2023 85.8834 82.1264 85.8834V128.602C86.2279 128.656 88.8259 128.71 89.9511 128.733C90.3203 128.741 90.531 128.745 90.5841 128.745C98.3967 128.745 104.417 126.667 108.646 122.581C112.875 118.424 115.025 113.048 115.025 106.526C115.025 100.362 113.018 95.3445 108.933 91.4741ZM60.5382 132.329V82.1563H56.5961V132.329H60.5382ZM159.486 132.329V128.602H134.973V108.748H156.619V105.021H134.973V85.8834H158.769V82.1563H131.031V132.329H159.486Z"
                              fill="white"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>


<?php
get_footer();
