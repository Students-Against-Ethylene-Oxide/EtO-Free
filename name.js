
function change(object) {
  var element = document.getElementById(object);

  if (element.classList) {
    element.classList.toggle("change");
  } else {
    // For IE9
    var classes = element.className.split(" ");
    var i = classes.indexOf("change");

    if (i >= 0)
      classes.splice(i, 1);
    else
      classes.push("change");
      element.className = classes.join(" ");
  }
}
