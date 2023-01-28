<?php
/**
 * テーマのセットアップ
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5', //HTML5でマークアップ
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
  register_post_type('case', [
    'labels' => [
      'name' => '導入事例',
      'singular_name'      => '導入事例',//nameに入れた導入事例をコピーのとこに全部ペーストしていく。
      'menu_name'          => '導入事例',
      'add_new'            => '導入事例を追加',
      'add_new_item'       => '導入事例を追加',
      'new_item'           => '新しい導入事例',
      'edit_item'          => '導入事例を編集',
      'view_item'          => '導入事例を見る',
      'all_items'          => '導入事例',
      'search_items'       => '導入事例を探す',
      'parent_item_colon'  => '',
      'not_found'          => '導入事例は見つかりませんでした',
      'not_found_in_trash' => 'ゴミ箱は空です'
    ],
    'public' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'supports' => [
      'title',
      'editor',
      'page-attributes'
    ],
    'menu_position' => 5,
    'menu_icon' => 'dashicons-format-gallery'
  ]);

  register_taxonomy('case_category', 'case', [
    'labels' => [
      'name' => '事例カテゴリー',
    ],
    'hierarchical' => true,
    // 'show_in_rest' => true
  ]);
}
add_action('after_setup_theme', 'my_setup');

/**
 * CSSとJavaScriptの読み込み
 */
function my_script_init()
{
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css', array(), '5.8.2', 'all');
  wp_enqueue_style('my', get_template_directory_uri() . '/style.css', array(), filemtime(get_theme_file_path('/style.css')), 'all');
  wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array('jquery'), filemtime(get_theme_file_path('js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
 * メニューの登録
 */
function my_menu_init()
{
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'footer' => 'フッターメニュー',
      'drawer' => 'ドロワーメニュー',
    )
  );
}
add_action('init', 'my_menu_init');

// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// wp_nav_menuのaにclass追加
function add_additional_class_on_a($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

//任意のスラッグ名のページで投稿一覧を表示できる機能を追加
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news'; //任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);