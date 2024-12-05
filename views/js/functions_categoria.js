
async function listar_categorias() {
    try {
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=listar');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item => {
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila" + item.id; //el nueva_fila.id id es de crear nueva fila  y item.id es de base de datos 
                cont += 1;
                nueva_fila.innerHTML = `
            <th>${cont}</th>
            <td>${item.nombre}</td>
            <td>${item.detalle}</td>
            <td>${item.options}</td>
            `;
                document.querySelector('#tbl_categoria').appendChild(nueva_fila);
            });
        }
        console.log(json);
    } catch (error) {
        console.log("Error al listar Categorias:" + error);
    }
}
if (document.querySelector('#tbl_categoria')) {
    listar_categorias();
}



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


//Ver Categoria
async function ver_categoria(id){
    const formData = new FormData();
    formData.append('id_categoria', id);
    try {
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=ver',{
            method: 'POST',
            mode: 'cors',
            cache:'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            // document.querySelector('#codigo').value = json.contenido.codigo;
            document.querySelector('#nombre').value = json.contenido.nombre;
            document.querySelector('#detalle').value = json.contenido.detalle;
        }else{
            window.location = base_url+"categorias";
        }

        console.log(json);
    } catch (error) {
        console.log("Opps ocurrio un error" + error);
    }
}



