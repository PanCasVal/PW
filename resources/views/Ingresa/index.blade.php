<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <title>Ingresar</title>
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
                        <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/abp">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="127.0.0.1:8000/Informacion">Informes</a>
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

    <form class="row g-3" id="form_ingresa" style="padding: 3% 0 0;
                                 margin: 0 auto 10px;
                                 max-width: 1000px;
                                 position: relative;">
      <div class="col-md-6">
        <label for="email" class="form-label">Correo</label>
        <input type="email" class="form-control" id="email">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="inputPassword4">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Direccion</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Avenida benito juarez #903">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Tipo de lugar</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, Estudio, o piso">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">Ciudad</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">Ciudad</label>
        <select id="inputState" class="form-select">
          <option selected>Seleccione...</option>
          <option>Ciudad de Mexico</option>
          <option>Valle de Bravo</option>
          <option>Toluca</option>
          <option>Puebla</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Codigo postal</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Recuerdame
          </label>
        </div>
      </div>
      <div class="col-12">
        <button  id="ingresar" class="btn btn-primary">Ingresar</button>
      </div>
  </form>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>




<script type="text/javascript">

$(document).ready(function()
{
    
    $("#ingresar").click(function(){
         //alert( "ready!" );
          var correo=$("#form_ingresa #email").val();
          alert( correo );
          $.post('../abm_example.php',{correo:correo,action:"agregar_usuario"},function(request)
            {
                        alert( "ready!" );        
            });
          //alert(correo);
    });

});
     

</script>



