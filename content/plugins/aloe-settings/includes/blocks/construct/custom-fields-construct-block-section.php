<?php

add_action('acf/init', 'create_block_construct_section');

function create_block_construct_section() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'block-construct-section',
            'title'             => __('Section'),
            'description'       => __('Un block pour insérez une section'),
            'render_template'   => 'template-parts/blocks/construct/section.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
           
        ));
    }
}

add_action('acf/init', 'create_block_construct_section_group');
function create_block_construct_section_group(){
    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group([
            'key'                                    => 'block_construct_section_group',
            'title'                                   => 'Block Section',
            'fields'                                => [],
            'location'                            => [
                [
                    [
                        'param'     => 'block',
                        'operator' => '==',
                        'value'       => 'acf/block-construct-section',
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


add_action('acf/init', 'create_block_construct_section_description');
function create_block_construct_section_description(){
    acf_add_local_field(
      [
    'key'                           => 'block_construct_section_description_field',
    'label'                         => 'Description',
    'parent'                      => 'block_construct_section_group',
    'name'                        => 'create_block_construct_section_description',
    'type'                          => 'wysiwyg',
    'instructions'            => '',
    'required'                  => 1,
      ]
  );
}