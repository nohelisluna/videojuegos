let agregar = document.getElementById('Agregar');
 let cerrar = document.getElementById('cerrar');

 let mostrar = document.getElementById('mostrar');
 

 agregar.addEventListener("click",()=>{
    mostrar.style.display = "block";
  })
  cerrar.addEventListener('click',()=>{
    
    mostrar.style.display = "none";
 })