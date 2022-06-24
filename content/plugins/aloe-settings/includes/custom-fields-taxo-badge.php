<?php
add_action('acf/init', 'create_taxonomy_badge_custom_fields');
function  create_taxonomy_badge_custom_fields(){
            if( function_exists('acf_add_local_field_group') ):

              acf_add_local_field_group([
                'key'                                  => 'badge_custom_fields',
                'title'                                 => 'Badge',
                'fields'                              => [],
                'location'                            => [
                  [
                    [
                      'param'     => 'taxonomy',
                      'operator' => '==',
                      'value'       => Post_Type_Product::TAXONOMY_NAME_BADGE,
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


          function create_taxonomy_badge_picture_field(){
            acf_add_local_field([
              'key'                           => 'badge_picture_field',
              'parent'                      => 'badge_custom_fields',
              'label'                         => 'Image',
              'name'                        => 'badge_picture',
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
        add_action('acf/init', 'create_taxonomy_badge_picture_field');

        function create_taxonomy_badge_subtitle_field(){
          acf_add_local_field([
            'key'                         => 'badge_subtitle_field',
            'parent'                      => 'badge_custom_fields',
                  'label'                       => 'Sous titre',
                  'name'                      => 'badge_subtitle',
                  'type'                        => 'text',
                  'instructions'          => '',
                  'required'                => 1,
                  'conditional_logic' => 0,
          ]);
        }
        add_action('acf/init', 'create_taxonomy_badge_subtitle_field');