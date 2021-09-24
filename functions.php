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

    global $post;

    $id = (isset($post->ID) ? get_the_ID() : NULL);

    // Checking if post ID exist...
    if (isset($id)) {

        // Getting the post type of the current post
        $current_post_type = get_post_type_object(get_post_type($post->ID));
        $ancestor_slug = $current_post_type->rewrite ? $current_post_type->rewrite['slug'] : '';

        if($ancestor_slug === 'paint'){

            if($item->object_id == 32){
                $atts['class'] .= ' active-link';
            }
        }
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
    global $wp;
    $base = home_url( $wp->request );
    //global $query_string;
    //parse_str( $query_string, $my_query_array );
    //$paged = ( isset( $my_query_array['paged'] ) && !empty( $my_query_array['paged'] ) ) ? $my_query_array['paged'] : 1;
    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

    if(is_mobile()){
        $posts_per_page_catalog = 7;
    } else {
        $posts_per_page_catalog = 13;
    }

    $args = array(
        'orderby' => 'date', // we will sort posts by date
        'order' => 'ASC',
        'paged' => $paged,
        'post_type' => 'paint',
        'posts_per_page' => $posts_per_page_catalog,
    );

    // for taxonomies / categories
    if (isset($_GET['chemical']) || isset($_GET['diluent_type']) || isset($_GET['material_type'])
        || isset($_GET['tinting_system']) || isset($_GET['special_materials']) || isset($_GET['type_finishing'])
        || isset($_GET['special_application_methods']) || isset($_GET['special_category'])) {
        $args['tax_query'] = array(
            'relation' => 'OR',
            array(
                'taxonomy' => 'chemical',
                'field' => 'name',
                'terms' => $_GET['chemical'],
            ),
            array(
                'taxonomy' => 'diluent_type',
                'field' => 'name',
                'terms' => $_GET['diluent_type'],
            ),
            array(
                'taxonomy' => 'material_type',
                'field' => 'name',
                'terms' => $_GET['material_type'],
            ),
            array(
                'taxonomy' => 'tinting_system',
                'field' => 'name',
                'terms' => $_GET['tinting_system'],
            ),
            array(
                'taxonomy' => 'special_materials',
                'field' => 'name',
                'terms' => $_GET['special_materials'],
            ),
            array(
                'taxonomy' => 'type_finishing',
                'field' => 'name',
                'terms' => $_GET['type_finishing'],
            ),
            array(
                'taxonomy' => 'special_application_methods',
                'field' => 'name',
                'terms' => $_GET['special_application_methods'],
            ),
            array(
                'taxonomy' => 'special_category',
                'field' => 'name',
                'terms' => $_GET['special_category'],
            ),
        );
    }

    $query = new WP_Query($args);
    echo '<div class="d-flex flex-wrap justify-content-between container-card">';
    if ($query->have_posts()) :
        while ($query->have_posts()): $query->the_post();
            get_template_part('template-parts/catalog/item', '');
        endwhile;
        wp_reset_postdata();
    else :
        echo '<h2>Продукции не найдено</h2>';
    endif;
    echo '</div>';

    if (  $query->max_num_pages > 1 ) :
        $big = 999999999; // уникальное число
        // Fallback if there is not base set.
        $fallback_base = str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) );

        // Set the base.
        $base = isset( $base ) ? trailingslashit( $base ) . '%_%' : $fallback_base;

        echo '<nav class="navigation pagination" role="navigation">
                            <div class="d-flex align-items-center nav-links">';

        echo paginate_links( array(
            'base'    => $base,
            'format' => '?paged=%#%',
            'current' => max( 1, $paged ),
            'total'   => $query->max_num_pages,
            'next_text' => '<img src="' . get_template_directory_uri() . '/assets/img/arrow_pagination_next.svg">',
            'prev_text' => '<img src="' . get_template_directory_uri() . '/assets/img/arrow_pagination_prev.svg">',
        ) );
        echo '</div> </nav>';
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

function parse_phone_number ($phone_number){
    $output_link = preg_replace('/\s/', '', $phone_number);
    $output_link = preg_replace('/-/', '', $output_link);
    $output_link = preg_replace('/–/', '', $output_link);
    $output_link = preg_replace('/\(|\)/', '', $output_link);

    return $output_link;
}

function is_mobile(){
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    if(
        // добавить '|android|ipad|playbook|silk' в первую регулярку для определения еще и tablet
        preg_match(
            '/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',
            $useragent
        )
        ||
        preg_match(
            '/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',
            substr($useragent,0,4)
        )
    )
        return true;
    return false;
}

function checkGetParametersFilter($get_query_name){

    if(isset($_GET[$get_query_name])){
         return ($_GET[$get_query_name]);
    } else {
        return false;
    }

}

// Подсчет количества посещений страниц
add_action( 'wp_head', 'custom_postviews' );

/**
 * @param array $args
 *
 * @return null
 */
function custom_postviews( $args = [] ){
    global $user_ID, $post, $wpdb;

    if( ! $post || ! is_singular() || $post->post_type !== 'paint')
        return;


    $rg = (object) wp_parse_args( $args, [
        // Ключ мета поля поста, куда будет записываться количество просмотров.
        'meta_key' => 'views',
        // Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированных пользователей.
        'who_count' => 0,
        // Исключить ботов, роботов? 0 - нет, пусть тоже считаются. 1 - да, исключить из подсчета.
        'exclude_bots' => true,
    ] );

    $do_count = false;
    switch( $rg->who_count ){

        case 0:
            $do_count = true;
            break;
        case 1:
            if( ! $user_ID )
                $do_count = true;
            break;
        case 2:
            if( $user_ID )
                $do_count = true;
            break;
    }

    if( $do_count && $rg->exclude_bots ){

        $notbot = 'Mozilla|Opera'; // Chrome|Safari|Firefox|Netscape - все равны Mozilla
        $bot = 'Bot/|robot|Slurp/|yahoo';
        if(
            ! preg_match( "/$notbot/i", $_SERVER['HTTP_USER_AGENT'] ) ||
            preg_match( "~$bot~i", $_SERVER['HTTP_USER_AGENT'] )
        ){
            $do_count = false;
        }

    }

    if( $do_count ){

        $up = $wpdb->query( $wpdb->prepare(
            "UPDATE $wpdb->postmeta SET meta_value = (meta_value+1) WHERE post_id = %d AND meta_key = %s", $post->ID, $rg->meta_key
        ) );

        if( ! $up )
            add_post_meta( $post->ID, $rg->meta_key, 1, true );

        wp_cache_delete( $post->ID, 'post_meta' );
    }

}

// создаем новую колонку
add_filter( 'manage_'.'paint'.'_posts_columns', 'add_views_column', 4 );
function add_views_column( $columns ){
    $num = 2; // после какой по счету колонки вставлять новые

    $new_columns = array(
        'views' => 'Просмотры',
    );

    return array_slice( $columns, 0, $num ) + $new_columns + array_slice( $columns, $num );
}

// заполняем колонку данными
add_action('manage_paint_posts_custom_column', 'fill_views_column', 5, 2 );
function fill_views_column( $colname, $post_id ){
    if( $colname === 'views' ){
        echo get_post_meta( $post_id, 'views', 1 );
    }
}

add_action('admin_head', 'custom_style_paint_views');
function custom_style_paint_views() {
    echo '<style>
.fixed .column-views{
    width: 10%;
}
</style>';
}

function keyMatchingPictogram($key){
    switch ($key) {
        case '1':
            echo "Распыление";
            break;
        case '2':
            echo "Кисть";
            break;
        case '3':
            echo "Валик";
            break;
        case '4':
            echo "Распылительный станок";
            break;
        case '5':
            echo "Лаконалив";
            break;
        case '6':
            echo "Окунание";
            break;
        case '7':
            echo "Струйный облив";
            break;
        case '8':
            echo "Электростатическое распыление";
            break;
        case '9':
            echo "Втирание";
            break;
        case '10':
            echo "Розлив";
            break;
        case '11':
            echo "Шпатель";
            break;
        case '12':
            echo "Вальцы";
            break;
        case '13':
            echo "Сертификат TSE";
            break;
        case '14':
            echo "Забор из кованого железа";
            break;
        case '15':
            echo "Деревянный забор";
            break;
        case '16':
            echo "Стол";
            break;
        case '17':
            echo "Стул";
            break;
        case '18':
            echo "Детская мебель";
            break;
        case '19':
            echo "Термостойкость";
            break;
        case '20':
            echo "Ванная";
            break;
        case '21':
            echo "Паркет";
            break;
        case '22':
            echo "Мебель";
            break;
        case '23':
            echo "Кухня";
            break;
        case '24':
            echo "Дверь";
            break;
        case '25':
            echo "Однокомпонентный";
            break;
        case '26':
            echo "Двухкомпонентный";
            break;
        case '27':
            echo "Трехкомпонентный";
            break;
        case '28':
            echo "Не содержит свинец";
            break;
        case '29':
            echo "На основе растворителя";
            break;
        case '30':
            echo "Водоразбавимый";
            break;
        case '31':
            echo "Сертификат EN-71-3";
            break;
        case '32':
            echo "Сертификат огнезащиты";
            break;
        case '33':
            echo "Система GENC Tinting";
            break;
        case '34':
            echo "Видео";
            break;
        case '35':
            echo "Для внутренних и внешних работ";
            break;
        case '36':
            echo "Для внешних работ";
            break;
        case '37':
            echo "Для внутренних работ";
            break;
    }
}