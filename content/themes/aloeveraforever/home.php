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
$eight_and_nine_terms = array_slice($terms_sort_by_order, 7, 1, true);
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

<section class="products">
  <article class="accordion">
    <header class="accordion__header js-accordion">
      <h2 class="accordion__header__title title title--2">
        Distributeur Forever Living Products France
      </h2>
      <i class="fa fa-plus accordion__header__icon" aria-hidden="true"></i>
    </header>
    <main class="accordion__main main">
      <p> Bienvenue sur Aloe Vera Forever France - aloeveraforever.fr, le site de Benjamin et Audrey Sergeant distributeurs des produits aloe vera Forever Living en France et dans le monde.
      </p>
      <p>Forever living products est spécialisé dans les produits à base d'aloe vera. En effet la marque s'est fait connaitre grâce à son Forever Aloe Vera Gel. Ce produit naturel concentre les vitamines et les nutriments de la plante dans sa nouvelle formule riche en propriétés pour la peau et l'organisme. L'aloe vera de Forever Living Products apporte de l'énergie à vos cellules, renforce votre système immunitaire, contribue à la perte de poids et à la beauté de la peau.</p>
      <p>Mais les produits à l'aloe vera ne se limitent pas aux diverses boissons comme Berry Nectar, Aloe Pêche ou Freedom à l'orange. En effet l'aloe vera Forever est utilisée dans la fabrication de produits d'hygiène pour le corps et les cheveux mais aussi des crèmes et des soins pour la peau du visage</p>
      <p>En plus des produits à l'aloe vera, la marque commercialise également des compléments alimentaires qui vous apporteront eux aussi leur lot de vitamines et nutriments contribuant ainsi à améliorer votre alimentation. Le pack C9 qui vous aide à perdre du poids grâce à l'aloe vera brille également par sa qualité et son efficacité à travers le monde. </p>
      <p>En effet, les avis clients sur Forever Living Products en France et dans le monde mettent toujours en avant la qualité des produits avec des notes qui avoisinent toujours les 5/5</p>
    </main>
  </article>
  <article class="accordion">
    <header class="accordion__header js-accordion">
      <h2 class="accordion__header__title title title--2">
        Aloe Vera Forever - La qualité avant tout !
      </h2>
      <i class="fa fa-plus accordion__header__icon" aria-hidden="true"></i>
    </header>
    <main class="accordion__main main">
      <p>Le gel d’aloe vera ou pulpe d’aloès stabilisée que l’on retrouve dans la composition de la plupart des produits Forever Living est aussi le produit Forever le plus connu et vendu dans le monde.
      </p>
      <p>Initialement connu sous le nom de «bidon jaune», il doit sa réputation à son procédé de stabilisation unique qui permet de conserver les multiples vertus de l’aloe vera sans utiliser de conservateur chimique et nocif pour la santé. En effet la marque utilise simplement la technologie Tetrapak, de la vitamine C et de l’acide citrique pour conserver sa précieuse pulpe et empêcher son oxydation.
      </p>
      <p>La pulpe d’aloès de ce fameux «bidon jaune» est issue du gel interne des feuilles d’aloe vera. En effet, la substance gélatineuse, que l’on appelle mucilage et qui contient tous les principes actifs bénéfiques de la plante est séparée de la sève et de l’écorce qui ne sont pas adaptées à la consommation alimentaire.
</p>
<p>C’est ainsi que l’aloe vera de Forever conserve ses nombreuses propriétés pour le bien-être de toute la famille en usage interne et externe. Sa composition unique en vitamines et minéraux, enzymes digestives, acides aminés, anti-oxydants et nombreux principes actifs comme l’acémannane et les polysaccarides, lui confèrent beaucoup de bienfaits. Soutient le système immunitaire, le métabolisme et la digestion, favorise la production de collagène, améliore l’hydratation, apporte du tonus et de la vitalité en cas de fatigue, soulage les articulations, aide à la cicatrisation des plaies et renforce les défenses naturelles de l’organisme.
</p>
<h3>Une large gamme de produits naturels
</h3>
<p>Même si le coeur de métier de Forever Living Products est l’aloe vera, la marque sait très bien combiner les produits naturels aux dernières innovations technologiques dans les domaines du bien-être, de la perte de poids et des produits cosmétiques.
</p>
<p>Des buvables à l’aloe vera combinés avec des jus de fruits comme la canneberge dans Berry Nectar pour améliorer le confort urinaire, ou avec de la glucosamine et la chondroïtine dans Forever Freedom pour soulager les inconforts articulaires.
</p>
<p>Les produits de la ruche comme la gelée royale, le pollen, la propolis et le miel d’abeille. Mais aussi des compléments alimentaires comme la Maca, le calcium, les probiotiques, le ginkgo biloba et encore l’ail, le thym ou la vitamine C.
</p>
<p>L’aloe vera est également un ingrédient de choix pour les soins du visage du corps et des cheveux. Avec ses propriétés hydratantes qui pénètrent efficacement l’épiderme, il est souvent ajouté dans des soins du visage pour lutter contre le vieillissement en le combinant avec de la vitamine E. Shampoing, après-shampoing, crème visage, soins anti-âge, masque, savon, crème lavante, crème contours des yeux, sérum, démaquillant, lotion après rasage, baume à lèvre, huiles essentielles. 
</p>
<h3>Éthique, agriculture responsable et commerce équitable
</h3>
<p>Les produits Forever Living Products ne sont pas testé sur les animaux, en effets la marque dispose du label Leasing Bunny pour sont engagement dans la lutte contre la cruauté envers les animaux. 
</p>
<p>Les employés de la marque bénéficient toujours des meilleures conditions de travail possibles quelque soit le pays dans lequel ils oeuvrent. 
</p>
<p>Une agriculture responsable et un commerce équitable d’un bout à l’autre de la chaine, de la production à la commercialisation par les distributeurs, l’humain est toujours au centre des préoccupations de l’entreprise.
</p>
    </main>
  </article>
</section>


<!-- Top Seller -->
<section class="products topSeller">
  <header class="products__header">
    <h2 class="products__header__title title title--2">Produits Forever les plus vendus</h2>

    <p class="products__header__subtitle">Vos produits Forever préférés, des produits qui ont faits leurs preuves
      <a href=<?= get_term_link('top-vente', 'product_badge'); ?> class="products__header__subtitle__link" title="Meilleures ventes des produits Forever">Voir Tous</a>
    </p>
  </header>
  <?php get_template_part('template-parts/product/products-carousel', null, ['filter' => 'favorite', 'methode' => 'filter']); ?>
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
    <h2 class="products__header__title title title--2">Nouveaux produits Forever Living</h2>
    <p class="products__header__subtitle">
      Vos nouveaux produits préférés de la marque Forever Living
      <a href=<?= get_term_link('nouveaute', 'product_badge'); ?> class="products__header__subtitle__link" title="Nouveaux produits Forever">Voir Tous
      </a>
    </p>
  </header>
  <?php get_template_part('template-parts/product/products-carousel', null, ['filter' => 'nouveaute', 'methode' => 'filter']); ?>
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
    <h2 class="products__header__title title title--2">Produits riche en Aloe Vera</h2>
    <p class="products__header__subtitle">
      Les produits à l'aloe vera de Forever avec une forte teneur en gel d'aloe vera
      <a href=<?= get_term_link('aloemax', 'product_badge'); ?> class="products__header__subtitle__link" title="Produits Forever à base d'aloe vera">Voir Tous
      </a>
    </p>
  </header>
  <?php get_template_part('template-parts/product/products-carousel', null, ['filter' => 'aloemax', 'methode' => 'filter']); ?>
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
    $recent_posts = wp_get_recent_posts($recent_posts_args, 'object');

    ?>
    <div class="lastPosts__main__list swiper-wrapper">
      <?php foreach ($recent_posts as $post) : ?>
        <?php get_template_part('template-parts/posts/latestPost/latestPost', null, $post); ?>
      <?php endforeach; ?>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </main>

</section>
<?php get_footer(); ?>