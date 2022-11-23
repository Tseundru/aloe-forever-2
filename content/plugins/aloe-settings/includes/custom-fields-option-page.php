<?php

add_action('acf/init', 'create_option_page_field_group');
function create_option_page_field_group(){
    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group([
            'key'                                    => 'option_page_group',
            'title'                                   => 'Options',
            'fields'                                => [],
            'location'                            => [
                [
                    [
                        'param'     => 'options_page',
                        'operator' => '==',
                        'value'       => 'acf-options-options',
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



add_action('acf/init', 'create_option_page_FBONum_field');
function create_option_page_FBONum_field(){
    acf_add_local_field(
      [
    'key'                           => 'FBONum_field',
    'label'                         => 'Numéro FBO',
    'parent'                      => 'option_page_group',
    'name'                        => 'FBONum',
    'type'                          => 'text',
    'instructions'            => '',
    'required'                  => 0,
    'conditional_logic'  => 0,
      ]
  );
}

add_action('acf/init', 'create_option_page_telNum_field');
function create_option_page_telNum_field(){
    acf_add_local_field(
      [
    'key'                           => 'telNum_field',
    'label'                         => 'Numéro de téléphone de contact',
    'parent'                      => 'option_page_group',
    'name'                        => 'telNum',
    'type'                          => 'text',
    'instructions'            => '',
    'required'                  => 0,
    'conditional_logic'  => 0,
      ]
  );
}

add_action('acf/init', 'create_option_page_Mail_field');
function create_option_page_Mail_field(){
    acf_add_local_field(
      [
    'key'                           => 'option_page_Mail_field',
    'label'                         => 'Mail de contat',
    'parent'                      => 'option_page_group',
    'name'                        => 'option_page_Mail',
    'type'                          => 'email',
    'instructions'            => '',
    'required'                  => 0,
    'conditional_logic'  => 0,
      ]
  );
}

add_action('acf/init', 'create_option_page_joinURL_field');
function create_option_page_joinURL_field(){
    acf_add_local_field(
      [
    'key'                           => 'option_page_joinURL_field',
    'label'                         => 'Url de parainage',
    'parent'                      => 'option_page_group',
    'name'                        => 'option_page_joinURL',
    'type'                          => 'url',
    'instructions'            => '',
    'required'                  => 0,
    'conditional_logic'  => 0,
      ]
  );
}

add_action('acf/init', 'create_option_page_shopURL_field');
function create_option_page_shopURL_field(){
    acf_add_local_field(
      [
    'key'                           => 'option_page_shopURL_field',
    'label'                         => 'Url de la boutique france',
    'parent'                      => 'option_page_group',
    'name'                        => 'option_page_shopURL',
    'type'                          => 'url',
    'instructions'            => '',
    'required'                  => 0,
    'conditional_logic'  => 0,
      ]
  );
}

add_action('acf/init', 'create_option_page_facebookURL_field');
function create_option_page_facebookURL_field(){
    acf_add_local_field(
      [
    'key'                           => 'option_page_facebookURL_field',
    'label'                         => 'Url de la page Facebook',
    'parent'                      => 'option_page_group',
    'name'                        => 'option_page_facebookURL',
    'type'                          => 'url',
    'instructions'            => '',
    'required'                  => 0,
    'conditional_logic'  => 0,
      ]
  );
}

add_action('acf/init', 'create_option_page_instagramURL_field');
function create_option_page_instagramURL_field(){
    acf_add_local_field(
      [
    'key'                           => 'option_page_instagramURL_field',
    'label'                         => 'Url de la page Instagram',
    'parent'                      => 'option_page_group',
    'name'                        => 'option_page_instagramURL',
    'type'                          => 'url',
    'instructions'            => '',
    'required'                  => 0,
    'conditional_logic'  => 0,
      ]
  );
}

add_action('acf/init', 'create_option_page_youtubeURL_field');
function create_option_page_youtubeURL_field(){
    acf_add_local_field(
      [
    'key'                           => 'option_page_youtubeURL_field',
    'label'                         => 'Url de la page Youtube',
    'parent'                      => 'option_page_group',
    'name'                        => 'option_page_youtubeURL',
    'type'                          => 'url',
    'instructions'            => '',
    'required'                  => 0,
    'conditional_logic'  => 0,
      ]
  );
}






