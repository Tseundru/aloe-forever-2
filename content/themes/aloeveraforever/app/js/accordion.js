const accordion = {
  accordionsHeader : document.querySelectorAll('.js-accordion'),
  init: function(){
    console.log('init accordion');
    accordion.accordionsHeader.forEach(accordionHeader => accordionHeader.addEventListener('click', accordion.toggleOpenClass));
  },

  toggleOpenClass: function(e){
    let toggleButton = e.currentTarget.lastElementChild;
    let accordionMain = e.currentTarget.nextElementSibling;
    console.log(accordionMain);
    accordionMain.classList.toggle("open");

    if(toggleButton.classList.contains("fa-plus")){
      toggleButton.classList.remove("fa-plus");
      toggleButton.classList.add("fa-minus");
    }
    else if(toggleButton.classList.contains("fa-minus")){
      toggleButton.classList.remove("fa-minus");
      toggleButton.classList.add("fa-plus");
    }
  }
  
}


  module.exports = accordion;