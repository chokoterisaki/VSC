

if (inicio==true){
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
        div.style.backgroundColor = "#f0f0f0";
        div1.style.backgroundColor = "#f0f0f0";
        div2.style.backgroundColor = "#f0f0f0";
        div3.style.backgroundColor = "#f0f0f0";
        div4.style.backgroundColor = "#f0f0f0";
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
          div.style.color = "#363439";
          div1.style.color = "#363439";
          div2.style.color = "#363439";
          div3.style.color = "#363439";
          div4.style.color = "#363439";
      
        }
      });
    }
    else if (soporte == true){
        const switchButton = document.getElementById("switch");
        var div = document.getElementsByClassName("fondos")[0];
        var div1 = document.getElementsByClassName("fondos1")[0];
        var div2 = document.getElementsByClassName("fondos2")[0];
        var div3 = document.getElementsByClassName("fondos3")[0];
        var div4 = document.getElementsByClassName("fondos4")[0];
        //f0f0f0: blanco
        //363439: negro
        div.style.backgroundColor = "#f0f0f0";
            div1.style.backgroundColor = "#f0f0f0";
            div2.style.backgroundColor = "#f0f0f0";
            div3.style.backgroundColor = "#f0f0f0";
            div4.style.backgroundColor = "#f0f0f0";
        switchButton.addEventListener("change", function () {
          if (this.checked) {
            div.style.backgroundColor = "#363439";
            div1.style.backgroundColor = "#363439";
            div2.style.backgroundColor = "#363439";
            div3.style.backgroundColor = "#363439";
            div4.style.backgroundColor = "#363439";
          } else {
            div.style.backgroundColor = "#f0f0f0";
            div1.style.backgroundColor = "#f0f0f0";
            div2.style.backgroundColor = "#f0f0f0";
            div3.style.backgroundColor = "#f0f0f0";
            div4.style.backgroundColor = "#f0f0f0";
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
              div.style.color = "#363439";
              div1.style.color = "#363439";
              div2.style.color = "#363439";
              div3.style.color = "#363439";
              div4.style.color = "#363439";
          
            }
          }); 
    }