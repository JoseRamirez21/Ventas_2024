<?php
session_start();

class vistaModelo
{

   protected static function obtener_vista($vista)
   {
      $palabras_permitidas = [
         'usuario',
         'nuevo-usuario',
         'usuarios',
         'login',
         'carrito',
         'nuevo-carrito',
         'burbuja',
         'burbujas',
         'cerveza',
         'cervezas',
         'pisco',
         'ron',
         'vinos',
         'tequila',
         'vodka',
         'whisky',
         'libro',
         'politica',
         'terminos',
         'inicio',
         'registrarse',
         'nuevoproducto',
         'nuevacategoria',
         'nuevacompra',
         'nuevapersona',
         'admin',
         'productos'
      ];
      // if (!isset($_SESSION['sesion_venta_id'])) {
      //    return "login";
      // } validacion para inicio de sesion 
      if (in_array($vista, $palabras_permitidas)) {
         if (is_file("./views/" . $vista . ".php")) {
            $contenido = "./views/" . $vista . ".php";
         } else {
            $contenido = "404";
         }
      } elseif ($vista == "login" || $vista == "index") {
         $contenido = "login";
      } else {
         $contenido = "404";
      }
      return $contenido;
   }
}
