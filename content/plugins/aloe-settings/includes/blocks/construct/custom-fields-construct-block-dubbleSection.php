<?php

add_action('acf/init', 'create_block_construct_dubbleSection');

function create_block_construct_dubbleSection() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'block-construct-dubbleSection',
            'title'             => __('Section Double'),
            'description'       => __('Un block pour insérez une dubbleSection'),
            'render_template'   => 'template-parts/blocks/construct/dubbleSection.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
           
        ));
    }
}

add_action('acf/init', 'create_block_construct_dubbleSection_group');
function create_block_construct_dubbleSection_group(){
    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group([
            'key'                                    => 'block_construct_dubbleSection_group',
            'title'                                   => 'Block Double Section',
            'fields'                                => [],
            'location'                            => [
                [
                    [
                        'param'     => 'block',
                        'operator' => '==',
                        'value'       => 'acf/block-construct-dubblesection',
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

add_action('acf/init', 'create_block_construct_dubbleSection_left_color');
function create_block_construct_dubbleSection_left_color()
{
    acf_add_local_field(
        [
            'key'                           => 'block_construct_dubbleSection_left_color_field',
            'label'                         => 'Couleur de la colonne de gauche',
            'parent'                      => 'block_construct_dubbleSection_group',
            'name'                        => 'block_construct_dubbleSection_left_color',
            'type'                          => 'select',
            'instructions'            => '',
            'required'                  => 1,
            'choices'                   => [
                'primary' => 'Primaire',
                'secondary' => 'Secondaire',
            ],
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'return_format' => 'value',
            'ajax' => 0,
        ]
    );
}

add_action('acf/init', 'create_block_construct_dubbleSection_left_description');
function create_block_construct_dubbleSection_left_description(){
    acf_add_local_field(
      [
    'key'                           => 'block_construct_dubbleSection_left_description_field',
    'label'                         => 'Description colonne gauche',
    'parent'                      => 'block_construct_dubbleSection_group',
    'name'                        => 'block_construct_dubbleSection_left_description',
    'type'                          => 'wysiwyg',
    'instructions'            => '',
    'required'                  => 1,
      ]
  );
}


add_action('acf/init', 'create_block_construct_dubbleSection_right_color');
function create_block_construct_dubbleSection_right_color()
{
    acf_add_local_field(
        [
            'key'                           => 'block_construct_dubbleSection_right_color_field',
            'label'                         => 'Couleur de la colonne de droite',
            'parent'                      => 'block_construct_dubbleSection_group',
            'name'                        => 'block_construct_dubbleSection_right_color',
            'type'                          => 'select',
            'instructions'            => '',
            'required'                  => 1,
            'choices'                   => [
                'primary' => 'Primaire',
                'secondary' => 'Secondaire',
            ],
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'return_format' => 'value',
            'ajax' => 0,
        ]
    );
}

add_action('acf/init', 'create_block_construct_dubbleSection_right_description');
function create_block_construct_dubbleSection_right_description(){
    acf_add_local_field(
      [
    'key'                           => 'block_construct_dubbleSection_right_description_field',
    'label'                         => 'Description colonne droite',
    'parent'                      => 'block_construct_dubbleSection_group',
    'name'                        => 'block_construct_dubbleSection_right_description',
    'type'                          => 'wysiwyg',
    'instructions'            => '',
    'required'                  => 1,
      ]
  );
}

