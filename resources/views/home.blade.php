
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beers</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/responsive-slider.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <link href="css/stylehome.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: Resi
    Theme URL: https://bootstrapmade.com/resi-free-bootstrap-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light" style="background-color:#303952;">
    <a class="navbar-brand beerstittle text-white" href="#">Beers</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        <div class="navbar-nav ">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                 <img src="images/{{ Auth::user()->avatar}}" alt="profile" class="rounded-circle" style="width:35px; height:35px;">  {{-- {{ Auth::user()->name }} --}}
              </a>

              <ul class="dropdown-menu">
                  <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
          </li>

          <a class="nav-item nav-link text-white" href="#"><i class="fas fa-envelope"></i></a>
          <a class="nav-item nav-link text-white" href="#"><i class="fas fa-bell"></i></a>
          <a class="nav-item nav-link active text-white" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link text-white" href="#">Moments</a>

        </div>

      </div>

      <span class="navbar-text text-white m-auto pr-3 font-weight-bold">
        {{ Auth::user()->name }}
      </span>
      <form class="form-inline navbar-right">
        <button class="btn btn-outline-success mr-3" type="button" data-toggle="modal" data-target="#exampleModalCenter">New Post</button>
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 mr-3" type="submit">Search</button>
        <button class="btn btn-outline-success mr-3" type="button" name="changecolor" id="buttonID">
            Modo Nocturno
          <link type="text/css" rel="stylesheet" media="all" href="../green.css" id="theme_css" />
        </button>
      </form>
    </div>
    <div id="sfc4en1xmk5bygqf1lfkm68ktje8qwkxqzg"></div>
    <a title="contador de visitas com"><img src="https://counter4.whocame.ovh/private/contadorvisitasgratis.php?c=u46l7c5c3hhmb5m8tldmmxph81ryxbn8" border="0" title="contador de visitas com" alt="contador de visitas com"></a>
  </nav>


<div class="container-fluid " style="margin-top:15vh;">
  <div class="col-md-3">
    <div class="card w-100" style="width: 18rem;">
      <img class="card-img-top" src="images/{{ Auth::user()->avatar}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{ Auth::user()->name }}</h5>
          <p class="card-text">Bio User</p>
          <a href="/profile" class="btn btn-primary">Mi Perfil</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <h1 class="text-center">¡Comenta a la comunidad!</h1>
    <form class="form" action="/posteo" method="POST" enctype="multipart/form-data">
      {{csrf_field() }}
    <div class="col-md-12">
      <div class="form-row">
        <div class="form-group col-md-4">
          <input type="text" name="nickname" readonly class="form-control" id="inputnickname" value="{{ Auth::user()->name }}">
        </div>
        <div class="form-group col-md-4">
          {{-- <select type="text" name="local" class="form-control" id="inputlocal" placeholder="Cerveceria">
            <option value="Antares">Antares</option>
            <option value="Prinston">Prinston</option>
            <option value="Cervelar">Cervelar</option>
            <option value="Pentos">Pentos</option>
            <option value="BarbaRoja">BarbaRoja</option>
            <option value="LaChopperia">LaChopperia</option>
          </select> --}}

            <select  name="local" class="custom-select" id="inputlocal" style="height:3.4rem;">
              <option selected> Cerveceria  </option>
              <option value="Antares">Antares</option>
              <option value="Prinston">Prinston</option>
              <option value="Cervelar">Cervelar</option>
              <option value="Pentos">Pentos</option>
              <option value="BarbaRoja">BarbaRoja</option>
              <option value="LaChopperia">LaChopperia</option>
            </select>

          {{-- <input type="text" name="local" class="form-control" id="inputlocal" placeholder="Cerveceria"> --}}
        </div>
        <div class="form-group col-md-4">
          <input type="text" name="titulopost" class="form-control" id="inputitulo" placeholder="Titulo">
        </div>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Comentarios</label>
        <textarea class="form-control" name="mensajeposteado" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <label> <p>Fotos del post</p> <input id="regAvatar" type="file" name="fotopost" value=""></label>
      <div class="row justify-content-center">
        <button href="/profile" type="submit" class="btn btn-primary mb-2">SUBE TU POSTEO!</button>
      </div>
    </div>

    </form>

        <div class="col-md-12">

      @foreach ($posteos as $row)
      <div class="card w-100 mt-5" style="width: 18rem; box-shadow: 1px 1px 10px 1px rgba(138,138,138,1);">
            <div class="card-body ">
          @if($row->fotopost)
            <img class="card-img-top" src="images/{{$row->fotopost}}" alt="Card image cap">
          @endif
            <h5 class="card-title">{{$row->titulopost}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$row->nickname}}</h6>
            <p class="card-text">{{$row->mensajeposteado}}</p>
            <a href="#" class="card-link">Like</a>
            <a href="#" class="card-link">Compartir</a>
            <p class="card-text"><small class="text-muted">{{$row->created_at}}</small></p>

          </div>
      </div>

      @endforeach
        </div>



  </div>
  <div class="col-md-3">
    <div class="card w-100" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Hace nuevos amigos</h5>
        <h6 class="card-subtitle mb-2 text-muted">Users registrados en Beers</h6>
        <p class="card-text">
          <ul class="list-group list-group-flush">
            @foreach($usuario as $us)
            <a href="#" class="list-group-item list-group-item-action">{{$us->name}}</a>
            @endforeach
          </ul>
        </p>
        <a href="#" class="card-link">Buscar Amigo</a>

      </div>
    </div>
  </div>
</div>
<footer>
    <div class="sub-footer mt-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12" style="background-color: #303952; height:5vh;">
            <p class="text-center text-light">copyright Beers</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/responsive-slider.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/changecolor.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle"><img src="images/{{ Auth::user()->avatar}}" alt="profile" class="rounded-circle" style="width:35px; height:35px;"></h5>
          <h5 class="ml-3">{{ Auth::user()->name }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Titulo</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mensaje:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Publicar</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
