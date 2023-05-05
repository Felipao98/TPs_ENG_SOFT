function salvarValor(campo) {
    var valor = campo.value;
    var nomeCampo = campo.getAttribute("pname");
    var nomeCampo = campo.getAttribute("rname");
    var nomeCampo = campo.getAttribute("email");
    
    // Salva o valor no localStorage ou sessionStorage
    localStorage.setItem(nomeCampo, valor);
    //sessionStorage.setItem(nomeCampo, valor);
  }
  function carregarValores() {
    // Carrega os valores do localStorage ou sessionStorage e preenche os campos de entrada
    document.getElementById("pnome").value = localStorage.getItem("pnome");
    document.getElementById("rnome").value = localStorage.getItem("rnome");
    document.getElementById("email").value = localStorage.getItem("email");
    //document.getElementById("nome").value = sessionStorage.getItem("nome");
    //document.getElementById("email").value = sessionStorage.getItem("email");
    //document.getElementById("senha").value = sessionStorage.getItem("senha");
  }
  