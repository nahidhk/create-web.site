// login show password 
console.log('Hello World!');
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
// login system 
function login(){
   document.getElementById("login").style.display="block";
   document.getElementById("logbtn1").style=" box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;";
  document.getElementById("logbtn2").style.boxShadow="none"
   document.getElementById("reg").style.display="none";

   
}
// regaton system 
function regst(){
   document.getElementById("reg").style.display="block";
      document.getElementById("login").style.display="none";
   document.getElementById("logbtn2").style=" box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;";
     document.getElementById("logbtn1").style.boxShadow="none"
}


// password and user system 
function user() {
   var pass1 = document.getElementById("passwordn").value;
   var pass2 = document.getElementById("passwordc").value;
   var bg = document.getElementById("passwordc");
// conprom password system 
   if (pass1 === pass2 && pass1 !== "" && pass2 !== "") {
    document.getElementById("none").style.display="block";
     document.getElementById("error").style.display="none";
    
   } else {
     document.getElementById("error").style.display="block";
    document.getElementById("none").style.display="none";
     
   }
}

//document.getElementById("passwordn").addEventListener("input", checkPassword);
document.getElementById("passwordc").addEventListener("input", user);

//kidding system/
function data(){
  document.getElementById("hold").style.display="block"
}


// password maker 
var myInput = document.getElementById("passwordn");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  //
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}