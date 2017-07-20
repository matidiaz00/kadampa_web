<?php
function turn_off_autoresize(){
set_user_setting( 'editor_expand', 'off' );
}
add_action( 'after_setup_theme', 'turn_off_autoresize' );
?>