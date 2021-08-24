<?php
/*
Template Name: Каталог
*/

get_header();

$chemical_name = 'chemical';
$diluent_type_name = 'diluent_type';
$material_type_name = 'material_type';
$tinting_system_name = 'tinting_system';
$special_materials_name = 'special_materials';
$type_finishing_name = 'type_finishing';
$special_application_methods_name = 'special_application_methods';

$special_category = 'special_category';

$chemical = get_taxonomy( $chemical_name );
$diluent_type = get_taxonomy($diluent_type_name);
$material_type = get_taxonomy($material_type_name);
$tinting_system = get_taxonomy($tinting_system_name);
$special_materials = get_taxonomy($special_materials_name);
$type_finishing = get_taxonomy($type_finishing_name);
$special_application_methods = get_taxonomy($special_application_methods_name);

$terms_chemical = get_terms(array('taxonomy' => $chemical_name, 'hide_empty' => false));
$terms_diluent_type = get_terms(array('taxonomy' => $diluent_type_name, 'hide_empty' => false));
$terms_material_type = get_terms(array('taxonomy' => $material_type_name, 'hide_empty' => false));
$terms_tinting_system = get_terms(array('taxonomy' => $tinting_system_name, 'hide_empty' => false));
$terms_special_materials= get_terms(array('taxonomy' => $special_materials_name, 'hide_empty' => false));
$terms_type_finishing= get_terms(array('taxonomy' => $type_finishing_name, 'hide_empty' => false));
$terms_special_application_methods = get_terms(array('taxonomy' => $special_application_methods_name, 'hide_empty' => false));

$terms_special_category = get_terms(array('taxonomy' => $special_category, 'hide_empty' => false));
?>

    <section class="back-top">
        <div class="video-back back-catalog">
            <img src="<?= get_template_directory_uri() ?>/assets/img/back_catalog.jpg">
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
                                    <?=$chemical->label;?>
                                </button>
                                <div id="collapse1" class="accordion-collapse collapse">
                                    <div class="d-flex flex-column accordion-body">
                                        <?php foreach ($terms_chemical as $term):
                                        get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $chemical_name));
                                        endforeach;?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2">
                                    <?=$diluent_type->label;?>
                                </button>
                                <div id="collapse2" class="accordion-collapse collapse">
                                    <div class="d-flex flex-column accordion-body">
                                        <?php foreach ($terms_diluent_type as $term):
                                            get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $chemical_name));
                                        endforeach;?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3">
                                    <?=$material_type->label;?>
                                </button>
                                <div id="collapse3" class="accordion-collapse collapse">
                                    <div class="d-flex flex-column accordion-body">
                                        <?php foreach ($terms_material_type as $term):
                                            get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $chemical_name));
                                        endforeach;?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4">
                                    <?=$tinting_system->label;?>
                                </button>
                                <div id="collapse4" class="accordion-collapse collapse">
                                    <div class="d-flex flex-column accordion-body">
                                        <?php foreach ($terms_tinting_system as $term):
                                            get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $chemical_name));
                                        endforeach;?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5">
                                    <?=$special_materials->label;?>
                                </button>
                                <div id="collapse5" class="accordion-collapse collapse">
                                    <div class="d-flex flex-column accordion-body">
                                        <?php foreach ($terms_special_materials as $term):
                                            get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $chemical_name));
                                        endforeach;?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse6">
                                    <?=$type_finishing->label;?>
                                </button>
                                <div id="collapse6" class="accordion-collapse collapse">
                                    <div class="d-flex flex-column accordion-body">
                                        <?php foreach ($terms_type_finishing as $term):
                                            get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $chemical_name));
                                        endforeach;?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse7">
                                    <?=$special_application_methods->label;?>
                                </button>
                                <div id="collapse7" class="accordion-collapse collapse">
                                    <div class="d-flex flex-column accordion-body">
                                        <?php foreach ($terms_special_application_methods as $term):
                                            get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $chemical_name));
                                        endforeach;?>
                                    </div>
                                </div>
                            </div>

                            <div class="separate-input">
                                <?php foreach ($terms_special_category as $term):
                                    get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $special_category));
                                endforeach;?>
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
                            <?php
                            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

                            $args = array(
                                'posts_per_page' => 13,
                                'order'=> 'ASC',
                                'post_type' => 'paint',
                                'paged' => $paged,
                            );

                            $products = new WP_Query($args);
                            if ( $products->have_posts() ) {

                                while ( $products->have_posts() ) {

                                    $products->the_post();

                                    get_template_part('template-parts/catalog/item', '');
                                }
                            }
                            wp_reset_postdata(); ?>
                        </div>
                        <?php
                        if (  $products->max_num_pages > 1 ) :
                            $big = 999999999; // уникальное число

                            echo '<nav class="navigation pagination" role="navigation">
                            <div class="d-flex align-items-center nav-links">';

                            echo paginate_links( array(
                                'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total'   => $products->max_num_pages,
                                'next_text' => '<img src="' . get_template_directory_uri() . '/assets/img/arrow_pagination_next.svg">',
                                'prev_text' => '<img src="' . get_template_directory_uri() . '/assets/img/arrow_pagination_prev.svg">',
                            ) );
                            echo '</div> </nav>';
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
