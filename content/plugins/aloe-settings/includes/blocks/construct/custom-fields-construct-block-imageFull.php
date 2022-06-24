<?php

add_action('acf/init', 'create_block_construct_imageFull');

function create_block_construct_imageFull() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'block-construct-image-full',
            'title'             => __('Image Plein écran'),
            'description'       => __('Un block pour insérez une image pleine écran'),
            'render_template'   => 'template-parts/blocks/construct/imageFull.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
           
        ));
    }
}

add_action('acf/init', 'create_block_construct_imageFull_group');
function create_block_construct_imageFull_group(){
    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group([
            'key'                                    => 'block_construct_imageFull_group',
            'title'                                   => 'Block Image Full',
            'fields'                                => [],
            'location'                            => [
                [
                    [
                        'param'     => 'block',
                        'operator' => '==',
                        'value'       => 'acf/block-construct-image-full',
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


add_action('acf/init', 'create_block_construct_imageFull_image');
function create_block_construct_imageFull_image(){
    acf_add_local_field(
      [
    'key'                           => 'block_construct_imageFull_image_field',
    'label'                         => 'Image',
    'parent'                      => 'block_construct_imageFull_group',
    'name'                        => 'block_construct_imageFull_image',
	'type'                          => 'image',
    'instructions'             => '',
    'required'                   => 1,
    'conditional_logic'    => 0,
    'return_format'         => 'array',
    'preview_size'           => 'full',
    'library'                      => 'all',
    'min_width'                => '',
    'min_height'              => '',
    'min_size'                  => '',
    'max_width'              => '',
    'max_height'            => '',
    'max_size'                => '',
    'mime_types'           => '',
      ]
  );
}

add_action('acf/init', 'create_block_construct_imageFull_image_with_title');
function create_block_construct_imageFull_image_with_title(){
    acf_add_local_field(
      [
    'key'                           => 'block_construct_imageFull_image_with_title_field',
    'label'                         => 'Avec un titre',
    'parent'                      => 'block_construct_imageFull_group',
    'name'                        => 'block_construct_imageFull_image_with_title',
    'type'                          => 'true_false',
    'instructions'            => 'Indiquez si il y a un titre dans l\'image',
    'required'                  => 0,
    'conditional_logic'  => 0,
    'ui'                              => 1,
    'default_value'         => 0,
    'ui_on_text'               => 'Oui',
    'ui_off_text'               => 'Non',
      ]
  );
}

add_action('acf/init', 'create_block_construct_imageFull_image_title');
function create_block_construct_imageFull_image_title(){
    acf_add_local_field(
      [
    'key'                           => 'block_construct_imageFull_image_title_field',
    'label'                         => 'Intro description',
    'parent'                      => 'block_construct_imageFull_group',
    'name'                        => 'block_construct_imageFull_image_title',
    'type'                          => 'text',
    'instructions'            => '',
    'required'                  => 1,
    'conditional_logic'  => [
        'field'         => 'block_construct_imageFull_image_with_title_field',
        'operator' => '==',
         'value'       => '1'
      ],
      ]
  );
}


add_action('acf/init', 'create_block_construct_imageFull_image_title_size');
function create_block_construct_imageFull_image_title_size()
{
    acf_add_local_field(
        [
            'key'                           => 'block_construct_imageFull_image_title_size_field',
            'label'                         => 'Taille du titre',
            'parent'                      => 'block_construct_imageFull_group',
            'name'                        => 'block_construct_imageFull_image_title_size',
            'type'                          => 'select',
            'instructions'            => '',
            'required'                  => 1,
            'choices'                   => [
                '' => 'normal',
                'imageTitle--medium' => 'medium',
                'imageTitle--large' => 'large'
            ],
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'return_format' => 'value',
            'ajax' => 0,
        ]
    );
}
