<?php 
$args = [
  'hide_empty'      => true,
  'exclude' => [1,46305],
];
$blog_categories = get_categories($args);

?>
<aside class="blogSidebar">
  <?php if(is_singular('post')): ?>
          <header class="blogSidebar__header">
            <div class="blogSidebar__header__sharing ">
              <a class="blogSidebar__header__sharing__link" title="Partager sur Facebook" href="javascript:PopupWindow(this,'https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>');"> <i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a class="blogSidebar__header__sharing__link" title="Partager sur Twitter" href="javascript:PopupWindow(this,' https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>');"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a class="blogSidebar__header__sharing__link" title="Partager sur Pinterest" href="javascript:PopupWindow(this,' https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php the_post_thumbnail_url(); ?>&description=<?php the_title(); ?>');"> <i class="fa fa-pinterest" aria-hidden="true"></i></a>
              <a class="blogSidebar__header__sharing__link" title="Partager sur Linkedin" href="javascript:PopupWindow(this,' https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>');"> <i class="fa fa-linkedin" aria-hidden="true"></i></a>
              <a class="blogSidebar__header__sharing__link" title="Partager par mail" href="mailto:?&subject=%0A<?php the_title(); ?>&cc=&bcc=&body=<?php the_permalink(); ?>%0A<?php the_title(); ?>" target="_blank"> <i class="fa fa-envelope" aria-hidden="true"></i></a>
            </div>
          </header>
          <?php endif;?>
          <main class="blogSidebar__main">
           
            <div class="blogSidebar__main__block">
              <div class="blogSidebar__main__block__title">
                Catégories
              </div>
              <ul class="blogSidebar__main__block__list">
                <?php foreach ($blog_categories as $category) : ?>
                  <li class="blogSidebar__main__block__list__item"><a href="<?= get_category_link($category->term_id) ?>" title="<?= $category->name ?>"><?= $category->name ?></a></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </main>
          <footer class="blogSidebar__footer">

          </footer>
        </aside>