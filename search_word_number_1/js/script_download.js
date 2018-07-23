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
	window.location.reload();
});

// Закрыть попап «Ошибка»
$('.js-close-thank-you_ko').click(function() { // по клику на крестик
	$('.js-overlay-thank-you_ko').fadeOut();
	window.location.reload();
});

function del_word (del) {
	var data = "new_word=" + del;
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "../app/delWord.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send(data);
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			window.location.reload();
			console.log(this.responseText);
		}
	};
}