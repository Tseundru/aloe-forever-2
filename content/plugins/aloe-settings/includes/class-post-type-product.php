<?php
/**
 * @package Aloe
 */

 class Post_Type_Product
 {
     /**
     * @var string
        */
     public const NAME = 'product';
     public const TAXONOMY_NAME_CATEGORY = 'product_category';
     public const TAXONOMY_NAME_LABEL = 'product_label';
     public const TAXONOMY_NAME_INGREDIENT = 'product_ingredient';
     public const TAXONOMY_NAME_BADGE = 'product_badge';

     public function __construct()   {
      add_action( 'init', [ $this, 'register_post_type' ] );    
      add_action( 'init', [ $this, 'register_taxonomies' ] );
      add_filter( 'enter_title_here', [ $this, 'change_title_text' ] );   
      
  }

  public function register_post_type()  {
    $labels = [
      'name'                                        => _x( 'Produit', 'Post Type General Name', 'text_domain' ),
      'singular_name'                       => _x( 'Produit', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'                           => __( 'Produit', 'text_domain' ),
      'name_admin_bar'                  => __( 'Produit', 'text_domain' ),
      'archives'                                  => __( 'Archives des produits', 'text_domain' ),
      'attributes'                                => __( 'Attributs des produits', 'text_domain' ),
      'parent_item_colon'                => __( 'Parent Item:', 'text_domain' ),
      'all_items'                                 => __( 'Tous les produits', 'text_domain' ),
      'add_new_item'                       => __( 'Créer un nouveau produit', 'text_domain' ),
      'add_new'                                => __( 'Créer un nouveau', 'text_domain' ),
      'new_item'                               => __( 'Nouveau produit', 'text_domain' ),
      'edit_item'                               => __( 'Modifier le produit', 'text_domain' ),
      'update_item'                         => __( 'Mettre à jour le produit', 'text_domain' ),
      'view_item'                              => __( 'Voir le produit', 'text_domain' ),
      'view_items'                            => __( 'Voir les produits', 'text_domain' ),
      'search_items'                        => __( 'Rechercher un produit', 'text_domain' ),
      'not_found'                              => __( 'Aucun résultat', 'text_domain' ),
      'not_found_in_trash'              => __( 'Aucun résultat dans la corbeille', 'text_domain' ),
      'featured_image'                    => __( 'Image principale du produit', 'text_domain' ),
      'set_featured_image'             => __( 'Définir l\'image principale du produit', 'text_domain' ),
      'remove_featured_image'     => __( 'Supprimer l\'image mise en avant', 'text_domain' ),
      'use_featured_image'            => __( 'Utiliser comme image mise en avant', 'text_domain' ),
      'insert_into_item'                    => __( 'Insérer dans le produit', 'text_domain' ),
      'uploaded_to_this_item'        => __( 'Téléverser sur ce produit', 'text_domain' ),
      'items_list'                                => __( 'Liste des produits', 'text_domain' ),
      'items_list_navigation'           => __( 'Navigatuer dans la liste des produits', 'text_domain' ),
      'filter_items_list'                      => __( 'Filtrer la liste des produits', 'text_domain' ),
  ];

  $capabilities = [
    'edit_others_posts'           => 'edit_others_'.self::NAME,
    'delete_others_posts'       => 'delete_others_'.self::NAME,
    'delete_private_posts'      => 'delete_private_'.self::NAME,
    'edit_private_posts'          => 'edit_private_'.self::NAME,
    'read_private_posts'         => 'read_private_'.self::NAME,
    'edit_published_posts'     => 'edit_published_'.self::NAME,
    'publish_posts'                   => 'publish_'.self::NAME,
    'delete_published_posts' => 'delete_published_'.self::NAME,
    'edit_posts'                          => 'edit_'.self::NAME   ,
    'delete_posts'                      => 'delete_'.self::NAME,
    'edit_post'                            => 'edit_'.self::NAME,
    'read_post'                           => 'read_'.self::NAME,
    'delete_post'                        => 'delete_'.self::NAME,
  ];
  $args = [
    'label'                               => __( 'Produits', 'text_domain' ),
    'description'                   => __( 'Produits forever', 'text_domain' ),
    'labels'                             => $labels,
    'supports'                        => [ 
        'title', 
        'editor', 
        'thumbnail', 
        'comments', 
        'trackbacks', 
        'revisions', 
        'custom-fields', 
        'page-attributes', 
        'post-formats' 
      ],
    'taxonomies'                   => [
      self::TAXONOMY_NAME_CATEGORY,  
    ],
    //'capabilities'                    => $capabilities,
    'hierarchical'                   => false,
    'public'                             => true,
    'show_ui'                          => true,
    'show_in_menu'              => true,
    'menu_position'              => 4,
    'menu_icon'                     => 'dashicons-cart',
    'show_in_admin_bar'      => true,
    'show_in_nav_menus'     => true,
    'can_export'                     => true,
    'has_archive'                    => true,
    'exclude_from_search'   => false,
    'publicly_queryable'        => true,
    'capability_type'               => 'post',
    'show_in_rest'                    => true,
    'rewrite'                            => [
      'slug' => 'produits-forever/ref',
      'with_front' => true,
    ]
   ];

   register_post_type(
    self::NAME,
    $args
  );
  }

  public function change_title_text($title){
    $screen = get_current_screen();
    if  ( self::NAME == $screen->post_type ) {
          $title = 'Entrez le nom du produit';
    }
    return $title;
  }

  public function register_taxonomies() {
    $this->register_taxonomy_category();
    $this->register_taxonomy_label();
    $this->register_taxonomy_ingredient();
    $this->register_taxonomy_badge();

}

public function register_taxonomy_category(){
  $labels = [
    'name'                                               => _x( 'Catégorie', 'Taxonomy General Name', 'text_domain' ),
    'singular_name'                               => _x( 'Catégorie', 'Taxonomy Singular Name', 'text_domain' ),
    'menu_name'                                   => __( 'Catégorie', 'text_domain' ),
    'all_items'                                         => __( 'Toutes les Catégories', 'text_domain' ),
    'new_item_name'                            => __( 'Nouvelle catégorie', 'text_domain' ),
    'add_new_item'                               => __( 'Add New Item', 'text_domain' ),
    'edit_item'                                        => __( 'Edit Item', 'text_domain' ),
    'update_item'                                  => __( 'Update Item', 'text_domain' ),
    'view_item'                                       => __( 'View Item', 'text_domain' ),
    'separate_items_with_commas'  => __( 'Separate items with commas', 'text_domain' ),
    'add_or_remove_items'                 => __( 'Add or remove items', 'text_domain' ),
    'choose_from_most_used'           => __( 'Choose from the most used', 'text_domain' ),
    'popular_items'                               => __( 'Popular Items', 'text_domain' ),
    'search_items'                                => __( 'Search Items', 'text_domain' ),
    'not_found'                                      => __( 'Not Found', 'text_domain' ),
    'no_terms'                                        => __( 'No items', 'text_domain' ),
    'items_list'                                        => __( 'Items list', 'text_domain' ),
    'items_list_navigation'                   => __( 'Items list navigation', 'text_domain' ),
      
];

$args = [
    'labels'                                    => $labels,
    'hierarchical'                          => false,
    'public'                                    => true,
    'show_ui'                                 => true,
    'show_in_quick_edit'            => false,
    'meta_box_cb'                       => false,
    'show_admin_column'          => true,
    'map_meta_cap'                    => true,
    'show_in_nav_menus'           => true,
    'show_tagcloud'                    => true,
    'show_in_rest'                        => true,
        'rewrite'   => [
            'slug' => 'produits-forever/categorie',
            'hierarchical'                  => true,
        ]
];
register_taxonomy( 
  self::TAXONOMY_NAME_CATEGORY, 
  self::NAME, 
  $args 
);
}

public function register_taxonomy_label(){
  $labels = [
    'name'                                               => _x( 'Label', 'Taxonomy General Name', 'text_domain' ),
    'singular_name'                               => _x( 'Label', 'Taxonomy Singular Name', 'text_domain' ),
    'menu_name'                                   => __( 'Label', 'text_domain' ),
    'all_items'                                         => __( 'Tous les Labels', 'text_domain' ),
    'new_item_name'                            => __( 'Nouveau label', 'text_domain' ),
    'add_new_item'                               => __( 'Add New Item', 'text_domain' ),
    'edit_item'                                        => __( 'Edit Item', 'text_domain' ),
    'update_item'                                  => __( 'Update Item', 'text_domain' ),
    'view_item'                                       => __( 'View Item', 'text_domain' ),
    'separate_items_with_commas'  => __( 'Separate items with commas', 'text_domain' ),
    'add_or_remove_items'                 => __( 'Add or remove items', 'text_domain' ),
    'choose_from_most_used'           => __( 'Choose from the most used', 'text_domain' ),
    'popular_items'                               => __( 'Popular Items', 'text_domain' ),
    'search_items'                                => __( 'Search Items', 'text_domain' ),
    'not_found'                                      => __( 'Not Found', 'text_domain' ),
    'no_terms'                                        => __( 'No items', 'text_domain' ),
    'items_list'                                        => __( 'Items list', 'text_domain' ),
    'items_list_navigation'                   => __( 'Items list navigation', 'text_domain' ),
      
];

$args = [
    'labels'                                    => $labels,
    'hierarchical'                          => false,
    'public'                                    => true,
    'show_ui'                                 => true,
    'show_in_quick_edit'            => false,
    'meta_box_cb'                       => false,
    'show_admin_column'          => true,
    'map_meta_cap'                    => true,
    'show_in_nav_menus'           => true,
    'show_tagcloud'                    => true,
    'show_in_rest'                        => true,
        'rewrite'   => [
            'slug' => 'produits-forever/label',
            'hierarchical'                  => false,
        ]
];
register_taxonomy( 
  self::TAXONOMY_NAME_LABEL, 
  self::NAME, 
  $args 
);
}

public function register_taxonomy_ingredient(){
  $labels = [
    'name'                                               => _x( 'Ingrédient', 'Taxonomy General Name', 'text_domain' ),
    'singular_name'                               => _x( 'Ingrédient', 'Taxonomy Singular Name', 'text_domain' ),
    'menu_name'                                   => __( 'Ingrédient', 'text_domain' ),
    'all_items'                                         => __( 'Tous les Ingrédients', 'text_domain' ),
    'new_item_name'                            => __( 'Nouvel Ingrédient', 'text_domain' ),
    'add_new_item'                               => __( 'Add New Item', 'text_domain' ),
    'edit_item'                                        => __( 'Edit Item', 'text_domain' ),
    'update_item'                                  => __( 'Update Item', 'text_domain' ),
    'view_item'                                       => __( 'View Item', 'text_domain' ),
    'separate_items_with_commas'  => __( 'Separate items with commas', 'text_domain' ),
    'add_or_remove_items'                 => __( 'Add or remove items', 'text_domain' ),
    'choose_from_most_used'           => __( 'Choose from the most used', 'text_domain' ),
    'popular_items'                               => __( 'Popular Items', 'text_domain' ),
    'search_items'                                => __( 'Search Items', 'text_domain' ),
    'not_found'                                      => __( 'Not Found', 'text_domain' ),
    'no_terms'                                        => __( 'No items', 'text_domain' ),
    'items_list'                                        => __( 'Items list', 'text_domain' ),
    'items_list_navigation'                   => __( 'Items list navigation', 'text_domain' ),
      
];

$args = [
    'labels'                                    => $labels,
    'hierarchical'                          => false,
    'public'                                    => true,
    'show_ui'                                 => true,
    'show_in_quick_edit'            => false,
    'meta_box_cb'                       => false,
    'show_admin_column'          => true,
    'map_meta_cap'                    => true,
    'show_in_nav_menus'           => true,
    'show_tagcloud'                    => true,
    'show_in_rest'                        => true,
        'rewrite'   => [
            'slug' => 'produits-forever/ingredient',
            'hierarchical'                  => false,
        ]
];
register_taxonomy( 
  self::TAXONOMY_NAME_INGREDIENT, 
  self::NAME, 
  $args 
);
}

public function register_taxonomy_badge(){
  $labels = [
    'name'                                               => _x( 'Badge', 'Taxonomy General Name', 'text_domain' ),
    'singular_name'                               => _x( 'Badge', 'Taxonomy Singular Name', 'text_domain' ),
    'menu_name'                                   => __( 'Badge', 'text_domain' ),
    'all_items'                                         => __( 'Tous les Badges', 'text_domain' ),
    'new_item_name'                            => __( 'Nouveau Badge', 'text_domain' ),
    'add_new_item'                               => __( 'Add New Item', 'text_domain' ),
    'edit_item'                                        => __( 'Edit Item', 'text_domain' ),
    'update_item'                                  => __( 'Update Item', 'text_domain' ),
    'view_item'                                       => __( 'View Item', 'text_domain' ),
    'separate_items_with_commas'  => __( 'Separate items with commas', 'text_domain' ),
    'add_or_remove_items'                 => __( 'Add or remove items', 'text_domain' ),
    'choose_from_most_used'           => __( 'Choose from the most used', 'text_domain' ),
    'popular_items'                               => __( 'Popular Items', 'text_domain' ),
    'search_items'                                => __( 'Search Items', 'text_domain' ),
    'not_found'                                      => __( 'Not Found', 'text_domain' ),
    'no_terms'                                        => __( 'No items', 'text_domain' ),
    'items_list'                                        => __( 'Items list', 'text_domain' ),
    'items_list_navigation'                   => __( 'Items list navigation', 'text_domain' ),
      
];

$args = [
    'labels'                                    => $labels,
    'hierarchical'                          => false,
    'public'                                    => true,
    'show_ui'                                 => true,
    'show_in_quick_edit'            => false,
    'meta_box_cb'                       => false,
    'show_admin_column'          => true,
    'map_meta_cap'                    => true,
    'show_in_nav_menus'           => true,
    'show_tagcloud'                    => true,
    'show_in_rest'                        => true,
        'rewrite'   => [
            'slug' => 'produits-forever/badge',
            'hierarchical'                  => false,
        ]
];
register_taxonomy( 
  self::TAXONOMY_NAME_BADGE, 
  self::NAME, 
  $args 
);
}
 }