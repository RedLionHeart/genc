<?php
/*
Template Name: Страница техническая поддержка2
*/

get_header(); ?>
<section class="back-top">
    <div class="video-back back-about">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/tinting_back.jpg">
        <!--        <div class="back-gradient"></div>-->
    </div>
</section>
<section class="support tinting-content">
    <div class="margin">
        <div class="d-flex justify-content-between link-support">
            <a href="<?php echo get_option('home'); ?>/service/"><h1 class="h1">Система колеровки</h1></a>
            <a href="<?php echo get_option('home'); ?>/tinting-system/" class="h1"><h2 class="h1">Техническая поддержка</h2></a>
        </div>
        <div class="d-flex">
            <div class="col-lg-6">
                <h4 class="h4">Система колеровки позволяет получить эмаль требуемой химической природы и уровня блеска в любом из цветов по каталогам RAL,
                    NCS и др.
                </h4>
                <h4 class="h4">Genc использует автоматическую колеровочную систему, включающую следующие компоненты:
                </h4>
                <ul class="gloss-level">
                    <li class="h4">Конвертеры (базы)</li>
                    <li class="h4">Пигментные пасты</li>
                    <li class="h4">Формулы цветов</li>
                    <li class="h4">Программное обеспечение</li>
                    <li class="h4">Инструмент для измерения цвета</li>
                    <li class="h4">Колеровочное оборудование:
                        <br>- дозирующая машина
                        <br>- шейкер </li>
                </ul>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/tinting_banner.jpg">
                </div>
                <h2 class="h2 mb-40">Конвертеры</h2>
                <h4 class="h4">Конвертеры – базовые ЛКМ, в которые вводятся пигменты
                    для получения заданного цвета по каталогам цвета или по образцу
                    заказчика. Химическая природа и уровень блеска заколерованной эмали
                    определяется характеристиками используемого конвертера. Поэтому в
                    ассортименте GENC есть конвертеры разной химической природы –
                    полиуретановые и нитроцеллюлозные, с разными степенями блеска.
                    <br>Конвертеры бывают белыми, полупрозрачными или прозрачными.
                </h4>
                <div class="convector">
                    <h3 class="h3 mb-20">Белые конвертеры</h3>
                    <h4 class="h4">Белые конвертеры целесообразно использовать для
                        приготовления эмалей пастельных цветов (поскольку конвертер
                        уже содержит белый пигмент, составляющий основу пастельного цвета).
                        Пигментная паста в белый конвертер вводится в количестве не более 5%.
                    </h4>
                </div>
                <div class="convector">
                    <h3 class="h3 mb-20">Прозрачные конвертеры</h3>
                    <h4 class="h4">Прозрачные конвертеры применяются для приготовления
                        эмалей насыщенных цветов. При этом количество вводимого в базу
                        пигмента фиксировано (например 20 или 25%).</h4>
                </div>
                <div class="convector">
                    <h3 class="h3 mb-20">Полупрозрачные конвертеры</h3>
                    <h4 class="h4">Полупрозрачные конвертеры получают смешиванием белого и
                        прозрачного конвертеров. В некоторых случаях использование
                        полупрозрачного конвертера позволяет сократить стоимость
                        заколерованного материала на 20-50%.</h4>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/tinting_banner.jpg">
                </div>
            </div>
        </div>
        <div class="collapse-content-tinting">
            <div class="box-converter">
                <h3 class="h3">Ниже приведен перечень конвертеров GENC</h3>
                <div class="table-converter">
                    <div class="d-flex table-header">
                        <div class="col-3 h4">Код</div>
                        <div class="col-3 h4">Тип конвертера</div>
                        <div class="col-3">
                            <h4 class="h4">Пропорции рабочей смеси</h4>
                            <h6 class="h6">(основа : отвердитель : разбавитель)</h6>
                        </div>
                        <div class="col-3 h4">Кол-во пасты</div>
                    </div>
                    <div class="table-content">
                    <h3 class="h3 table-heading">Высокоглянцевые полиуретановые</h3>
                    <div class="d-flex mb-30">
                        <div class="col-3 h5">СР535.00.1000</div>
                        <div class="col-3 h5">белый</div>
                        <div class="col-3 h5">100 : 100 : 20-30</div>
                        <div class="col-3 h5">max 5%</div>
                    </div>
                    <div class="d-flex mb-30">
                        <div class="col-3 h5">СР535.00.0000</div>
                        <div class="col-3 h5">прозрачный</div>
                        <div class="col-3 h5">100 : 100 : 30-40</div>
                        <div class="col-3 h5">30%</div>
                    </div>
                    <div class="d-flex mb-30">
                        <div class="col-3 h5">СР585.00.1000</div>
                        <div class="col-3 h5">белый</div>
                        <div class="col-3 h5">100 : 50 : 20-30</div>
                        <div class="col-3 h5">max 5%</div>
                    </div>
                    <div class="d-flex mb-30">
                        <div class="col-3 h5">СР585.00.0000</div>
                        <div class="col-3 h5">прозрачный</div>
                        <div class="col-3 h5">100 : 50 : 30-40</div>
                        <div class="col-3 h5">20%</div>
                    </div>
                    <div class="d-flex mb-30">
                        <div class="col-3 h5">СР585.00.1001</div>
                        <div class="col-3 h5">полупрозрачный</div>
                        <div class="col-3 h5">100 : 50 : 20-30</div>
                        <div class="col-3 h5">max 10%</div>
                    </div>
                    </div>
                    <div class="table-content">
                        <h3 class="h3 table-heading">Матовые полиуретановые</h3>
                        <div class="d-flex mb-30">
                            <div class="col-3 h5">СР558.XX.1000</div>
                            <div class="col-3 h5">белый</div>
                            <div class="col-3 h5">100 : 50 : 20-30</div>
                            <div class="col-3 h5">max 5%</div>
                        </div>
                        <div class="d-flex mb-30">
                            <div class="col-3 h5">СР558.XX.0000</div>
                            <div class="col-3 h5">прозрачный</div>
                            <div class="col-3 h5">100 : 50 : 30-40</div>
                            <div class="col-3 h5">25%</div>
                        </div>
                        <div class="d-flex mb-30">
                            <div class="col-3 h5">СР585.XX.1000</div>
                            <div class="col-3 h5">белый</div>
                            <div class="col-3 h5">100 : 50 : 20-30</div>
                            <div class="col-3 h5">max 5%</div>
                        </div>
                        <div class="d-flex mb-30">
                            <div class="col-3 h5">СР585.XX.0000</div>
                            <div class="col-3 h5">прозрачный</div>
                            <div class="col-3 h5">100 : 50 : 30-40</div>
                            <div class="col-3 h5">15%</div>
                        </div>
                        <div class="d-flex mb-30">
                            <div class="col-3 h5">СР585.XX.1001</div>
                            <div class="col-3 h5">полупрозрачный</div>
                            <div class="col-3 h5">100 : 50 : 20-30</div>
                            <div class="col-3 h5">max 10%</div>
                        </div>
                    </div>
                    <div class="table-content">
                        <h3 class="h3 table-heading">Высокоглянцевые нитроцеллюлозные</h3>
                        <div class="d-flex mb-30">
                            <div class="col-3 h5">CN500.15.0000</div>
                            <div class="col-3 h5">прозрачный</div>
                            <div class="col-3 h5">100 : нет : 100-150</div>
                            <div class="col-3 h5">20%</div>
                        </div>
                    </div>
                    <div class="table-content">
                        <h3 class="h3 table-heading">Матовые нитроцеллюлозные</h3>
                        <div class="d-flex mb-30">
                            <div class="col-3 h5">CN500.00.0000</div>
                            <div class="col-3 h5">прозрачный</div>
                            <div class="col-3 h5">100 : нет : 100-150</div>
                            <div class="col-3 h5">20%</div>
                        </div>
                    </div>
                    <div class="table-content">
                        <h3 class="h3 table-heading">Матовые водоразбавляемые </h3>
                        <div class="d-flex mb-30">
                            <div class="col-3 h5">CW760.30.0000</div>
                            <div class="col-3 h5">прозрачный</div>
                            <div class="col-3 h5">однокомпонентный</div>
                            <div class="col-3 h5">20%</div>
                        </div>
                        <div class="d-flex mb-30">
                            <div class="col-3 h5">CW760.30.1000</div>
                            <div class="col-3 h5">белый</div>
                            <div class="col-3 h5">однокомпонентный</div>
                            <div class="col-3 h5">max 3%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gradient-button-collapse">
                <div class="position-relative w-100 h-100">
                    <p class="button-collapsed h4">смотреть еще</p>
                    <p class="button-collapsed-close h4">закрыть подробности</p>
                </div>
            </div>
        </div>
        <div class="width-min-content">
            <div class="pigment-pastes">
                <h2 class="h2">Пигментные пасты</h2>
                <h4 class="h4">Пигментные пасты вводятся в конвертер дозирующей машиной Corob в соответствии с формулой цвета.
                    В ассортименте GENC имеются пигментные пасты двух типов: на сольвентной основе (для колеровки сольвентных конвертеров) и водоразбавимые (для водоразбавимых конвертеров).
                    Пасты отличаются высокой интенсивностью цвета, что позволяет минимизировать стоимость колерованных продуктов.
                </h4>
                <h3 class="h3">PP600.00.ХХХХ – серия паст на сольвентной основе, включающая 16 основных цветов:
                </h3>
                <div class="d-flex justify-content-between w-100 tinting-color">
                    <p class="h4">
                        0001 – белый
                        <br>0002 – лимонно-желтый
                        <br>0003 – красный
                        <br>0004 – бордовый
                        <br>0005 – голубой
                        <br>0006 – зеленый
                        <br>0007 – оксидно-красный
                        <br>0008 – оксидно-желтый
                    </p>
                    <p class="h4">
                        0009 – черный
                        <br>0010 – светло-красный
                        <br>0011 – оранжевый
                        <br>0012 – темно-желтый
                        <br>0013 – фиолетовый
                        <br>0014 – розовый
                        <br>0015 – желтый
                        <br>0016 – синий
                    </p>
                </div>
            </div>
            <div class="collapse-content-tinting2">
                <div class="box-converter2">
                    <h3 class="h3">Конвертеры, с которыми используются пасты серии PP600.00.XXXX:</h3>
                    <div class="table-converter">
                        <div class="d-flex table-header">
                            <div class="col-4 h4">Код конвертер</div>
                            <div class="col-4 h4">Тип конвертера</div>
                            <div class="col-4 h4">Максимальное количество пасты в конвертере                            </div>
                        </div>
                        <div class="table-content">
                            <div class="d-flex mb-30">
                                <div class="col-4 h5">СР535.00.1000</div>
                                <div class="col-4 h5">ПУ высокоглянцевый белый</div>
                                <div class="col-4 h5">5%</div>
                            </div>
                            <div class="d-flex mb-30">
                                <div class="col-4 h5">CP535.00.0000</div>
                                <div class="col-4 h5">ПУ высокоглянцевый прозрачный</div>
                                <div class="col-4 h5">30%</div>
                            </div>
                            <div class="d-flex mb-30">
                                <div class="col-4 h5">СР558.XX.1000</div>
                                <div class="col-4 h5">ПУ матовый белый</div>
                                <div class="col-4 h5">5%</div>
                            </div>
                            <div class="d-flex mb-30">
                                <div class="col-4 h5">СР558.XX.0000</div>
                                <div class="col-4 h5">ПУ матовый прозрачный</div>
                                <div class="col-4 h5">25%</div>
                            </div>
                            <div class="d-flex mb-30">
                                <div class="col-4 h5">СР585.00.1000</div>
                                <div class="col-4 h5">ПУ высокоглянцевый белый</div>
                                <div class="col-4 h5">5%</div>
                            </div>
                            <div class="d-flex mb-30">
                                <div class="col-4 h5">СР585.00.0000</div>
                                <div class="col-4 h5">ПУ высокоглянцевый прозрачный</div>
                                <div class="col-4 h5">20%</div>
                            </div>
                            <div class="d-flex mb-30">
                                <div class="col-4 h5">СР585.XX.1000</div>
                                <div class="col-4 h5">ПУ матовый белый</div>
                                <div class="col-4 h5">5%</div>
                            </div>
                            <div class="d-flex mb-30">
                                <div class="col-4 h5">СР585.XX.0000</div>
                                <div class="col-4 h5">ПУ матовый прозрачный</div>
                                <div class="col-4 h5">15%</div>
                            </div>
                            <div class="d-flex mb-30">
                                <div class="col-4 h5">CN500.00.0000</div>
                                <div class="col-4 h5">НЦ высокоглянцевый прозрачный</div>
                                <div class="col-4 h5">20%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gradient-button-collapse">
                    <div class="position-relative w-100 h-100">
                        <p class="button-collapsed h4">смотреть еще</p>
                        <p class="button-collapsed-close h4">закрыть подробности</p>
                    </div>
                </div>
            </div>
            <div class="water-borne-pastes">
                <h3 class="h3">PW460.00.ХХХХ – серия водоразбавимых паст</h3>
                <h4 class="h4">Включает 16 цветов. Пасты могут применяться в эмалях для внутренних (CW760.XX) и наружных (CW360.XX) работ.</h4>
            </div>
            <div class="collapse-content-tinting3">
                <div class="box-converter3">
                    <h3 class="h3">Конвертеры, с которыми используются пасты серии PW460.00.XXXX:</h3>
                    <div class="table-converter">
                        <div class="d-flex table-header">
                            <div class="col-4 h4">Код конвертер</div>
                            <div class="col-4 h4">Тип конвертера</div>
                            <div class="col-4 h4">Максимальное количество пасты в конвертере                            </div>
                        </div>
                        <div class="table-content">
                            <div class="d-flex mb-30">
                                <div class="col-4 h5">СР535.00.1000</div>
                                <div class="col-4 h5">ПУ высокоглянцевый белый</div>
                                <div class="col-4 h5">5%</div>
                            </div>
                            <div class="d-flex mb-30">
                                <div class="col-4 h5">CP535.00.0000</div>
                                <div class="col-4 h5">ПУ высокоглянцевый прозрачный</div>
                                <div class="col-4 h5">30%</div>
                            </div>
                            <div class="d-flex mb-30">
                                <div class="col-4 h5">СР558.XX.1000</div>
                                <div class="col-4 h5">ПУ матовый белый</div>
                                <div class="col-4 h5">5%</div>
                            </div>
                            <div class="d-flex mb-30">
                                <div class="col-4 h5">СР558.XX.0000</div>
                                <div class="col-4 h5">ПУ матовый прозрачный</div>
                                <div class="col-4 h5">25%</div>
                            </div>
                            <div class="d-flex mb-30">
                                <div class="col-4 h5">СР585.00.1000</div>
                                <div class="col-4 h5">ПУ высокоглянцевый белый</div>
                                <div class="col-4 h5">5%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>

<?php
get_footer();
?>
