// Función para listar los productos
async function listar_compras() {
    try {
        let respuesta = await fetch(base_url + 'controller/Compra.php?tipo=listar');
        let json = await respuesta.json();

        if (json.status) {

            let datos = json.contenido;
            let cont = 0;
            // Agregar filas a la tabla
            datos.forEach(item => {
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila" + item.id;
                cont+=1
                nueva_fila.innerHTML = `
                 <tr>
                        <th>${cont}</th>
                         <td>${item.producto.nombre}</td>
                        <td>${item.cantidad}</td>
                        <td>${item.precio}</td>
                        <td>${item.trabajador.razon_social}</td>
                        <td>${item.options}</td>

                    </tr>
                `;
                document.querySelector("#tbl_compra")
                .appendChild(nueva_fila);
                
            });
        };
        console.log(json);
    } catch (error) {
        console.error("Error a la hora de listar productos" + error);
    }
}
if (document.querySelector('#tbl_compra')) {
    listar_compras();
}




async function registrarCompra() {
 
    let producto = document.querySelector('#id_producto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let trabajador = document.querySelector('#trabajador').value;
    if (producto == "" || cantidad == "" ||precio == ""  || trabajador == "") {
        alert("Error!!, Campos vacíos");
        return;
    }
    try {
        //capturamos datos del formulario nuevacompra.php
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
            swal("Registro", json.mensaje, "error");
        }
        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrio un error" + e)
    }
}

// listar productos
async function listar_productos() {
    try {
        // envia datos hacia el controlador
        let respuesta = await fetch(base_url +
            'controller/Producto.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>'
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>';
               
            });
            document.getElementById('id_producto').innerHTML = contenido_select;
        }
        console.log(respuesta);
    } catch (e) {
        console.e("Error al cargar producto" + e)
    }
}


// Listar trabajador
async function listar_trabajadores() {
    try {
        let respuesta = await fetch(base_url+'controller/Persona.php?tipo=listar_trabajador');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="'+ element.id +'">'+ element.razon_social + '</option>';
            
            });
            document.getElementById('trabajador').innerHTML = contenido_select;
        }

        console.log(respuesta);
    } catch (e) {
        console.log("Error al cargar trabajador " + e);
    }
}


//Ver Compras
async function ver_compra(id){
    const formData = new FormData();
    formData.append('id_compra', id);
    try {
        let respuesta = await fetch(base_url+'controller/Compra.php?tipo=ver',{
            method: 'POST',
            mode: 'cors',
            cache:'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            // document.querySelector('#codigo').value = json.contenido.codigo;
            document.querySelector('#id_compra').value = json.contenido.id;
            document.querySelector('#id_producto').value = json.contenido.id_producto;
            document.querySelector('#cantidad').value = json.contenido.cantidad;
            document.querySelector('#precio').value = json.contenido.precio;
            document.querySelector('#trabajador').value = json.contenido.id_trabajador;
        }else{
            window.location = base_url+"compras";
        }

        console.log(json);
    } catch (error) {
        console.log("Opps ocurrio un error" + error);
    }
}


async function actualizar_compra() {
    const datos = new FormData();
    try {
        //capturamos datos del formulario nuevoproducto.php
        const datos = new FormData(formRegistrarCom);
        //enviamos datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Compra.php?tipo=actualizar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });  //alert
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



async function eliminar_compra(id){
    swal({
       title: "Realmente desea eliminar la Compra?",
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
       formdata.append('id_compra', id);
       try {
          let respuesta = await fetch(base_url + 'controller/Compra.php?tipo=eliminar',{
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
           swal('Eliminar', "Error al eliminar la compra", "warning");
          }
       } catch (e) {
           console.log("Ocurrio un error" + e);
       }
   }