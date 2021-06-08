<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informacion</title>
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
                      <a class="nav-link" href="http://127.0.0.1:8000/abp">Menu</a>
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

  <div class="container" style="margin-top: 2em">
        <div class="row">
            <div class="col-sm">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Puesto</th>
                      <th scope="col">Numero</th>
                    </tr>
                  </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Adrian</td>
                    <td>Vendedor</td>
                    <td>7353838</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                      <td>Luis</td>
                      <td>Vendedor</td>
                      <td>7352526</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <th>Diego</th>
                    <td>Vendedor</td>
                    <td>7483929</td>
                  </tr>
                </tbody>
              </table> 
            </div>
            <div class="col-sm">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15071.222544612318!2d-100.13672755!3d19.203689799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1621369770881!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
        <form style="margin: 1em">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre de Producto</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Precio</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3">
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Envio</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Estatal
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Nacional
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                      <label class="form-check-label" for="gridRadios3">
                        Internacional
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="row mb-3">
                  <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Expres
                      </label>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Presupuesto</button>
              </form>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>