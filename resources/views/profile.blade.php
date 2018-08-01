<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="css/stylenewprof.css" rel="stylesheet">
    <title></title>
  </head>
  <body><nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light" style="background-color:#303952;">
    <a class="navbar-brand beerstittle text-white" href="/home">Beers</a>
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
          <a class="nav-item nav-link active text-white" href="/home">Home <span class="sr-only">(current)</span></a>
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
      </form>
    </div>
  </nav>
    <<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                        <h1 class="page-title">Han Solo</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- news -->
    <div class="card-section">
        <div class="container">
            <div class="card-block bg-white mb30">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- section-title -->
                        <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-5">
            <div class="card kl-card kl-xl kl-shine kl-show">
                <div class="kl-card-block kl-xl bg-primary kl-shadow-b kl-overlay kl-slide-in kl-show">
                    <div class="kl-background">
                        <img src="https://starwarsblog.starwars.com/wp-content/uploads/2015/01/E4D_IA_5306-1536x864-340347928972.jpg">
                    </div>

                    <div class="kl-card-overlay kl-card-overlay-split-q kl-dark kl-inverse">
                        <div class="kl-card-overlay-item">

                        </div>
                        <div class="kl-card-overlay-item"></div>
                        <div class="kl-card-overlay-item">
                            <div class="kl-figure-block">
                                <span class="kl-figure kl-txt-shadow">26k</span>
                                <span class="kl-title">Followers</span>
                            </div>
                        </div>
                        <div class="kl-card-overlay-item">
                            <div class="kl-figure-block">
                                <span class="kl-figure">109</span>
                                <span class="kl-title">Following</span>
                            </div>
                        </div>
                    </div>
                        <div class="section-title mb-0">
                            <h2>All about Hike. We share our knowledge on blog</h2>
                            <p>Our approach is very simple: we define your problem and give the best solution. </p>
                        </div>
                        <!-- /.section-title -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
              <h1 class="text-center">Pensando en cerveza?</h1>
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
                  <button type="submit" class="btn btn-primary mb-2">SUBE TU POSTEO!</button>
                </div>
              </div>

              </form>
            </div>
            </div>
            </div>
  </body>
</html>
