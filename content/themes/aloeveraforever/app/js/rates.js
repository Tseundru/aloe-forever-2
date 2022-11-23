const rates = {
  inputs: document.querySelectorAll('.rating_star_form_radio_input>.acf-input>.acf-radio-list>li>label>input'),
  labels: document.querySelectorAll('.rating_star_form_radio_input>.acf-input>.acf-radio-list>li>label>i'),
  leaveCommentButton: document.querySelector('.evaluations__header__button'),
  commentForm: document.querySelector('.evaluations__header__form'),
  init: function(){
    console.log(rates.inputs);
    if (rates.inputs){
      rates.findNote();
      rates.inputs.forEach(input => input.addEventListener('click', rates.findNote))
      rates.labels.forEach(label => label.addEventListener('mouseover', rates.onHoverNote))
      rates.labels.forEach(label => label.addEventListener('mouseleave', rates.findNote))
      rates.leaveCommentButton.addEventListener('click', rates.openForm)
    }
  },

  openForm: function(){
    rates.commentForm.classList.add('evaluations__header__form--open');

  },

  findNote: function(){
    rates.inputs.forEach( 
      function(input){
        if(input.checked){
          const note = input.value;
          rates.fillStars(note);
        }
      }
    )
  },

  onHoverNote: function(e){
    let note= e.currentTarget.previousElementSibling.value;
    //console.log(note);
    rates.fillStars(note);
  },

  fillStars: function(note){
    rates.emtyStars();
    rates.inputs.forEach(function(input){
      if(input.value<= note){
        input.nextElementSibling.classList.add('--active')
        console.log(parent);
      }
    })

  },
  
  emtyStars: function(){
    console.log(rates.inputs);
    rates.inputs.forEach(input =>
      input.nextElementSibling.classList.remove('--active')
      
    )
   
}
}


  module.exports = rates;