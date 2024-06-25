var loginForm = document.getElementById("loginForm");
    var signinForm = document.getElementById("signinForm");
    var z = document.getElementById("btn");

    function signin() {
        loginForm.style.left = "-400px";
        signinForm.style.left = "50px";
        z.style.left = "110px";
    }

    function login() {
        loginForm.style.left = "50px";
        signinForm.style.left = "450px";
        z.style.left = "0px";
    }