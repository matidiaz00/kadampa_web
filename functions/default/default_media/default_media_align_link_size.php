<?php
function mytheme_setup() {
    update_option('image_default_align', 'left' );
    update_option('image_default_link_type', 'none' );
    update_option('image_default_size', 'Chico' );
}
add_action('after_setup_theme', 'mytheme_setup');
?>