




$( document ).ready (function() {

    var imgLimit;
    if (isMobile) {
        imgLimit = 6;
    } else {
        imgLimit = 12;
    }

    
var userFeed = new Instafeed({
    get: 'user',
    userId: '8697734412',
    limit: imgLimit,
    resolution: 'thumbnail',
    accessToken: '8697734412.1677ed0.c2c1516075d241d68df110d8ebb5c47b',
    sortBy: 'most-recent',
    template: '<div class="col-lg-1 col-sm-3 gallery instaimg"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid" /></a> </div>',
    links: false
   
    });

    userFeed.run();
    
    });

   
