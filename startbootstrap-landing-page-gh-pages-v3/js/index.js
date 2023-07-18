const switchButton = document.getElementById("switch");
const body = document.body;
var div0 = document.getElementsByClassName("fondo1")[0];
var div = document.getElementsByClassName("fondo")[0];
var div2 = document.getElementsByClassName("fondo2")[0];
var div3 = document.getElementsByClassName("fondo3")[0];
var div4 = document.getElementsByClassName("fondo4")[0];
var div5 = document.getElementsByClassName("fondo5")[0];


switchButton.addEventListener("change", function () {
  if (this.checked) {
    div0.style.backgroundColor = "#363439";
    div.style.backgroundColor = "#363439";
    div2.style.backgroundColor = "#363439";
    div3.style.backgroundColor = "#363439";
    div4.style.backgroundColor = "#363439";
    div5.style.backgroundColor = "#363439";

  } else {
    div0.style.backgroundColor = "white";
    div.style.backgroundColor = "white";
    div2.style.backgroundColor = "white";
    div3.style.backgroundColor = "white";
    div4.style.backgroundColor = "white";
    div5.style.backgroundColor = "white";

  }
});

const textElement = document.getElementById("text");

switchButton.addEventListener("change", function () {
  if (this.checked) {
    div0.style.color = "#f0f0f0";
    div.style.color = "#f0f0f0";
    div2.style.color = "#f0f0f0";
    div3.style.color = "#f0f0f0";
    div4.style.color = "#f0f0f0";
    div5.style.color = "#f0f0f0";

  } else {
    div0.style.color = "black";
    div.style.color = "black";
    div2.style.color = "black";
    div3.style.color = "black";
    div4.style.color = "black";
    div5.style.color = "black";

  }
});
