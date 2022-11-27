<?php
/*
Template Name: Page Header
*/


get_header();

//dump(get_queried_object());
$imageID = get_post_thumbnail_id();
?>

<div class="headerPicture">
  <?php write_src_set_image($imageID, ' .headerPicture__image'); ?>
  <div class="headerPicture__imageBlur"></div>
  <div class="headerPicture__image headerPicture__image--full">
    <div class="headerPicture__image__text">
      <h1 class="headerPicture__image__text__title is_center"><?php the_title(); ?></h1>
      <h2 class="headerPicture__image__text__subtitle is_center"><?= get_field('page_subtitle'); ?></h2>
    </div>
  </div>
</div>

<main>
 <?php the_content(); ?>

</main>

<?php get_footer(); ?>