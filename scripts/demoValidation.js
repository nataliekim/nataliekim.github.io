function demoValidation(){
	"use strict";
	
    var name = document.getElementById('name').value.trim(),
        email = document.getElementById('email').value.trim(),
        company = document.getElementById('company').value.trim(),
        title = document.getElementById('title').value.trim(),
        //discovery = document.getElementsByName('discovery'),
        checkbox = document.getElementById('agreement'),
        judge;
  
    if(!checkbox.checked ){
         window.alert("Please agree all the items.");
        return false;
    }

    if (name == '' || email == '' || company == '' || title == '') {
        window.alert("Please fill in all the fields.");
        return false;
    }

    judge = /^[a-zA-Z]+(\\s)*/;
    if (!judge.test(name) || name.length > 100) {
            window.alert("Please enter a valid name (a-z, A-Z and space)");
            return false;
        }


    judge = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!judge.test(email) || email.length > 100) {
            window.alert("Please enter a valid email");
            return false;
        }

    return true;

}