function openNav() {
  var x = document.getElementById("nav");
  x.style.width = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  document.getElementById("nav").style.width = "0";
  document.body.style.backgroundColor = "white";
}
