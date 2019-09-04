var datos = 
[{"id":1,"empresa":"Apple","nombreArticulo":"Mac-book","precio":"40,000","caracteristicas":"i7 4ta, 128 GB SSD, 4GB ram","categoria":"portatil","img":"img/pc-1.jpg"},
{"id":2,"empresa":"Apple","nombreArticulo":"Iphone X","precio":"30,000","caracteristicas":"32 GB, 4 RAM","categoria":"moviles","img":"img/ph-3.png"},
{"id":3,"empresa":"Apple","nombreArticulo":"Ipad","precio":"15,000","caracteristicas":"28 GB, 8 RAM","categoria":"ipad","img":"img/ip-2.jpg"},
{"id":4,"empresa":"Samgsung","nombreArticulo":"Samsung S10","precio":"18,000","caracteristicas":"256 GB, 8 RAM","categoria":"moviles","img":"img/ph-1.jpg"},
{"id":5,"empresa":"Samgsung","nombreArticulo":"Ipad4","precio":"20,000","caracteristicas":"128 GB","categoria":"ipad","img":"img/ip-1.jpeg"},
{"id":6,"empresa":"Dell","nombreArticulo":"Del Latitude","precio":"11,000","caracteristicas":"I5 4ta., 500 SSD, 4 GB RAM","categoria":"portatil","img":"img/pc-2.jpeg"},
{"id":7,"empresa":"Lenovo","nombreArticulo":"Lenovo PC","precio":"14,000","caracteristicas":"I7, 8va., 4RAM + 16 Optame, 1TB","categoria":"89.52.164.225","img":"img/pc-3.png"},
{"id":8,"empresa":"Huawei","nombreArticulo":"P-30","precio":"25,000","caracteristicas":"128 GB, 6 RAM","categoria":"moviles","img":"img/ph-2.jpg"},
{"id":9,"empresa":"Huawei","nombreArticulo":"Tab-Huawei","precio":"9,000","caracteristicas":"16 GB ROM, 3 RAM","categoria":"ipad","img":"img/ip-1.jpg"}];



function cargarDatos() {
	console.log(datos);

	for (var i = 0; i < datos.length; i++) {
		
		$("#res-productos").append(

			`<div class="col-lg-3 col-md-3 col-sm-6 border m-2 p-2">
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
          </div>`
/*
			`<div class="col-xl-4 col-md-4 col-sm-6 col-12">
                <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="${datos[i].img}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">${datos[i].empresa}</p>
                  <p class="card-text">${datos[i].precio}</p>
                  <p class="card-text">${datos[i].categoria}</p>
                  <p class="card-text">${datos[i].caracteristicas}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="detalles.html" onclick="detalles(${datos[i].id});" class="btn btn-sm btn-primario">Detalles</a>
                      <button type="button" class="btn btn-sm btn-outline-warning">Favotitos</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>`
*/
		);


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