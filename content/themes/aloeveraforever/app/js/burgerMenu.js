


const burgerMenu = {

  closeIcon:document.querySelector('.js-closeIcon'),
  emptySpace:document.querySelector(".js-emptySpace"),
  listItem:document.querySelectorAll(".mobilemenu__list__item"),
  init: function(){
    console.log('burger init')
    const burgerIcon = document.querySelector('.js-burger-icon');
    burgerIcon.addEventListener("click", burgerMenu.toggleMenu );
    burgerMenu.closeIcon.addEventListener("click", burgerMenu.toggleMenu );
    burgerMenu.emptySpace.addEventListener("click", burgerMenu.toggleMenu );
  },

  toggleMenu: function(){
    const mobileMenu = document.querySelector('.js-mobileMenu');
    console.log(mobileMenu);
    if (mobileMenu.classList.contains('mobilemenu--open')){
      mobileMenu.classList.remove('mobilemenu--open')
      burgerMenu.closeIcon.style.display = "none";
      burgerMenu.listItem.forEach( item => item.style.display = "none");
      burgerMenu.emptySpace.style.display = "none";
    }else{
      mobileMenu.classList.add('mobilemenu--open')
      burgerMenu.closeIcon.style.display = "block";
      burgerMenu.emptySpace.style.display = "block";
      burgerMenu.listItem.forEach( item => item.style.display = "block");
    }
  }
}

module.exports = burgerMenu;