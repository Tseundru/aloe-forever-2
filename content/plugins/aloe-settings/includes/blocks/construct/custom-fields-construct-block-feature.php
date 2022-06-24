<?php

add_action('acf/init', 'create_block_construct_feature');

function create_block_construct_feature()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'block-construct-feature',
            'title'             => __('Feature'),
            'description'       => __('Un block pour insérez une feature'),
            'render_template'   => 'template-parts/blocks/construct/feature.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',

        ));
    }
}

add_action('acf/init', 'create_block_construct_feature_group');
function create_block_construct_feature_group()
{
    if (function_exists('acf_add_local_field_group')) :
        acf_add_local_field_group([
            'key'                                    => 'block_construct_feature_group',
            'title'                                   => 'Block Feature',
            'fields'                                => [],
            'location'                            => [
                [
                    [
                        'param'     => 'block',
                        'operator' => '==',
                        'value'       => 'acf/block-construct-feature',
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


add_action('acf/init', 'create_block_construct_feature_column');
function create_block_construct_feature_column()
{
    acf_add_local_field(
        [
            'key'                           => 'block_construct_feature_column_field',
            'label'                         => 'Nombre de colonnes',
            'parent'                      => 'block_construct_feature_group',
            'name'                        => 'block_construct_feature_column',
            'type'                          => 'select',
            'instructions'            => '',
            'required'                  => 1,
            'choices'                   => [
                3 => '3',
                4 => '4',
            ],
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'return_format' => 'value',
            'ajax' => 0,
        ]
    );
}


add_action('acf/init', 'create_block_construct_feature_item_repeater');

function create_block_construct_feature_item_repeater()
{
    acf_add_local_field(
        [
            'key'                           => 'block_construct_feature_item_repeater_field',
            'label'                         => 'Item',
            'parent'                      => 'block_construct_feature_group',
            'name'                        => 'block_construct_feature_item_repeater',
            'type'                          => 'repeater',
            'instructions'            => '',
            'required'                  => 1,
            'min'                           => 0,
            'max'                          => 0,
            'layout'                       => 'table',
            'button_label'                => 'Ajouter un élément',
            'sub_fields'                =>[
                [
                    'key' => 'image_feature_item_repeater_field',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
                    'return_format' => 'array',
					'preview_size' => 'full',
					'library' => 'all',
                    'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
                ],
                [
                    'key' => 'title_feature_item_repeater_field',
					'label' => 'Titre',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
                    'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
                ],
                [
                    'key' => 'description_feature_item_repeater_field',
					'label' => 'description',
					'name' => 'description',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
                    'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
                ]

            ]
        ]
    );
}
