<?php
//---------------------------------------------------------------
# create an options page
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
}

//---------------------------------------------------------------
# create flexible content blocks
if( function_exists('acf_add_local_field_group') ) {
  acf_add_local_field_group(array (
    'key' => 'group_c7543cb8197a736d91d68365340ba84f',
    'title' => 'Flex Content',
    'fields' => array (
      array (
        'key' => 'field_f1c5f59fb5bc99866aa64b48d81e6fc7',
        'label' => 'Flex Content',
        'name' => 'flex_content',
        'type' => 'flexible_content',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'button_label' => 'Add Content',
        'min' => '',
        'max' => '',
        'layouts' => array (
          array (
            'key' => 'layout_0ce48267ef48ab4e7dd3e10ae85f30b6',
            'name' => 'full_width',
            'label' => 'Full Width',
            'display' => 'block',
            'sub_fields' => array (
              array (
                'key' => 'field_5847b3627f2998e000ca6fc466435b53',
                'label' => 'Content',
                'name' => 'content',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
              ),
            ),
            'min' => '',
            'max' => '',
          ),
          array (
            'key' => 'layout_d41d8cd98f00b204e9800998ecf8427e',
            'name' => 'two_column',
            'label' => 'Two Column',
            'display' => 'block',
            'sub_fields' => array (
              array (
                'key' => 'field_97302cd11a8233430d8d6696a5875772',
                'label' => 'Column1',
                'name' => 'column1',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => 50,
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
              ),
              array (
                'key' => 'field_98a11d4569125f9d8ee0b21eff1e22d0',
                'label' => 'Column2',
                'name' => 'column2',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => 50,
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
              ),
            ),
            'min' => '',
            'max' => '',
          ),
          array (
            'key' => 'layout_d41d8cd98f00b204e9800998ecf8427e',
            'name' => 'three_column',
            'label' => 'Three Column',
            'display' => 'block',
            'sub_fields' => array (
              array (
                'key' => 'field_2fc6640755b88b443320a0458f4a5fac',
                'label' => 'Column1',
                'name' => 'column1',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => 33,
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
              ),
              array (
                'key' => 'field_d41d8cd98f00b204e9800998ecf8427e',
                'label' => 'Column2',
                'name' => 'column2',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => 33,
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
              ),
              array (
                'key' => 'field_d41d8cd98f00b204e9800998ecf8427e',
                'label' => 'Column3',
                'name' => 'column3',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => 33,
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
              ),
            ),
            'min' => '',
            'max' => '',
          ),
          array (
            'key' => 'layout_10ee0952976fa4bde3727235241b727e',
            'name' => 'four_column',
            'label' => 'Four Column',
            'display' => 'block',
            'sub_fields' => array (
              array (
                'key' => 'field_843ed9fc8168dde84957a5ee75cf4f09',
                'label' => 'Column1',
                'name' => 'column1',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => 25,
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
              ),
              array (
                'key' => 'field_d56f6a36b75f2a4ef5fe458d4581a699',
                'label' => 'Column2',
                'name' => 'column2',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => 25,
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
              ),
              array (
                'key' => 'field_15aded690fb1b7a9b0bf5dcb9edbe62e',
                'label' => 'Column3',
                'name' => 'column3',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => 25,
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
              ),
              array (
                'key' => 'field_461cb9d6c033eeef242e74dfb2ab2c32',
                'label' => 'Column4',
                'name' => 'column4',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => 25,
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
              ),
            ),
            'min' => '',
            'max' => '',
          ),
        ),
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
  ));
}