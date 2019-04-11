<?php

// jquery デフォルトの読み込みcdnに変更
function include_jquery_cdn_loader() {
    if( !is_admin() ){
        //WP Default jQuery Load Deregister.
        wp_deregister_script('jquery');
        //jQuery CDN
        $jsCore = '//code.jquery.com/jquery-3.3.1.min.js';
        $jsMigrate = '//code.jquery.com/jquery-migrate-1.4.1.min.js';
        //jQuery CDN Check
        $core_url = @fopen('http:'.$jsCore, 'r');
        //jQuery CDN Server Down
        if( $core_url === false ){
            $jsCore = home_url( '/' ).'wp-includes/js/jquery/jquery.js';
        }
        wp_register_script( 'jquery', $jsCore, array(), null, false );
        wp_enqueue_script( 'jquery' );
        $migrate_url = @fopen('http:'.$jsMigrate, 'r');
        //jQuery Migrate CDN Server Down
        if( $migrate_url === false ){
            $jsMigrate = home_url( '/' ).'wp-includes/js/jquery/jquery-migrate.min.js';
        }
        wp_register_script( 'jquery_migrate', $jsMigrate, array(), null, false );
        wp_enqueue_script( 'jquery_migrate' );
    }
}
add_action('wp_enqueue_scripts', 'include_jquery_cdn_loader');

//サムネイルサイズ
add_theme_support('post-thumbnails');
add_image_size( 'original_thumbsq_lrg', 500, 500, true );
add_image_size( 'original_4-3__portrait', 600, 800, true );
add_image_size( 'original_4-3__lrg', 1200, 900, true );
add_image_size( 'original_16-9__lrg', 1200, 675, true );

//追加したサイズの挿入
add_filter('image_size_names_choose', 'me_display_image_size_names_muploader', 11, 1);
function me_display_image_size_names_muploader( $sizes ) {
    $new_sizes = array();
    $added_sizes = get_intermediate_image_sizes();
    foreach( $added_sizes as $key => $value) {
        $new_sizes[$value] = $value;
    }
    $new_sizes = array_merge( $new_sizes, $sizes );
    return $new_sizes;
}

//投稿フォーム
add_theme_support( 'html5', array('search-form', 'comment-form', 'comment-list',) );
add_theme_support( 'post-formats', array('aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',) );

//投稿ページ 独自css
add_editor_style('editor-style.css');

require_once locate_template('function_inc/fun_output-ext.php');             //  テキストなどの出力回り
require_once locate_template('function_inc/fun_posttype.php');               //  ポストタイプ
require_once locate_template('function_inc/fun_getpost.php');                //  pre_get_post
require_once locate_template('function_inc/fun_admin.php');              //  管理画面関係


// テスト案件

//管理画面 [設定 - メディア] で指定する 「大サイズ」 の幅の上限
if ( ! isset( $content_width ) ) $content_width = 1200;


?>
