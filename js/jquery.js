jQuery(function ($) {

    $('a').addClass('alink');
   //navigation menu toggle
   $('.icon-one').toggle(function(){
       $('.navi').css('margin-left', '0');
   },
                        function(){
       $('.navi').css('margin-left', '-100%');
   });
    //search input toggle
    $('i.fa.fa-search.icon-two').toggle(function(){
        $('.primary-menu .searchprime').fadeIn();
    },
                                       function(){
        $('.primary-menu .searchprime').fadeOut();
    });
    //sidebar toggle
        $('.fa.fa-ellipsis-h.icon-three').toggle(
        function(){
        $('sidebar').fadeIn();
    },
        function(){
        $('sidebar').fadeOut();
    });
    
    var current_location_site = window.location.href;
    var referer_url = document.referrer;
    if(current_location_site.indexOf(referer_url) >= 0){
    $('i.fa.fa-angle-left').click(function(){
       parent.history.back();
		return false; 
    });
    }
    
    
   $("#content").fadeIn();
   $("footer").css('margin-bottom','0'); 
   $(".primary-menu").css('margin-top','0'); 
   $(".fa.fa-angle-left").css('margin-top','0'); 
    
   $("nav a, footer a, .wc-backward, .wc-forward, .woocommerce-LoopProduct-link").click(function(){
     $("#content").fadeOut(); 
     $("footer").css('margin-bottom','-15%'); 
     $(".primary-menu").css('margin-top','-15%'); 
     $(".fa.fa-angle-left").css('margin-top','-15%');
     $("nav").css('margin-left','-100%');
   });

});