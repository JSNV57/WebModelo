
<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">SAC - Version 1.9</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome <i class="fa fa-user" aria-hidden="true"></i>  <?php echo $_SESSION["username"]; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="index.php?pagina=sesion&accion=cerrar"><i class="fa fa-sign-out" aria-hidden="true"></i> Desconectar</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="index.php" target="_blank" ><i class="fa fa-eye" aria-hidden="true"></i> Página Web</a>
        </li>
        <li>
            <a href="index.php?pagina=panel_control"><i class="fa fa-dashboard" aria-hidden="true"></i> Panel de Control</a>
        </li>
        <li>
            <a href="?pagina=usuario"><i class="fa fa-user" aria-hidden="true"></i> Usuarios</a>
        </li>
        <li>
            <a href="?pagina=tesis"><i class="fa fa-book" aria-hidden="true"></i> Proyecto Tesis</a>
        </li>
        <!--
        <li>
            <a href="?pagina=archivo"><i class="fa fa-files-o" aria-hidden="true"></i> Archivos</a>
        </li>
        -->
        <li>
            <a href="?pagina=asesor"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Asesores</a>
        </li>
        <li>
            <a href="?pagina=cliente"><i class="fa fa-users" aria-hidden="true"></i> Clientes</a>
        </li>
    </ul>

  </div>
    <!-- /.navbar-collapse -->
</nav>