<?php get_header(); ?>
<main class="main blogPost__main">
  <h1 class=" title title--1">Plan du site</h1>
  <ul>
    <li><a class="title title--2" href="<?= ALOE_VERA_URL; ?>" title="Aloe vera">Aloe vera</a></li>
    <li><a class="title title--2" href="<?= JOIN_US_URL; ?>" title="Produits aloe vera Forever">Rejoignez-nous !</a></li>
    <li><a class="title title--2" href="<?= ORDER_URL; ?>" title="Produits aloe vera Forever">Commander</a></li>
    <li><a class="title title--2" href="<?= ALL_PRODUCTS_URL; ?>" title="Produits aloe vera Forever">Produits</a>
    <?php
$product_category_args = [
    'post_type'  => 'product',
   
  ];

$taxo_category_product_query = new WP_Query($product_category_args);
if ($taxo_category_product_query->have_posts()) :
  while ($taxo_category_product_query->have_posts()) : $taxo_category_product_query->the_post();
  echo('<li><a href='.get_the_permalink().' rel="bookmark" title="Permanent Link to '.get_the_title().'">'.get_the_title().'</a></li>');
  endwhile;
else :
  echo ('<h2> Aucun résultats pour votre recherche </h2>  ');
endif;
wp_reset_postdata();
?>
  
  </li>
    <li><a class="title title--2" href="<?= ALL_PRODUCTS_URL; ?>" title="Produits aloe vera Forever">Blog</a>
      <ul><?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&feed=RSS'); ?></ul>
      <h2>Tous les articles</h2>
      <ul><?php $archive_query = new WP_Query('showposts=1000');
          while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
          <li>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
            (<?php comments_number('0', '1', '%'); ?>)
          </li>
        <?php endwhile; ?>
      </ul>
    </li>
  </ul>

</main>

<?php get_footer(); ?>