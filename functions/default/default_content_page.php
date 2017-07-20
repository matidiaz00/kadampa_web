<?php
function my_editor_content( $content ) {
    $content = 
    '
        <h1>Edita esta pagina</h1>

    ';
    return $content;
}
add_filter( 'default_content', 'my_editor_content' );
?>