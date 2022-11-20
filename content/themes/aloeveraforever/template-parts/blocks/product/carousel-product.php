<?php 
$product_ID_array = get_field('block_products_products_relation_field');

?>
<?php get_template_part('template-parts/product/products-carousel', null, ['methode'=>'ids','ids'=>$product_ID_array]);?>