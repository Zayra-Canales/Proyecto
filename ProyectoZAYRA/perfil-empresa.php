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

    <input type="hidden" id="idEmpresa" name="" value="<?php echo $_GET["id"] ?>">
    <br>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Lista de producto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Nuevo</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active mb-5" id="home" role="tabpanel" aria-labelledby="home-tab">

        <br>

        <h3 class="text-center text-secondary" >Editar perfil</h3>

        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationDefault01">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="" value="" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationDefault02">Direccion</label>
            <input type="text" class="form-control" id="direccion" placeholder="" value="" required>
          </div>

          <div class="col-md-6 mb-3">
            <label for="validationDefault02">Contraseña</label>
            <input type="password" class="form-control" id="contrasenia" placeholder="" value="" required>
          </div>

          <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">Correo</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" >@</span>
              </div>
              <input type="text" class="form-control" id="correo" placeholder="" aria-describedby="" required>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="">Pais</label>
            <input type="text" class="form-control" id="pais" placeholder="" required>
          </div>
        </div>

        <button class="btn btn-primary" id="btn-editar" type="button">Editar</button>
        <a href="cerrar.php" class="btn btn-danger" id="btn-editar" >Cerrar Sesion</a>






      </div>
      <div class="tab-pane fade mb-5" id="profile" role="tabpanel" aria-labelledby="profile-tab">

        <table class="table mt-5 bg">
          <thead class="bg-primary rounded text-white">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Precio</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Acciones</th>

            </tr>
          </thead>
          <tbody onclick="" id="tablaProductos" >

          </tbody>
        </table>



      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        
        <div class="form-row mt-5">
          <div class="form-group col-md-4">
            <label for="inputEmail4">Nombre</label>
            <input type="text" class="form-control" id="nombreProducto" placeholder="Nombre">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Precio</label>
            <input type="text" class="form-control" id="precioPoducto" placeholder="Precio">
          </div>
          <div class="form-group col-md-4">
            <label for="inputAddress2">Descuento</label>
            <input type="text" class="form-control" id="descuento" placeholder="Descuento">
            <input type="hidden" id="idProducto">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Descripcion</label>
          <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" ></textarea>
        </div>

        <button type="button" onclick="agregarProducto();" class="btn btn-primary">Agregar</button>
        <button type="button" onclick="actualizarProducto();" class="btn btn-secondary">Editar</button>
        <button type="button" onclick="limpiar();" class="btn btn-light">Cancelar</button>


        

      </div>
    </div>

  </div>


  <!-- Fin de codificacion-->

  <!--- JQuery-->	
  <script type="text/javascript" src="js/jquery.js"></script>
  <!---bootstrap JQuery-->
  <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  <!---Fontawesone-->
  
  <!--- Contrsolador JS-->	
  <script type="text/javascript" src="js/perfil-empresa.js"></script>
</body>
</html>