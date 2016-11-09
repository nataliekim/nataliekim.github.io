function loginValidation(){
	"use strict";
	
    var post_username = document.getElementById('username').value.trim(),
        post_password = document.getElementById('password').value.trim(),
        judge;
  
    if (post_username == '' || post_password == '') {
        window.alert("Please fill in all the login info.");
        return false;
    }
    judge = /^[a-zA-Z]+(\\s)*[0-9]*/;
    if (!judge.test(post_username) || post_username.length > 100) {
            window.alert("Please enter a valid username (a-z, A-Z, 0-9 and space)");
            return false;
        }
    if (!judge.test(post_password) || post_password.length > 100) {
            window.alert("Please enter a valid password (a-z, A-Z, 0-9 and space)");
            return false;
        }

    return true;

}