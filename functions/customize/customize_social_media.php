<?php
/* ==========================================================================
   REDES SOCIALES
   ========================================================================== */
$wp_customize->add_section('social', array(
  'title' => __('Redes sociales', 'general'),
  'description' => 'Modifica los links de las redes sociales',
  'priority' => 2
));

    // CALENDARIO
      $wp_customize->add_setting('calendario');
      $wp_customize->add_control( new Post_Placeholder_control( $wp_customize, 'calendario', array(
        'label'       => __('Calendario', 'general'),
        'section'     => 'social',
        'settings'    => 'calendario',
        'priority'    => 1,
      )));
    // BOLETINES
      $wp_customize->add_setting('boletines');
      $wp_customize->add_control( new Post_Placeholder_control( $wp_customize, 'boletines', array(
        'label'       => __('Boletines', 'general'),
        'section'     => 'social',
        'settings'    => 'boletines',
        'priority'    => 2,
      )));


    // FACEBOOK
    $wp_customize->add_setting('facebook');
    $wp_customize->add_control( new Post_Placeholder_control( $wp_customize, 'facebook', array(
      'label'       => __('Facebook', 'general'),
      'section'     => 'social',
      'settings'    => 'facebook',
      'priority'    => 3,
    )));
    //YOUTUBE
      $wp_customize->add_setting('youtube');
      $wp_customize->add_control( new Post_Placeholder_control( $wp_customize, 'youtube', array(
        'label'       => __('Youtube', 'general'),
        'section'     => 'social',
        'settings'    => 'youtube',
        'priority'    => 4,
      )));
    // TWITTER
      $wp_customize->add_setting('twitter');
      $wp_customize->add_control( new Post_Placeholder_control( $wp_customize, 'twitter', array(
        'label'       => __('Twitter', 'general'),
        'section'     => 'social',
        'settings'    => 'twitter',
        'priority'    => 5,
      )));
    // FLIKR
      $wp_customize->add_setting('flickr');
      $wp_customize->add_control( new Post_Placeholder_control( $wp_customize, 'flickr', array(
        'label'       => __('Flickr', 'general'),
        'section'     => 'social',
        'settings'    => 'flickr',
        'priority'    => 6,
      )));
?>