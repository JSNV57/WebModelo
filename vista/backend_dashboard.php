<?php include('backend_header.php'); ?>
<?php include('backend_menu.php'); ?>
<div id="page-wrapper">
  <div class="container-fluid">
  <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Panel de Control
        </h1>
      </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-primary">
          <div class="panel-heading">Menu</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-3">
                <a href="?pagina=usuarop" class="btn btn-link btn-block text-center"><i class="fa fa-user fa-5x "></i> <p>Usuarios</p></a>
              </div>
              <div class="col-lg-3">
                <a href="?pagina=tesis" class="btn btn-link btn-block text-center"><i class="fa fa-book fa-5x" aria-hidden="true"></i> <p>Tesis</p> </a>
              </div>
              <!--
              <div class="col-lg-3">
                <a href="?pagina=" class="btn btn-link btn-block text-center"><i class="fa fa-files-o fa-5x" aria-hidden="true"></i> <p>Archivos</p> </a>
              </div>
              -->
              <div class="col-lg-3">
                <a href="?pagina=asesor" class="btn btn-link btn-block text-center"><i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i> <p>Asesores</p> </a>
              </div>
              <div class="col-lg-3">
                <a href="?pagina=cliente" class="btn btn-link btn-block text-center"><i class="fa fa-users fa-5x" aria-hidden="true"></i> <p>Clientes</p> </a>
              </div>
            </div>    
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include('backend_footer.php') ?>      