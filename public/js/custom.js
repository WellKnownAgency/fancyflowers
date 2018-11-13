$(document).ready(function() {
 var feed = new Instafeed({
         get: 'user',
         userId: '8513871774',
         clientId: '05ddbb943b3b4b60b5e174062b6df32e',
         accessToken: '8513871774.1677ed0.db1bb0a0b4f440c9819d89c3afb3bfff',
         sortBy: 'most-recent',
         limit: 12,
         template: '<div class="image-item col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sp-12"><a href="{{link}}" target="_blank"><img src="{{model.images.standard_resolution.url}}" {{square}} class="img-in imgcenter"/></a></div>',
     });
     feed.run();
});
