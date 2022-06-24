<?php

add_action('acf/init', 'custom_block_product');

function custom_block_product() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'block-Product',
            'title'             => __('Produit'),
            'description'       => __('Un block pour insérez un produit dans un article'),
            'render_template'   => 'template-parts/blocks/product/product.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'product' ),
        ));
    }
}


add_action('acf/init', 'create_block_product_group');
function create_block_product_group(){
    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group([
            'key'                                    => 'block_product_group',
            'title'                                   => 'Block produits',
            'fields'                                => [],
            'location'                            => [
                [
                    [
                        'param'     => 'block',
                        'operator' => '==',
                        'value'       => 'acf/block-product',
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


add_action('acf/init', 'create_block_product_product_relation_field');
function create_block_product_product_relation_field(){
    acf_add_local_field(
      [
    'key'                           => 'block_product_product_relation_field',
    'label'                         => 'Tarif',
    'parent'                      => 'block_product_group',
    'name'                        => 'product_relation',
    'type'                          => 'relationship',
    'instructions'            => '',
    'required'                  => 1,
    'conditional_logic'  => 0,
    'post_type' => [
      0 => 'product',
      'taxonomy' => '',
    ],
    'filters' =>[
      0 => 'search',
      1 => 'post_type',
      2 => 'taxonomy',
    ],
    'elements' => '',
			'min' => 1,
			'max' => 1,
			'return_format' => 'id',
      ]
  );
}

add_action('acf/init', 'create_block_product_product_description');
function create_block_product_product_description(){
    acf_add_local_field(
      [
    'key'                           => 'block_product_product_description_field',
    'label'                         => 'Description',
    'parent'                      => 'block_product_group',
    'name'                        => 'product_description',
    'type'                          => 'wysiwyg',
    'instructions'            => '',
    'required'                  => 0,
      ]
  );
}