<?php
/*
Title: Menu Fields
Post Type: page
*/

piklist('field', array(
  'type' => 'group'
  ,'field' => 'menu_group'
  ,'label' => 'Menu Group'
  ,'description' => 'Menu fields'
  ,'add_more' => true
  ,'fields' => array(

    // category
    array(
      'type' => 'text'
      ,'field' => 'menu_category'
      ,'label' => __('Menu Category')
      ,'required' => true
      ,'columns' => 8
      ,'attributes' => array(
        'placeholder' => 'e.g. - Flame Grilled Burgers'
      )
    )

    // serving sizes
    ,array(
      'type' => 'select'
      ,'field' => 'menu_serving_sizes'
      ,'label' => __('Serving Sizes')
      ,'choices' => array(
        'serving_size_3' => '6oz',
        'serving_size_4' => '12oz',
        'serving_size_5' => '16oz',
        'serving_size_6' => '24oz',
        'serving_size_7' => 'Gls',
        'serving_size_8' => 'Bottle',
        'serving_size_1' => 'Glass 16oz',
        'serving_size_2' => 'Growler 32oz | 64oz'
      )
      ,'required' => false
      ,'columns' => 4
      ,'attributes' => array(
        'multiple' => 'multiple'
      )
    )

    // menu items
    ,array(
      'type' => 'group'
      ,'field' => 'menu_item_group'
      ,'label' => __('Menu Items')
      ,'required' => true
      ,'add_more' => true
      ,'fields' => array(

        array(
          'type' => 'text'
          ,'field' => 'menu_item_name'
          ,'label' => __('Name')
          ,'required' => true
          ,'columns' => 12
          ,'attributes' => array(
            'placeholder' => 'e.g. - Kingsboro Burger'
          )
        )

        ,array(
          'type' => 'text'
          ,'field' => 'menu_item_description'
          ,'label' => __('Description')
          ,'required' => true
          ,'columns' => 12
          ,'attributes' => array(
            'placeholder' => 'e.g. - Local beef topped with your choice of cheese.'
          )
        )

        ,array(
          'type' => 'text'
          ,'field' => 'menu_item_price'
          ,'label' => __('Price')
          ,'required' => false
          ,'columns' => 12
          ,'add_more' => true
          ,'attributes' => array(
            'placeholder' => 'e.g. - 12.99'
          )
        )
      )
    )

  )
));
