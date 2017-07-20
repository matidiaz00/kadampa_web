<?php
function my_edit_post_per_page( $per_page ) {
    $edit_per_page = 'edit_' . $post_type . '_per_page';
    $per_page = (int) get_user_option( $edit_per_page );
    if ( empty( $per_page ) || $per_page < 1 )
        $per_page = 999;
    return $per_page;
}
add_filter( 'edit_posts_per_page', 'my_edit_post_per_page' );
?>