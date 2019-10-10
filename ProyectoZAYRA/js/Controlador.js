
function cargarDatos() {
	console.log(datos);

	for (var i = 0; i < datos.length; i++) {
		
		$("#res-producto").append(

			`<div class="col-lg-3 col-md-3 col-sm-6">
            <div class="thumbnail">
              <a href="#">
                <img class="img-fluid tamaño" src="${datos[i].img}">
              </a>
              <div class="caption mb-2">
              <br>
                <a href="empresa.php" >${datos[i].empresa}</a>
                <h4 class="" >${datos[i].nombreArticulo}</h4>
                <h5 class="text-success">Categoria ${datos[i].categoria}</h5>
                <p>Precio ${datos[i].precio}</p>
                <p>
                  <a class="btn btn-outline-primary" href="detalles.php?id=${datos[i].id}">Detalles</a>
                  <button onclick="agregarFavoritos(${datos[i].id})" class="btn btn-outline-success">favorito</button>
                </p>
              </div>
            </div>
          </div>`	);

	}

} 

cargarDatos();

function detalles (id){

	console.log(id);

	let producto = [];

	for (var i = 0; i < datos.length; i++) {
		if (datos[i].id==id) {
			producto = datos[i];
		}
	}
	console.log(producto.precio);

	window.location="detalles.html";

	$("#precio").html(producto.precio);


}

function agregarFavoritos(idProducto){

	alert("metodo para agregar a favoritos " + idProducto);

}