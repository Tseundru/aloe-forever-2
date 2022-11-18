<?php get_header();
$blog_post =  new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1));;
//dump($blog_post);
?>

<div class="headerPicture">
  <?php write_src_set_image(get_post_thumbnail_id(), '.headerPicture__imageBlur, .headerPicture__image'); ?>
  <div class=" headerPicture__imageBlur"></div>
  <div class="headerPicture__image">
    <div class="headerPicture__image__text">
      <h1 class="headerPicture__image__text__title"><?php the_title(); ?></h1>
      <h2 class="headerPicture__image__text__subtitle">Catégories</h2>
    </div>
  </div>
</div>
<main class="main pageBlog">
 
  <div class="pageBlog__content">

    <?php if ($blog_post->have_posts()) :
      while ($blog_post->have_posts()) : $blog_post->the_post(); ?>
        
        <article class="blogPostExcerpt">
          <div class="blogPostExcerpt__picture">
            <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail('large', ['class' => 'blogPostExcerpt__picture__img', 'title' => get_the_title()]) ?>
          </a>
          </div>
          <header class="blogPostExcerpt__header">
            <?php get_template_part('template-parts/posts/blogPostMeta/blogPostMeta'); ?>

          </header>
          <main class="blogPostExcerpt__main">
            <a class="blogPostExcerpt__main__title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            <p class="blogPostExcerpt__main__text"><?php the_excerpt() ?></p>
          </main>
          <footer class="blogPostExcerpt__footer">
            <p class="blogPostExcerpt__footer__view"><?= gt_get_post_view(); ?> vues</p>
            
          </footer>
        </article>
        

    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>

   
  </div>
  <?php get_template_part('template-parts/posts/blogSidebar/blogSidebar'); ?>
</main>
<?php get_footer(); ?>