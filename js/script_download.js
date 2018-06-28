$().ready(function() {
	$("#form_word").validate({
		rules: {
			word: {
				required: true
			}
		},
		messages: {
			word: {
				required:"*Введіть будь ласка слово..."
			}
		}
	});

	$('#form_word').submit(function() {
		var request = $.ajax({
			type: "POST",
			url: "../app/add_download_word.php",
			data: $(this).serialize()
		});
		request.done(function(data) {
			if (data == "OK")
			{
				$('.js-overlay-thank-you').fadeIn();
				$(this).find('input').val('');
				$('#form_word').trigger('reset');
			} 
			else
			{
				$('.js-overlay-thank-you_ko').fadeIn();
				$(this).find('input').val('');
				$('#form_word').trigger('reset');
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