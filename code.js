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

function filter(tag) {
  var types = document.getElementsByClassName("service");
  var i;
  for (i = 0; i < types.length; i++) {
    let thisType = types[i];
    thisType.style.display = "grid";
  }
  for (i = 0; i < types.length; i++) {
    let thisType = types[i];
    if (thisType.classList.contains(tag)) {
    } else {
      thisType.style.display = "none";
    }
  }
}

function closeNav() {
  document.getElementById("nav").style.width = "0";
  document.body.style.backgroundColor = "white";
}

function more(id) {
  let requests = document.getElementsByClassName("demand");
  let i;
  for (i = 0; i < requests.length; i++) {
    let openRequest = requests[i];
    openRequest.style.height = "6.5rem";
  }
  document.getElementById(id).style.height = "auto";
}
