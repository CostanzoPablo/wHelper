function cleanString(aString){
	return String(aString).replace(/(\r\n|\n|\r)/gm, "");
}