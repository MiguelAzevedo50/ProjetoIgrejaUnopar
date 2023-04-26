//Função sexo outro, especifique

function mostrarCampoOutro() {
    var campoOutro = document.getElementById("campo-outro");
    if(document.getElementById("outro").checked){
      campoOutro.style.display = "block";
    }else{
      campoOutro.style.display = "none"
    }

}
