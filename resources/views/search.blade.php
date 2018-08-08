@extends('layouts.header')

@section('contenido')

@if($usuarios->first())
<div class="container-fluid" style="margin-top: 15vh; ">
  <div class="card-deck">
  @foreach($usuarios as $row)
    <div class="card">
      @if($row->avatar)
      <img class="card-img-top" src="../images/{{$row->avatar}}" alt="Card image cap" style="width: 100%; height: 15vw;  object-fit: cover; " >
      @else
      <img class="card-img-top" src="../images/default-avatar.png" alt="Card image cap" style="width: 100%; height: 15vw;  object-fit: cover; " >
      @endif
      <div class="card-body">
        <h5 class="card-title">{{$row->name}}</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <a href="#" class="btn btn-primary">Seguir</a>
      <div class="card-footer">
        <small class="text-muted">Se unio el  {{$row->created_at->format('d/m/Y')}} </small>
      </div>
    </div>
  @endforeach
  </div>
</div>
@else
<div class="container-fluid" style="margin-top: 50vh;">
<h1 class="text-center" style="color: #000;">No hay ningun usuario con ese nombre.</h1>
</div>
@endif

{{$usuarios->links()}}
