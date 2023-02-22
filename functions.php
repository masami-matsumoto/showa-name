<?php
function my_enqueue_scripts() {
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'my_script', get_template_directory_uri() . '/js/script.js', array() );
  wp_enqueue_script( 'my_script', get_template_directory_uri() . '/js/drawer.min.js', array() );
  wp_enqueue_style( 'my_style', get_template_directory_uri() . '/css/style.css', array() );
  wp_enqueue_style( 'my_style', get_template_directory_uri() . '/css/drawer.min.css', array() );

}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

//Bootstrapを動かす
function themebs_enqueue_styles() {
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'core', get_template_directory_uri() . '/css/style.css' );
    }

    add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');


    function themebs_enqueue_scripts() {
      wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
      wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
    }
    add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');

//ヘッダー、フッターのカスタムメニュー化
register_nav_menus(
array(
'place_global' => 'グローバル',
'palce_footer' => 'フッターナビ',
)
);

// アイキャッチ画像を利用できるようにする
add_theme_support( 'post-thumbnails' );
