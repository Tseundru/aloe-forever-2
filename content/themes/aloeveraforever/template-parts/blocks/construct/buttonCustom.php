
<?php 
//dump(get_field('block_construct_buttonCustom_link_field'));
?>

<a href="<?= get_field('block_construct_buttonCustom_link_field')['url']; ?>" class="button button--center" title="<?= get_field('block_construct_buttonCustom_link_field')['title'];?>" target="<?= get_field('block_construct_buttonCustom_link_field')['target'];?>"> <?= get_field('block_construct_buttonCustom_title');?></a>