<?php
require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Bo/usuarioBo.php';

switch ($_POST['action']) {
  case "login":  
    $clean =  $_POST['usu'];     
    $usuario  = trim ($clean," \t\n\r\0\x0B");  
    $password = $_POST['pwd']; 

    $bo = new usuarioBo();
    $r = $bo->identificarUsuarioBo($usuario, $password);
    print $r;          
    break;  
    
  case 'insert':
    $apellido1  = $_POST['apellido1'];
    $apellido2  = $_POST['apellido2'];
    $nombre    = $_POST['nombre'];
    $usuario   = $_POST['usuario'];
    $clave     = $_POST['clave'];
    $tipo      = $_POST['tipo'];
    $estado    = $_POST['estado'];

    $bo = new usuarioBo();
    $r = $bo->registrarUsuarioBo($apellido1, $apellido2, $nombre, $usuario, $clave, $tipo, $estado);
    print $r;
    break; 

    case 'update':
         $usuario = $_POST['id'];

         $bo = new usuarioBo();
         $r = $bo->actualizarUsuarioBo($usuario);
         print $r;
         break; 

    case 'savedata':
        $id        = $_POST['a']; 
        $apellido1  = $_POST['b'];
        $apellido2  = $_POST['c'];
        $nombre    = $_POST['d'];
        $usuario   = $_POST['j'];
        $clave     = $_POST['k'];
        $tipo      = $_POST['l'];
        $estado    = $_POST['m'];

        $bo = new usuarioBo();
        $r = $bo->saveDataUsuarioBo($id, $apellido1, $apellido2, $nombre, $usuario, $clave, $tipo, $estado);
        print $r;
        break;

    case 'delete':
        $usuario = $_POST['id'];

        $bo = new usuarioBo();
        $r = $bo->eliminarUsuarioBo($usuario);
        print $r;
        break;
    case 'select':
        $bo = new usuarioBo();
        $r = $bo->traeUsuariosBo();
        print $r;
        break;
}
  