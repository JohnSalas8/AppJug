
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

function createCount() {
    var firstname = document.getElementById('firstname').value;
    var lastnamep = document.getElementById('lastnamep').value;
    var lastnamem = document.getElementById('lastnamem').value;
    var rfc = document.getElementById('rfc').value;
    var num_card = document.getElementById('num-card').value;
    var code_card = document.getElementById('code-card').value;
    var sense_year = document.getElementById('sense-year').value;
    var until_month_year = document.getElementById('until-month-year').value;
    var until_month = until_month_year.split('-')[1];
    var until_year = until_month_year.split('-')[0];
    var city = document.getElementById('city').value;
    var postal_code = document.getElementById('postal-code').value;
    var fracc = document.getElementById('fracc').value;
    var street = document.getElementById('street').value;
    var number_home = document.getElementById('number-home').value;
    var cell = document.getElementById('cell').value;
    var email = document.getElementById('email').value;
    var pswd1 = document.getElementById('pswd1').value;
    var pswd2 = document.getElementById('pswd2').value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText=="") {    // Se agregó exitosamente
                document.getElementById('form-create-count').submit();
            } else {    // Hubo algún error
                document.getElementById('mssg').innerHTML = this.responseText;
            }
        }
    };
    xhttp.open("POST", "../driver/create_user.php?"
        + "firstname=" + firstname 
        + "&lastnamep=" + lastnamep
        + "&lastnamem=" + lastnamem
        + "&rfc=" + rfc
        + "&num_card=" + num_card
        + "&code_card=" + code_card
        + "&sense_year=" + sense_year
        + "&until_month=" + until_month
        + "&until_year=" + until_year
        + "&city=" + city
        + "&postal_code=" + postal_code
        + "&fracc=" + fracc
        + "&street=" + street
        + "&number_home=" + number_home
        + "&cell=" + cell
        + "&email=" + email
        + "&pswd=" + pswd1
    , true);
    xhttp.send();
}