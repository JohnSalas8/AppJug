
var colors = [ '#00b300', '#0066ff', '#cc3399'];

function randomColor() {
    document.getElementById('title-jug').style.background = colors[
        Math.round(Math.random() * (colors.length-1) )
    ];
}

function checkUser() {
    var xhttp = new XMLHttpRequest();
    var email = document.getElementById('email').value;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText=="") {
                document.getElementById("mssg").innerHTML = "No hay alguna cuenta con ese correo.";
            } else {
                var email = document.getElementById('email').value;
                var pswd = document.getElementById('pswd').value;
                checkPassword(email, pswd);
            }
        }
    };
    xhttp.open("POST", "../driver/check_user.php?email=" + email, true);
    xhttp.send();
}

function checkPassword(email, pswd) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText=="") {
                document.getElementById("mssg").innerHTML += "Contraseña erronea.";
            } else {
                var email = document.getElementById('email').value;
                localStorage.setItem('appjuguser', email);
                document.getElementById("form-sign-in").submit();
            }
        }
    };
    console.log("../driver/check_password.php?email=" + email + "&pswd=" + pswd);
    xhttp.open("POST", "../driver/check_password.php?email=" + email + "&pswd=" + pswd, true);
    xhttp.send();
}

function logout() {
    localStorage.removeItem("appjuguser");
}