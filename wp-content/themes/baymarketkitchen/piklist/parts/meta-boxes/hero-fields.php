<?php
/*
Title: Hero Fields
Post Type: page
*/

piklist('field', array(
  'type' => 'group'
  ,'field' => 'hero_group'
  ,'label' => 'Page Hero'
  ,'description' => 'Page hero that appears at the top of the page'
  ,'add_more' => false
  ,'fields' => array(

    // headline
    array(
      'type' => 'text'
      ,'field' => 'hero_headline'
      ,'label' => __('Hero Headline')
      ,'required' => true
      ,'columns' => 12
      ,'attributes' => array(
        'placeholder' => 'e.g. - Market Food Pod'
      )
    )

    // description
    ,array(
      'type' => 'text'
      ,'field' => 'hero_description'
      ,'label' => __('Hero Description')
      ,'required' => false
      ,'columns' => 12
      ,'attributes' => array(
        'placeholder' => 'e.g. - With an evolving range of highlighted products...'
      )
    )

    // image
    ,array(
      'type' => 'file'
      ,'field' => 'hero_image'
      ,'label' => __('Hero Image')
      ,'required' => false
      ,'columns' => 12
      ,'options' => array(
        'basic' => true // set field to basic uploader
      )
    )

  )
));
