<?php
function general_customizer_register($wp_customize) {
	include(TEMPLATEPATH . '/functions/customize/customize_post_controls.php'); // SECCION PARA CAMBIAR LINKS DE SOCIAL MEDIA
    include(TEMPLATEPATH . '/functions/customize/customize_social_media.php'); // SECCION PARA CAMBIAR LINKS DE SOCIAL MEDIA
    include(TEMPLATEPATH . '/functions/customize/customize_colors.php'); // SECCION PARA CAMBIAR COLORES
    include(TEMPLATEPATH . '/functions/customize/customize_footer.php'); // SECCION PARA MODIFICAR EL FOOTER
}
add_action('customize_register', 'general_customizer_register');
include(TEMPLATEPATH . '/functions/customize/customize_colors_css.php'); // HOJA DE ESTILOS CONECTADA CON LA SECCION DE COLORES
add_action('wp_head', 'general_css_customizer');
?>