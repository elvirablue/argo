$(document).on('ready', function(){
  
	var navMain = document.querySelector('.main-nav-block');
	var navToggle = document.querySelector('.main-nav__toggle');
	var start_pos = navMain.offsetTop + 100; 
  var FLAG_visible_scroll_menu = false;   
  //var filter = document.querySelector('#js-filter');
	



   window.addEventListener('keydown', function(event) {
          if (event.keyCode === 27 && $('.catalog__filters').css('display') === 'block') {
            $('.catalog__filters').css('display','none');          
            $('.catalog__bg-wrapper').css('display','none');
          };
    });

  

	navToggle.addEventListener('click', function() {
		if (navMain.classList.contains('main-nav--closed')) {
			navMain.classList.remove('main-nav--closed');	
			navMain.classList.add('main-nav--opened');
		} else {
			navMain.classList.add('main-nav--closed');	
			navMain.classList.remove('main-nav--opened');	
		}
	});




	$(window).scroll(function(){

    if ($(window).scrollTop() > start_pos && !FLAG_visible_scroll_menu) {
          if ($('.main-nav-scroll').hasClass('to_top')==false) {                        
                $('.main-nav-scroll').addClass('to_top');
                $('.main-nav-scroll').slideDown(600);
                FLAG_visible_scroll_menu = true;
          } 
    } 

    if ($(window).scrollTop() < start_pos && FLAG_visible_scroll_menu) {
                 $('.main-nav-scroll').slideUp(100, function() {
                    $('.main-nav-scroll').removeClass('to_top');               
                    FLAG_visible_scroll_menu = false;
                 });
                
             
          };

  });      

      


});