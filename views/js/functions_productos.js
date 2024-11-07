async function registrarProducto() {
    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#categoria').value;
    let fecha_v = document.querySelector('#fecha_v').value;
    let img = document.querySelector('#imagen').value;
    let proveedor = document.querySelector('#proveedor').value;
    if (codigo=="" || nombre =="" || detalle=="" || precio =="" || stock ==""
        || categoria =="" || fecha_v =="" || img =="" || proveedor =="") {
            alert("Error!!, Campos vacíos");
            return;
    }
    try {
        //capturamos datos del formulario html nuevo-producto
        const datos = new FormData(formRegistrarProd);
        //enviamos datos hacia el controlador
        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=registrar',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            swal("registro", json.mensaje, "success");
        }else{
            swal("registro", json.mensaje, "error");
        }
        console.log(json);


    } catch (e) {
        console.log("Oops, ocurrio un error"+e);
    }
}

async function listar_categorias() {
    try {
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            datos.forEach(element => {
              $('#categoria').append($('<option />',{
                text: `${element.nombre}` ,
                value: `${element.id}`,
              }));
            });
            
        }
        console.log(respuesta);
    } catch (e) {
        console.error("Error al cargar las Categorias"+e);
    }
    
}
