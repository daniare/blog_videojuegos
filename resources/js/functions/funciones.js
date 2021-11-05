const muestra = () => {
    document.getElementById("contenido").value = "";
    let contenido = document.getElementById("editor").firstChild.innerHTML;
    document.getElementById("contenido").value = contenido;
    console.log(document.getElementById("contenido").value);
}

export default muestra();