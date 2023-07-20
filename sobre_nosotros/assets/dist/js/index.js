const switchButton = document.getElementById("switch");
const body = document.body;
var div = document.getElementsByClassName ("fondo") [0];
var div2 = document.getElementsByClassName("fondo2")[0];
var div3 = document.getElementsByClassName("fondo3")[0];
var div4 = document.getElementsByClassName("fondo4")[0];
var div5 = document.getElementsByClassName("fondo5")[0];
var div6 = document.getElementsByClassName("fondo6")[0];
var div7 = document.getElementsByClassName("fondo7")[0];
var div8 = document.getElementsByClassName("fondo8")[0];
var div9 = document.getElementsByClassName("fondo9")[0];

switchButton.addEventListener("change", function () {
  if (this.checked) {
    div.style.backgroundColor = "#363439";
    div2.style.backgroundColor = "#363439";
    div4.style.backgroundColor = "#363439";
    div5.style.backgroundColor = "#363439";
    div6.style.backgroundColor = "#363439";
    div7.style.backgroundColor = "#363439";
    div8.style.backgroundColor = "#363439";
    div9.style.backgroundColor = "#363439";


  } else {
    div.style.backgroundColor = "white";
    div2.style.backgroundColor = "white";
    div4.style.backgroundColor = "white";
    div5.style.backgroundColor = "white";
    div6.style.backgroundColor = "white";
    div7.style.backgroundColor = "white";
    div8.style.backgroundColor = "white";
    div9.style.backgroundColor = "white";

  }
});

const textElement = document.getElementById("text");

switchButton.addEventListener("change", function () {
  if (this.checked) {
    div.style.color = "#f0f0f0"; 
    div2.style.color = "#f0f0f0"; 
    div3.style.color = "#f0f0f0"; 
    div4.style.color = "#f0f0f0"; 
    div5.style.color = "#f0f0f0"; 
    div6.style.color = "#f0f0f0"; 
    div7.style.color = "#f0f0f0"; 
    div8.style.color = "#f0f0f0"; 
    div9.style.color = "#f0f0f0"; 

  } else {
    div.style.color = "black";
    div2.style.color = "black";
    div3.style.color = "black";
    div4.style.color = "black";
    div5.style.color = "black";
    div6.style.color = "black";
    div7.style.color = "black";
    div8.style.color = "black";
    div9.style.color = "black";
  }
});
