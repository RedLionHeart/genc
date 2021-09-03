<?php
/**
 * genc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package genc
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('genc_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function genc_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on genc, use a find and replace
         * to change 'genc' to the name of your theme in all the template files.
         */
        load_theme_textdomain('genc', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'genc'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'genc_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'genc_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function genc_content_width()
{
    $GLOBALS['content_width'] = apply_filters('genc_content_width', 640);
}

add_action('after_setup_theme', 'genc_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function genc_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'genc'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'genc'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'genc_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function genc_scripts()
{
    wp_enqueue_style('genc-style', get_stylesheet_uri());
    wp_enqueue_style('genc-swiper', 'https://unpkg.com/swiper/swiper-bundle.css');

    wp_enqueue_script('genc-jquery', 'https://code.jquery.com/jquery-3.6.0.js', false, false, true);
    wp_enqueue_script('genc-swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', false, false, true);
    wp_enqueue_script('genc-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js', false, false, true);
    wp_enqueue_script('genc-inputmask', get_template_directory_uri() . '/assets/js/jquery.inputmask.js', false, false, true);
    wp_enqueue_script('genc-script', get_template_directory_uri() . '/assets/js/gnec.js', false, false, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'genc_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

function add_menu_link_class($atts, $item, $args)
{
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);


add_action('init', 'create_media_taxonomies');
function create_media_taxonomies()
{
    register_taxonomy('category', array('media'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Плейлисты', 'taxonomy general name'),
            'singular_name' => _x('Плейлист', 'taxonomy singular name'),
            'search_items' => __('Поиск плейлистов'),
            'all_items' => __('Все плейлисты'),
            'edit_item' => __('Изменить плейлист'),
            'update_item' => __('Обновить плейлист'),
            'add_new_item' => __('Добавить новый плейлист'),
            'new_item_name' => __('Новый плейлист'),
            'menu_name' => __('Плейлисты'),
        ),
        'show_ui' => true,
        'query_var' => true,
        'publicly_queryable' => false,
    ));
}

add_action('init', 'register_media');
function register_media()
{
    $args = [
        'labels' => [
            'name' => 'Медиа',
            'singular_name' => 'Медиа',
            'add_new' => 'Добавить новое медиа',
            'search_items' => 'Поиск медиа',
            'not_found' => 'Медиа не было найдено',
        ],
        'description' => 'Медиа',
        'menu_icon' => 'dashicons-video-alt3',
        'public' => true,
        'publicly_queryable' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => false,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title'),
    ];
    register_post_type('media', $args);
}

add_action('init', 'create_paint_taxonomies');
function create_paint_taxonomies()
{
    register_taxonomy('chemical', array('paint'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Химическая основа', 'taxonomy general name'),
            'singular_name' => _x('Химическая основа', 'taxonomy singular name'),
        ),
        'show_ui' => true,
        'query_var' => true,
        'publicly_queryable' => false,
    ));

    register_taxonomy('diluent_type', array('paint'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Тип разбавителя', 'taxonomy general name'),
            'singular_name' => _x('Тип разбавителя', 'taxonomy singular name'),
        ),
        'show_ui' => true,
        'query_var' => true,
        'publicly_queryable' => false,
    ));

    register_taxonomy('material_type', array('paint'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Тип материала', 'taxonomy general name'),
            'singular_name' => _x('Тип материала', 'taxonomy singular name'),
        ),
        'show_ui' => true,
        'query_var' => true,
        'publicly_queryable' => false,
    ));

    register_taxonomy('tinting_system', array('paint'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Колеровочная система', 'taxonomy general name'),
            'singular_name' => _x('Колеровочная система', 'taxonomy singular name'),
        ),
        'show_ui' => true,
        'query_var' => true,
        'publicly_queryable' => false,
    ));

    register_taxonomy('special_materials', array('paint'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Специальные материалы', 'taxonomy general name'),
            'singular_name' => _x('Специальные материалы', 'taxonomy singular name'),
        ),
        'show_ui' => true,
        'query_var' => true,
        'publicly_queryable' => false,
    ));

    register_taxonomy('type_finishing', array('paint'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Вид отделки', 'taxonomy general name'),
            'singular_name' => _x('Вид отделки', 'taxonomy singular name'),
        ),
        'show_ui' => true,
        'query_var' => true,
        'publicly_queryable' => false,
    ));

    register_taxonomy('special_application_methods', array('paint'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Особые методы нанесения', 'taxonomy general name'),
            'singular_name' => _x('Особые методы нанесения', 'taxonomy singular name'),
        ),
        'show_ui' => true,
        'query_var' => true,
        'publicly_queryable' => false,
    ));

    register_taxonomy('special_category', array('paint'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Особые категории продукта', 'taxonomy general name'),
            'singular_name' => _x('Особые категории продукта', 'taxonomy singular name'),
        ),
        'show_ui' => true,
        'query_var' => true,
        'publicly_queryable' => false,
    ));


}

add_action('init', 'register_paint');
function register_paint()
{
    $args = [
        'labels' => [
            'name' => 'Продукция',
            'singular_name' => 'Продукция',
            'add_new' => 'Добавить новую продукцию',
            'search_items' => 'Поиск продукции',
            'not_found' => 'Продукции не было найдено',
        ],
        'description' => 'Продукция',
        'menu_icon' => 'dashicons-admin-customizer',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'thumbnail'),
    ];
    register_post_type('paint', $args);
}

function parse_video_youtube($iframe)
{
    preg_match('/src="(.+?)"/', $iframe, $matches);
    $src = $matches[1];

    $id = preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/\s]{11})%i', $src, $match) ? $match[1] : '';

    return $id;
}

add_action('admin_footer', function () {
    ?>
    <script type="text/javascript">
        function youtube_parser(url) {
            var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/;
            var match = url.match(regExp);
            return (match && match[7].length == 11) ? match[7] : false;
        }

        function covtime(youtube_time) {
            array = youtube_time.match(/(\d+)(?=[MHS])/ig) || [];
            var formatted = array.map(function (item) {
                if (item.length < 2) return '0' + item;
                return item;
            }).join(':');
            return formatted;
        }

        jQuery(function ($) {
            $(document).ready(function () {
                $('#link_media .input-search').on('input', e => {
                    var currentValueOfInput = e.target.value;
                    let parsedLink = youtube_parser(currentValueOfInput);

                    if (parsedLink) {
                        let urlForResponse = "https://www.googleapis.com/youtube/v3/videos?id=" + parsedLink + "&key=AIzaSyDQzTvyA6rUKaDor8DX7Y1cWYO0h1-bNzs&part=snippet,contentDetails";
                        $.ajax({
                            'async': false,
                            'global': false,
                            'url': urlForResponse,
                            'dataType': "jsonp",
                            crossDomain: true,
                            'success': function (data) {
                                let youtube_time = data.items[0].contentDetails.duration;
                                let duration = covtime(youtube_time);

                                $('#acf-field_6124a334ca01f').val(duration);
                            }
                        });
                    }
                })
            });
        });
    </script>
    <?php
});

function kriesi_pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2) + 1;

    global $paged;
    if (empty($paged)) $paged = 1;

    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        echo "<div class='pagination'>";
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) echo "<a href='" . get_pagenum_link(1) . "'>&laquo;</a>";
        if ($paged > 1 && $showitems < $pages) echo "<a href='" . get_pagenum_link($paged - 1) . "'>&lsaquo;</a>";

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<span class='current'>" . $i . "</span>" : "<a href='" . get_pagenum_link($i) . "' class='inactive' >" . $i . "</a>";
            }
        }

        if ($paged < $pages && $showitems < $pages) echo "<a href='" . get_pagenum_link($paged + 1) . "'>&rsaquo;</a>";
        if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages) echo "<a href='" . get_pagenum_link($pages) . "'>&raquo;</a>";
        echo "</div>\n";
    }
}

add_action('wp_ajax_filter_catalog', 'filter_function');
add_action('wp_ajax_nopriv_filter_catalog', 'filter_function');

function filter_function()
{
    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
    $args = array(
        'orderby' => 'date', // we will sort posts by date
        'order' => 'ASC',
        'paged' => $paged,
        'post_type' => 'paint',
        'posts_per_page' => 13,
    );

    // for taxonomies / categories
    if (isset($_POST['chemical']) || isset($_POST['diluent_type']) || isset($_POST['material_type'])
        || isset($_POST['tinting_system']) || isset($_POST['special_materials']) || isset($_POST['type_finishing'])
        || isset($_POST['special_application_methods']) || isset($_POST['special_category'])) {
        $args['tax_query'] = array(
            'relation' => 'OR',
            array(
                'taxonomy' => 'chemical',
                'field' => 'name',
                'terms' => $_POST['chemical'],
            ),
            array(
                'taxonomy' => 'diluent_type',
                'field' => 'name',
                'terms' => $_POST['diluent_type'],
            ),
            array(
                'taxonomy' => 'material_type',
                'field' => 'name',
                'terms' => $_POST['material_type'],
            ),
            array(
                'taxonomy' => 'tinting_system',
                'field' => 'name',
                'terms' => $_POST['tinting_system'],
            ),
            array(
                'taxonomy' => 'special_materials',
                'field' => 'name',
                'terms' => $_POST['special_materials'],
            ),
            array(
                'taxonomy' => 'type_finishing',
                'field' => 'name',
                'terms' => $_POST['type_finishing'],
            ),
            array(
                'taxonomy' => 'special_application_methods',
                'field' => 'name',
                'terms' => $_POST['special_application_methods'],
            ),
            array(
                'taxonomy' => 'special_category',
                'field' => 'name',
                'terms' => $_POST['special_category'],
            ),
        );
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()): $query->the_post();
            get_template_part('template-parts/catalog/item', '');
        endwhile;
        wp_reset_postdata();
    else :
        echo '<h2>Продукции не найдено</h2>';
    endif;

    die();
}


//add this within functions.php
function ajax_login_init()
{

    wp_register_script('ajax-login-script', get_template_directory_uri() . '/assets/js/ajax-login-script.js', array('jquery'));
    wp_enqueue_script('ajax-login-script');

    wp_localize_script('ajax-login-script', 'ajax_login_object', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'redirecturl' => home_url(),
    ));

    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action('wp_ajax_nopriv_ajaxlogin', 'ajax_login');
}

// Execute the action only if the user isn't logged in
if (!is_user_logged_in()) {
    add_action('init', 'ajax_login_init');
}


function ajax_login()
{
    // First check the nonce, if it fails the function will break
    check_ajax_referer('ajax-login-nonce', 'security');

    // Nonce is checked, get the POST data and sign user on
    $info = array();
    $usermail = $_POST['mail'];
    $info['user_password'] = $_POST['password'];
    $info['remember'] = true;

    if (email_exists($usermail)) {
        $user = get_user_by('ID', email_exists($usermail));
        $info['user_login'] = $user->data->user_login;
        $user_signon = wp_signon($info, false);

        if (is_wp_error($user_signon)) {
            echo json_encode(array('loggedin' => false, 'message' => __('Неправильный пароль')));
        } else {
            echo json_encode(array('loggedin' => true, 'message' => __('Вы вошли успешно, перенаправляем...')));
        }
    } else {
        echo json_encode(array('loggedin' => false, 'message' => __('Пользователя с таким email не существует.')));
    }

    die();
}

/*редирект если пользователь заходит на страницу регистрации и залогинен*/
add_action('template_redirect', function () {
    if (is_page(73) && is_user_logged_in()) {
        wp_redirect(home_url());
        exit;
    }
});

/*редирект если заходим на страницу заказа без id товара*/
add_action('template_redirect', function () {
    if (is_page(77) && empty($_GET)) {
        wp_redirect(home_url());
        exit;
    }
});

add_action('wp_enqueue_scripts', 'myajax_data', 99);
function myajax_data()
{

    wp_localize_script('genc-script', 'myajax',
        array(
            'url' => admin_url('admin-ajax.php'),
            'url_send_registration' => get_template_directory_uri() . '/assets/mail/action_ajax_form_registration.php',
            'url_send_order' => get_template_directory_uri() . '/assets/mail/action_ajax_form_order.php',
        )
    );

}

/**
 * Проверяет роль определенного пользователя.
 * Возвращает true при совпадении.
 *
 * @param строка $role Название роли.
 * @param логический $user_id (не обязательный) ID пользователя, роль которого нужно проверить.
 * @return bool
 */
function is_user_role($role, $user_id = null)
{
    $user = is_numeric($user_id) ? get_userdata($user_id) : wp_get_current_user();

    if (!$user)
        return false;

    return in_array($role, (array)$user->roles);
}


function true_loadmore_scripts()
{
    wp_enqueue_script('true_loadmore', get_stylesheet_directory_uri() . '/assets/js/loadmore.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'true_loadmore_scripts');

function true_load_posts()
{

    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] + 1; // следующая страница
    $args['post_status'] = 'publish';


    query_posts($args);
    // если посты есть
    if (have_posts()) :

        // запускаем цикл
        while (have_posts()): the_post();
            if ($args['post_type'] === 'paint') {
                get_template_part('template-parts/catalog/item', '');
            } else {
                get_template_part('template-parts/content', 'media');
            }

        endwhile;

    endif;

    die();

}

add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

if ( ! current_user_can( 'manage_options' ) ) {
    show_admin_bar( false );
}