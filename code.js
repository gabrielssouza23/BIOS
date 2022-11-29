function openNav() {
  let x = document.getElementById("nav");
  let width =
    window.innerWidth ||
    document.documentElement.clientWidth ||
    document.body.clientWidth;
  if (width > "425px") {
    x.style.height = "100px";
    console.log("Socorro");
  } else {
    x.style.width = "300px";
  }
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  document.getElementById("nav").style.width = "0";
  document.body.style.backgroundColor = "white";
}

function more(id) {
  var requests = document.getElementsByClassName("demand");
  var i;
  for (i = 0; i < requests.length; i++) {
    var openRequest = requests[i];
    openRequest.style.height = "6.5rem";
  }
  document.getElementById(id).style.height = "auto";
}
