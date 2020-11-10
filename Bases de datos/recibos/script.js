document.getElementById("btn-nombre-agregar").addEventListener("click", mostrar_fila);
document.getElementById("casual").addEventListener("click", mostrar_casual);
document.getElementById("critico").addEventListener("click", mostrar_critico);

form_casual=  document.getElementById("form_casual");
form_critico=  document.getElementById("form_critico");
tabla= document.getElementById("TABLA");

function mostrar_fila(){
    tabla.insertRow(-1).innerHTML = '<td></td><td></td><td></td><td></td>';
}  
function mostrar_casual(){
    form_casual.style.display = "block";
    form_critico.style.display = "none";
}    

function mostrar_critico(){
    form_critico.style.display = "block";
    form_casual.style.display  = "none";
} 

