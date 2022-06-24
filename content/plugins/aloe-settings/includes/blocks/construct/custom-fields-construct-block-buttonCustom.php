<?php

add_action('acf/init', 'create_block_construct_buttonCustom');

function create_block_construct_buttonCustom() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'block-construct-button-custom',
            'title'             => __('Boutton custom'),
            'description'       => __('Un block pour insérez une buttonCustom'),
            'render_template'   => 'template-parts/blocks/construct/buttonCustom.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
           
        ));
    }
}

add_action('acf/init', 'create_block_construct_buttonCustom_group');
function create_block_construct_buttonCustom_group(){
    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group([
            'key'                                    => 'block_construct_buttonCustom_group',
            'title'                                   => 'Block Boutton Custom',
            'fields'                                => [],
            'location'                            => [
                [
                    [
                        'param'     => 'block',
                        'operator' => '==',
                        'value'       => 'acf/block-construct-button-custom',
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


add_action('acf/init', 'create_block_construct_buttonCustom_title');
function create_block_construct_buttonCustom_title(){
    acf_add_local_field(
      [
    'key'                           => 'block_construct_buttonCustom_title_field',
    'label'                         => 'Texte du bouton',
    'parent'                      => 'block_construct_buttonCustom_group',
    'name'                        => 'block_construct_buttonCustom_title',
    'type'                          => 'text',
    'instructions'            => '',
    'required'                  => 1,
      ]
  );
}

add_action('acf/init', 'create_block_construct_buttonCustom_link');
function create_block_construct_buttonCustom_link(){
    acf_add_local_field(
      [
    'key'                           => 'block_construct_buttonCustom_link_field',
    'label'                         => 'Lien du bouton',
    'parent'                      => 'block_construct_buttonCustom_group',
    'name'                        => 'block_construct_buttonCustom_link',
    'type'                          => 'link',
    'instructions'            => '',
    'required'                  => 1,
      ]
  );
}