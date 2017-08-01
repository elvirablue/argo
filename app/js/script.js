$(document).on('ready', function(){ 
	function trimAll(s) {
	// убирает все пробелы в строке s	
 		var r=/\s+/g;
  	return s.replace(r,'');
	}


	$('.js-btn-cargo').click(function(event){
      	event.preventDefault();
      	if ($('.scan-cargo').hasClass('show')) $('.scan-cargo').removeClass('show')
      	else $('.scan-cargo').addClass('show');

      	if ($('.scan-car').hasClass('show')) $('.scan-car').removeClass('show');
    });

    $('.js-btn-car').click(function(event){
      	event.preventDefault();
      	if ($('.scan-car').hasClass('show')) $('.scan-car').removeClass('show')
      	else $('.scan-car').addClass('show');

      	if ($('.scan-cargo').hasClass('show')) $('.scan-cargo').removeClass('show');
    });

    $('.scan-cargo .js-btn-step1').click(function(event){
      	event.preventDefault();
      	$('.scan-cargo .scan-cargo__step2').addClass('show');
      	$(this).addClass('hidden');
      	$('.scan-cargo .js-step-num').text('2');
    });

    $('.scan-car .js-btn-step1').click(function(event){
        event.preventDefault();
        $('.scan-car .scan-car__step2').addClass('show');
        $(this).addClass('hidden');
        $('.scan-car .js-step-num').text('2');
    });

    $('.scan-car .js-btn-step2').click(function(event){
        event.preventDefault();
        $('.scan-car .scan-car__step3').addClass('show');
        $(this).addClass('hidden');
        $('.scan-car .js-step-num').text('3');
    });

    $('.scan-car .js-btn-step3').click(function(event){
        event.preventDefault();
        $('.scan-car .scan-car__step4').addClass('show');
        $(this).addClass('hidden');
        $('.scan-car .js-step-num').text('4');
    });

	

  	
});

 $(document).ready(function() {
        $('#user-auto-cargo').multiselect();
        $('.user-input-bootstrap').multiselect();

        $(function () {
            $('.datetimepicker6').datetimepicker(
               {pickTime: false, language: 'ru'}
            );
        });

        $(function () {
            $('.datetimepicker3').datetimepicker(
               {pickDate: false, language: 'ru'}
            );
        });
});