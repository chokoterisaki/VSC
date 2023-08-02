const switchButton = document.getElementById("switch");
var div = document.getElementsByClassName("fondo")[0];
var div1 = document.getElementsByClassName("fondo1")[0];
var div2 = document.getElementsByClassName("fondo2")[0];
var div3 = document.getElementsByClassName("fondo3")[0];
var div4 = document.getElementsByClassName("fondo4")[0];

switchButton.addEventListener("change", function () {
  if (this.checked) {
    div.style.backgroundColor = "#363439";
    div1.style.backgroundColor = "#363439";
    div2.style.backgroundColor = "#363439";
    div3.style.backgroundColor = "#363439";
    div4.style.backgroundColor = "#363439";
  } else {
    div.style.backgroundColor = "white";
    div1.style.backgroundColor = "white";
    div2.style.backgroundColor = "white";
    div3.style.backgroundColor = "white";
    div4.style.backgroundColor = "white";
  }
});

switchButton.addEventListener("change", function () {
    if (this.checked) {
      div.style.color = "#f0f0f0";
      div1.style.color = "#f0f0f0";
      div2.style.color = "#f0f0f0";
      div3.style.color = "#f0f0f0";
      div4.style.color = "#f0f0f0";
  
    } else {
      div.style.color = "black";
      div1.style.color = "black";
      div2.style.color = "black";
      div3.style.color = "black";
      div4.style.color = "black";
  
    }
  });