<?php
/*
Title: Menu Fields
Post Type: page
*/

$colors = array(
  '#3d5265' => 'Navy',
  '#bf6059' => 'Red',
  '#212121' => 'Black'
);

$fonts = array(
  'Pathway Gothic One' => 'Pathway Gothic',
  'industry_incbase' => 'Industry, Inc Base',
  'industry_incbevel' => 'Industry, Inc Bevel',
  'industry_inc3d' => 'Industry, Inc 3D',
  'industry_incin-n-out' => 'Industry, In n Out'
);

$serving_sizes = array(
  '6oz' => '6oz',
  '12oz' => '12oz',
  '16oz' => '16oz',
  '24oz' => '24oz',
  'Gls' => 'Gls',
  'Bottle' => 'Bottle',
  'Glass 16oz' => 'Glass 16oz',
  'Growler 32oz | 64oz' => 'Growler 32oz | 64oz'
);

$columns = array(
  'span3' => '3 Columns',
  'span5' => '5 Columns',
  'span7' => '7 Columns'
);

$alignments = array(
  'align-left' => 'Left',
  'align-center' => 'Center',
  'align-right' => 'Right'
);

piklist('field', array(
  'type' => 'group'
  ,'field' => 'menu_section'
  ,'label' => __('Menu', 'menu-metabox')
  ,'add_more' => true
  ,'fields' => array(
    array(
      'type' => 'text'
      ,'field' => 'menu_title'
      ,'label' => __('Menu Title', 'menu-metabox')
      ,'columns' => 6
    )
    ,array(
      'type' => 'select'
      ,'field' => 'menu_title_font'
      ,'label' => __('Menu Title Font', 'menu-metabox')
      ,'columns' => 3
      ,'choices' => $fonts
      ,'value' => 'industry_incbevel'
    )
    ,array(
      'type' => 'select'
      ,'field' => 'menu_title_color'
      ,'label' => __('Menu Title Color', 'menu-metabox')
      ,'columns' => 3
      ,'choices' => $colors
      ,'value' => '#3d5265'
    )
    ,array(
      'type' => 'select'
      ,'field' => 'menu_width'
      ,'label' => __('Menu Width', 'menu-metabox')
      ,'columns' => 3
      ,'choices' => $columns
      ,'value' => 'span5'
    )
    ,array(
      'type' => 'number'
      ,'field' => 'menu_coordinate_x'
      ,'label' => __('Menu Offset Left (X-axis)', 'menu-metabox')
      ,'columns' => 3
      ,'attributes' => array(
        'min' => 'none'
      )
    )
    ,array(
      'type' => 'number'
      ,'field' => 'menu_coordinate_y'
      ,'label' => __('Menu Offset Top (Y-axis)', 'menu-metabox')
      ,'columns' => 3
      ,'attributes' => array(
        'min' => 'none'
      )
    )
    ,array(
      'type' => 'select'
      ,'field' => 'menu_alignment'
      ,'label' => __('Content Alignment', 'menu-metabox')
      ,'columns' => 3
      ,'choices' => $alignments
      ,'value' => 'align-left'
    )
    ,array(
      'type' => 'radio'
      ,'field' => 'menu_layout'
      ,'label' => __('Menu Layout', 'menu-fields')
      ,'columns' => 6
      ,'choices' => array(
        'list' => 'List'
        ,'grid' => 'Grid'
      )
    )
    ,array(
      'type' => 'select'
      ,'field' => 'menu_serving_sizes'
      ,'label' => __('Serving Sizes', 'menu-fields')
      ,'columns' => 6
      ,'choices' => $serving_sizes
      ,'attributes' => array(
        'multiple' => 'multiple'
      )
    )
    ,array(
      'type' => 'group'
      ,'field' => 'menu_item'
      ,'add_more' => true
      ,'fields' => array(
        array(
          'type' => 'text'
          ,'field' => 'menu_item_name'
          ,'label' => __('Item Name', 'menu-metabox')
          ,'columns' => 6
        )
        ,array(
          'type' => 'select'
          ,'field' => 'menu_item_font'
          ,'label' => __('Item Name Font', 'menu-metabox')
          ,'choices' => $fonts
          ,'value' => 'Pathway Gothic One'
          ,'columns' => 3
        )
        ,array(
          'type' => 'select'
          ,'field' => 'menu_item_color'
          ,'label' => __('Item Name Color', 'menu-metabox')
          ,'choices' => $colors
          ,'value' => '#3d5265'
          ,'columns' => 3
        )
        ,array(
          'type' => 'text'
          ,'field' => 'menu_item_description'
          ,'label' => __('Item Description', 'menu-metabox')
          ,'columns' => 12
        )
        ,array(
          'type' => 'text'
          ,'field' => 'menu_item_price1'
          ,'label' => __('Item Price #1', 'menu-metabox')
          ,'columns' => 3
        )
        ,array(
          'type' => 'text'
          ,'field' => 'menu_item_price2'
          ,'label' => __('Item Price #2', 'menu-metabox')
          ,'columns' => 3
        )
        ,array(
          'type' => 'radio'
          ,'field' => 'menu_item_type'
          ,'label' => __('Item Type', 'menu-metabox')
          ,'choices' => array(
            'regular' => 'Regular',
            'addon' => 'Add On',
          )
          ,'value' => 'regular'
          ,'columns' => 3
        )
        ,array(
          'type' => 'checkbox'
          ,'field' => 'menu_item_grouping'
          ,'label' => __('Item Group', 'menu-metabox')
          ,'help' => "Gives a Grouping Style To Item Header.  Recommended when an item has subitems."
          ,'choices' => array(
              true => 'Enable'
            )
          ,'columns' => 3
        )
        ,array(
          'type' => 'group'
          ,'field' => 'menu_subitem'
          ,'add_more' => true
          ,'fields' => array(
            array(
              'type' => 'text'
              ,'field' => 'menu_subitem_name'
              ,'label' => __('Subitem Name', 'menu-metabox')
              ,'columns' => 9
            )
            ,array(
              'type' => 'text'
              ,'field' => 'menu_subitem_description'
              ,'label' => __('Subitem Description', 'menu-metabox')
              ,'columns' => 12
            )
            ,array(
              'type' => 'text'
              ,'field' => 'menu_subitem_price1'
              ,'label' => __('Subitem Price #1', 'menu-metabox')
              ,'columns' => 6
            )
            ,array(
              'type' => 'text'
              ,'field' => 'menu_subitem_price2'
              ,'label' => __('Subitem Price #2', 'menu-metabox')
              ,'columns' => 6
            )
          )
        )
      )
    )
  )
));

