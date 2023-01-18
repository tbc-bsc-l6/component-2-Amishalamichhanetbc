@extends('games.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Games</div>
  <div class="card-body">
      
      <form action="{{ url('game') }}" method="post">
        {!! csrf_field() !!}
        <label>console</label></br>
        <input type="text" name="console" id="console" class="form-control"></br>
        <label>title</label></br>
        <input type="text" name="title" id="title" class="form-control"></br>
        <label>pegi</label></br>
        <input type="text" name="pegi" id="pegi" class="form-control"></br>
        <label>price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop