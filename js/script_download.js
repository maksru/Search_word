$().ready(function() {
	$("#form_word").validate({
		rules: {
			word: {
				required: true
			}
		},
		messages: {
			word: {
				required:"Введіть будь ласка слово..."
			}
		}
	});
});