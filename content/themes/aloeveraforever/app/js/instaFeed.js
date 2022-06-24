

var axios = require('axios');
const instaFeed = {
  init: function() {
    console.log('insta init');
    axios.get('https://graph.instagram.com/me/media?fields=id,media_url&access_token=IGQVJYdUZAjeFI3ajVhaUpyUUZAsTDgybjhGbmd5WjV2cGI3b0xYUFhlXy1SWk05QXJINDJFTFBMWmtBWmFOYjJYWGpEMi1rR3pVWWU2UEVPUmhvVzI3eHBib1phYzBvNHFVR0dfRmg4RnBza2pUaDVySAZDZD')
    .then(function(response){
      console.log(response);
    })
  },
};

module.exports = instaFeed;