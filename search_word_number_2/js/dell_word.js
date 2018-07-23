function deleteWord (del) {
	  if (confirm("Вы уверены, что хотите удалить выделенный пункт?\nЭта операция не восстановима."))
	  	console.log(del);
       //f.submit();
	// var data = "new_word=" + del;
	// var xhttp = new XMLHttpRequest();
	// xhttp.open("POST", "../app/delWord.php", true);
	// xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	// xhttp.send(data);
	// xhttp.onreadystatechange = function() {
	// 	if (this.readyState == 4 && this.status == 200) {
	// 		window.location.reload();
	// 		console.log(this.responseText);
	// 	}
	// };
}