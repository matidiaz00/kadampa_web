<?php
function loginRedirect( $redirect_to, $request, $user ){
    if( is_array( $user->roles ) ) {
        return "wp-admin/edit.php?post_type=page";
    }
}
add_filter("login_redirect", "loginRedirect", 10, 3);
?>