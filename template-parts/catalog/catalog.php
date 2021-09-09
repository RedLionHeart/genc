<?php
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
<section class="catalog <?php if(is_page(8)){echo 'catalog-mt';}?>">
    <div class="margin">
        <div class="d-flex flex-column">
            <h1 class="h1">Каталог</h1>
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column filters">
                    <h2 class="h2">Фильтр</h2>
                    <form class="accordion filter-form" action="<?= site_url() ?>/wp-admin/admin-ajax.php" method="post">
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
                                        get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $diluent_type_name));
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
                                        get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $material_type_name));
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
                                        get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $tinting_system_name));
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
                                        get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $special_materials_name));
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
                                        get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $type_finishing_name));
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
                                        get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $special_application_methods_name));
                                    endforeach;?>
                                </div>
                            </div>
                        </div>

                        <div class="separate-input">
                            <?php foreach ($terms_special_category as $term):
                                get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $special_category));
                            endforeach;?>
                        </div>
<!--                        <button class="button-blue w-100 h5 filter-entry">Применить</button>-->
                        <button class="button-discard w-100 h5 reset-filter">Сбросить фильтр</button>
                        <input type="hidden" name="action" value="filter_catalog">
                    </form>
                </div>
                <div class="container-search-card">
                    <?php get_search_form(); ?>

                    <div class="d-flex flex-wrap justify-content-between container-card">
                        <?php
                        global $query_string;
                        parse_str( $query_string, $my_query_array );
                        $paged = ( isset( $my_query_array['paged'] ) && !empty( $my_query_array['paged'] ) ) ? $my_query_array['paged'] : 1;
                        //var_dump($paged);
                        //$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
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
                            'current' => max( 1, $paged ),
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