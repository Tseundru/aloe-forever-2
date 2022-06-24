<?php

add_action('acf/init', 'create_block_construct_video');

function create_block_construct_video() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'block-construct-video',
            'title'             => __('Video custom'),
            'description'       => __('Un block pour insérez une video'),
            'render_template'   => 'template-parts/blocks/construct/video.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
           
        ));
    }
}

add_action('acf/init', 'create_block_construct_video_group');
function create_block_construct_video_group(){
    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group([
            'key'                                    => 'block_construct_video_group',
            'title'                                   => 'Block Video',
            'fields'                                => [],
            'location'                            => [
                [
                    [
                        'param'     => 'block',
                        'operator' => '==',
                        'value'       => 'acf/block-construct-video',
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


add_action('acf/init', 'create_block_construct_video_title');
function create_block_construct_video_title(){
    acf_add_local_field(
      [
    'key'                           => 'block_construct_video_title_field',
    'label'                         => 'Titre de la vidéo',
    'parent'                      => 'block_construct_video_group',
    'name'                        => 'block_construct_video_title',
    'type'                          => 'text',
    'instructions'            => '',
    'required'                  => 1,
      ]
  );
}

add_action('acf/init', 'create_block_construct_video_url');
function create_block_construct_video_url(){
    acf_add_local_field(
      [
    'key'                           => 'block_construct_video_url_field',
    'label'                         => 'URL Youtube',
    'parent'                      => 'block_construct_video_group',
    'name'                        => 'block_construct_video_url',
    'type'                          => 'text',
    'instructions'            => '',
    'required'                  => 1,
      ]
  );
}