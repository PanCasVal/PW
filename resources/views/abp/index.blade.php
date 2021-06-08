<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bumesa</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<main>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        	<form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        <a class="navbar-brand" href="http://127.0.0.1:8000/inicio" style="margin-left: 35em">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/Ingresa">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('Informacion')}}">Informes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Zonas
                        </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Comedor</a></li>
                        <li><a class="dropdown-item" href="#">Recamara</a></li>
                        <li><a class="dropdown-item" href="#">Cosina</a></li>
                        <li><a class="dropdown-item" href="#">Baño</a></li>
                        <li><a class="dropdown-item" href="#">Sala</a></li>
                        <li><a class="dropdown-item" href="#">Balcon</a></li>
                        <li><a class="dropdown-item" href="#">Salon</a></li>
                        <li><a class="dropdown-item" href="#">Escaleras</a></li>
                        <li><a class="dropdown-item" href="#">Bar</a></li>
                        <li><a class="dropdown-item" href="#">Bablioteca</a></li>
                        <li><a class="dropdown-item" href="#">Piscina</a></li>
                        <li><a class="dropdown-item" href="#">Entrada</a></li>
                        <li><a class="dropdown-item" href="#">Estudio</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Patio</a></li>
                        <li><a class="dropdown-item" href="#">Jardin</a></li>
                        <li><a class="dropdown-item" href="#">Zona de Juegos</a></li>
                        <li><a class="dropdown-item" href="#">Garage</a></li>
                        <li><a class="dropdown-item" href="#"></a></li>

                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Menu</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    	<h2 align="center" style="font-size: 2em">Vista previa</h2>
    <div class="container">
  		<div class="row">
    		<div class="col-sm">
      			<div class="card" style="width: 18rem;">
  						<img src="https://www.maquituls.es/noticias/wp-content/uploads/2018/02/mueble.jpg" class="card-img-top" alt="https://www.maquituls.es/noticias/wp-content/uploads/2018/02/mueble.jpg">
  					<div class="card-body">
    					<h5 class="card-title">Estante</h5>
    					<p class="card-text">Lugar pa poner cosas y ya.</p>
    					<a href="#" class="btn btn-primary">Comprar</a>
  					</div>
				</div>
    		</div>
    		<div class="col-sm">
      			<div class="card" style="width: 18rem;">
  						<img src="https://mejorconsalud.as.com/wp-content/uploads/2018/02/Mantenimiento-de-los-muebles-de-madera-en-casa.jpg" class="card-img-top" alt="https://mejorconsalud.as.com/wp-content/uploads/2018/02/Mantenimiento-de-los-muebles-de-madera-en-casa.jpg">
  					<div class="card-body">
    					<h5 class="card-title">Conjunto de sala</h5>
    					<p class="card-text">Mesitas y sillitas.</p>
    					<a href="#" class="btn btn-primary">Comprar</a>
  					</div>
				</div>
    		</div>
    		<div class="col-sm">
      			<div class="card" style="width: 18rem;">
  						<img src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Muebles_de_madera_en_Adjuntas_del_R%C3%ADo%2C_Dolores_Hidalgo%2C_Guanajuato.jpg" class="card-img-top" alt="https://upload.wikimedia.org/wikipedia/commons/e/e4/Muebles_de_madera_en_Adjuntas_del_R%C3%ADo%2C_Dolores_Hidalgo%2C_Guanajuato.jpg">
  					<div class="card-body">
    					<h5 class="card-title">Sala</h5>
    					<p class="card-text">Salita.</p>
    					<a href="#" class="btn btn-primary">Comprar</a>
  					</div>
				</div>
    		</div>
  		</div>
	</div>
        <h2 align="center" style="font-size: 2em; margin-top: 1em">Pecio de productos</h2>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.rmfp.com/wp-content/uploads/2019/10/The-Best-Wood-Option-1080x675.jpeg" class="d-block w-100" alt="https://www.rmfp.com/wp-content/uploads/2019/10/The-Best-Wood-Option-1080x675.jpeg">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Roble</h5>
                                <p>Dura y duradera.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.pinimg.com/originals/9e/9a/25/9e9a252ae380b5f4033857071587c25a.jpg" class="d-block w-100" alt="https://i.pinimg.com/originals/9e/9a/25/9e9a252ae380b5f4033857071587c25a.jpg">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Abeto</h5>
                                <p>Arbol de tronco alto y recto, coteza lisa y blanquesina, copa en forma de cono con ramas horizontales.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://madera-sostenible.com/wp-content/uploads/2020/04/ATIBT_MaderaTropical-980x600.jpg" class="d-block w-100" alt="https://madera-sostenible.com/wp-content/uploads/2020/04/ATIBT_MaderaTropical-980x600.jpg">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Abedul</h5>
                                <p>Arbol de corteza lisa de color blanco plateado copa ovoide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-sm">
     			<iframe width="560" height="315" src="https://www.youtube.com/embed/_7SnifoPP1E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <footer>
    	<h6 align="center">Holi</h6>
    </footer>

</main>

<!-- JavaScript Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
