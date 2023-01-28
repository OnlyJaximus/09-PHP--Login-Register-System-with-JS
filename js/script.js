let popup = document.getElementById("popup");

function closePopup() {
    popup.classList.add("open-popup")
}


var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

function register() {
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";
}

function login() {
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0px";
}


$('button').click(function(){
    $('.alert').removeClass("hide");
    $('.alert').addClass("show");

})

$('.close-btn').click(function(){
    $('.alert').addClass("hide");
    $('.alert').removeClass("show");

})


