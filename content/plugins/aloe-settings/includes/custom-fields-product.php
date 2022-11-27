<?php 
/**
 * Groupe de champs des produits
 *
 * 
 */
// Je crée le groupe de champs pour les produits



add_action('acf/init', 'create_product_field_group');
function create_product_field_group(){
    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group([
            'key'                                    => 'product_group',
            'title'                                   => 'Informations sur le produit',
            'fields'                                => [],
            'location'                            => [
                [
                    [
                        'param'     => 'post_type',
                        'operator' => '==',
                        'value'       => Post_Type_Product::NAME,
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

add_action('acf/init', 'create_product_is_variant_field');
function create_product_is_variant_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_is_variant_field',
    'label'                         => 'Produits dérivé',
    'parent'                      => 'product_group',
    'name'                        => 'product_is_variant',
    'type'                          => 'true_false',
    'instructions'            => 'Indiqué si ce produit est une variante d\'un produit similaire',
    'required'                  => 0,
    'conditional_logic'  => 0,
    'ui'                              => 1,
    'default_value'         => 0,
    'ui_on_text'               => 'Oui',
    'ui_off_text'               => 'Non',
      ]
  );
}

add_action('acf/init', 'create_product_variant_field');
function create_product_variant_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_variant_field',
    'label'                         => 'Produit original',
    'parent'                      => 'product_group',
    'name'                        => 'product_variant',
    'type'                          => 'relationship',
    'instructions'            => '',
    'required'                  => 1,
    'conditional_logic'  => [
      'field'         => 'product_is_variant_field',
      'operator' => '==',
       'value'       => '1'
    ],
    'post_type'       => 
      [
        0  => 'product',
      ],
      'taxonomy'    => '',
      'filters'           => 
      [
				0   => 'search',
				1   => 'post_type',
				2   => 'taxonomy',
			],
      'elements'        => '',
			'min'                   => 1,
			'max'                  => 1,
			'return_format' => 'object',
    ]);
}


add_action('acf/init', 'create_product_subtitle_field');
function create_product_subtitle_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_subtitle',
    'label'                         => 'Sous-titre',
    'parent'                      => 'product_group',
    'name'                        => 'product_subtitle',
    'type'                          => 'text',
    'instructions'            => '',
    'required'                  => 1,
    'conditional_logic'  => [
      'field'         => 'product_is_variant_field',
      'operator' => '==',
       'value'       => '0'
    ],
      ]
  );
}

add_action('acf/init', 'create_product_ref_field');
function create_product_ref_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_ref',
    'label'                         => 'Référence',
    'parent'                      => 'product_group',
    'name'                        => 'product_ref',
    'type'                          => 'text',
    'instructions'            => '',
    'required'                  => 1,
    'conditional_logic'  => 0,
      ]
  );
}

add_action('acf/init', 'create_product_price_field');
function create_product_price_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_price',
    'label'                         => 'Tarif',
    'parent'                      => 'product_group',
    'name'                        => 'product_price',
    'type'                          => 'number',
    'instructions'            => '',
    'required'                  => 1,
    'conditional_logic'  =>0,
      ]
  );
}

add_action('acf/init', 'create_product_aloe_percentage_field');
function create_product_aloe_percentage_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_aloe_percentage',
    'label'                         => 'Teneur en aloe vera',
    'parent'                      => 'product_group',
    'name'                        => 'product_aloe_percentage',
    'type'                          => 'number',
    'instructions'            => '',
    'required'                  => 0,
    'conditional_logic'  => 0,
      ]
  );
}


add_action('acf/init', 'create_product_content_field');
function create_product_content_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_content',
    'label'                         => 'Contenu',
    'parent'                      => 'product_group',
    'name'                        => 'product_content',
    'type'                          => 'wysiwyg',
    'instructions'            => '',
    'required'                  => 1,
    'conditional_logic'  => 0,
      ]
  );
}

add_action('acf/init', 'create_product_pack_field');
function create_product_pack_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_pack',
    'label'                         => 'Produit composé',
    'parent'                      => 'product_group',
    'name'                        => 'product_pack',
    'type'                          => 'true_false',
    'instructions'            => 'Indiquez si ce produit est composé d\'autres produits',
    'required'                  => 0,
    'conditional_logic'  => 0,
    'ui'                              => 1,
    'default_value'         => 0,
    'ui_on_text'               => 'Oui',
    'ui_off_text'               => 'Non',
      ]
  );
}

add_action('acf/init', 'create_product_is_fbo_field');
function create_product_is_fbo_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_is_fbo_field',
    'label'                         => 'Produits FBO',
    'parent'                      => 'product_group',
    'name'                        => 'product_is_fbo',
    'type'                          => 'true_false',
    'instructions'            => 'Indiqué si ce produit permet de devenir distributeur ou client privilégié',
    'required'                  => 0,
    'conditional_logic'  => [
      'field'         => 'product_pack',
      'operator' => '==',
       'value'       => '1'
    ],
    'ui'                              => 1,
    'default_value'         => 0,
    'ui_on_text'               => 'Oui',
    'ui_off_text'               => 'Non',
      ]
  );
}

add_action('acf/init', 'create_product_pack_products_field');
function create_product_pack_products_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_pack_products',
    'label'                         => 'Produits du pack',
    'parent'                      => 'product_group',
    'name'                        => 'product_pack_products',
    'type'                          => 'relationship',
    'instructions'            => '',
    'required'                  => 1,
    'conditional_logic'  => [
      'field'         => 'product_pack',
      'operator' => '==',
       'value'       => '1'
    ],
    'post_type'       => 
      [
        0  => 'product',
      ],
      'taxonomy'    => '',
      'filters'           => 
      [
				0   => 'search',
				1   => 'post_type',
				2   => 'taxonomy',
			],
      'elements'        => '',
			'min'                   => 2,
			'max'                  => 99,
			'return_format' => 'object',
    ]);
}

add_action('acf/init', 'create_product_intro_field');
function create_product_intro_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_intro',
    'label'                         => 'Intro',
    'parent'                      => 'product_group',
    'name'                        => 'product_intro',
    'type'                          => 'wysiwyg',
    'instructions'            => '',
    'required'                  => 1,
    'conditional_logic'  => [
      'field'         => 'product_is_variant_field',
      'operator' => '==',
       'value'       => '0'
    ],
      ]
  );
}

add_action('acf/init', 'create_product_descrition_intro_field');
function create_product_descrition_intro_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_descrition_intro',
    'label'                         => 'Intro description',
    'parent'                      => 'product_group',
    'name'                        => 'product_descrition_intro',
    'type'                          => 'text',
    'instructions'            => '',
    'required'                  => 1,
    'conditional_logic'  => [
      'field'         => 'product_is_variant_field',
      'operator' => '==',
       'value'       => '0'
    ],
      ]
  );
}


add_action('acf/init', 'create_product_description_field');
function create_product_description_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_description',
    'label'                         => 'Description 2',
    'parent'                      => 'product_group',
    'name'                        => 'product_description',
    'type'                          => 'wysiwyg',
    'instructions'            => 'Décrivez le produit',
    'required'                  => 1,
    'conditional_logic'  => [
      'field'         => 'product_is_variant_field',
      'operator' => '==',
       'value'       => '0'
    ],
      ]
  );
}

add_action('acf/init', 'create_product_strengths_list_repeater_field');
function create_product_strengths_list_repeater_field(){
  acf_add_local_field(
      [
      'key'                                   => 'product_strengths_list_repeater_field',
      'label'                                 => 'Points forts',
      'name'                               => 'product_strengths_list',
      'parent'                             => 'product_group',
      'type'                                 => 'repeater',
      'instructions'                   => 'Points forts du produit une ligne par idée',
      'required'                         => 0,
      'conditional_logic'         => [
                      'field'                => 'product_is_variant_field',
                      'operator'        => '==',
                      'value'              => '0'
                    ],
      'collapsed'                      => 'strength_field',
      'min'                                 => 0,
      'max'                                => 0,
      'layout'                            => 'table',
      'button_label'                => 'Ajouter un élément',
      'sub_fields'                    => [
      [
        'key' => 'strength_field',
        'label' => 'Point fort',
        'name' => 'strength',
        'type' => 'text',
        'instructions' => '',
        'required' => 1,
        'conditional_logic'  => 0,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
              ],
          ]
      ]
  );
}


add_action('acf/init', 'create_product_picture_gallery_field');
function create_product_picture_gallery_field(){
  acf_add_local_field([
          'key'                           => 'product_picture_gallery_field',
          'parent'                      => 'product_group',
    'label'                         => 'Galerie photo',
    'name'                        => 'product_picture_gallery',
    'type'                          => 'gallery',
    'instructions'            => 'Illustrez le produit avec quelques photos (6 photos max)',
    'required'                  => 1,
    'conditional_logic'  => 0,
          'return_format'        => 'array',
    'preview_size'          => 'medium',
    'insert'                      => 'append',
    'library'                     => 'all',
    'min'                          => 1,
    'max'                         => 6,
    'min_width'              => '',
    'min_height'            => '',
    'min_size'                 => '',
    'max_width'             => '',
    'max_height'           => '',
    'max_size'               => '',
    'mime_types'          => '',
  ]);
}

add_action('acf/init', 'create_product_image_description_field');
function create_product_image_description_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_image_description',
    'label'                         => 'image description',
    'parent'                      => 'product_group',
    'name'                        => 'product_image_description',
    'type'                          => 'image',
    'instructions'            => '',
    'required'                  => 1,
    'conditional_logic'  => 0,
    'return_format' => 'array',
		'preview_size' => 'medium',
		'library' => 'all'
      ]
  );
}

add_action('acf/init', 'create_product_how_to_use_field');
function create_product_how_to_use_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_how_to_use',
    'label'                         => 'Conseils d\'utilisation',
    'parent'                      => 'product_group',
    'name'                        => 'product_how_to_use',
    'type'                          => 'wysiwyg',
    'instructions'            => '',
    'required'                  => 1,
    'conditional_logic'  => [
      'field'         => 'product_is_variant_field',
      'operator' => '==',
       'value'       => '0'
    ],
      ]
  );
}

add_action('acf/init', 'create_product_benefits_field');
function create_product_benefits_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_benefits',
    'label'                         => 'Bienfaits',
    'parent'                      => 'product_group',
    'name'                        => 'product_benefits',
    'type'                          => 'wysiwyg',
    'instructions'            => '',
    'required'                  => 0,
    'conditional_logic'  => [
      'field'         => 'product_is_variant_field',
      'operator' => '==',
       'value'       => '0'
    ],
      ]
  );
}

add_action('acf/init', 'create_product_faq_field');
function create_product_faq_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_faq',
    'label'                         => 'FAQ',
    'parent'                      => 'product_group',
    'name'                        => 'product_faq',
    'type'                          => 'wysiwyg',
    'instructions'            => '',
    'required'                  => 0,
    'conditional_logic'  => [
      'field'         => 'product_is_variant_field',
      'operator' => '==',
       'value'       => '0'
    ],
      ]
  );
}


add_action('acf/init', 'create_product_more_info_accordeon_repeater_field');
function create_product_more_info_accordeon_repeater_field(){
  acf_add_local_field(
      [
      'key'                                   => 'product_more_info_accordeon_repeater_field',
      'label'                                 => 'Informations complémentaires',
      'name'                               => 'product_more_info_accordeon',
      'parent'                             => 'product_group',
      'type'                                 => 'repeater',
      'instructions'                   => 'Créez autant d\'accordeon que souhaité pour apporter plus d\'info sur le produits',
      'required'                         => 0,
      'conditional_logic'  => [
        'field'         => 'product_is_variant_field',
        'operator' => '==',
         'value'       => '0'
      ],
      'collapsed'                      => 'instruction_field',
      'min'                                 => 0,
      'max'                                => 0,
      'layout'                            => 'table',
      'button_label'                => 'Ajouter un élément',
      'sub_fields'                    => [
      [
        'key' => 'more_info_accordeon_title_field',
        'label' => 'Titre',
        'name' => 'more_info_accordeon_title',
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
        'key' => 'more_info_accordeon_content_field',
        'label' => 'Contenu',
        'name' => 'more_info_accordeon_content',
        'type' => 'wysiwyg',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => 0,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
              ],
          ]
      ]
  );
}

add_action('acf/init', 'create_product_with_video_field');
function create_product_with_video_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_with_video',
    'label'                         => 'Vidéo',
    'parent'                      => 'product_group',
    'name'                        => 'product_with_video',
    'type'                          => 'true_false',
    'instructions'            => 'Indiquez la fiche de ce produit est accompagné d\'une video',
    'required'                  => 0,
    'conditional_logic'  => [
      'field'         => 'product_is_variant_field',
      'operator' => '==',
       'value'       => '0'
    ],
    'ui'                              => 1,
    'default_value'         => 0,
    'ui_on_text'               => 'Oui',
    'ui_off_text'               => 'Non',
      ]
  );
}

add_action('acf/init', 'create_product_video_field');
function create_product_video_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_video',
    'label'                         => 'Video Youtube',
    'parent'                      => 'product_group',
    'name'                        => 'product_video',
    'type'                          => 'oembed',
    'instructions'            => '',
    'required'                  => 1,
    'conditional_logic'  => [
      'field'         => 'product_with_video',
      'operator' => '==',
       'value'       => '1'
    ],
      ]
  );
}

add_action('acf/init', 'create_product_image_no_video_field');
function create_product_image_no_video_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_image_no_video',
    'label'                         => 'Image No video',
    'parent'                      => 'product_group',
    'name'                        => 'product_image_no_video',
    'type'                          => 'image',
    'instructions'            => '',
    'required'                  => 1,
    'conditional_logic'  => 0,
      ]
  );
}

add_action('acf/init', 'create_product_ingredient_list_field');
function create_product_ingredient_list_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_ingredient_list',
    'label'                         => 'Liste des ingrédients',
    'parent'                      => 'product_group',
    'name'                        => 'product_ingredient_list',
    'type'                          => 'textarea',
    'instructions'            => '',
    'required'                  => 1,
    'conditional_logic'  => [
      'field'         => 'product_pack',
      'operator' => '==',
       'value'       => '0'
    ],
      ]
  );
}

add_action('acf/init', 'create_product_related_products_field');
function create_product_related_products_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_related_products',
    'label'                         => 'Produits relatifs',
    'parent'                      => 'product_group',
    'name'                        => 'product_related_products',
    'type'                          => 'relationship',
    'instructions'            => '',
    'required'                  => 1,
    'conditional_logic'  => 0,
    'post_type'       => 
      [
        0  => 'product',
      ],
      'taxonomy'    => '',
      'filters'           => 
      [
				0   => 'search',
				1   => 'post_type',
				2   => 'taxonomy',
			],
      'elements'        => '',
			'min'                   => 1,
			'max'                  => 10,
			'return_format' => 'object',
    ]);
}



// Products rating 
add_action('acf/init', 'create_product_comment_field_group');

function create_product_comment_field_group(){
  if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
      'key' => 'product_comment',
      'title' => 'Products review',
      'fields' => array(
        array(
          'key' => 'product_rate',
          'label' => 'Note',
          'name' => 'note',
          'type' => 'radio',
          'instructions' => '',
          'required' => 1,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => 'evaluations__header__form__input rating_star_form_radio_input',
            'id' => '',
          ),
          'choices' => array(
            1 => '<i class="fa fa-star" aria-hidden="true"></i>',
            2 => '<i class="fa fa-star" aria-hidden="true"></i>',
            3 => '<i class="fa fa-star" aria-hidden="true"></i>',
            4 => '<i class="fa fa-star" aria-hidden="true"></i>',
            5 => '<i class="fa fa-star" aria-hidden="true"></i>',
          ),
          'allow_null' => 0,
          'other_choice' => 0,
          'default_value' => 5,
          'layout' => 'horizontal',
          'return_format' => 'value',
          'save_other_choice' => 0,
        ),
      ),
      'location' => array(
        array(
          array(
            'param' => 'comment',
            'operator' => '==',
            'value' => 'product',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'acf_after_title',
      'style' => 'seamless',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => true,
      'description' => '',
      'show_in_rest' => 0,
    ));
    
    endif;		
}

add_action('acf/init', 'create_product_stop_field');
function create_product_stop_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_stop_field',
    'label'                         => 'Produit Non commercialisé en France',
    'parent'                      => 'product_group',
    'name'                        => 'product_stop',
    'type'                          => 'true_false',
    'instructions'            => 'Indiquez si ce produit est arreté en France',
    'required'                  => 0,
    'conditional_logic'  => 0,
    'ui'                              => 1,
    'default_value'         => 0,
    'ui_on_text'               => 'Oui',
    'ui_off_text'               => 'Non',
      ]
  );
}

add_action('acf/init', 'create_product_replace_field');
function create_product_replace_field(){
    acf_add_local_field(
      [
    'key'                           => 'product_replace_field',
    'label'                         => 'Produit de remplacement',
    'parent'                      => 'product_group',
    'name'                        => 'product_replace',
    'type'                          => 'relationship',
    'instructions'            => '',
    'required'                  => 0,
    'conditional_logic'  => [
      'field'         => 'product_stop_field',
      'operator' => '==',
       'value'       => '1'
    ],
    'post_type'       => 
      [
        0  => 'product',
      ],
      'taxonomy'    => '',
      'filters'           => 
      [
				0   => 'search',
				1   => 'post_type',
				2   => 'taxonomy',
			],
      'elements'        => '',
			'min'                   => 0,
			'max'                  => 1,
			'return_format' => 'object',
    ]);
}



// add_action('acf/init', 'create_product_average_rate_field');
// function create_product_average_rate_field(){
//     acf_add_local_field(
//       [
//     'key'                           => 'product_average_rate_field',
//     'label'                         => 'Moyenne des notes',
//     'parent'                      => 'product_group',
//     'name'                        => 'product_average_rate',
//     'type'                          => 'number',
//     'instructions'            => '',
//     'required'                  => 0,
//     'conditional_logic'  => 0,
//     'readonly' => 1,
    
//        ]
//   );
// }

// add_action('acf/init', 'create_product_rate_count_field');
// function create_product_rate_count_field(){
//     acf_add_local_field(
//       [
//     'key'                           => 'product_rate_count_field',
//     'label'                         => 'Nombre de note',
//     'parent'                      => 'product_group',
//     'name'                        => 'product_rate_count',
//     'type'                          => 'number',
//     'instructions'            => '',
//     'required'                  => 0,
//     'conditional_logic'  => 0,
//     'readonly' => 1,
//       ]
//   );
// }
