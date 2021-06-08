<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingresar</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<main>
    <div class="container">
        <div class="row text-center login-page" style="padding: 18% 0 0;
                                                      margin: 0 auto 100px;
                                                      max-width: 360px;
                                                      position: relative;">
       <div class="col-md-12 login-form" style="box-shadow: 0 0 27px 0 rgba(84, 84, 84, 0.62)">
          <form action="claseDestino.php" method="post">            
             <div class="row" style="padding-top: 16px; padding-bottom: 16px;">
            <div class="col-md-12 login-form-header" style=" padding-top: 16px;">
               <p class="login-form-font-header" style="font-size: 2em;">I<span style="color: #007C9B;">nicio</span><p>
            </div>
        </div>
        <div class="row">
           <div class="col-md-12 login-from-row" style="padding-top: 16px; padding-bottom: 16px;">
              <input name="usuario" type="text" placeholder="Usuario" required/>
           </div>
        </div>
        <div class="row">
           <div class="col-md-12 login-from-row" style="padding-top: 16px; padding-bottom: 16px;">
              <input name="password" type="password" placeholder="Contraseña" required/>
           </div>
        </div>
        <div class="row">
           <div class="col-md-12 login-from-row" style="padding-top: 16px; padding-bottom: 16px;">
              <button class="btn btn-info">Entrar</button>
           </div>
        </div>
        </form>
    </div>
     </div>
  </div>
</main>

<!-- JavaScript Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>

<!--   
	boton se llama con #
	.clase
	@alias 

-->