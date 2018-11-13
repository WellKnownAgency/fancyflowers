$(document).ready(function() {
 var feed = new Instafeed({
         get: 'user',
         userId: '8513871774',
         clientId: '05ddbb943b3b4b60b5e174062b6df32e',
         accessToken: '8513871774.1677ed0.db1bb0a0b4f440c9819d89c3afb3bfff',
         sortBy: 'most-recent',
         limit: 8,
         template: '<div class="image-item col-lg-3 col-md-3 col-sm-3 col-xs-3 col-sp-12"><a href="{{link}}" target="_blank"><img src="{{model.images.standard_resolution.url}}" {{square}} class="img-in"/></a></div>',
     });
     feed.run();
});
