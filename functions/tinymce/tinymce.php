<?php
function my_format_TinyMCE( $in ) {
    // AGREGA OPCIONES A DROPDOWN
    $style_formats = array(
        array(
            'title'     => 'Parrafo',
            'block'     => 'p',
        ),
        array(
            'title'     => 'Titulos',
            'items'     => array(
                array(
                    'title'     => 'Titulo h1',
                    'format'    => 'h1',
                ),
                array(
                    'title'     => 'Titulo h2',
                    'format'    => 'h2',
                ),
                array(
                    'title'     => 'Titulo h3',
                    'format'    => 'h3',
                ),
            ),
        ),
        array(
            'title'     => 'Boton',
            'block'     => 'span',
            'classes'   => 'btn',
            'wrapper'   => true
        ),
        array(
            'title'     => 'Informacion',
            'block'     => 'span',
            'classes'   => 'info',
        ),
    );
    $in['style_formats'] = json_encode( $style_formats );
    array_unshift( $in, 'styleselect' );
    // SELECCIONA LOS BOTONES A MOSTRAR EN EL EDITOR
    $in['toolbar1'] = 'styleselect,bold,italic,underline,alignleft,aligncenter,alignright,columnas,link,unlink,bullist,numlist,media,undo,redo';
    $in['toolbar2'] = '';
    $in['toolbar3'] = '';
    $in['toolbar4'] = '';
    // AL PEGAR ALGO DENTRO LO PEGA SIN FORMATO
    $in['paste_as_text'] = true;
    return $in;
}
add_filter( 'tiny_mce_before_init', 'my_format_TinyMCE' );
// INCLUDE QUE AGREGA EL BOTON PARA COLUMNAS
include(TEMPLATEPATH . '/functions/tinymce/tinymce_columns.php');
// AGREGA HOJA DE ESTILOS EN EL EDITOR DE PAGINAS Y AGREGA FUENTE 'OPEN SANS'
include(TEMPLATEPATH . '/functions/tinymce/tinymce_styles.php');
?>