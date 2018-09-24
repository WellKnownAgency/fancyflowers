$(document).ready(function() {
 var feed = new Instafeed({
         get: 'user',
         userId: '248274392',
         clientId: '4474194880b8845819aba26a07dc122fd',
         accessToken: '248274392.1677ed0.8a29b5a11e5f4e0f8b8e6ddd0933ac4c',
         sortBy: 'most-recent',
         limit: 12,
         template: '<div class="image-item col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sp-12"><a href="{{link}}" target="_blank"><img src="{{model.images.standard_resolution.url}}" {{square}} class="img-in"/></a></div>',
     });
     feed.run();
});
