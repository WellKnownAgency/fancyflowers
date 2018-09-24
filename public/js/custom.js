$(document).ready(function() {
 var feed = new Instafeed({
         get: 'user',
         userId: '277022847',
         clientId: ' 474194880b8845819aba26a07dc122fd',
         accessToken: '64e116081eb840eda39d7b977683cc78',
         sortBy: 'most-recent',
         limit: 12,
         template: '<div class="image-item col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sp-4"><a href="{{link}}" target="_blank"><img src="{{model.images.standard_resolution.url}}" {{square}} class="img-responsive"/></a></div>',
     });
     feed.run();
});
