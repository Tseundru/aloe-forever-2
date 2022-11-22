
<?php
/*
Template Name: Page Standard
*/


get_header();

//dump(get_queried_object());

?>
<main class="blogPost__main__content">
  <h1 class="title title--1"><?php the_title(); ?></h1>

 <?php the_content(); ?>

</main>

<?php get_footer(); ?>