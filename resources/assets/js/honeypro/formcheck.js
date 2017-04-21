(function( $ ){

  //// ---> Check issue element
	jQuery.fn.exists = function() {
	   return jQuery(this).length;
	}

	$(function() {

    if(!is_mobile()){

      if( $('.phonefield').exists()){
        $('.phonefield').mask('+7 (999) 999-99-99');
      }

      if( $('.form_check').exists()){

        $('.form_check').each(function(){

          var form = $(this),
              btn = form.find('.btnsubmit');

          form.find('.rfield').addClass('empty_field').parents('.rline').append('<span class="rfield_error">Заполните это поле</span>');
          btn.addClass('disabled');

          // Функция проверки полей формы
          function checkInput(){

            form.find('.rfield').each(function(){

              if($(this).hasClass('phonefield')){

                var pmc = $(this);
                if ( (pmc.val().indexOf("_") != -1) || pmc.val() == '' ) {
                  pmc.addClass('empty_field');
                } else {
                  pmc.removeClass('empty_field');
                }

              } else if($(this).val() != '') {

                $(this).removeClass('empty_field');

              } else {

                $(this).addClass('empty_field');
              }

            });
          }

          // Функция подсветки незаполненных полей
          function lightEmpty(){
            form.find('.empty_field').addClass('rf_error');
            form.find('.empty_field').parents('.rline').find('.rfield_error').css({'visibility':'visible'});
            setTimeout(function(){
              form.find('.empty_field').removeClass('rf_error');
              form.find('.empty_field').parents('.rline').find('.rfield_error').css({'visibility':'hidden'});
            },2000);
          }

          //  Полсекундная проверка
          setInterval(function(){
            checkInput();
            var sizeEmpty = form.find('.empty_field').length;
            if(sizeEmpty > 0){
              if(btn.hasClass('disabled')){
                return false
              } else {
                btn.addClass('disabled')
              }
            } else {
              btn.removeClass('disabled')
            }
          },500);

          //  Клик по кнопке
          btn.click(function(){
            if($(this).hasClass('disabled')){
              lightEmpty();
              return false
            } else {
              form.submit();
					    $.ajax({
	          		type: "POST",
	          		url: "/main-order",
	          		data: $(".thisChanges").serialize(),
	          		success: function(){
	          		//alert(msg);
	          		// if(msg){
	          			$('.thisChanges').fadeOut(1000);
	          			$('.success-msg').fadeIn(1000);
									$('.success-msg2').fadeIn(2000);
	          				//document.getElementById("contact_message");
	          			//  return true;
	                 console.log('ok');
	          		// }
	              }
	          	});
            }
          });
        });
      }
    }
	});
})( jQuery );
