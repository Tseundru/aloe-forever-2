<?php

function  register_taxonomy_location_custom_fields(){
            if( function_exists('acf_add_local_field_group') ):

              acf_add_local_field_group([
                'key'                                  => 'location_custom_fields',
                'title'                                 => 'Location',
                'fields'                              => [
                  [
                    'key'                         => 'code_postal_field',
                    'label'                       => 'Code postal',
                    'name'                      => 'code_postal',
                    'type'                        => 'text',
                  ],
                  [
                    'key'                          => 'latitude_field',
                    'label'                        => 'Latitude',
                    'name'                      => 'latitude',
                    'type'                        => 'text',
                  ],
                  [
                    'key'                           => 'longitude_field',
                    'label'                         => 'Longitude',
                    'name'                        => 'longitude',
                    'type'                          => 'text',
                  ],
                  [
                    'key'                           => 'departement_field',
                    'label'                         => 'Département',
                    'name'                        => 'departement',
                    'type'                          => 'text',
                  ],
                  
                  [
                    'key'                           => 'departement_code_field',
                    'label'                         => 'Code département',
                    'name'                        => 'departement_code',
                    'type'                          => 'text',
                  ],
                  [
                    'key'                           => 'region_field',
                    'label'                         => 'Région',
                    'name'                        => 'region',
                    'type'                          => 'text',
                  ],
                  
                  [
                    'key'                           => 'region_code_field',
                    'label'                         => 'Code région',
                    'name'                        => 'region_code',
                    'type'                          => 'text',
                  ],
                  [
                    'key'                           => 'pays_field',
                    'label'                         => 'Pays',
                    'name'                        => 'pays',
                    'type'                          => 'text',
                  ],
                  [
                    'key'                         => 'location_type_field',
                    'label'                       => 'Type de lieu',
                    'name'                      => 'location_type',
                    'type'                        => 'select',
                    'choices'                  =>[
                      'Pays'                 => 'Pays',
                      'Région'            => 'Région',
                      'Département' => 'Département',
                      'Ville'                  => 'Ville',
                    ],
                    
                    'allow_null' => 0,
                    'multiple' => 0,
                    'ui' => 0,
                    'return_format' => 'value',
                    'ajax' => 0,
                  ],
                  [
                    'key'                           => 'big_city_field',
                    'label'                         => 'Grande ville',
                    'name'                        => 'big_city',
                    'type'                          => 'true_false',
                  ],
                 
                  

                  
                ],
                'location'                            => [
                  [
                    [
                      'param'     => 'taxonomy',
                      'operator' => '==',
                      'value'       => Post_Type_Distributor::TAXONOMY_NAME_LOCATION,
                    ],
                  ],
                ],
                'menu_order'                     => 0,
                'position'                            => 'normal',
                'style'                                 => 'default',
                'label_placement'            => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen'              => '',
                'active'                               => true,
                'description'                     => '',
              ]);

             
              endif;
          }

          add_action('acf/init', 'register_taxonomy_location_custom_fields');




       // Api 
          // function register_post_code_location_api_field(){
          //   register_rest_field(
          //     Post_Type_Distributor::TAXONOMY_NAME_LOCATION, 
          //     'code_post',
          //       [
          //           'get_callback' => 'get_post_code_location_api_field',
          //           'schema' => null,
          //       ]
          //   );
          // }
          // add_action('rest_api_init', 'register_post_code_location_api_field');


   
          // function get_post_code_location_api_field($post)
          // {
          //     return get_field(
          //       'code_postal_field', 
          //       Post_Type_Distributor::TAXONOMY_NAME_LOCATION.$post['id']);
          // }
          // add_action('rest_api_init', 'create_route_taxonomy_location_by_post_code' );
          // function create_route_taxonomy_location_by_post_code(){
          //   register_rest_route(
          //     '/taxo_location_by_code_post/v1', 
          //     'location/code_post=(?P<code_post>[a-z0-9 ,\-]+)',
          //     [
          //     'methods' => 'GET',
          //     'callback' => 'get_location_terms_code_post', 
          //   ]);
          // }

          // function get_location_terms_code_post($request){
          //   $args = [
          //     'taxonomy' => Post_Type_Distributor::TAXONOMY_NAME_LOCATION,
          //     'hide_empty' => false,
          //     'childless' => true,
          //     'meta_query' => [
          //       ['key' => 'code_postal',
          //       'value' => (int)$request['code_post'],
          //       'compare' => '=']
          //       ]
          //     ];
          //     $search_value = $request['code_post'];
          //     $cities = get_terms($args);

          //     $cities_filtered = [];

          //     foreach($cities as $city){
          //       $cities_id_prefixed = Post_Type_Distributor::TAXONOMY_NAME_LOCATION.'_'.$city->term_id;
          //      $city_code_post = get_field('code_postal_field', $cities_id_prefixed);
          //      if($city_code_post == $search_value){
          //       $cities_filtered[]=$city;
          //      }
          //     }


          //     $data = [];
          //     $i = 0;

          //     foreach($cities as $city){
          //       $data[$i]['id'] = $city->term_id;
          //       $data[$i]['name'] = $city->name;
          //       $data[$i]['cp'] = get_field('code_postal_field', Post_Type_Distributor::TAXONOMY_NAME_LOCATION.'_'.$city->term_id);
          //       $parents = get_term_parents_list($city->term_id, Post_Type_Distributor::TAXONOMY_NAME_LOCATION , ['format' =>'slug', 'link'=>false]);
          //       $parents = explode('/',$parents,3 );
          //       $data[$i]['pays']=$parents[0];
          //       $data[$i]['departement']=$parents[1];
          //       $data[$i]['city']=rtrim($parents[2],',');
          //       $data[$i]['parents']= get_term_parents_list($city->term_id, Post_Type_Distributor::TAXONOMY_NAME_LOCATION , ['format' =>'slug', 'link'=>false, 'separator' => ',']);
          //       $i++;
          //    }
            
          //     return $data;
          // }