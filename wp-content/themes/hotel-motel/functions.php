<?php
  //  include_once(__DIR__ . '/inc/test-recent-posts.php');
  //  add_action('init', 'test_post_types');
  add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
  add_action('after_setup_theme', 'add_menus');
  //  add_shortcode('')
  function add_scripts_and_styles() {
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/libs/swiper/swiper.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js');
    wp_enqueue_script('home', get_template_directory_uri() . '/assets/js/home.js');
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/libs/swiper/swiper.js');
  }

  function add_menus() {
    add_theme_support('menus');
    register_nav_menu('header-links', 'Header links');
    register_nav_menu('footer-find', 'Footer find');
    register_nav_menu('footer-explore', 'Footer explore');
    register_nav_menu('footer-about', 'Footer about');
    register_nav_menu('footer-social', 'Footer social');
  }

  //    wp_deregister_script('jquery');
  //    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
  //    wp_enqueue_script('jquery');
  //    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], 'null', true);
  //    wp_enqueue_script('test-script-jquery', get_template_directory_uri() . '/assets/js/jquery.js', ['test-script-jquery'], 'null', true);

  //  //  add_theme_support('post-thumbnails');
  //  //  add_theme_support('title-tag');
  //  //  add_theme_support('custom-logo');
  //  //
  //      register_nav_menu('top', 'Для лендінгу');
  //      register_nav_menu('footer', 'Для підвалу');
  //      add_theme_support('post-thumbnails'););

  //  add_action('widgets_init', function () {
  //    register_sidebar([
  //      'name' => 'Sidebar Right',
  //      'id' => 'sidebar-right',
  //      'description' => 'Права колонка',
  //      'before_widget' => '<div class="widget %2$s">',
  //      'after_widget' => "</div>\n",
  //    ]);
  //
  //    register_sidebar([
  //      'name' => 'Sidebar Bottom',
  //      'id' => 'sidebar-bottom',
  //      'description' => 'Не працюючий приклад',
  //    ]);
  //
  //    register_widget('Test_Recent_Posts');
  //  });
  //
  //  add_filter('widget_text', 'do_shortcode');

  //	/	add_shortcode( 'test_recent', function ( $atts ) {
  //		$atts = shortcode_atts( array(
  //			'cnt' => 5
  //		), $atts );
  //
  //		$str = '';
  //
  //		$args = array(
  //			'numberposts' => $atts['cnt'],
  //			'orderby'     => 'date',
  //			'order'       => 'DESC',
  //			'post_type'   => 'post',
  //		);
  //
  //		$posts - get_posts( $args );
  //
  //		foreach ( $posts as $post ) {
  //			setup_postdata( $post );
  //
  //			$link  = get_the_permalink();
  //			$title = get_the_title();
  //			$dt    = get_the_date();
  //			$intro = CFS()->get( 'intro' );
  //
  //			$str .= '<div>
  //<div><em>$dt</em></div>
  //<div><strong>$title</strong></div>
  //<div>$intro</div>
  //<a href=\"$link\">Далі...</a>
  //</div>';
  //		}
  //
  //		wp_reset_postdata();
  //
  //		return $str;
  //	} );

  //  function test_post_types() {
  //    register_post_type('reviews', [
  //      'labels' => [
  //        'name' => 'Відгуки', // основное название для типа записи
  //        'singular_name' => 'Відгук', // название для одной записи этого типа
  //        'add_new' => 'Добавити новий', // для добавления новой записи
  //        'add_new_item' => 'Додавання відгуку', // заголовка у вновь создаваемой записи в админ-панели.
  //        'edit_item' => 'Редактування відгуку', // для редактирования типа записи
  //        'new_item' => 'Новий відгук', // текст новой записи
  //        'view_item' => 'Дивитись відгук', // для просмотра записи этого типа.
  //        'search_items' => 'Шукати відгуки', // для поиска по этим типам записи
  //        'not_found' => 'Не знайдено', // если в результате поиска ничего не было найдено
  //        'not_found_in_trash' => 'Не знайдено в корзині', // если не было найдено в корзине
  //        'parent_item_colon' => '', // для родителей (у древовидных типов)
  //        'menu_name' => 'Відгуки', // название меню
  //      ],
  //      'description' => '',
  //      'public' => true,
  //      'menu_position' => 25,
  //      'menu_icon' => 'dashicons-format-quote',
  //      'hierarchical' => false,
  //      'supports' => ['title', 'editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
  //      'taxonomies' => [],
  //      'has_archive' => false,
  //    ]);
  //
  //    register_post_type('reviews', [
  //      'labels' => [
  //        'name' => 'Квартири', // основное название для типа записи
  //        'singular_name' => 'Квартира', // название для одной записи этого типа
  //        'add_new' => 'Добавити нову', // для добавления новой записи
  //        'add_new_item' => 'Додавання квартири', // заголовка у вновь создаваемой записи в админ-панели.
  //        'edit_item' => 'Редактування квартири', // для редактирования типа записи
  //        'new_item' => 'Нова квартира', // текст новой записи
  //        'view_item' => 'Дивитись квартиру', // для просмотра записи этого типа.
  //        'search_items' => 'Шукати квартири', // для поиска по этим типам записи
  //        'not_found' => 'Не знайдено', // если в результате поиска ничего не было найдено
  //        'not_found_in_trash' => 'Не знайдено в корзині', // если не было найдено в корзине
  //        'parent_item_colon' => '', // для родителей (у древовидных типов)
  //        'menu_name' => 'Квартири', // название меню
  //      ],
  //      'description' => '',
  //      'public' => true,
  //      'menu_position' => 25,
  //      'menu_icon' => 'dashicons-format-quote',
  //      'hierarchical' => false,
  //      'supports' => ['title', 'editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
  //      'taxonomies' => [],
  //      'has_archive' => false,
  //    ]);
  //  }
  //
  //  function test_show_reviews() {
  //    $args = [
  //      'orderby' => 'date',
  //      'order' => 'DESC',
  //      'post_type' => 'reviews',
  //    ];
  //    $posts = get_posts($args);
  //    var_dump($posts);
  //    return $posts;
  //  }

