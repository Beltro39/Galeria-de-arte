document.getElementById("casual").addEventListener("click", mostrar_casual);
document.getElementById("critico").addEventListener("click", mostrar_critico);

form_casual=  document.getElementById("form_casual");
form_critico=  document.getElementById("form_critico");

function mostrar_casual(){
    form_casual.style.display = "block";
    form_critico.style.display = "none";
}    

function mostrar_critico(){
    form_critico.style.display = "block";
    form_casual.style.display  = "none";
} 
