function cleanString(aString){
	return String(aString).replace(/(\r\n|\n|\r)/gm, "");
}

function closeObject(id) {
	document.getElementById(id).style.display = 'none';
}

function openObject(id) {
	document.getElementById(id).style.display = 'block';
}

function openClose(id){
	if ($('#' + id).css('display') == 'none'){
		openObject(id);
		$("#" + id).removeClass("hidden");
	}else{
		closeObject(id);
		$("#" + id).addClass("hidden");
	}
}