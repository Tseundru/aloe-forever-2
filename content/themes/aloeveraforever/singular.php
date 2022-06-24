<?php get_header(); ?>
    <main class="main">
        <?php

            if (have_posts()): while(have_posts()): the_post();

                the_title();

                the_content();
                

            endwhile;endif;

        ?>
    </main>
</div>


<?php get_footer(); ?>

