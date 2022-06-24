<?php
add_action('acf/init', 'create_taxonomy_label_custom_fields');
function  create_taxonomy_label_custom_fields(){
            if( function_exists('acf_add_local_field_group') ):

              acf_add_local_field_group([
                'key'                                  => 'label_custom_fields',
                'title'                                 => 'Label',
                'fields'                              => [],
                'location'                            => [
                  [
                    [
                      'param'     => 'taxonomy',
                      'operator' => '==',
                      'value'       => Post_Type_Product::TAXONOMY_NAME_LABEL,
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


          function create_taxonomy_label_picture_field(){
            acf_add_local_field([
                    'key'                           => 'label_picture_field',
                    'parent'                      => 'label_custom_fields',
              'label'                         => 'Image',
              'name'                        => 'label_picture',
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
        add_action('acf/init', 'create_taxonomy_label_picture_field');