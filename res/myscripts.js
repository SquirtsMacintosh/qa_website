/*
list of javascript functions for front end scripting
will be converted into jQuery eventually
*/

//makes sure the username/password is at least 3 chars long
function userPassLength(){
  var username = document.getElementById('Username').value;
  var password = document.getElementById('Password').value;
  if (username.length<4 || password.length<4) {
    //To-Do make these alerts appear under input fields
    alert("Your username and password should be at least 4 characters long");
  }
}

//makes sure the two passwords are the same on create account page
function samePass () {
  var password = document.getElementById('myPass').value;
  var sameCheck = document.getElementById('samePass').value;
  //checks the two passwords
  if (password != sameCheck) {
    alert("Your passwords do not match!");
  }
}

//makes sure the fields are not empty
