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
      <?php foreach ($filas as $campo): ?>
        <form action="index.php?pagina=cliente&accion=actualizar" method="post" name="UserForm" id="UserForm" >
          <div class="control-group form-group">
            <div class="controls">
              <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-exclamation-circle"></i>  <strong>Has escrito bien tus datos?</strong> Verifica si tus datos estan bien escritos.
              </div>
              <label>Nombre</label>
              <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $campo[1] ?>">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Apellido</label>
              <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $campo[2] ?>">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>DNI</label>
              <input type="text" class="form-control" id="dni" name="dni" value="<?php echo $campo[3] ?>">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Teléfono</label>
              <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $campo[4] ?>">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Correo</label>
              <input type="text" class="form-control" id="email" name="email" value="<?php echo $campo[5] ?>">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Dirección</label>
              <input type="text" class="form-control" id="address" name="address" value="<?php echo $campo[6] ?>">
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <hr>
          <input type="hidden" id="id" name="id" value="<?php echo $campo[0] ?>" >
          <button type="submit" class="btn btn-primary">Aceptar</button>
          <button type="reset" class="btn btn-primary">Cancelar</button>
        </form>
      <?php endforeach ?>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->      
<?php include('backend_footer.php') ?>