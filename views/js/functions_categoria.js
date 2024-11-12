async function registrarCategoria() {
   
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    
    if (nombre == "" || detalle == "") {
        alert("Error!!, Campos vacíos");
        return;
    }
    try {
        //capturamos datos del formulario nuevacategoria.php
        const datos = new FormData(formRegistrarCat);
        //enviamos datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            swal("registro", json.mensaje, "success");
        } else {
            swal("registro", json.mensaje, "error");
        }
        console.log(json);


    } catch (e) {
        console.log("Oops, ocurrio un error" + e);
    }
}
