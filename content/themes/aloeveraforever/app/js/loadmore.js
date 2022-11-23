const loadmore = {
  currentPage: 1,
  loadMoreButton: document.getElementById('load-more'),
  init: function(){
    console.log('loadmore');
    if(loadmore.loadMoreButton){
      loadmore.loadMoreButton.addEventListener("click", loadmore.loadMorePosts );
    }
    },
    loadMorePosts : function(){
      console.log(loadmore.currentPage);
      loadmore.currentPage++;
      $.ajax({
        type: 'POST',
        url: '/wp/wp-admin/admin-ajax.php',
        dataType: 'json', // <-- Change dataType from 'html' to 'json'
        data: {
          action: 'weichie_load_more',
          paged: loadmore.currentPage,
          category: loadmore.loadMoreButton.dataset.category,
          postType: loadmore.loadMoreButton.dataset.posttype,
          searchKeyword: loadmore.loadMoreButton.dataset.searchkeyword
        },
        success: function (res) {
          
          if(loadmore.currentPage >= res.max) {
            $('#load-more').hide();
          }
          $('.publication-list').append(res.html);
        }
      });
    }
      
      
  }




  module.exports =  loadmore;