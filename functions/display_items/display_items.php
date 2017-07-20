<?php
// AGREGA HOJA DE ESTILOS EN GENERAL
function my_custom_fonts() {
    echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/functions/display_items/display_items.css" media="all">';
}
add_action('admin_head', 'my_custom_fonts');
// AGREGA HOJA DE ESTILOS EN "PERSONALIZAR"
function hook_css() {
    echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/functions/display_items/display_items.css" media="all">';
}
add_action('customize_controls_print_styles','hook_css');
// AGREGA ITEMS AL MENU EN EL ADMINSITRADOR
include(TEMPLATEPATH . '/functions/display_items/display_items_add_items.php');
?>