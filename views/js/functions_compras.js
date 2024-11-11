async function registrarCompras() {
   
    let id_proveedor = document.querySelector('#id_proveedor').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let id_trabajador = document.querySelector('#id_trabajador').value;
    
    if (id_proveedor == "" || cantidad == "" ||precio =="" || id_trabajador =="") {
        alert("Error!!, Campos vacíos");
        return;
    }
    try {
        //capturamos datos del formulario html nuevo-producto
        const datos = new FormData(formRegistrarCom);
        //enviamos datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Compra.php?tipo=registrar', {
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
