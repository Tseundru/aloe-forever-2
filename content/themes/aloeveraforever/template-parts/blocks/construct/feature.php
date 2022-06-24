<div class="featureBlock">
<?php 
$items = get_field('block_construct_feature_item_repeater');
$columns = get_field('block_construct_feature_column');
//dump($items);
foreach ($items as $item) :?>

    <div class="featureItem featureItem--<?= $columns ?>">
      <?php write_responsive_image($item['image']['ID'], 'thumbnail', 'featureItem__icon', 0) ?>
      <p class="featureItem__title"><?= $item['title']; ?></p>
      <?php if($item['description']): ?>
      <p class="featureItem__text"><?= $item['description']; ?></p>
      <?php endif; ?>
    </div>
    <?php endforeach ?>
  </div>