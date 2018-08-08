@extends('layouts.header')

@section('contenido')

<div class="container-fluid" style="background-image: url('http://www.arquimaster.com.ar/web/wp-content/uploads/2016/01/cerveceria_hidalgo3.jpg');
  height:50vh;
  margin-top: 6rem;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
</div>
<div class="container-fluid" style="background-color: #fff;">
  <ul class="nav" style="margin-left: 10vw;">
  <li class="nav-item">
    <a class="nav-link active" href="#">Post <i class="far fa-clipboard" style="font-size:2rem;"></i> <br> </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Likes <i class="fas fa-heart" style="font-size:2rem;"></i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Seguidores <i class="fas fa-angle-double-up" style="font-size:2rem;"></i></a>
  </li>
  <li class="nav-item" style="margin-left: 33vw;">
    <a class="nav-link active" href="#">Seguidos <i class="fas fa-angle-double-up" style="font-size:2rem;"></i> <br> </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Amigos <i class="fas fa-user-friends" style="font-size:2rem;"></i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Puntos <i class="fas fa-star" style="font-size:2rem;"></i></a>
  </li>
</ul>

</div>
@if($users->avatar == '')
<img class="rounded-circle" src="../images/default-avatar.png" style="z-index: 2;height: 200px; width:200px; position:absolute; top:50vh; left:50%; transform:translateX(-50%); border: solid 6px #fff;" alt="avatar-foto">
@else
<img class="rounded-circle" src="../images/{{$users->avatar}}" style="z-index: 2;height: 200px; width:200px; position:absolute; top:50vh; left:50%; transform:translateX(-50%); border: solid 6px #fff;object-fit: cover;" alt="avatar-foto">
@endif
<div class="container-fluid">
  <div class="col-md-4">
    <div class="card w-100 mt-3">
      <div class="card-body">
        <h5 class="card-title">titulo</h5>
        <p class="card-text">aca tambien info cualquiera</p>
        <a href="#" class="btn btn-primary">Boton</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="col-md-8 offset-md-2" style="margin-top: 13vh;">
      <h3 class="text-center font-weight-bold">{{$users->name}}</h3>
      <p class='text-center'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card w-100 mt-3">
      <div class="card-body">
        <h5 class="card-title">titulo</h5>
        <p class="card-text">Aca va info cualquiera del user</p>
        <a href="#" class="btn btn-primary">Boton</a>
      </div>
    </div>
  </div>
</div>
