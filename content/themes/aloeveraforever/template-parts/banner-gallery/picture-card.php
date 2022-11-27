
<?php 
  $taxonomy =  Post_Type_Product::TAXONOMY_NAME_CATEGORY ;
  $img_id = get_field('category_picture_field', $taxonomy.'_'.$args->term_id )['ID'] ;
  $size = 'full';
  $title = get_post($img_id)->post_title;
  $image_src = wp_get_attachment_image_url($img_id,$size);
  $image_srcset = wp_get_attachment_image_srcset($img_id,$size);
  $alt = isset(get_post_meta($img_id, '_wp_attachment_image_alt')[0]) ? get_post_meta($img_id, '_wp_attachment_image_alt')[0] : $title;
  $caption = wp_get_attachment_caption($img_id);
  $sizes = wp_get_attachment_image_sizes($img_id);
  $x = $args->x; 
  $css = '';
  $srcset = getSrcSet($img_id);
  foreach ($srcset as $set) :
    // skip big ones and little ones
    if ($set['width'] > 1600) continue;
    if ($set['width'] < 768) continue;
   
    if ($set['width'] < 769) {
    $css .= '@media only screen and (min-width: ' . 150 . 'px) {
      .card'. $x .' { background-image: url(' . $set['src'] . '); } }';
    };
   
    $css .= '@media only screen and (min-width: ' . $set['width'] . 'px) {
      .card'. $x .' { background-image: url(' . $set['src'] . '); } }';
      
  endforeach;?>
  
<a href=<?=$args->link  ?> class=" pictureCard bannerGallery__item card<?=$x ?>" title="<?=$args->name ?>" >
<?php $css = !empty($css) ? '<style>' . $css . '</style>' : ''; echo $css; ?>
        <div class="pictureCard__text">
          <h2 class="pictureCard__text__title title title--2"><?=$args->name  ?></h2>
          <p class="pictureCard__text__subtitle title"><?=$args->subtitle  ?></p>
        </div>
      </a>
