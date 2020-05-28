// Scroll indicatot

// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}

// Scroll indicatot


// RANGE SLIDER

var slider1 = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider1.value;

slider1.oninput = function() {
  output.innerHTML = this.value;
}

// RANGE SLIDER