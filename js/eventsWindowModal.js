var idjuego = 0;

var idgame = 0;
var calificacion = 0;
var valor = 0;
var namegame = '';

function setStarY (star) {
    calificacion = star;
    var stars = document.getElementsByName('stars');
    for (var i = 0; i < star; i++) {
        stars[i].src = '../imgs/Estrella.png';
    }
    for (var i = star; i < stars.length; i++) {
        stars[i].src = '../imgs/Estrellag.png';
    }
}

/*function goHome () {
    window.location.href = 'index.jsp';
}*/

function buyGame (idResp) {
    var btn = document.getElementById('bttnComprar');
    btn.style.background = '#2eb82e';
    btn.innerHTML = 'Comprado';
    
    var fullDate = getFullDate();
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('errFactura').innerHTML = this.responseText;
        }
    };
    xhttp.open(
            "POST", "../driver/createFactura.jsp?idResp="+idResp+"&idProduct="+idgame+"&fecha="+fullDate+'&kindProduct=juego',
            true);
    xhttp.send(null);
}

function updateModalWindow (nameGame, idGame, precio) {
    idgame = idGame;
    namegame = nameGame;
    valor = precio;
    showDescGame (idGame, nameGame, precio);
    
    showOpinions (idGame);
    
    crearToComent ();
}

function getFullDate() {
    var f = new Date();
    return ((f.getYear()+1900)+'-'+(f.getMonth()+1)+'-'+f.getDate()+' '+f.getHours()+':'+f.getMinutes()+':'+f.getSeconds());
}

function setComentario (idResp) {
    if(calificacion==0) {
        alert('Califique el Juego por favor');
    } else {
        var opinion = document.getElementById("opinion").value;
        var fullDate = getFullDate();
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("opinion").value = '';
                showOpinions (idgame);
                showDescGame (idgame, namegame, valor);
                crearToComent ();
            }
        };
        xhttp.open(
                "POST", "../driver/send_comentary.php?idResp="+idResp+'&idGame='+idgame+
                '&calificacion='+calificacion+'&opinion='+opinion+'&fecha='+fullDate,
                true);
        xhttp.send(null);
    }
}

function showDescGame (idGame, nameGame, precio) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('descGame').innerHTML = this.responseText;
        }
    };
    email = localStorage.getItem('appjuguser');
    user_id = localStorage.getItem(email);
    xhttp.open(
            "POST", "../driver/description_game.php?idGame="+idGame+'&nameGame='+nameGame+'&precio='+precio+'&user_id='+user_id,
            true);
    xhttp.send(null);
}

function showOpinions (idGame) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('cmntTable').innerHTML = this.responseText;
        }
    };
    xhttp.open(
            "POST", "../driver/show_opinions.php?idGame="+idGame,
            true);
    xhttp.send(null);
}

function crearToComent () {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('paraComentar').innerHTML = this.responseText;
        }
    };

    email = localStorage.getItem('appjuguser');
    user_id = localStorage.getItem(email);
    xhttp.open(
            "POST", "../driver/create_to_coment.php?email="+email+"&user_id="+user_id,
            true);
    xhttp.send(null);
}

function hideWindowModal() {
    windowModal = document.getElementById('popup');
    windowModal.style.visibility = 'hidden';
    windowModal.style.width = '0px';
    windowModal.style.height = '0px';
    windowModal.style.opacity = '0';
    windowModal.style.marginTop = '-200px';
}

function showWindowModal() {
    windowModal = document.getElementById('popup');
    windowModal.style.width = '100%';
    windowModal.style.height = '100%';
    windowModal.style.opacity = '1';
    windowModal.style.backgroundColor = 'rgba(0,0,0,0.8)';
    windowModal.style.position = 'fixed';
    windowModal.style.top = '0';
    windowModal.style.left = '0';
    windowModal.style.right = '0';
    windowModal.style.bottom = '0';
    //windowModal.style.zIndex = '999';
    windowModal.style.transition = 'all 1s';
    windowModal.style.marginTop = '0px';
    windowModal.style.visibility = 'visible';
    
    // popup-contenedor
    windowModal = document.getElementById('popup-contenedor');
    windowModal.style.marginTop = '60px';
    //windowModal.style.margin = '5% auto';
    //windowModal.style.
    
}