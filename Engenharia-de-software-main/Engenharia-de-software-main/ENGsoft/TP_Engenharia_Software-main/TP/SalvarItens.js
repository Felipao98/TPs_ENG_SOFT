function salvarValor(campo) {
    var valor = campo.value;
    var nomeCampo = campo.getAttribute("name");
    
    // Salva o valor no localStorage ou sessionStorage
    localStorage.setItem(nomeCampo, valor);
    //sessionStorage.setItem(nomeCampo, valor);
  }
  