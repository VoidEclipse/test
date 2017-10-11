	$(window).scroll(function(){
    if ($(window).scrollTop() > 50) {
          $('.navbar').css('background-color', 'rgba(255,255,255,0.9)')
    	    $('a').css('color', '#333')
    	    $('span').css('background-color', '#333')
          $('.navbar').css('text-shadow', '0px 0px 0px')
          $('.navbar-brand').css('text-shadow', '0px 0px 0px')
    }
     else if($(window).scrollTop() < 1500) {
          $('.navbar').css('background-color', 'transparent')
    	    $('a').css('color', 'white')
          $('.navbar').css('text-shadow', '1px 1px 2px #333')
          $('.navbar-brand').css('text-shadow', '1px 1px 2px #333')
    }
});
