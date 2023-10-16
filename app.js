function main() {
  var app = document.getElementById("div1");
  var myapi= document.getElementById("block");
  if (app.style.backgroundImage.includes("user.png")) {
    app.style.backgroundImage = "url('close.png')";
   myapi.style.display="block"
    
  } else {
    app.style.backgroundImage = "url('user.png')";
   myapi.style.display="none"
  }
}

// error
function error(){
  alert("function(error){alert('⚠️')}")
};

function nahid(){
  document.getElementById("usejs").style.display="block";
}