console.log('Hello World!');
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function login(){
   document.getElementById("login").style.display="block";
   document.getElementById("logbtn1").style=" box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;";
  document.getElementById("logbtn2").style.boxShadow="none"
   document.getElementById("reg").style.display="none";

   
}
function regst(){
   document.getElementById("reg").style.display="block";
      document.getElementById("login").style.display="none";
   document.getElementById("logbtn2").style=" box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;";
     document.getElementById("logbtn1").style.boxShadow="none"
}



function user() {
   var pass1 = document.getElementById("passwordn").value;
   var pass2 = document.getElementById("passwordc").value;
   var bg = document.getElementById("passwordc");

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
