<?php
/*
Title: Hero Fields
Post Type: page
*/

// headline
piklist('field', array(
  'type' => 'text'
  ,'field' => 'hero_headline'
  ,'label' => __('Hero Headline')
  ,'required' => false
  ,'columns' => 12
  ,'attributes' => array(
    //'placeholder' => 'e.g. - Market Food Pod'
  )
));

// description
piklist('field', array(
  'type' => 'editor'
  ,'field' => 'hero_description'
  ,'label' => __('Hero Description')
  ,'required' => false
  ,'columns' => 12
  ,'options' => array( // Pass any option that is accepted by wp_editor()
    'wpautop' => true,
    'media_buttons' => true,
    'shortcode_buttons' => true,
    'teeny' => false,
    'dfw' => false,
    'quicktags' => true,
    'drag_drop_upload' => true,
    'tinymce' => array(
      'resize' => false,
      'wp_autoresize_on' => true
    )
  )
));

// call to action
piklist('field', array(
  'type' => 'text'
  ,'field' => 'hero_cta'
  ,'label' => __('Hero Call to Action')
  ,'required' => false
  ,'columns' => 12
  ,'attributes' => array(
    //'placeholder' => 'e.g. - Explore Menu'
  )
));

// image
piklist('field', array(
  'type' => 'file'
  ,'field' => 'hero_image'
  ,'label' => __('Hero Image')
  ,'required' => false
  ,'columns' => 12
  ,'options' => array(
    'basic' => true // set field to basic uploader
  )
));
