function questionValidation(){
	"use strict";
	 var question = document.getElementById('question').value.trim(),
        judge;

    if(question == '') {
        window.alert("Please fill in the blank.");
        return false;
    }
    return true;

}