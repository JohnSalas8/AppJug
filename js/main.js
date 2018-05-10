
var colors = [ '#00b300', '#0066ff', '#cc3399'];

function randomColor() {
    document.getElementById('title-jug').style.background = colors[
        Math.round(Math.random() * (colors.length-1) )
    ];
}


function checkUser() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("mssg").innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "../driver/check_user.php", true);
    xhttp.send();
}