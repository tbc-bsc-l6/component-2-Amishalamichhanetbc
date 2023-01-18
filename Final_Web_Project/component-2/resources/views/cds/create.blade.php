@extends('cds.layout')
@section('content')
 
<div class="card">
  <div class="card-header">CDs</div>
  <div class="card-body">
      
      <form action="{{ url('cd') }}" method="post">
        {!! csrf_field() !!}
        <label>artist</label></br>
        <input type="text" name="artist" id="artist" class="form-control"></br>
        <label>title</label></br>
        <input type="text" name="title" id="title" class="form-control"></br>
        <label>durations</label></br>
        <input type="text" name="durations" id="durations" class="form-control"></br>
        <label>price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop