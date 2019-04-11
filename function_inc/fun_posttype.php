<?php

//   ---------------------------------------
//    カスタムポストタイプ設定
//  ----------------------------------------

// ------ article posttype---------//
add_action( 'init', 'create_post_type_article' );
function create_post_type_article() {
    $args = array(
        'label' => 'コンテンツ',
        'labels' => array(
            'singular_name' => 'コンテンツ',
            'add_new_item' => 'コンテンツの新規作成',
            'add_new' => '新規作成',
            'new_item' => '新規作成',
            'view_item' => '記事を表示',
            'not_found' => '見つかりません',
            'not_found_in_trash' => 'ゴミ箱にはありません',
            'search_items' => '検索',
        ),
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'article', 'with_front' =>false ),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-aside',
        'supports' => array('title','editor','thumbnail'),
        'has_archive' => 'article',
    );
    register_post_type('article', $args);
}



// ------ article category ---------//
$args = array(
    'label' => 'カテゴリー',
    'labels' => array(
        'name' => 'カテゴリー',
        'singular_name' => 'カテゴリー',
        'search_items' => 'カテゴリーを検索',
        'popular_items' => 'よく使われているカテゴリー',
        'all_items' => 'すべてのカテゴリー',
        'parent_item' => '親カテゴリー',
        'edit_item' => 'カテゴリーの編集',
        'update_item' => '更新',
        'add_new_item' => '新規カテゴリーを追加',
        'new_item_name' => '新しいカテゴリー',
    ),
    'public' => true,
    'show_ui' => true,
    'hierarchical' => true,
    'rewrite' => array(true, 'with_front' => false),
    'capabilities' => array(
        'assign_terms' => 'edit_others_posts',
        'edit_terms' => 'edit_others_posts'
    )
);
register_taxonomy('articlecat', 'article', $args);



// ------ article tags ---------//
$args = array(
    'label' => 'タグ',
    'labels' => array(
        'name' => '関連タグ',
    ),
    'public' => true,
    'show_ui' => true,
    'rewrite' => array( 'slug' => 'articletag', 'with_front' =>false ),
    'hierarchical' => false,
    'query_var' => true,
    'capabilities' => array(
        'assign_terms' => 'edit_others_posts',
        'edit_terms' => 'edit_others_posts'
    )
);
register_taxonomy('articletag', 'article', $args);




//   ---------------------------------------
//    カスタムポストタイプ 管理画面
//  ----------------------------------------





//   検索結果
//  ----------------------------------------

    // テンプレート読み込みフィルターをカスタマイズ
add_filter('template_include','custom_search_template');
function custom_search_template($template){
    // 検索結果の時
    if ( is_search() ) {
    // 表示する投稿タイプを取得
        $post_types = get_query_var('post_type');
    // search-{$post_type}.php の読み込みルールを追加
        foreach ( (array) $post_types as $post_type )
            $templates[] = "search-{$post_type}.php";
        $templates[] = 'search.php';
        $template = get_query_template('search',$templates);
    }
    return $template;
}



?>
