@extends('games.layout')
@section('content')
 
<div class="card">
  <div class="card-header">game</div>
  <div class="card-body">
      
      <form action="{{ url('game/' .$games->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$games->id}}" id="id" />

        <label>console</label></br>
        <input type="text" name="console" id="console" value="{{$games->console}}" class="form-control"></br>

        <label>title</label></br>
        <input type="text" name="title" id="title" value="{{$games->title}}" class="form-control"></br>

        <label>pegi</label></br>
        <input type="text" name="pegi" id="pegi" value="{{$games->pegi}}" class="form-control"></br>

        <label>price</label></br>
        <input type="text" name="price" id="price" value="{{$games->price}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop