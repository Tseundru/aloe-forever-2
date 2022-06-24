<?php

add_action('acf/init', 'create_page_field_group');
function create_page_field_group(){
    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group([
            'key'                                    => 'page_group',
            'title'                                   => 'Options',
            'fields'                                => [],
            'location'                            => [
                [
                    [
                        'param'     => 'post_type',
                        'operator' => '==',
                        'value'       => 'page',
                    ],
            ],
            ],
            'menu_order'                      => 0,
            'position'                             => 'normal',
            'style'                                   => 'default',
            'label_placement'              => 'top',
            'instruction_placement'   => 'label',
            'hide_on_screen'                => '',
            'active'                                 => true,
            'description'                       => '',
        ]);
    endif;
}

add_action('acf/init', 'create_page_subtitle_field');
function create_page_subtitle_field(){
    acf_add_local_field(
      [
    'key'                           => 'page_subtitle',
    'label'                         => 'Sous-titre',
    'parent'                      => 'page_group',
    'name'                        => 'page_subtitle',
    'type'                          => 'text',
    'instructions'            => '',
    'required'                  => 0,
    'conditional_logic'  => 0,
      ]
  );
}