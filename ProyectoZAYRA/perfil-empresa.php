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
   <h1>Perfil empresa</h1>

  <input type="text" id="idEmpresa" name="" value=" <?php echo $_GET["id"] ?> ">

  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>

</div>


	<!-- Fin de codificacion-->

	<!--- JQuery-->	
	<script type="text/javascript" src="js/jquery.js"></script>
	<!---bootstrap JQuery-->
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<!---Fontawesone-->
	<script type="text/javascript" src="js/creative.min.js"></script>	
	<!--- Contrsolador JS-->	
	<script type="text/javascript" src="js/perfil-empresa.js"></script>
</body>
</html>