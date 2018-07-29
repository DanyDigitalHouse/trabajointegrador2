
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resi Bootstrap Template</title>

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


  <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light" style="background-color:#f7f1e3;">
    <a class="navbar-brand" href="#">Beers</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        <div class="navbar-nav">
          <form id="logout-form" action="{{ route('logout') }}" method="POST" >
            {{ csrf_field() }}
            <button type="submit" name="button"></button>
        </form>
          <a class="nav-item nav-link" href="#"><i class="fas fa-envelope"></i></a>
          <a class="nav-item nav-link" href="#"><i class="fas fa-bell"></i></a>
          <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Moments</a>

        </div>
      </div>
      <span class="navbar-text">
        {{ Auth::user()->name }}
      </span>
      <form class="form-inline navbar-right">
        <button class="btn btn-outline-success" type="button">New Post</button>
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
<div class="container-fluid " style="margin-top:15vh;">
  <div class="col-md-3">
    <div class="card w-100" style="width: 18rem;">
      <img class="card-img-top" src="images/{{ Auth::user()->avatar}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{ Auth::user()->name }}</h5>
          <p class="card-text">Bio User</p>
          <a href="#" class="btn btn-primary">Mi Perfil</a>
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
          <input type="text" name="local" class="form-control" id="inputlocal" placeholder="Cerveceria">
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
        <button type="submit" class="btn btn-primary mb-2">SUBE TU POSTEO!</button>
      </div>
    </div>

    </form>

        <div class="col-md-12">

      @foreach ($posteos as $row)
      <div class="card w-100 mt-5" style="width: 18rem; box-shadow: 1px 1px 10px 1px rgba(138,138,138,1);">
            <div class="card-body ">
            <img class="card-img-top" src="images/{{$row->fotopost}}" alt="Card image cap">
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
          <ul class="list-group">
            @foreach($usuario as $us)
            <li class="list-group-item">{{$us->name}}</li>
            @endforeach
          </ul>
        </p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
  </div>
</div>

    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-network">
              <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
              <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
              <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
              <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
              <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright">
              <p>&copy;Resi Theme - All right reserved.</p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Resi
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>

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
  <script>
    wow = new WOW({}).init();
  </script>

</body>

</html>
