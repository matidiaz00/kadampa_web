<?php
function my_custom_login_logo() {
    echo '<style type="text/css">
              .login h1 a  {
                  background-image:url('.get_bloginfo('template_directory').'/img/nkt-logo.png);
                  background-size: auto;
                  width: 117px;
                  height: 115px;
              }
          </style>';
}
add_action('login_head', 'my_custom_login_logo');
?>