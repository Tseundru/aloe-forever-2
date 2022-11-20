<?php

add_action('acf/init', 'custom_block_carousel_product');

function custom_block_carousel_product() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'block-Carousel-Product',
            'title'             => __('Carousel Produits'),
            'description'       => __('Un block pour insérez un carousel de produits dans un article'),
            'render_template'   => 'template-parts/blocks/product/carousel-product.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'products' ),
        ));
    }
}


add_action('acf/init', 'create_block_products_group');
function create_block_products_group(){
    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group([
            'key'                                    => 'block_products_group',
            'title'                                   => 'Block produits',
            'fields'                                => [],
            'location'                            => [
                [
                    [
                        'param'     => 'block',
                        'operator' => '==',
                        'value'       => 'acf/block-carousel-product',
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


add_action('acf/init', 'create_block_products_products_relation_field');
function create_block_products_products_relation_field(){
    acf_add_local_field(
      [
    'key'                           => 'block_products_products_relation_field',
    'label'                         => 'produits',
    'parent'                      => 'block_products_group',
    'name'                        => 'products_relation',
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
			'min' => 4,
			'max' => 15,
			'return_format' => 'id',
      ]
  );
}