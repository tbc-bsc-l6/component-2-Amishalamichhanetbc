@extends('games.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Games</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Console : {{ $games->console }}</h5>
        <p class="card-text">Title : {{ $games->title }}</p>
        <p class="card-text">Pegi: {{ $games->pegi }}</p>
        <p class="card-text">Price : {{ $games->price }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
