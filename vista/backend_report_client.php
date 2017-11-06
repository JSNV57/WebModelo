<?php 
  include 'backend_header.php';
  include 'backend_menu.php';  
?>
<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Reporte de Clientes
        </h1>
        <ol class="breadcrumb">
          <li>
            <i class="fa fa-dashboard"></i>  <a href="?pagina=admin">Panel de Control</a>
          </li>
          <li class="active">
            <i class="fa fa-user"></i> Reporte de Clientes
          </li>
          <li class="active">
            <a href="?pagina=cliente&accion=nuevo"><i class="fa fa-plus"></i> Nuevo Cliente</a>
          </li>
        </ol>
      </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <?php if ($_GET['respuesta']=='v') { ?>
          <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="fa fa-thumbs-o-up"></i> <strong>La operación se realizó con exito.</strong>
          </div>
        <?php } ?>
        <!--<div class="table table-responsive ">-->
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">Nombres y Apellidos</th>
              <th class="text-center">DNI</th>
              <th class="text-center">Correo</th>
              <th class="text-center">Opciones</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              foreach ($filas as $campo):
            ?>
            <tr>
              <td><?php echo $campo[1]." ".$campo[2] ?></td>
              <td class="text-center"><?php echo $campo[3] ?></td>
              <td class="text-center"><?php echo $campo[5] ?></td>
              <td class="text-center">
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-cog"></i>
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="?pagina=cliente&accion=editar&id=<?php echo $campo[0] ?>">Editar</a></li>
                    <li><a href="?pagina=cliente&accion=eliminar&id=<?php echo $campo[0] ?>">Eliminar</a></li>
                  </ul>
                </div>
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
        <!--</div>-->
      </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
          <?php include('backend_paginator.php') ?>
        </div>
    </div>
  <hr>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include 'backend_footer.php' ?>