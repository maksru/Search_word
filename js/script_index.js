$().ready(function() {
// $.validator.methods.email = function( value, element ) {
	//	console.log(element);
	// return this.optional( element ) || /^[0-9a-z-\.]+\@[0-9a-z-]{2,}\.[a-z.]{2,}$/i.test( value );
// }
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

	
});

