<?php
// すでに何か書いてあれば、その下に追記でOKです
function storefront_child_enqueue_scripts() {
    // 子テーマの custom.js を読み込む
    wp_enqueue_script(
        'storefront-child-custom-js',                              // ハンドル名（好きな名前でOK）
        get_stylesheet_directory_uri() . '/js/custom.js',         // 読み込むJSのパス
        array(),                                                  // 依存スクリプト（jQueryが必要なら ['jquery']）
        null,                                                     // バージョン（キャッシュ気になるなら '1.0.0' など）
        true                                                      // true ならフッターで読み込み
    );
}

// 投稿の背景色のみグレーに変更するために、パラメータ p を判定材料にしている
function add_param_p_body_class( $classes ) {
    if ( isset($_GET['p']) && $_GET['p'] !== '' ) {
        $classes[] = 'has-param-p';
    }
    return $classes;
}
add_filter( 'body_class', 'add_param_p_body_class' );

add_action( 'wp_enqueue_scripts', 'storefront_child_enqueue_scripts' );