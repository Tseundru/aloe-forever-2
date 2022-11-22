
<?php
/*
Template Name: Page Standard
*/


get_header();

//dump(get_queried_object());

?>
<main class="blogPost__main__content">
  <p></p>
<h1 class="blogPost__header__title is_center"><span><?php the_title(); ?></span></h1>

 <?php the_content(); ?>

</main>

<?php get_footer(); ?>






