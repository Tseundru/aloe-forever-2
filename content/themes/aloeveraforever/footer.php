<footer class="footer">
      <header class="footer__header">
        <h2 class="footer__header__title">
          Aloe Vera Forever
        </h2>
        <ul class="footer__header__social">
          <li class="footer__header__social__item"><a class="footer__header__social__item__link" href="#"><i
                class="fa fa-facebook" aria-hidden="true"></i></a>
          </li>
          <li class="footer__header__social__item"><a class="footer__header__social__item__link" href="#"><i
                class="fa fa-instagram" aria-hidden="true"></i></a>
          </li>
          <li class="footer__header__social__item"><a class="footer__header__social__item__link" href="#"><i
                class="fa fa-youtube-square" aria-hidden="true"></i></a>
          </li>
        </ul>
      </header>
      <div class="garanty">
        <div class="garanty__row">
          <div class="garanty__row__feature">
            <?php get_template_part( 'template-parts/svg/sav.svg' ); ?>
          </div>
          <div class="garanty__row__feature">
            <?php get_template_part( 'template-parts/svg/satisfaction.svg' ); ?>
          </div>
        </div>  
      
        <div class="garanty__row">
          <div class="garanty__row__feature">
            <?php get_template_part( 'template-parts/svg/conseille.svg' ); ?>
          </div>
          <div class="garanty__row__feature">
            <?php get_template_part( 'template-parts/svg/fidelite.svg' ); ?>
          </div>
        </div>
      </div>
        

      



      
        <main class="footer__main">
       
        <nav class="footer__main__menu footer__main__widget">
          <p class="footer__main__menu__title  footer__main__widget__title">
            Service Client
          </p>
          <ul class="footer__main__menu__list footer__main__widget__text">
            <li class="footer__main__menu__list__item"><a href="#"> FAQ</a></li>
            <li class="footer__main__menu__list__item"><a href="#">Expédition</a></li>
            <li class="footer__main__menu__list__item"><a href="#">Contact</a></li>
            <li class="footer__main__menu__list__item"><a href="#">Politique de confidentialité</a></li>
            <li class="footer__main__menu__list__item"><a href="#">CGV</a></li>

          </ul>
        </nav>
        <div class="footer__main__info footer__main__widget">
          <p class="footer__main__info__title  footer__main__widget__title ">
          <?=bloginfo( 'name' );?>
          </p>
          <div class="footer__main__info__text footer__main__widget__text">
            <p class="footer__main__info__text__phone"> <a href="tel:+33671743983">06 71 74 39 83</a> </p>
            <p class="footer__main__info__text__mail"><a href="mailto:ilovaloe@gmail.com">ilovaloe{@}gmail.com</a></p>

            <p class="footer__main__info__text__title">Entrepreneur indépendant <br /> Partenaire de la société <br />
              Forever Living Products</p>


            <p class="footer__main__info__text__nFBO">N°FBO : 330001220879</p>
          </div>
        </div>


        <!--<div class="footer__main__newsletter footer__main__widget">
          <p class="footer__main__newsletter__title  footer__main__widget__title">
            Newsletter
          </p>
          <form action="#" method="post" class="footer__main__widget__text">
            <p>Abonnez-vous à notre lettre d'information et recevez nos offres spéciale. (vous pourrez vous désincrire à tout moment)</p>
             ajout de ma nouvelle widget area -->
 
<div class="footer__main__widget">
 <?php dynamic_sidebar( 'footer-2' ); ?>
 </div>
 
 <!-- fin nouvelle widget area 
            <input class="footer__main__widget__text__input" type="text" name="email" id="email"
              placeholder="Adress e-mail" autocomplete="off">
            <button class="footer__main__widget__text__button" type="submit">S'abonner</button>
          </form>
        </div>-->
        <div class="footer__main__eatmove footer__main__widget">
          <p class="footer__main__eatmove__title  footer__main__widget__title">Notice</p>
          <div class="footer__main__eatmove__text footer__main__widget__text">
            <p>Pour votre santé, pratiquez une activité physique régulière.</p>
            <p>Les compléments alimentaires doivent être utilisé dans le cadre d'un mode de vie sain et ne pas se
              substituer à une alimentation variée et équilibrée.</p>
            <p>Plus d'info sur <a href="https://mangerbouger.fr">mangerbouger.fr</a> </p>
          </div>
        </div>
      </main>
      <footer class="footer__footer">
        <nav class="footer__footer__menu">
          <ul class="footer__footer__menu__list">
            <li class="footer__footer__menu__list__item"><a href="#">www.foreverliving.fr</a> </li>
            <li class="footer__footer__menu__list__item"><a href="#">www.fevad.com</a></li>
            <li class="footer__footer__menu__list__item"><a href="#">www.foreverliving.com</a></li>
            <li class="footer__footer__menu__list__item"><a href="#">Mentions légales</a></li>
            <li class="footer__footer__menu__list__item"><a href="#">Plan du site</a></li>
          </ul>
        </nav>
      </footer>
    </footer>
  </div>

<?php wp_footer(); ?>
</body>
</html>
