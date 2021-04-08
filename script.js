
var node = document.getElementById("menu")

var largura = window.innerWidth

function removermenu() {
if (node.parentNode && largura < 1000) {
    document.getElementById('check').click()
}
}


/* var nav = document.getElementById("menu");
var largura = window.innerWidth

function removermenu() {
    if (largura < 900 ) {
        nav.onclick() = function() {
            this.remove()
        }
    }
}

removermenu() */
