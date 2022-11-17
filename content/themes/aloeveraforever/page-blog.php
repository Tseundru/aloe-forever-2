<?php get_header(); ?>
<div class="headerPicture">
  <?php write_src_set_image(get_post_thumbnail_id(), '.headerPicture__imageBlur, .headerPicture__image'); ?>
  <div class=" headerPicture__imageBlur"></div>
  <div class="headerPicture__image">
    <div class="headerPicture__image__text">
      <h1 class="headerPicture__image__text__title"><?php the_title(); ?></h1>
      <h2 class="headerPicture__image__text__subtitle">Catégories</h2>
    </div>
  </div>
        <?php

            if (have_posts()): while(have_posts()): the_post();

            the_content();
                

            endwhile;endif;

        ?>

<?php get_footer(); ?>