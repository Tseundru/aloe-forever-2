<?php get_header();
global $wp_query;
?>

<div class="headerPicture">
  <?php write_src_set_image(get_field('categories_picture_field', 'category_' . get_queried_object()->term_id), '.headerPicture__imageBlur, .headerPicture__image'); ?>
  <div class=" headerPicture__imageBlur"></div>
  <div class="headerPicture__image">
    <div class="headerPicture__image__text">
      <h1 class="headerPicture__image__text__title"><?php single_cat_title(); ?></h1>
      <h2 class="headerPicture__image__text__subtitle">Blog</h2>
    </div>
  </div>
</div>
<main class="main pageBlog">

  <div class="pageBlog__content">
    <div class="publication-list">
      <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <?php get_template_part('template-parts/posts/blogPostExerpt/blogPostExerpt'); ?>
      <?php endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
    <?php if ($wp_query->max_num_pages > 1) : ?>
      <div class="btn__wrapper">
        <button class="button button--loadmore" id="load-more" data-category="<?=get_queried_object()->term_id?>"  data-posttype="post">
          Charger la suite
        </button>
      </div>
    <?php endif; ?>
  </div>




  <?php get_template_part('template-parts/posts/blogSidebar/blogSidebar'); ?>
</main>
<?php get_footer(); ?>