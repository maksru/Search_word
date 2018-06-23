$().ready(function() {
// $.validator.methods.email = function( value, element ) {
	//	console.log(element);
	// return this.optional( element ) || /^[0-9a-z-\.]+\@[0-9a-z-]{2,}\.[a-z.]{2,}$/i.test( value );
// }
	$("#myform").validate({
		rules: {
			name_p: {
				required: true
			},
			text_p: {
				required: true
			}
		},
		messages: {
			name_p: {
				required: "Введіть назву вірша..."
			},
			text_p: {
				required: "Введіть текст..."
			}
		}
	});
});