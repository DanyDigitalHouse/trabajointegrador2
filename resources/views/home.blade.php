@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<p>¡Comenta a la comunidad!</p>
<form class="form" action="/posteo" method="POST" enctype="multipart/form-data">
  {{csrf_field() }}
<div>
  <input type="text" name="nickname" autofocus placeholder="Nickname" value=""> <span class="errorstyle"> </span>
  <input type="text" name="local"  placeholder="Cerveceria" value=""> <span class="errorstyle"> </span>
  <input type="text" name="titulopost"  placeholder="Titulo" value=""> <span class="errorstyle"></span>
  <input type="text" name="mensajeposteado"  placeholder="Comentarios" value=""> <span class="errorstyle"></span>
  <label> <p>Fotos del post</p> <input id="regAvatar" type="file" name="fotopost'" value=""></label>
  <input id="registro" type="submit" name="" value="SUBE TU POSTEO!">
    <?php var_dump($errors) ?>
</div>
</form>
@endsection
