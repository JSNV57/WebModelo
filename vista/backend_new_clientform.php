<?php include('backend_header.php') ?>
<?php include('backend_menu.php') ?>
<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Nuevo Cliente
        </h1>
        <ol class="breadcrumb">
          <li>
            <i class="fa fa-dashboard"></i>  <a href="?pagina=admin">Panel de Control</a>
          </li>
          <li class="active">
            <i class="fa fa-user"></i> Nuevo Cliente
          </li>
        </ol>
      </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-12">
        <form action="index.php?pagina=cliente&accion=crear" method="post" name="UserForm" id="UserForm" >
          <div class="control-group form-group">
            <div class="controls">
              <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-exclamation-circle"></i>  <strong>Has escrito bien tus datos?</strong> Verifica si tus datos estan bien escritos.
              </div>
              <label>Nombre</label>
              <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Apellido</label>
              <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>DNI</label>
              <input type="text" class="form-control" id="dni" name="dni">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Teléfono</label>
              <input type="text" class="form-control" id="phone" name="phone">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Correo</label>
              <input type="text" class="form-control" id="email" name="email">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Dirección</label>
              <input type="text" class="form-control" id="address" name="address">
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <hr>
          <button type="submit" class="btn btn-primary">Aceptar</button>
          <button type="reset" class="btn btn-primary">Cancelar</button>
        </form>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->      
<?php include('backend_footer.php') ?>