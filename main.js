//Hide page loader after loading
window.addEventListener("load", function(){
var loader = document.querySelector('.loader');

loader.classList.add("hide--loader");
loader.addEventListener("transitioned", function(){
  document.body.removeChild("loader");

});

});



//Show passsword 
function showpassword() {
var show = document.getElementById("showPassword");
if (show.type === "password") {
    show.type = "text";
} else { 
  show.type = "password";
  }

}