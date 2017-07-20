<?php
/* ==========================================================================
   SECOR DISEÑO
   ========================================================================== */
     $wp_customize->add_section('colores', array(
        'title'           => __('Colores', 'general'),
        'description'     => 'Cambia los colores',
     ));
    // COLOR UNO
          $wp_customize->add_setting('color1', array(
            'default'     => '#61aedd'
          ));
          $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'color1', array(
            'section'     => 'colores',
            'settings'    => 'color1',
          )));
    // COLOR DOS
          $wp_customize->add_setting('color2', array(
            'default'     => '#3b84b0'
          ));
          $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'color2', array(
            'section'     => 'colores',
            'settings'    => 'color2',
          )));
    // COLOR TRES
          $wp_customize->add_setting('color3', array(
            'default'     => '#57a5d4'
          ));
          $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'color3', array(
            'section'     => 'colores',
            'settings'    => 'color3',
          )));
    // COLOR CUATRO
          $wp_customize->add_setting('color4', array(
            'default'     => '#438fbd'
          ));
          $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'color4', array(
            'section'     => 'colores',
            'settings'    => 'color4',
          )));

?>