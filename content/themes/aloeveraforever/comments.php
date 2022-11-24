
       
<div id="commentaires" class="comments">
    <?php if ( have_comments() ) : ?>
      
    <?php 
    	// S'il n'y a pas de commentaires
    	else : 
    ?>
        <p class="comments__none">
            Il n'y a pas de commentaires pour le moment. Soyez le premier à participer !
    	</p>
    <?php endif; ?>
        <?php
          $comments_args = [
            'fields' => [
              'author' => '<input class="evaluations__header__form__input" type="text" name="author" id="name" placeholder="Nom...">',
              'email'   => '<input class="evaluations__header__form__input" type="email" name="email" id="email" placeholder="Email...">',
            ],
            'label_submit' => __( 'Enregistrer mon avis', 'textdomain' ),
            'submit_button' => '<button type="submit" class="button evaluations__header__form__button"> Enregistrer mon avis</button>',
            'class_form'    =>  'evaluations__header__form',
            'comment_field' => '<textarea  class="evaluations__header__form__input"  rows="4" name="comment" id="comment">Commentaire...</textarea>'
          ];
        
        ?>
        <?php comment_form($comments_args); // Le formulaire d'ajout de commentaire ?>
     
</div>

</header>

<main class="evaluations__main">
<?php
            	// La fonction qui liste les commentaires
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                    'callback' => 'better_comments',
                    'reverse_top_level' => true

                ) );
            ?>


       <!-- <article class="review">
          <main class="review__text">
            <p class="review__text__userName">Benjamin Sergeant</p>
            
            <ul class="ratingStars">
              <li class="ratingStars__star"><i class="fa fa-star" aria-hidden="true"></i></li>
              <li class="ratingStars__star"><i class="fa fa-star" aria-hidden="true"></i></li>
              <li class="ratingStars__star"><i class="fa fa-star" aria-hidden="true"></i></li>
              <li class="ratingStars__star"><i class="fa fa-star" aria-hidden="true"></i></li>
              <li class="ratingStars__star"><i class="fa fa-star" aria-hidden="true"></i></li>
            </ul>
        
            <p class="review__text__title">La base essentielle</p>
            <p class="review__text__content">Cest mon jus du matin depuis plus de 4 ans 60 a 90 ml et cest parti pour la journée Très peu pour moi les hivers enrhumés ou grippés Merci Forever pour être au top</p>
          </main>
          
          <footer class="review__footer">
            <img src="./images/avatar.jpg" alt="" class="review__footer__picture">
            <p class="review__footer__userName">Benjamin Sergeant</p>
          </footer>
        </article>



        <article class="review">
          <main class="review__text">
            <p class="review__text__userName">Hamm</p>
            <ul class="ratingStars">
              <li class="ratingStars__star"><i class="fa fa-star" aria-hidden="true"></i></li>
              <li class="ratingStars__star"><i class="fa fa-star" aria-hidden="true"></i></li>
              <li class="ratingStars__star"><i class="fa fa-star" aria-hidden="true"></i></li>
              <li class="ratingStars__star"><i class="fa fa-star" aria-hidden="true"></i></li>
              <li class="ratingStars__star"><i class="fa fa-star" aria-hidden="true"></i></li>
            </ul>
            <p class="review__text__title">La perfection</p>
            <p class="review__text__content">Cette nouvelle référence est pour moi une pure merveille La boisson est meilleur plus clair que lancienne et un gout beaucoup plus doux et pour ceux qui apprécie pas les pulpes celle ci en a plus</p>
          </main>
          
          <footer class="review__footer">
            <img src="./images/avatar.jpg" alt="" class="review__footer__picture">
            <p class="review__footer__userName">Hamm</p>
          </footer>
        </article>-->
      </main>





