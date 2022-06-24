const popup = {
  allCloseIcon:document.querySelectorAll('.popup__closeIcon'),
  overlay:document.querySelector('.fullOverlay'),
  allPopup: document.querySelectorAll('.popup'),
  popupOpener: document.querySelectorAll('.popup--opener'),
  init: function() {
    console.log('popup init');
    popup.allCloseIcon.forEach(closeIcon => closeIcon.addEventListener("click", popup.close));
    popup.overlay.addEventListener('click', popup.closeAll);
    popup.popupOpener.forEach(popupOpener => popupOpener.addEventListener('click', popup.open))
    
  },

  open: function(e){
    let nextPopup = e.currentTarget.nextElementSibling;
    console.log(nextPopup);
    nextPopup.classList.add('popup--active');
    popup.overlay.classList.add('fullOverlay--active');
    popup.overlay.addEventListener('click', popup.closeAll);
    
  },

  close: function(e){
    let activePopup = e.currentTarget.parentNode;
    activePopup.classList.remove("popup--active");
    popup.overlay.classList.remove('fullOverlay--active');
  },
  closeAll: function(){
    popup.allPopup.forEach(popup => popup.classList.remove("popup--active"))
    popup.overlay.classList.remove('fullOverlay--active');
  }
};

module.exports = popup;