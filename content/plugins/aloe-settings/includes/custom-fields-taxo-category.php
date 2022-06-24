<?php
add_action('acf/init', 'create_taxonomy_category_custom_fields');
function  create_taxonomy_category_custom_fields(){
            if( function_exists('acf_add_local_field_group') ):

              acf_add_local_field_group([
                'key'                                  => 'category_custom_fields',
                'title'                                 => 'Category',
                'fields'                              => [],
                'location'                            => [
                  [
                    [
                      'param'     => 'taxonomy',
                      'operator' => '==',
                      'value'       => Post_Type_Product::TAXONOMY_NAME_CATEGORY,
                    ],
                  ],
                ],
                'menu_order'                     => 0,
                'position'                            => 'normal',
                'style'                                 => 'default',
                'label_placement'            => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen'              => '',
                'active'                               => true,
                'description'                     => '',
              ]);

              endif;
          }

      

          function create_taxonomy_category_subtitle_field(){
            acf_add_local_field([
              'key'                         => 'category_subtitle_field',
              'parent'                      => 'category_custom_fields',
                    'label'                       => 'Sous titre',
                    'name'                      => 'category_subtitle',
                    'type'                        => 'text',
                    'instructions'          => '',
                    'required'                => 1,
                    'conditional_logic' => 0,
            ]);
          }
          add_action('acf/init', 'create_taxonomy_category_subtitle_field');

          function create_taxonomy_category_picture_field(){
            acf_add_local_field([
                    'key'                           => 'category_picture_field',
                    'parent'                      => 'category_custom_fields',
              'label'                         => 'Image',
              'name'                        => 'category_picture',
              'type'                          => 'image',
              'instructions'             => '',
              'required'                   => 1,
              'conditional_logic'    => 0,
                    'return_format'         => 'array',
              'preview_size'           => 'thumbnail',
              'library'                       => 'all',
              'min_width'                => '',
              'min_height'              => '',
              'min_size'                  => '',
              'max_width'              => '',
              'max_height'            => '',
              'max_size'                => '',
              'mime_types'          => '',
            ]);
        }
        add_action('acf/init', 'create_taxonomy_category_picture_field');

        function create_taxonomy_category_order_field(){
          acf_add_local_field([
            'key'                         => 'category_order_field',
            'parent'                      => 'category_custom_fields',
                  'label'                       => 'Ordre',
                  'name'                      => 'category_order',
                  'type'                        => 'text',
                  'instructions'          => '',
                  'required'                => 1,
                  'conditional_logic' => 0,
          ]);
        }
        add_action('acf/init', 'create_taxonomy_category_order_field');
