/*script para mostrar y ocultar la barra de navegación en responsive*/

document.querySelector(".boton-menu").addEventListener("click", ()=>{
    document.querySelector(".navegador-barra").classList.toggle("mostrar")
});