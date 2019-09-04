<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BRYZATEC</title>
	<!--- Estilos De Bootstrap-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<!--- Estilos fontawesome -->
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<!--- Estilos Css -->
	<link rel="stylesheet" type="text/css" href="css/creative.min.css">
		<!--- Estilos Css -->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<!-- Inicio de Codificacion-->

	   <nav class="navbar navbar-expand-lg bg-success fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger title text-white nav-main" href="main.html">BRYZATEC</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item dropdown mr-3">
        <a class="nav-link dropdown-toggle text-white nav-main" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorias
        </a>
        <div class="dropdown-menu mr-2" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Telefonos</a>
          <a class="dropdown-item" href="#">Ipad</a>
          <a class="dropdown-item" href="#">Portatiles</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Accesosrios</a>
        </div>
      </li>
        </ul>
        <input class="form-control mr-sm-2 col-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </div>
    </div>
  </nav>
<br><br><br><br><br>

<div class="container">
  <h3 class="text-center mb-4" >Registra empresa</h3>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre empresa</label>
      <input type="email" class="form-control" id="correoEmpresa" placeholder="nombre empresa">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Direccion</label>
      <input type="password" class="form-control" id="direccionEmpresa" placeholder="Direccion">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Contraseña</label>
      <input type="email" class="form-control" id="contraEmpresa" placeholder="contraseña">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Confirmar Contraseña</label>
      <input type="password" class="form-control" id="contraEmpresa2" placeholder="confirmar contraseña">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Pais</label>
      <select id="paisEmpresa" class="form-control">
        <option selected>Choose...</option>
        <option value="1">Honduras</option>
        <option value="2">Estados Unidos</option>
        <option value="3">Mexico</option>
      </select>
    </div>
  </div>
  <button id="btn-agregarEmpresa" type="button" class="btn btn-warning">Registrar</button>    
  </div>


	<!-- Fin de codificacion-->

	<!--- JQuery-->	
	<script type="text/javascript" src="js/jquery.js"></script>
	<!---bootstrap JQuery-->
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<!---Fontawesone-->
	<script type="text/javascript" src="js/creative.min.js"></script>	
	<!--- Contrsolador JS-->	
	<script type="text/javascript" src="js/empresa.js"></script>
</body>
</html>