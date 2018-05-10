
var colors = [ '#00b300', '#0066ff', '#cc3399'];

function randomColor() {
    document.getElementById('title-jug').style.background = colors[
        Math.round(Math.random() * (colors.length-1) )
    ];
}