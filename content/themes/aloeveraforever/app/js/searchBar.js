const searchBar = {
  searchIcon:document.querySelector('.js-search-icon'),
  userIcon : document.querySelector('.js-user-icon'),
  brand : document.querySelector('.js-brand'),
  closeSearch: document.querySelector('.js-search-close-icon'),
  searchBarDiv: document.querySelector('.js-search-bar'),
  searchBarInput: document.querySelector('.js-search-bar-input'),
  open : null,

  init: function(){
    console.log('init searcBar');
     searchBar.searchIcon.addEventListener("click", searchBar.toggle );
     searchBar.closeSearch.addEventListener("click", searchBar.toggle );
  },
  toggle: function(){
    if(!searchBar.open){
      searchBar.userIcon.style.display = "none";
      searchBar.brand.style.display = "none";
      searchBar.searchIcon.style.display = "none";
      searchBar.closeSearch.style.display = "block";
      searchBar.searchBarDiv.classList.add('header__actions__search--open');
      searchBar.searchBarInput.focus();
      searchBar.open = true;
    }else{
      searchBar.userIcon.style.display = "block";
      searchBar.brand.style.display = "block";
      searchBar.searchIcon.style.display = "block";
      searchBar.closeSearch.style.display = "none";
      searchBar.searchBarDiv.classList.remove('header__actions__search--open');
      searchBar.open = false;
    }

  }
}

module.exports = searchBar;