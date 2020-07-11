
function nav() {
  var w = window.innerWidth
  || document.documentElement.clientWidth
  || document.body.clientWidth;

  if (w < 600) {
    if (document.getElementById('nav').style.height != '100vh') {
      document.getElementById('nav').style.height = '100vh';
    } else {
      document.getElementById('nav').style.height = '0';
    }
  } else if (w > 600) {
    if (document.getElementById('nav').style.height != '60px') {
      document.getElementById('nav').style.height = '60px';
    } else {
      document.getElementById('nav').style.height = '0';
    }
  }
}

function Animate(x) {
  x.classList.toggle("change");
}
