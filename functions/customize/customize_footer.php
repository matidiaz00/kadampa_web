<?php
/* ==========================================================================
   PRIMERA COLUMNA
   ========================================================================== */
$wp_customize->add_section('footer', array(
    'title' => __('Informacion debajo del pie', 'general'),
));
    // TITULO DE LA PRIMERA COLUMNA
      $wp_customize->add_setting('footer_info');
      $wp_customize->add_control( new Post_Placeholder_control( $wp_customize, 'footer_info', array(
          'label'       => __('Ingrese su informacion de contacto', 'general'),
          'section'     => 'footer',
          'settings'    => 'footer_info',
          'priority'    => 1,
      )));
/* ==========================================================================
   PRIMERA COLUMNA
   ========================================================================== */
$wp_customize->add_section('first_col', array(
    'title' => __('Primera columna del pie', 'general'),
));
    // TITULO DE LA PRIMERA COLUMNA
      $wp_customize->add_setting('title_first_col');
      $wp_customize->add_control( new Post_Placeholder_control( $wp_customize, 'title_first_col', array(
          'label'       => __('Titulo', 'general'),
          'section'     => 'first_col',
          'settings'    => 'title_first_col',
          'priority'    => 1,
      )));
    // IMAGEN DE LA PRIMERA COLUMNA
      $wp_customize->add_setting('image_first_col');
      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_first_col', array(
          'section'     => 'first_col',
          'settings'    => 'image_first_col',
          'priority'    => 2,
      )));
    // TEXTO DE LA PRIMERA COLUMNA
      $wp_customize->add_setting('text_first_col');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'text_first_col', array(
          'label'       => __( 'Parrafo HTML', 'general' ),
          'section'     => 'first_col',
          'settings'    => 'text_first_col',
          'type'        => 'textarea',
          'priority'    => 3,
      )));
    // LINK DE LA PRIMERA COLUMNA
      $wp_customize->add_setting('link_first_col');
      $wp_customize->add_control( new Post_Placeholder_control( $wp_customize, 'link_first_col', array(
          'label'       => __('Link, URL o enlace', 'general'),
          'section'     => 'first_col',
          'settings'    => 'link_first_col',
          'priority'    => 4,
      )));
/* ==========================================================================
   SEGUNDA COLUMNA
   ========================================================================== */
$wp_customize->add_section('second_col', array(
    'title' => __('Segunda columna del pie', 'general'),
));
    // TITULO DE LA SEGUNDA COLUMNA
      $wp_customize->add_setting('title_second_col');
      $wp_customize->add_control( new Post_Placeholder_control( $wp_customize, 'title_second_col', array(
          'label'       => __('Titulo', 'general'),
          'section'     => 'second_col',
          'settings'    => 'title_second_col',
          'priority'    => 1,
      )));
    // IMAGEN DE LA SEGUNDA COLUMNA
      $wp_customize->add_setting('image_second_col');
      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_second_col', array(
          'section'     => 'second_col',
          'settings'    => 'image_second_col',
          'priority'    => 2,
      )));
    // TEXTO DE LA SEGUNDA COLUMNA
      $wp_customize->add_setting('text_second_col');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'text_second_col', array(
          'label'       => __( 'Parrafo HTML', 'general' ),
          'section'     => 'second_col',
          'settings'    => 'text_second_col',
          'type'        => 'textarea',
          'priority'    => 3,
      )));
    // LINK DE LA SEGUNDA COLUMNA
      $wp_customize->add_setting('link_second_col');
      $wp_customize->add_control( new Post_Placeholder_control( $wp_customize, 'link_second_col', array(
          'label'       => __('Link, URL o enlace', 'general'),
          'section'     => 'second_col',
          'settings'    => 'link_second_col',
          'priority'    => 4,
      )));
/* ==========================================================================
   TERCERA COLUMNA
   ========================================================================== */
$wp_customize->add_section('third_col', array(
    'title' => __('Tercera columna del pie', 'general'),
));
    // TITULO DE LA TERCERA COLUMNA
      $wp_customize->add_setting('title_third_col');
      $wp_customize->add_control( new Post_Placeholder_control( $wp_customize, 'title_third_col', array(
          'label'       => __('Titulo', 'general'),
          'section'     => 'third_col',
          'settings'    => 'title_third_col',
          'priority'    => 1
      )));
    // IMAGEN DE LA TERCERA COLUMNA
      $wp_customize->add_setting('image_third_col');
      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_third_col', array(
          'section'     => 'third_col',
          'settings'    => 'image_third_col',
          'priority'    => 2,
      )));
    // TEXTO DE LA TERCERA COLUMNA
      $wp_customize->add_setting('text_third_col');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'text_third_col', array(
          'label'       => __( 'Parrafo HTML', 'general' ),
          'section'     => 'third_col',
          'settings'    => 'text_third_col',
          'type'        => 'textarea',
          'priority'    => 3,
      )));
    // LINK DE LA TERCERA COLUMNA
      $wp_customize->add_setting('link_third_col');
      $wp_customize->add_control( new Post_Placeholder_control( $wp_customize, 'link_third_col', array(
          'label'       => __('Link, URL o enlace', 'general'),
          'section'     => 'third_col',
          'settings'    => 'link_third_col',
          'priority'    => 4,
      )));
?>