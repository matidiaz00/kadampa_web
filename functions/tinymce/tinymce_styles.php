<?php
function my_editor_styles() {
    add_editor_style( 'css/article.css' );
    $font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700' );
    add_editor_style( $font_url );
}
add_action( 'after_setup_theme', 'my_editor_styles' );
?>