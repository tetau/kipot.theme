<?php

//   ---------------------------------------
//    pre_get_posts
//  ----------------------------------------

    function custom_query( $query ) {
        if ( is_admin() || ! $query->is_main_query() )
        return;
        if ( $query->is_home() ) { // ホーム
            $query->set( 'post_type', 'article' );
            $query->set( 'posts_per_page', 4 );
            $query->set( 'ignore_sticky_posts', 1 );
            $query->set( 'orderby', 'date' );
            $query->set( 'order', 'desc' );
        return;
        }
        if ( $query->is_post_type_archive( 'journey' ) ) {
            $query->set( 'posts_per_page', 8 );
            $query->set( 'ignore_sticky_posts', 0 );
            $query->set( 'orderby', 'date' );
            $query->set( 'order', 'desc' );
            return;
        }
        if ( $query->is_tax( 'journeycat','' ) ) {
            $query->set( 'posts_per_page', 8 );
            $query->set( 'ignore_sticky_posts', 0 );
            $query->set( 'orderby', 'date' );
            $query->set( 'order', 'desc' );
            return;
        }
        if ( $query->is_post_type_archive( 'tour' ) ) {
            $query->set( 'posts_per_page', 30 );
            $query->set( 'ignore_sticky_posts', 0 );
            $query->set( 'orderby', 'meta_value' );
            $query->set( 'offset', 4 );
            $query->set( 'order', 'asc' );
            $query->set( 'meta_key', 'tour_d_date' );
            return;
        }

    }
    add_action( 'pre_get_posts', 'custom_query' );
?>
