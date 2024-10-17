
async function registrar_producto(){
  let codigo = document.getElementById('codigo').value;
  let nombre = document.querySelector('#nombre').value;
  let detalle = document.querySelector('#detalle').value;
  let precio = document.querySelector('#precio').value;
  let stock = document.querySelector('#stock').value;
  let categoria = document.querySelector('#categoria').value;
  let fecha_vencimiento = document.querySelector('#fecha_vencimiento').value;
  let imagen = document.querySelector('#imagen').value;
  let id_proveedor = document.querySelector('#id_proveedor').value;

if(codigo =="" || nombre=="" || detalle=="" || precio=="" || stock=="" || categoria=="" ||
    fecha_vencimiento=="" || imagen=="" || id_proveedor==""){
alert ("error, campos vacios");
    return;
   }
   try { 
    // capturamos datos del formulario html(nuevo_producto.php)
    const datos = new FormData(frmRegistrar);
    // Enviar datos hacia el controlador
    let respuesta = await  fetch(base_url+'controller/Producto.php?tipo=registrar',{
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: datos
    });
    console.log("respuesta");
   } catch (e) {
    console.log("Upps, ocurrio un error" + e)
   }
}

