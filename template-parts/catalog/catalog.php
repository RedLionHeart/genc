<?php
$chemical_name = 'chemical';
$diluent_type_name = 'diluent_type';
$material_type_name = 'material_type';
$tinting_system_name = 'tinting_system';
$special_materials_name = 'special_materials';
$type_finishing_name = 'type_finishing';
$special_application_methods_name = 'special_application_methods';
$materials_for_inside_name = 'materials_for_inside';
$materials_for_outside_name = 'materials_for_outside';

$special_category = 'special_category';

$chemical = get_taxonomy($chemical_name);
$diluent_type = get_taxonomy($diluent_type_name);
$material_type = get_taxonomy($material_type_name);
$tinting_system = get_taxonomy($tinting_system_name);
$special_materials = get_taxonomy($special_materials_name);
$type_finishing = get_taxonomy($type_finishing_name);
$special_application_methods = get_taxonomy($special_application_methods_name);
$materials_for_inside = get_taxonomy($materials_for_inside_name);
$materials_for_outside = get_taxonomy($materials_for_outside_name);

$terms_chemical = get_terms(array('taxonomy' => $chemical_name, 'hide_empty' => false));
$terms_diluent_type = get_terms(array('taxonomy' => $diluent_type_name, 'hide_empty' => false));
$terms_material_type = get_terms(array('taxonomy' => $material_type_name, 'hide_empty' => false));
$terms_tinting_system = get_terms(array('taxonomy' => $tinting_system_name, 'hide_empty' => false));
$terms_special_materials = get_terms(array('taxonomy' => $special_materials_name, 'hide_empty' => false));
$terms_type_finishing = get_terms(array('taxonomy' => $type_finishing_name, 'hide_empty' => false));
$terms_special_application_methods = get_terms(array('taxonomy' => $special_application_methods_name, 'hide_empty' => false));
$terms_materials_for_inside = get_terms(array('taxonomy' => $materials_for_inside_name, 'hide_empty' => false));
$terms_materials_for_outside = get_terms(array('taxonomy' => $materials_for_outside_name, 'hide_empty' => false));

$terms_special_category = get_terms(array('taxonomy' => $special_category, 'hide_empty' => false));

$checked_chemical = checkGetParametersFilter($chemical_name);
$checked_diluent = checkGetParametersFilter($diluent_type_name);
$checked_material_type = checkGetParametersFilter($material_type_name);
$checked_tinting = checkGetParametersFilter($tinting_system_name);
$checked_special_materials = checkGetParametersFilter($special_materials_name);
$checked_type_finishing = checkGetParametersFilter($type_finishing_name);
$checked_special_application_methods = checkGetParametersFilter($special_application_methods_name);
$checked_materials_for_inside = checkGetParametersFilter($materials_for_inside_name);
$checked_materials_for_outside = checkGetParametersFilter($materials_for_outside_name);
$checked_special_category = checkGetParametersFilter($special_category);
?>
<section class="catalog <?php if (is_page(8)) {
    echo 'catalog-mt';
} ?>">
    <div class="margin">
        <div class="d-flex flex-column">
            <h1 class="h1">Каталог</h1>
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column filters">
                    <h2 class="h2">Фильтр</h2>
                    <form class="accordion filter-form" action="<?= site_url() ?>/wp-admin/admin-ajax.php" method="get">
                        <div class="accordion-item">
                            <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1">
                                <?= $chemical->label; ?>
                            </button>
                            <div id="collapse1" class="accordion-collapse collapse">
                                <div class="d-flex flex-column accordion-body">
                                    <?php foreach ($terms_chemical as $term):
                                        get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $chemical_name, 'current_filter' => $checked_chemical));
                                    endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2">
                                <?= $diluent_type->label; ?>
                            </button>
                            <div id="collapse2" class="accordion-collapse collapse">
                                <div class="d-flex flex-column accordion-body">
                                    <?php foreach ($terms_diluent_type as $term):
                                        get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $diluent_type_name, 'current_filter' => $checked_diluent));
                                    endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3">
                                <?= $material_type->label; ?>
                            </button>
                            <div id="collapse3" class="accordion-collapse collapse">
                                <div class="d-flex flex-column accordion-body">
                                    <?php foreach ($terms_material_type as $term):
                                        get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $material_type_name, 'current_filter' => $checked_material_type));
                                    endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4">
                                <?= $tinting_system->label; ?>
                            </button>
                            <div id="collapse4" class="accordion-collapse collapse">
                                <div class="d-flex flex-column accordion-body">
                                    <?php foreach ($terms_tinting_system as $term):
                                        get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $tinting_system_name, 'current_filter' => $checked_tinting));
                                    endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5">
                                <?= $special_materials->label; ?>
                            </button>
                            <div id="collapse5" class="accordion-collapse collapse">
                                <div class="d-flex flex-column accordion-body">
                                    <?php foreach ($terms_special_materials as $term):
                                        get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $special_materials_name, 'current_filter' => $checked_special_materials));
                                    endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse6">
                                <?= $type_finishing->label; ?>
                            </button>
                            <div id="collapse6" class="accordion-collapse collapse">
                                <div class="d-flex flex-column accordion-body">
                                    <?php foreach ($terms_type_finishing as $term):
                                        get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $type_finishing_name, 'current_filter' => $checked_type_finishing));
                                    endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse7">
                                <?= $special_application_methods->label; ?>
                            </button>
                            <div id="collapse7" class="accordion-collapse collapse">
                                <div class="d-flex flex-column accordion-body">
                                    <?php foreach ($terms_special_application_methods as $term):
                                        get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $special_application_methods_name, 'current_filter' => $checked_special_application_methods));
                                    endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse8">
                                Область применения
                            </button>
                            <div id="collapse8" class="accordion-collapse collapse">
                                <div class="d-flex flex-column accordion-body">
                                    <h4 class="h4"><?= $materials_for_inside->label; ?></h4>
                                    <?php foreach ($terms_materials_for_inside as $term):
                                        get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $materials_for_inside_name, 'current_filter' => $checked_materials_for_inside));
                                    endforeach; ?>
                                    <h4 class="h4"><?= $materials_for_outside->label; ?></h4>
                                    <?php foreach ($terms_materials_for_outside as $term):
                                        get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $materials_for_outside_name, 'current_filter' => $checked_materials_for_outside));
                                    endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="separate-input">
                            <?php foreach ($terms_special_category as $term):
                                get_template_part('template-parts/catalog/filter', 'label', array('term' => $term, 'name' => $special_category, 'current_filter' => $checked_special_category));
                            endforeach; ?>
                        </div>
                        <button class="button-discard w-100 h5 reset-filter">Сбросить фильтр</button>
                        <input type="hidden" name="action" value="filter_catalog">
                    </form>
                </div>
                <div class="container-search-card">
                    <?php get_search_form(); ?>
                    <div class="card-container">
                        <div class="d-flex flex-wrap justify-content-between container-card">
                            <?php
                            global $query_string;
                            parse_str($query_string, $my_query_array);
                            $paged = (isset($my_query_array['paged']) && !empty($my_query_array['paged'])) ? $my_query_array['paged'] : 1;

                            if (is_mobile()) {
                                $posts_per_page_catalog = 3;
                            } else {
                                if (is_page(8)) {
                                    $posts_per_page_catalog = 6;
                                } else {
                                    $posts_per_page_catalog = 12;
                                }
                            }

                            $args = array(
                                'orderby' => 'date',
                                'posts_per_page' => $posts_per_page_catalog,
                                'order' => 'ASC',
                                'post_type' => 'paint',
                                'paged' => $paged,
                            );

                            if ($checked_chemical || $checked_diluent || $checked_material_type || $checked_tinting ||
                                $checked_special_materials || $checked_type_finishing || $checked_special_application_methods || $checked_special_category ||
                                $checked_materials_for_inside || $checked_materials_for_outside) {
                                $args['tax_query'] = array(
                                    'relation' => 'OR',
                                    array(
                                        'taxonomy' => 'chemical',
                                        'field' => 'name',
                                        'terms' => $checked_chemical,
                                    ),
                                    array(
                                        'taxonomy' => 'diluent_type',
                                        'field' => 'name',
                                        'terms' => $checked_diluent,
                                    ),
                                    array(
                                        'taxonomy' => 'material_type',
                                        'field' => 'name',
                                        'terms' => $checked_material_type,
                                    ),
                                    array(
                                        'taxonomy' => 'tinting_system',
                                        'field' => 'name',
                                        'terms' => $checked_tinting,
                                    ),
                                    array(
                                        'taxonomy' => 'special_materials',
                                        'field' => 'name',
                                        'terms' => $checked_special_materials,
                                    ),
                                    array(
                                        'taxonomy' => 'type_finishing',
                                        'field' => 'name',
                                        'terms' => $checked_type_finishing,
                                    ),
                                    array(
                                        'taxonomy' => 'special_application_methods',
                                        'field' => 'name',
                                        'terms' => $checked_special_application_methods,
                                    ),
                                    array(
                                        'taxonomy' => $materials_for_inside_name,
                                        'field' => 'name',
                                        'terms' => $checked_materials_for_inside,
                                    ),
                                    array(
                                        'taxonomy' => $materials_for_outside_name,
                                        'field' => 'name',
                                        'terms' => $checked_materials_for_outside,
                                    ),
                                    array(
                                        'taxonomy' => 'special_category',
                                        'field' => 'name',
                                        'terms' => $checked_special_category,
                                    ),
                                );
                            }

                            $products = new WP_Query($args);
                            if ($products->have_posts()) {

                                while ($products->have_posts()) {

                                    $products->the_post();

                                    get_template_part('template-parts/catalog/item', '');
                                }
                            }
                            wp_reset_postdata(); ?>
                        </div>
                        <?php
                        if ($products->max_num_pages > 1) :
                            $big = 999999999; // уникальное число
                            $fallback_base = str_replace($big, '%#%', get_pagenum_link($big, false));

                            // Set the base.
                            $base = isset($base) ? trailingslashit($base) . '%_%' : $fallback_base;

                            echo '<nav class="navigation pagination" role="navigation">
                            <div class="d-flex align-items-center nav-links">';

                            echo paginate_links(array(
                                'base' => $base,
                                'format' => '?paged=%#%',
                                'current' => max(1, $paged),
                                'total' => $products->max_num_pages,
                                'next_text' => '<img src="' . get_template_directory_uri() . '/assets/img/arrow_pagination_next.svg">',
                                'prev_text' => '<img src="' . get_template_directory_uri() . '/assets/img/arrow_pagination_prev.svg">',
                            ));
                            echo '</div> </nav>';
                        endif;
                        ?>
                    </div>
                    <?php $popular_paints = get_posts(array(
                        "post_type" => "paint",
                        'numberposts' => 10,
                        'order' => 'DESC',
                        'orderby' => 'meta_value_num',
                        'meta_query' => array(
                            array(
                                'key' => 'views',
                                "type" => "DECIMAL(16,4)",
                            )
                        )
                    )); ?>
                    <div class="popular-product">
                        <h2 class="h2">Популярные продукты</h2>
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <?php foreach ($popular_paints as $post):
                                    setup_postdata($post); ?>
                                    <div class="swiper-slide">
                                        <a href="<?php the_permalink(); ?>" class="box-card">
                                            <div class="img-card">
                                                <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', true)[0]; ?>">
                                            </div>
                                            <div class="txt-card">
                                                <h3 class="h3"><?= get_field('artikul'); ?></h3>
                                                <h4 class="h4"><?php the_title(); ?></h4>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach;
                                wp_reset_postdata(); ?>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>