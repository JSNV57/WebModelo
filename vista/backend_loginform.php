<?php include('backend_header.php'); ?>
<div id="page-wrapper">
  <div class="container">
    <div class="row">
    	<div class="col-md-6 col-md-offset-3" >
          <img src="vista/assets/images/tecnotutoria.png" alt="Logo Sistema Admin" class="img-responsive center-block" width="50%" >
	    </div>
     
      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
        <h3 class="text-center">Inicio de Sesión</h3>
	<form action="?pagina=sesion&accion=iniciar" method="post" name="AdminForm" id="AdminForm" class="form-horizontal" >
	      	<div id="success">
						<?php if ($_GET['respuesta']=='f') { ?>
              <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-exclamation"></i> <strong>Tu usuario o contraseña esta mal.</strong>
              </div>
            <?php } ?>
	    	  </div>
	    		<div class="control-group form-group">
	          <div class="controls">
	            <input type="hidden" name="error" id="error">
	            <span class="help-block"></span>
	          </div>
	        </div>
	        <div class="control-group form-group">
	          <div class="controls">
	  					<label>User:</label>
	            <input type="text" class="form-control" id="username" name="username">
	            <span class="help-block"></span>
	          </div>
	        </div>
	        <div class="control-group form-group">
	          <div class="controls">
		          <label>Pass:</label>
	            <input type="password" class="form-control" id="password" name="password">
	            <span class="help-block"></span>
	          </div>
	        </div>
	        <div class="control-group form-group text-center">
	        	<button type="submit" id="btnSave" class="btn btn-block btn-primary"><i class="fa fa-sign-in"></i> Iniciar Sesion</button>
                <a class="btn btn-block btn-danger disabled" href="search"><i class="fa fa-search" aria-hidden="true"></i> Buscar Tesis</a>
                <a class="btn btn-block btn-success" href="index.php"><i class="fa fa-undo" aria-hidden="true"></i> Volver a la Página Principal</a>
	        </div>
        </form>
      </div>
    </div>
	</div>
</div>

<?php include('backend_footer.php'); ?>