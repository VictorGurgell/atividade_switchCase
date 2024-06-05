const cores = {
    "": "#FFFFFF",
    "preto": "#1c1c1c",
    "branco": "#FFFFFF",
    "vermelho": "#ff6969",
    "verde": "#5cff7a",
    "azul": "#5e6eff",
    "amarelo": "#eeff69",
    "laranja": "#FFA500",
    "roxo": "#b969ff",
    "rosa": "#FFC0CB"
  };
  
  function changeBackgroundColor() {
    var colorInput = document.getElementById("favcolor");
    var corDigitada = colorInput.value.toLowerCase();
    var corHexadecimal = cores[corDigitada];
    
    if (corHexadecimal) {
      document.body.style.backgroundColor = corHexadecimal;
    }
  }