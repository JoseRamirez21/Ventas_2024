<?php

class vistaModelo{

    protected static function obtener_vista($vista){
       $palabras_permitidas =['usuario','nuevo-usuario','usuarios','login',
      'carrito','nuevo-carrito','burbuja','burbujas','cerveza','cervezas',
      'pisco','ron','vinos','tequila','vodka',
      'whisky','libro','politica','terminos',
   'inicio','registrarse','nuevoproducto','registrocategorias','registrocompras','registropersonas'];
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