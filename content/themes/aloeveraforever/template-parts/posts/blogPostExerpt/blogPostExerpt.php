<article class="blogPostExcerpt">
          <div class="blogPostExcerpt__picture">
            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail('large', ['class' => 'blogPostExcerpt__picture__img', 'title' => get_the_title()]) ?>
          </a>
          </div>
          <header class="blogPostExcerpt__header">
            <?php get_template_part('template-parts/posts/blogPostMeta/blogPostMeta'); ?>

          </header>
          <main class="blogPostExcerpt__main">
            <a class="blogPostExcerpt__main__title" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            <p class="blogPostExcerpt__main__text"><?php the_excerpt() ?></p>
          </main>
          <footer class="blogPostExcerpt__footer">
            <p class="blogPostExcerpt__footer__view"><?= gt_get_post_view(); ?></p>
            
          </footer>
        </article>