
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
            document.querySelector('#id_categoria').value = json.contenido.id;
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
        const datos = new FormData();
        try {
            //capturamos datos del formulario nuevoproducto.php
            const datos = new FormData(formActualizarCat);
            //enviamos datos hacia el controlador
            let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=actualizar', {
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




    async function eliminar_categoria(id){
        swal({
           title: "Realmente desea eliminar el Producto?",
           text : '',
           icon : "warning",
           buttons : true,
           dangerMode : true
        }).then((willDelete)=>{
       if (willDelete) {
           fnt_eliminar(id);
       }
        })
       }
       async function fnt_eliminar(id){
           // alert("producto eliminado: + id = "+id) ; se realiza para probar ña funcion
           const formdata = new FormData();
           formdata.append('id_categoria', id);
           try {
              let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=eliminar',{
               method: 'POST',
               mode: 'cors',
               cache: 'no-cache',
               body:formdata
              }); 
              json= await respuesta.json();
              if (json.status) {
               swal("Eliminar" , "eliminado correctamente", "success");
               document.querySelector('#fila' + id).remove();
              }else{
               swal('Eliminar', "Error al eliminar la categoria tiene productos asociados", "warning");
              }
           } catch (e) {
               console.log("Ocurrio un error" + e);
           }
       }