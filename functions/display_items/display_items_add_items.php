<?php
function register_my_custom_menu_page(){
    add_menu_page( 'custom menu title', 'Paginas', 'manage_options', 'edit.php?post_type=page' );
    add_menu_page( 'custom menu title', 'Diseño', 'manage_options', 'customize.php' );
}
add_action( 'admin_menu', 'register_my_custom_menu_page' );
?>