<?php

class vistaModelo{

    protected static function obtener_vista($vista){
       $palabras_permitidas =['usuario','nuevo-usuario','usuarios','login',
      'carrito','nuevo-carrito','burbuja','burbujas','cerveza','cervezas',
      'pisco','piscos','ron','rones','vinos','vino','tequila','tequilas','vodka','vodkas',
      'whisky','libro','libros','politica','politicas','terminos','termino',
   'inicio','registrarse','nuevoproducto'];
          if(in_array($vista,$palabras_permitidas)){
             if (is_file("./views/".$vista.".php")) {
               $contenido = "./views/".$vista.".php";
             }else{
                $contenido = "404";
             }
            }elseif ($vista=="login" || $vista=="index") {
                $contenido = "login"; 
       }else {
        $contenido = "404";
       }
       return $contenido;
    }
}
?>