
var node = document.getElementById("menu")
var largura = window.innerWidth

function removermenu() {
if (node.parentNode && largura < 900) {
    node.parentNode.removeChild(node);
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
