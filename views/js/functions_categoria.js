
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






async function actualizarCategoria() {
    const formActualizar = document.getElementById('formActualizarCat');
    const nombre = document.getElementById('nombre').value;
    const detalle = document.getElementById('detalle').value;

    // Verificar que los campos no estén vacíos
    if (!nombre || !detalle) {
        alert('Por favor, completa todos los campos.');
        return; // Detiene la ejecución si algún campo está vacío
    }

    const datos = new FormData(formActualizar); // Obtiene los datos del formulario
    const botonActualizar = document.querySelector('button[type="button"]'); // Obtén el botón de actualización
    botonActualizar.disabled = true; // Desactiva el botón mientras se procesa la actualización

    try {
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=actualizar', {
            method: 'POST',
            body: datos
        });

        const json = await respuesta.json(); // Convierte la respuesta en JSON

        if (json.status === 'success') {
            // Mostrar un mensaje de éxito y habilitar el botón nuevamente
            alert('Categoría actualizada correctamente');
            botonActualizar.disabled = false;
            // Opcional: Redirigir a otra página o actualizar el contenido
        } else {
            alert(json.message); // Muestra el mensaje de error si ocurre
            botonActualizar.disabled = false;
        }
    } catch (e) {
        console.log("Oops, ocurrió un error: " + e);
        alert('Ocurrió un error al actualizar la categoría. Intenta nuevamente.');
        botonActualizar.disabled = false; // Habilitar el botón de nuevo en caso de error
    }
}


