<?php get_header();
$blog_post =  new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 10,'paged' => 1));;
//dump($blog_post);
?>

<div class="headerPicture">
  <?php write_src_set_image(get_post_thumbnail_id(), '.headerPicture__imageBlur, .headerPicture__image'); ?>
  <div class=" headerPicture__imageBlur"></div>
  <div class="headerPicture__image">
    <div class="headerPicture__image__text">
      <h1 class="headerPicture__image__text__title"><?php the_title(); ?></h1>
      <h2 class="headerPicture__image__text__subtitle">Blog & Actualités</h2>
    </div>
  </div>
</div>
<main class="main pageBlog">
 
  <div class="pageBlog__content">
<div class="publication-list">
    <?php if ($blog_post->have_posts()) :
      while ($blog_post->have_posts()) : $blog_post->the_post(); ?>
        
        <?php get_template_part('template-parts/posts/blogPostExerpt/blogPostExerpt'); ?>
        

    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>

</div>
<?php if($blog_post->max_num_pages > 1): ?>
<div class="btn__wrapper">
  <button class="button button--loadmore" id="load-more" data-posttype="post">
    Charger la suite
    </button>
</div>
<?php endif; ?>
  </div>
  <?php get_template_part('template-parts/posts/blogSidebar/blogSidebar'); ?>
</main>
<?php get_footer(); ?>