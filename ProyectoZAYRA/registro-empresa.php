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
          <input type="text" class=" imput" id="nombre" placeholder="Nombre empresa">
        </div>

        <div class="grupo ">
          <label class="label" for="inputEmail4">Direccion</label>
          <input type="text" class=" imput" id="direccion" placeholder="Direccion">
        </div>

        <div class="grupo">
          <label class="label" for="inputEmail4">Correo</label>
          <input type="email" class="imput" id="correo" placeholder="Correo">
        </div>

        <div class="grupo">
          <label class="label" for="inputPassword4">Contraseña</label>
          <input type="password" class=" imput" id="contrasenia" placeholder="contraseña">
        </div>


        <div class="form-group grupo">
          <label class="label" for="inputState">Pais</label>
          <select id="pais" class="imput">
            <option selected>Choose...</option>
            <option value="Honduras">Honduras</option>
            <option value="Estados Unidos">Estados Unidos</option>
            <option value="Mexico">Mexico</option>
            <option value="Canada">Mexico</option>
          </select>
        </div>

        <br>
        <button class="btn btn-outline-success borde btn-block p-2" id="btn-agregarEmpresa">Agregar</button>
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