<?php
include(TEMPLATEPATH . '/functions/display_items/display_items.php');// AGREGA HOJA DE ESTILOS DONDE SE OCULTA SECCIONES EN ADMINISTRADOR
include(TEMPLATEPATH . '/functions/login_redirect.php');// EMPIEZA SECCION DE ADMINISTRADOR EN OTRA PAGINA
include(TEMPLATEPATH . '/functions/customize/customize.php');// PERSONALIZAR TEMA EN ADMIN
include(TEMPLATEPATH . '/functions/tinymce/tinymce.php');// CAMBIOS EN EL EDITOR
include(TEMPLATEPATH . '/functions/default/default.php');// CAMBIA DEFAULTS DE WORDPRESS
show_admin_bar( false );// DESACTIVA TOP NAV DE ADMIN EN FRONT-END
add_theme_support( 'post-thumbnails' );// ACTIVA THUMBNAILS
add_filter( 'automatic_updater_disabled', '__return_true' );// ACTUALIZAR AUTOMATICAMENTE
?>