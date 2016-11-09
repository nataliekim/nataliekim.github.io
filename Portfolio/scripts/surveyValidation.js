function surveyValidation(){
	"use strict";
	
    var answers = document.getElementById('answer').value.trim(),
        judge;
    
    if(answers == '') {
        window.alert("Please fill in the answer.");
        return false;
    }
    
   
    return true;

}