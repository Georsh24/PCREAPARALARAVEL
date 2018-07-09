


<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Pc Repara</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Styles -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="icomoon/style.css">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Kalam|Shadows+Into+Light" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50"></body>
<!--<div class="full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar Sesion</a>
                        <a href="{{ route('register') }}">Registrase</a>
                    @endauth
                </div>
            @endif
                  </div>-->


<div class="container-fuid encabezado" style="background-color: #ff4040;color:#fff;height:20%;">

  <div>
    <a>
      <img class="imglogo" src="imgs/Pcreparalogo.png" width="100%">
    </a>
  </div>

</div>

<nav class="navbar navbar-inverse " data-spy="affix" data-offset-top="150">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand textencabezado" href="index.php">PCREPARA</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li>
            <a class="textencabezado" href="#section1">Inicio</a>
          </li>
          <li>
            <a class="textencabezado" href="#section2">Promociones</a>
          </li>
          <li>
            <a class="textencabezado" href="#section3">Nuestro Equipo</a>
          </li>
          <li>
            <a class="textencabezado" href="#section41">Contactanos</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

          <li>
            <a class="textencabezado" href="/login">Administracion</a>
          </li>
          <li>
            <a class="textencabezado" href="/register">Registro</a>
          </li>

        </ul>
      </div>
    </div>
  </div>
</nav>
<div id="section1" class="container-fluid">

  <div class=" imginicio">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item active imginicio">
          <img src="2.jpg" alt="Los Angeles" style="width:100%; height: 400px;">
          <div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>LA is always so much fun!</p>
          </div>
        </div>

        <div class="item imginicio">
          <img src="3.jpg" alt="Chicago" style="width:100%; height: 400px;">
          <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
          </div>
        </div>

        <div class="item imginicio">
          <img src="2.jpg" alt="New York" style="width:100%; height: 400px;">
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
          </div>
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="cotainer">
    <div class="contextmov">
      <p class="textp">PC Repara es</p>
      <ul class="textul">
        <li class="textli">Seguridad</li>
        <li class="textli">Calidad</li>
        <li class="textli">Precio</li>
      </ul>
      <p class="textp">pntes </p>
    </div>
  </div>


</div>

</div>


<div id="section2" class="container-fluid">
  <div class="container">
    <h1>Promociones</h1>
    <div class="container"> 
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <span class="glyphicon glyphicon-search" aria-hidden="true"> </span> Busqueda
                </div>
                <div class="panel-body">
                  <form method="POST" action="/search/event">
                    {{ csrf_field()}}
                     
                        <input type="text" class="form-control" name="codigo" placeholder="Buscar..." required autofocus/>
                        <br>

                  <button type="submit" class="form-control">Buscar</button>
               </form>
               </div>
              </div>
            </div>
          </div>
          
        </div> 
        
        <div class="col-md-8">
            <div class="panel ">
              <div class="panel-heading">
                <span class="glyphicon glyphicon-time" aria-hidden=""></span> Tu Equipo
              </div>
              <div class="panel-body">
                  
                  
                  <div class="row">
                      <div class="col-md-12">
                          <div class="table-resposive">
                              <table class="table table-hover table-bordered">
                                  <thead>
                                      <tr>
                                          <th>No.</th>
                                          <th>Codigo</th>
                                          <th>Modelo</th>
                                          <th>Serie</th>
                                          <th>Descripcion</th>
                                          <th>Estado</th>
                                          <th>Costo</th>
                                  
                                      </tr>
                                  </thead>
                                
                              </table>
                              
                          </div>
                      </div>
                  </div>
                  
      
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<div id="section3" class="container-fluid">
  <div class="container">
    <h1>Nuestro Equipo</h1>
    <div class="w3-row w3-center">
      <div class="w3-col l4  w3-center">
        <div class="w3-container">
          <h2>Desarrollo/Soporte</h2>
          <div class="w3-row">
            <div class="w3-col s6 w3-center">
              <div class="w3-card-4" style="width:100%">
                <img src="avatares/avatar-12.png" alt="Norway" style="width:100%">
                <div class="w3-container w3-center">
                  <p>Jorge Alejandro Fernández Rivera</p>
                </div>
              </div>
            </div>
            <div class="w3-col s6 w3-center">
              <div class="w3-card-4" style="width:100%">
                <img src="avatares/avatar.png" alt="Norway" style="width:100%">
                <div class="w3-container w3-center">
                  <p>Jean Loui Rodriguez Gomez</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="w3-col l4  w3-center">
        <div class="w3-container">
          <h2>Desarrollo/Soporte</h2>
          <div class="w3-row">
            <div class="w3-col s6 w3-center">
              <div class="w3-card-4" style="width:100%">
                <img src="avatares/avatar-1.png" alt="Norway" style="width:100%">
                <div class="w3-container w3-center">
                  <p>Miguel Ibañez</p>
                </div>
              </div>
            </div>
            <div class="w3-col s6 w3-center">
              <div class="w3-card-4" style="width:100%">
                <img src="avatares/avatar-2.png" alt="Norway" style="width:100%">
                <div class="w3-container w3-center">
                  <p>Lorenzo Arellano</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w3-col l4  w3-center">
        <div class="w3-container">
          <h2>Administracion</h2>
          <div class="w3-row">
            <div class="w3-col s6 w3-center">
              <div class="w3-card-4" style="width:100%">
                <img src="avatares/avatar-7.png" alt="Norway" style="width:100%">
                <div class="w3-container w3-center">
                  <p>Abel Rodríguez Navarro</p>
                </div>
              </div>
            </div>
            <div class="w3-col s6 w3-center">
              <div class="w3-card-4" style="width:100%">
                <img src="avatares/avatar-23.png" alt="Norway" style="width:100%">
                <div class="w3-container w3-center">
                  <p>Emma Edith Rodríguez</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <h1>Estamos para servirte!
      </h1>
      <a href="#section41">
        <img class="iconc" src="imgs/flechaabajo.png">
      </a>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="section4"></div>
      <br>
      <br>
    </div>
  </div>



</div>
</div>
<div id="section41" class="container-fluid">
  <div class=" piecontactanos">
    <h1>Contactanos</h1>
    <div class="col-8">
      <p>© Copyright 2018. Todos los Derechos Reservados. Desarrollado por: </p>
      <p> www.jorgeelchido.com</p>
      <p>Da click en el siguente boton</p>
    </div>
  </div>

  <div class="container-icons">
    <a href="">
      <div class="row-icon icon1">
        <h4>Google+</h4>
        <label class="">
          <img class="label1" src="imgs/google-plus.png">
        </label>
      </div>
    </a>
    <a href="">
      <div class="row-icon icon2">
        <h4>Youtube</h4>
        <label class="">
          <img class="label2" src="imgs/youtube.png">
        </label>
      </div>
    </a>
    <a href="">
      <div class="row-icon icon3">
        <h4>Instagram</h4>
        <label class="">
          <img class="label3" src="imgs/instagram.png">
        </label>
      </div>
    </a>
    <a href="">
      <div class="row-icon icon4">
        <h4>Whatsapp</h4>
        <label class=" ">
          <img class="label4" src="imgs/whatsapp.png">
        </label>
      </div>
    </a>
    <a href="">
      <div class="row-icon icon5">
        <h4>Facebook</h4>
        <label class=" ">
          <img class="label5" src="imgs/facebook.png">
        </label>
      </div>
    </a>
    <a href="">
      <div class="row-icon icon6">
        <h4>Ubicacion</h4>
        <label class=" ">
          <img class="label6" src="imgs/location.png">
        </label>
      </div>
    </a>

    <h2 class="iconop">
      <img src="imgs/phone-book.png" style="width:50px;" </h2>
  </div>

</div>



</body>

</html>