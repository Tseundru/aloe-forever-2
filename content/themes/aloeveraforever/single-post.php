<?php




get_header();

$the_post_categories = wp_get_post_categories(get_the_ID());

$args = [
  'hide_empty'      => false,
  'exclude' => [1,46305],
];
$blog_categories = get_categories($args);

?>


<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <?php gt_set_post_view(); ?> 
    <div class="headerPicture">
      <?php write_src_set_image(get_post_thumbnail_id(), '.headerPicture__imageBlur, .headerPicture__image'); ?>
      <div class=" headerPicture__imageBlur"></div>
      <div class="headerPicture__image">
        <div class="blogPost__header__sharing ">
          <a class="blogPost__header__sharing__link"  title="Partager sur Facebook" href="javascript:PopupWindow(this,'https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>');"> <i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a class="blogPost__header__sharing__link" title="Partager sur Twitter" href="javascript:PopupWindow(this,' https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>');"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a class="blogPost__header__sharing__link" title="Partager sur Pinterest" href="javascript:PopupWindow(this,' https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php the_post_thumbnail_url(); ?>&description=<?php the_title(); ?>');"> <i class="fa fa-pinterest" aria-hidden="true"></i></a>
          <a class="blogPost__header__sharing__link" title="Partager sur Linkedin" href="javascript:PopupWindow(this,' https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>');"> <i class="fa fa-linkedin" aria-hidden="true"></i></a>
          <a class="blogPost__header__sharing__link"  title="Partager par mail" href="mailto:?&subject=%0A<?php the_title(); ?>&cc=&bcc=&body=<?php the_permalink(); ?>%0A<?php the_title(); ?>" target="_blank"> <i class="fa fa-envelope" aria-hidden="true"></i></a>
        </div>
      </div>


      <main class="blogSingle">
        <article class="blogPost">
          <header class="blogPost__header ">
          <?php get_template_part('template-parts/posts/blogPostMeta/blogPostMeta'); ?>
            <h1 class="blogPost__header__title"><span><?php the_title(); ?></span></h1>
            <script>
              function PopupWindow(source, strWindowToOpen) {
                var strWindowFeatures = "toolbar=no,resize=no,titlebar=no,";
                strWindowFeatures = strWindowFeatures + "menubar=no,width=413,height=600,maximize=null";
                window.open(strWindowToOpen, '', strWindowFeatures);
              }
            </script>

            <div class="blogPost__header__meta">
              <div class="blogPost__header__meta__category">
                
                <?php foreach($the_post_categories as $category) : ?>
                <a class="blogPost__header__meta__category__item" href="<?= get_category_link($category) ?>" title="<?= get_cat_name($category); ?>"><span><?= get_cat_name($category); ?></span></a>
                <?php endforeach ?>
              </div>
              
            </div>

          </header>
          <main class="blogPost__main">
          <?php if (!is_user_logged_in()&& get_field('blogPost_private_content_field')): ?>
            <div class="blogPost__main__overlay">
              <div class="blogPost__main__overlay__text">
                <div class="blogPost__main__overlay__text__content">
                  <div class="blogPost__main__overlay__text__content__title title title--1">Contenu réserver aux membres !</div>
                  <div class="blogPost__main__overlay__text__content__content">
                    <p>Ce contenu est exclusivement réservé aux distributeurs de l'équipe Aloe Vera Forever et aux membres de l'annuaire Forever.</p>
                    <p class=" title title--2">Veuillez vous connecter</p>
                    <?php if (is_user_logged_in()) { ?>
                      <a href="<?php echo wp_logout_url(get_permalink()) ?>" title="Déconnexion">Déconnexion</a>
                    <?php } else { ?>
                      <form class="loginForm" id="login" method="post" action="<?php echo wp_login_url(get_permalink()) ?>">
                        <fieldset class="loginForm__fieldset">
                          <div class="loginForm__fieldset__item">
                            <label class="loginForm__fieldset__item__label">Login :</label>
                            <input class="loginForm__fieldset__item__input" type="text" value="" name="log" required />
                          </div>
                          <div class="loginForm__fieldset__item">
                            <label class="loginForm__fieldset__item__label">Mot de passe : </label>
                            <input class="loginForm__fieldset__item__input" type="password" value="" name="pwd" required />
                          </div>
                          <input class="button button--loginForm" type="submit" value="Connexion" />
                        </fieldset>
                      </form>
                    <?php } ?>
                  </div>
                </div>
                <?php
                    $blocks = parse_blocks(get_the_content());
                    $product_array = null;
                    foreach ($blocks as $block) {
                      if ($block['blockName'] === 'acf/block-product') {
                        $product_id = $block['attrs']['data']['product_relation'][0];
                        $product_array[] = $product_id;
                      }
                    }
                    //dump($product_array);
                    if ($product_array) ?>
                    <div class="relatedProduct blogPost__main__overlay__text__content">
                      <p class="title title--3">Produits présent dans l'article</p>
                      <div class="productRelatedSwipperContainer">
                        <div class="swiper-wrapper">
                          <?php {
                            $product_args = [
                              'post_type'  => 'product',
                              'post__in' => $product_array
                            ];
                            $product_query = new WP_Query($product_args);
                            if ($product_query->have_posts()) :
                              while ($product_query->have_posts()) : $product_query->the_post();
                                get_template_part('template-parts/product/product-card');
                              endwhile;
                            endif;
                            wp_reset_postdata();
                          }
                          ?>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                      </div>
                    </div>
              </div>
            </div>
            <?php endif; ?>
            <div class="blogPost__main__content <?= (!is_user_logged_in() && get_field('blogPost_private_content_field')) ? 'blogPost__main__content--blur': '' ?>"><?php the_content(); ?></div>

          </main>
        </article>
        <?php get_template_part('template-parts/posts/blogSidebar/blogSidebar'); ?>
      </main>
    <?php endwhile; 
    wp_reset_postdata();?>
  <?php endif; ?>
    </div>


    <?php get_footer(); ?>