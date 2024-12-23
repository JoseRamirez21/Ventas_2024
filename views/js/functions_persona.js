// Función para listar las Personas
async function listar_personas() {
    try {
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=listar');
        let json = await respuesta.json();

        if (json.status) {

            let datos = json.contenido;
            let cont = 0;
            // Agregar filas a la tabla
            datos.forEach(item => {
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila" + item.id;
                cont += 1
                nueva_fila.innerHTML = `
                 <tr>
                        <th>${cont}</th>
                        <td>${item.nro_identidad}</td>
                        <td>${item.razon_social}</td>
                        <td>${item.telefono}</td>
                        <td>${item.correo}</td>
                        <td>${item.departamento}</td>
                        <td>${item.direccion}</td>
                        <td>${item.rol}</td>
                        <td>${item.fecha_reg}</td>
                       <td>${item.options}</td>
                    </tr>
                `;
                document.querySelector("#tbl_persona")
                    .appendChild(nueva_fila);

            });
        };
        console.log(json);
    } catch (error) {
        console.error("Error al listar a las Personas" + error);
    }
}
if (document.querySelector('#tbl_persona')) {
    listar_personas();
}




async function registrarPersona() {
    // Capturamos los valores del formulario
    let nro_identidad = document.getElementById('nro_identidad').value;
    let razon_social = document.getElementById('razon_social').value;
    let telefono = document.getElementById('telefono').value;
    let correo = document.getElementById('correo').value;
    let departamento = document.getElementById('departamento').value;
    let provincia = document.getElementById('provincia').value;
    let distrito = document.getElementById('distrito').value;
    let cod_postal = document.getElementById('cod_postal').value;
    let direccion = document.getElementById('direccion').value;
    let rol = document.getElementById('rol').value;
    // let password = document.getElementById('password').value;
    
    if (!nro_identidad || !razon_social || !telefono || !correo || !departamento ||
        !provincia || !distrito || !cod_postal || !direccion || !rol /*|| !password*/ ) {
            
        alert("Error!!, Todos los campos son obligatorios.");
        return;
    }
    
    try {
        //capturamos datos del formulario nuevapersona.php
        const datos = new FormData(formRegistrarPer);
        //enviamos datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=registrar', {
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

//Ver Personas
async function ver_persona(id){
    const formData = new FormData();
    formData.append('id_persona', id);
    try {
        let respuesta = await fetch(base_url+'controller/Persona.php?tipo=ver',{
            method: 'POST',
            mode: 'cors',
            cache:'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            // document.querySelector('#codigo').value = json.contenido.codigo;
            document.querySelector('#id_persona').value = json.contenido.id;
            document.querySelector('#nro_identidad').value = json.contenido.nro_identidad;
            document.querySelector('#razon_social').value = json.contenido.razon_social;
            document.querySelector('#telefono').value = json.contenido.telefono;
            document.querySelector('#correo').value = json.contenido.correo;
            document.querySelector('#provincia').value = json.contenido.provincia;
            document.querySelector('#distrito').value = json.contenido.distrito;
            document.querySelector('#cod_postal').value = json.contenido.cod_postal;
            document.querySelector('#departamento').value = json.contenido.departamento;
            document.querySelector('#direccion').value = json.contenido.direccion;
            document.querySelector('#rol').value = json.contenido.rol;

        }else{
            window.location = base_url+"personas";
        }

        console.log(json);
    } catch (error) {
        console.log("Opps ocurrio un error" + error);
    }
}

async function actualizar_persona() {
    const datos = new FormData();
    try {
        //capturamos datos del formulario nuevoproducto.php
        const datos = new FormData(formRegistrarPer);
        //enviamos datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=actualizar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
  //alert
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

async function eliminar_persona(id){
    swal({
       title: "Realmente desea eliminar la Persona?",
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
       formdata.append('id_persona', id);
       try {
          let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=eliminar',{
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
           swal('Eliminar', "Error al eliminar la persona, tiene registros asociados ", "warning");
          }
       } catch (e) {
           console.log("Ocurrio un error" + e);
       }
   }