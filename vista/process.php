<?php 
require_once "../controlador/sessionValidate.php";
require_once "../controlador/sessionUserTypeAdmin.php";

$valorProceso =1;
$valorProceso1 =100;
$valorProceso = mt_rand ($valorProceso , $valorProceso1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>procesos</title>
    <!--CSS-->    
    <link rel="stylesheet" href="assets/css/bootstrap-yeti.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
</head>
<body>
<div id="response"></div>

<!-- DATATABLE -->
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="#" class="btn btn-info" onclick="loadproces()"><i class="fa fa-refresh"></i>&nbsp;Refrescar</a>
        </div>
    </div>
    <div class="row">            
        <div id="mensaje-delete"></div>            
        <h1>Procesos                
            <a href="" data-toggle="modal" data-target="#myModal1"  class="btn btn-success pull-right menu"><i class="fa fa-user-plus " aria-hidden="true"></i>&nbsp;Nuevo proceso</a>
        </h1>  
    </div>
    <div class="row">    
    <table id="example1" class="table table-striped table-bordered table-responsive">
        <thead>
        <tr>
            <th>Numero proceso</th>
            <th>Descripción</th>
            <th>Fecha creación</th>
            <th>Sede</th>               
            <th>Presupuesto</th>
            
        </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
        <tr>
            <th>Numero proceso</th>
            <th>Descripción</th>
            <th>Fecha creación</th>
            <th>Sede</th>               
            <th>Presupuesto</th>

        </tr>
        </tfoot>
    </table>        
    </div>
</div>
<!-- END DATATABLE -->

  <!-- MODAL REGISTER -->
  <div class="modal fade in" id="myModal1" >
        <div class="modal-dialog" style="width:50%;">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
                    <h4 class="modal-title"><b></b>Registro de usuario</h4>
                </div>
                <div class="modal-body">
                    <div class="row-fluid" id="notificacionproceso"></div>
                    <form id="formregistroproceso"> 
                        <fieldset>
                            <div class="form-group">                            
                                <div class="col-lg-4">
                                    <div class="form-group" id="campoNumeroproceso">
                                        <label class="control-label" for="Numeroproceso">Numero proceso</label>
                                        <input type="text" class="form-control" id="Numeroproceso" name="Numeroproceso"  value="<?=$valorProceso?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group" id="campoDescripcion">
                                        <label class="control-label" for="Descripcion">Descripción</label>
                                        <input type="text" class="form-control" id="Descripcion" name="Descripcion" autofocus>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group" id="campoFechacreacion">
                                        <label class="control-label" for="nombre">Fecha creación</label>
                                        <input type="text" class="form-control" id="Fechacreacion" name="Fechacreacion">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group" id="campoSede">
                                        <label class="control-label" for="Sede">Sede</label>
                                        <select class="form-control" id="Sede" name="Sede">
                                            <option value="2">Cliente 1</option>
                                            <option value="3">Cliente 2</option>
                                            <option value="1">Administrador</option>                                       
                                        </select>                                    
                                    </div>
                                </div> 
                                <div class="col-lg-6">
                                    <div class="form-group" id="campoPresupuesto">
                                        <label class="control-label" for="Presupuesto">Presupuesto</label>
                                        <input type="text" class="form-control" id="Presupuesto" name="Presupuesto">                                 
                                    </div>
                                </div>                            
                                <div class="col-lg-4 col-lg-offset-8">
                                    <div class="form-group">
                                         <button type="submit" class="btn btn-primary btn-block">Registrar proceso</button>                                     
                                    </div>
                                </div>
                            </div>   
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">                
                </div>
            </div>
        </div>
     </div>
     <!-- END MODAL REGISTER -->

      <!--Javascript-->    
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap.min.js"></script>          
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/procesojs.js"></script>
    </body>
</html>