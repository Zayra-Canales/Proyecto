<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BRYZATEC</title>
	<!--- Estilos fontawesome -->
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<!--- Estilos Css -->
	<link rel="stylesheet" type="text/css" href="css/creative.min.css">
    <!--- Estilos De Bootstrap-->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<!--- Estilos Css -->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<!-- Inicio de Codificacion-->
<!-- 
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
-->

<div class="container-fluid mt-3 mb-5">

  <div class="row">

    <div class="col-lg-8 col-xl-8 col-md-12 logo-empresa ml-2 navbar-brand" style="background-image: url('img/logoEmpresa.jpg'); ">
    </div>

    <div class="col-lg-3 col-xl-3 col-md-12 col-xs-12 ">
        <h3 class="text-center text-success titulo">Registrar Empresa</h3><br><br>
        <div id="alertError" class="alert alert-danger" style="display: none;" role="alert">
          conraseñas distintas
        </div>

      <div class="grupo ">
      <label class="label" for="inputEmail4">Nombre empresa</label>
      <input type="email" class=" imput" id="correoEmpresa" placeholder="Nombre empresa">
    </div>

    <div class="grupo ">
      <label class="label" for="inputEmail4">Direccion</label>
      <input type="text" class=" imput" id="direccionEmpresa" placeholder="Direccion">
    </div>

    <div class="grupo">
      <label class="label" for="inputEmail4">Contraseña</label>
      <input type="password" class="imput" id="contraEmpresa" placeholder="contraseña">
    </div>

    <div class="grupo">
      <label class="label" for="inputPassword4">Confirmar Contraseña</label>
      <input type="password" class=" imput" id="contraEmpresa2" placeholder="confirmar contraseña">
    </div>

 
    <div class="form-group grupo">
      <label class="label" for="inputState">Pais</label>
      <select id="paisEmpresa" class="imput">
        <option selected>Choose...</option>
        <option value="1">Honduras</option>
        <option value="2">Estados Unidos</option>
        <option value="3">Mexico</option>
      </select>
    </div>

    <br>
    <button class="btn btn-outline-success borde btn-block p-2">Agregar</button>
    <a href="main.html" class="btn btn-outline-secondary btn-block p-2 letra borde">Cancelar</a>





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