$(document).on('ready', function(){ 
	function trimAll(s) {
	// убирает все пробелы в строке s	
 		var r=/\s+/g;
  	return s.replace(r,'');
	}


//$('.js-btn-cargo').click(function(event){
//     	event.preventDefault();
//     	if ($('.scan-cargo').hasClass('show')) $('.scan-cargo').removeClass('show')
//     	else $('.scan-cargo').addClass('show');

//     	if ($('.scan-car').hasClass('show')) $('.scan-car').removeClass('show');
//   });

//   $('.js-btn-car').click(function(event){
//     	event.preventDefault();
//     	if ($('.scan-car').hasClass('show')) $('.scan-car').removeClass('show')
//     	else $('.scan-car').addClass('show');

//     	if ($('.scan-cargo').hasClass('show')) $('.scan-cargo').removeClass('show');
//   });

//   $('.scan-cargo .js-btn-step1').click(function(event){
//     	event.preventDefault();
//     	$('.scan-cargo .scan-cargo__step2').addClass('show');
//     	$(this).addClass('hidden');
//     	$('.scan-cargo .js-step-num').text('2');
//   });

//   $('.scan-car .js-btn-step1').click(function(event){
//       event.preventDefault();
//       $('.scan-car .scan-car__step2').addClass('show');
//       $(this).addClass('hidden');
//       $('.scan-car .js-step-num').text('2');
//   });

//   $('.scan-cargo .js-btn-step2').click(function(event){
//       event.preventDefault();
//       $('.scan-cargo .scan-cargo__step3').addClass('show');
//       $(this).addClass('hidden');
//       $('.scan-cargo .js-step-num').text('3');
//   });

//   $('.scan-car .js-btn-step2').click(function(event){
//       event.preventDefault();
//       $('.scan-car .scan-car__step3').addClass('show');
//       $(this).addClass('hidden');
//       $('.scan-car .js-step-num').text('3');
//   });

//   $('.scan-cargo .js-btn-step3').click(function(event){
//       event.preventDefault();
//       $('.scan-cargo .scan-cargo__step4').addClass('show');
//       $(this).addClass('hidden');
//       $('.scan-cargo .js-step-num').text('4');
//   });

//   
//   $('.scan-car .js-btn-step3').click(function(event){
//       event.preventDefault();
//       $('.scan-car .scan-cargo__step4').addClass('show');
//       $(this).addClass('hidden');
//       $('.scan-car .js-step-num').text('4');
//   });

    
    $('.js-main-btn-add').click(function(event){
        event.preventDefault();
        modalp = $('#infoRegModalBox .modal-body p');

        if ($(this).hasClass('add-offer')) {modalp.find('span').text('ПЕРЕВОЗЧИКА');}
        if ($(this).hasClass('add-car')) {modalp.find('span').text('ГРУЗОВЛАДЕЛЬЦА');}
        $('#infoRegModalBox').modal('show');
    });
	

  	
});

 $(document).ready(function() {
        $('#user-auto-cargo').multiselect({maxHeight: 200});
        $('.user-input-bootstrap').multiselect(
          
            {
              maxHeight: 200,
              nonSelectedText: 'Нажмите, чтобы выбрать',
              nSelectedText: ' шт. выбрано',
              allSelectedText: 'Выбрано ',
              disabledText: 'Нажмите, чтобы выбрать',
                          

                              
            }
        );

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