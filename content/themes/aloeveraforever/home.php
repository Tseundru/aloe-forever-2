<?php get_header();
$taxonomy =  Post_Type_Product::TAXONOMY_NAME_CATEGORY;
$tax_terms = get_terms($taxonomy, [
  'hide_empty' => false,
  'include' => [],
]);
$terms_sort_by_order = [];
$x = 0; 
foreach ($tax_terms as $tax_term) {
  $order = get_field('category_order_field', $tax_term);
  $subtitle = get_field('category_subtitle_field', $tax_term);
  $term_link = get_term_link($tax_term);
  $terms_sort_by_order[$order] = (object) array(
    'order' => $order,
    'name' => $tax_term->name,
    'slug' => $tax_term->slug,
    'term_id' => $tax_term->term_id,
    'subtitle' => $subtitle,
    'link' => $term_link,
    'x' => $x,
  );
  $x++;
}

sort($terms_sort_by_order);
$five_first_terms = array_slice($terms_sort_by_order, 0, 5, true);
$six_and_seven_terms = array_slice($terms_sort_by_order, 5, 2, true);
$eight_and_nine_terms = array_slice($terms_sort_by_order, 7, 2, true);
$ten_and_eleven = array_slice($terms_sort_by_order, 9, 2, true);

?>
<!-- banner gallery -->
<div class="bannerGallery">
  <?php
  foreach ($five_first_terms as $tax_term) :
    get_template_part('template-parts/banner-gallery/picture-card', null, $tax_term);
  endforeach;
  ?>
</div>
<!-- Top Seller -->
<section class="products topSeller">
  <header class="products__header">
    <h2 class="products__header__title title title--2">Les plus vendus</h2>
    
    <p class="products__header__subtitle">Vos produits Forever préférés, des produits qui ont faits leurs preuves
      <a href=<?= get_term_link('top-vente', 'product_badge'); ?> class="products__header__subtitle__link" title="Meilleures ventes des produits Forever">Voir Tous</a>
    </p>
  </header>
  <?php get_template_part('template-parts/product/products-carousel', null, ['filter' => 'favorite','methode'=>'filter']);?>
</section>

<!-- banner gallery -->
<div class="gallery gallery--2pics gallery2">
  <?php
  foreach ($six_and_seven_terms as $tax_term) :
    get_template_part('template-parts/banner-gallery/picture-card', null, $tax_term);
  ?>
  <?php endforeach; ?>
</div>


<!-- New products -->
<section class="products newProducts">
      <header class="products__header">
        <h2 class="products__header__title title title--2">Nouveaux produits</h2>
        <p class="products__header__subtitle">
          Vos nouveaux produits préférés de la marque Forever Living 
          <a href=<?= get_term_link('nouveaute', 'product_badge'); ?>
            class="products__header__subtitle__link" title="Nouveaux produits Forever">Voir Tous
          </a>
        </p>
      </header>
     <?php get_template_part('template-parts/product/products-carousel', null, ['filter' => 'nouveaute','methode'=>'filter']);?>
    </section>

    <!-- banner gallery -->
    <div class="gallery gallery--2pics gallery2">
  <?php
  foreach ($eight_and_nine_terms as $tax_term) :
    get_template_part('template-parts/banner-gallery/picture-card', null, $tax_term);
  ?>
  <?php endforeach; ?>
</div>

<!-- Aloe Max -->
<section class="products aloeMax">
      <header class="products__header">
        <h2 class="products__header__title title title--2">Teneur en Aloe Vera</h2>
        <p class="products__header__subtitle">
          Les produits à l'aloe vera de Forever avec une forte teneur en gel d'aloe vera 
          <a href=<?= get_term_link('aloemax', 'product_badge'); ?>
            class="products__header__subtitle__link" title="Produits Forever à base d'aloe vera">Voir Tous
          </a>
        </p>
      </header>
      <?php get_template_part('template-parts/product/products-carousel', null, ['filter' => 'aloemax','methode'=>'filter']);?>
    </section>

    <!-- banner gallery -->
    <div class="gallery gallery--2pics gallery2">
  <?php
  foreach ($ten_and_eleven as $tax_term) :
    get_template_part('template-parts/banner-gallery/picture-card', null, $tax_term);
  ?>
  <?php endforeach; ?>
</div>

<!-- Last Posts -->
<section class="lastPosts">
      <header class="lastPosts__header">
        <p class="lastPosts__header__title title title--2">
          Derniers articles du blog
        </p>
      </header>
      <main class="lastPosts__main swiper-container">
      <?php 
      $recent_posts_args = [
        'numberposts' => 5,
        'post_status' => 'publish'
      ];
      $recent_posts = wp_get_recent_posts($recent_posts_args , 'object'); 
      
      ?>
        <div class="lastPosts__main__list swiper-wrapper">
          <?php foreach($recent_posts as $post): ?>
           <?php  get_template_part('template-parts/posts/latestPost/latestPost', null, $post); ?>
          <?php endforeach; ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </main>

    </section>
<?php get_footer(); ?>