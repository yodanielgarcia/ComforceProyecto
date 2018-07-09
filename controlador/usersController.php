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
    $apaterno  = $_POST['apaterno'];
    $amaterno  = $_POST['amaterno'];
    $nombre    = $_POST['nombre'];
    $usuario   = $_POST['usuario'];
    $clave     = $_POST['clave'];
    $tipo      = $_POST['tipo'];
    $status    = $_POST['status'];

    $bo = new usuarioBo();
    $r = $bo->registrarUsuarioBo($apaterno, $amaterno, $nombre, $usuario, $clave, $tipo, $status);
    print $r;
    break; 

    case 'insertprocess':
    $Numeroproceso      = $_POST['Numeroproceso'];
    $Descripcion        = $_POST['Descripcion'];
    $Fechacreacion      = $_POST['Fechacreacion'];
    $Sede               = $_POST['Sede'];
    $Presupuesto        = $_POST['Presupuesto'];
    

    $bo = new usuarioBo();
    $r = $bo->registrarprocesoBo($Numeroproceso, $Descripcion, $Fechacreacion, $Sede, $Presupuesto);
    print $r;
    break; 


    case 'update':
         $usuario = $_POST['id'];

         $bo = new usuarioBo();
         $r = $bo->actualizarUsuarioBo($usuario);
         print $r;
         break; 

    case 'updateProceso':
         $usuario = $_POST['id'];

         $bo = new usuarioBo();
         $r = $bo->actualizarprocesoBo($usuario);
         print $r;
         break;  
             
    case 'savedata':
        $id        = $_POST['a']; 
        $apaterno  = $_POST['b'];
        $amaterno  = $_POST['c'];
        $nombre    = $_POST['d'];
        $usuario   = $_POST['j'];
        $clave     = $_POST['k'];
        $tipo      = $_POST['l'];
        $status    = $_POST['m'];

        $bo = new usuarioBo();
        $r = $bo->saveDataUsuarioBo($id, $apaterno, $amaterno, $nombre, $usuario, $clave, $tipo, $status);
        print $r;
        break;

    case 'savedataprocess':
        $Numeroproceso        = $_POST['Numeroproceso1']; 
        $Descripcion          = $_POST['Descripcion1'];
        $Fechacreacion        = $_POST['Fechacreacion1'];
        $Sede                 = $_POST['Sede1'];
        $presupuesto          = $_POST['Presupuesto1'];

        $bo = new usuarioBo();
        $r = $bo->saveDataprocesoBo($Numeroproceso, $Descripcion, $Fechacreacion, $Sede, $presupuesto);
        print $r;
        break;

    case 'delete':
        $usuario = $_POST['id'];

        $bo = new usuarioBo();
        $r = $bo->eliminarUsuarioBo($usuario);
        print $r;
        break;

    case 'deleteproc':
        $usuario = $_POST['id'];

        $bo = new usuarioBo();
        $r = $bo->eliminarProcesoBo($usuario);
        print $r;
        break;

    case 'select':
        $bo = new usuarioBo();
        $r = $bo->traeUsuariosBo();
        print $r;
        break;
}
  