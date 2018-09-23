$(document).ready(function() {
 var feed = new Instafeed({
         get: 'user',
         userId: '277022847',
         clientId: '01289662bc0445a8a9c6d0bccf3b1d26',
         accessToken: '277022847.1677ed0.a98d326b3caf423ba5b1d7003bd0cb34',
         sortBy: 'most-recent',
         limit: 12,
         template: '<div class="image-item col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sp-4"><a href="{{link}}" target="_blank"><img src="{{model.images.standard_resolution.url}}" {{square}} class="img-responsive"/></a></div>',
     });
     feed.run();
});
