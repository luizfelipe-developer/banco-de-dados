var pesquisar = document.querySelector('#pesquisar');
function pesqRegistro() {
    window.location = 'index.php?search='+pesquisar.value;
}

//ACIONAR PESQUISA COM BOTÃO ENTER DO TECLADO
document.addEventListener("keypress", function(e) {
    if(e.key === 'Enter') {
    
        var btn = document.querySelector("#submit");
      
      btn.click();
    
    }
  });