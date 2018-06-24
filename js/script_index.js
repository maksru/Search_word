$(document).ready(function() {
	$("#myform").validate({
		rules: {
			name_p: {
				required: true,
				minlength: 3
			},
			text_p: {
				required: true,
				minlength: 5
			}
		},
		messages: {
			name_p: {
				required: "*Введіть назву вірша...",
				minlength: "*Назва повинна бути більше 3 літер"
			},
			text_p: {
				required: "*Введіть текст...",
				minlength: "*Текст  бути більше 5 літер "
			}
		}
	});

	$('#myform').submit(function() {
		var request = $.ajax({
			type: "POST",
			url: "app/download_text.php",
			data: $(this).serialize()
		});
		request.done(function(data) {
			if (data == "OK")
			{
				$('.js-overlay-thank-you').fadeIn();
				$(this).find('input').val('');
				$('#myform').trigger('reset');
			} 
			else
			{
				$('.js-overlay-thank-you_ko').fadeIn();
				$(this).find('input').val('');
				$('#myform').trigger('reset');
			}
		});
		return false;
	});
});

// Закрыть попап «Cпасибо»
$('.js-close-thank-you').click(function() { // по клику на крестик
	$('.js-overlay-thank-you').fadeOut();
});

$(document).mouseup(function (e) { // по клику вне попапа
    var popup = $('.popup');
    if (e.target!=popup[0]&&popup.has(e.target).length === 0){
        $('.js-overlay-thank-you').fadeOut();
    }
});

// Закрыть попап «Ошибка»
$('.js-close-thank-you_ko').click(function() { // по клику на крестик
	$('.js-overlay-thank-you_ko').fadeOut();
});

$(document).mouseup(function (e) { // по клику вне попапа
    var popup = $('.popup_ko');
    if (e.target!=popup[0]&&popup.has(e.target).length === 0){
        $('.js-overlay-thank-you_ko').fadeOut();
    }
});

