<?php
/* ==========================================================================
   ESTILOS
   ========================================================================== */
function general_css_customizer() {
?>
  <style type="text/css">
        /*STYLE.CSS*/
        #nav-top {
            background-color: <?php echo get_theme_mod('color1');?>;
        }
        #nav-social a:hover,
        #btn_nav-social:hover {
            background-color: <?php echo get_theme_mod('color2');?>;
        }
        .children .children,
        .nav-main .children li:hover {
            background-color: <?php echo get_theme_mod('color2');?>;
        }
        .children,
        .nav-main li:hover {
            background-color: <?php echo get_theme_mod('color4');?>;/*BACGROUND COLOR CAMBIA CON ADMINISTRADOR*/
        }
        .children .children .children,
        .nav-main .children .children li:hover {
            background-color: <?php echo get_theme_mod('color3');?>;
        }
        #nav-social span {
            border-color: <?php echo get_theme_mod('color4');?>;
        }
        @media all and (max-width: 985px) {
            .nav-main {
                background-color: <?php echo get_theme_mod('color4');?>;
            }
        }
        body {
            background-color: <?php echo get_theme_mod('color1');?>;
        }
        footer {
            background-color: <?php echo get_theme_mod('color4');?>;
        }
        footer .btn:hover {
            background-color: <?php echo get_theme_mod('color3');?>;
        }
        /*STYLE_AND_ADMIN.CSS*/
        a {
            color: <?php echo get_theme_mod('color1');?>;
        }
        a:hover {
            color: <?php echo get_theme_mod('color4');?>;
        }
        .btn {
            background-color: <?php echo get_theme_mod('color1');?>;
        }
        .btn:hover {
            background-color: <?php echo get_theme_mod('color4');?>;
        }
        article li:before,
        #tinymce li:before {
            background-color: <?php echo get_theme_mod('color1');?>;
        }
  </style>
<?php } ?>