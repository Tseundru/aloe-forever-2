<?php

add_action('acf/init', 'create_blogPost_field_group');
function create_blogPost_field_group(){
    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group([
            'key'                                    => 'blogPost_group',
            'title'                                   => 'Options',
            'fields'                                => [],
            'location'                            => [
                [
                    [
                        'param'     => 'post_type',
                        'operator' => '==',
                        'value'       => 'post',
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


add_action('acf/init', 'create_blogPost_private_content_field');
function create_blogPost_private_content_field(){
    acf_add_local_field(
      [
    'key'                           => 'blogPost_private_content_field',
    'label'                         => 'Contenu privé',
    'parent'                      => 'blogPost_group',
    'name'                        => 'blogPost_private_content',
    'type'                          => 'true_false',
    'instructions'            => 'Indiquez si ce post est réservé aux membres',
    'required'                  => 0,
    'conditional_logic'  => 0,
    'ui'                              => 1,
    'default_value'         => 0,
    'ui_on_text'               => 'Oui',
    'ui_off_text'               => 'Non',
      ]
  );
}