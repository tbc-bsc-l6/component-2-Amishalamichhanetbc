@extends('cds.layout')
@section('content')
 
<div class="card">
  <div class="card-header">CDs</div>
  <div class="card-body">
      
      <form action="{{ url('cd/' .$cds->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$cds->id}}" id="id" />

        <label>artist</label></br>
        <input type="text" name="artist" id="artist" value="{{$cds->artist}}" class="form-control"></br>

        <label>title</label></br>
        <input type="text" name="title" id="title" value="{{$cds->title}}" class="form-control"></br>

        <label>durations</label></br>
        <input type="text" name="durations" id="durations" value="{{$cds->durations}}" class="form-control"></br>

        <label>price</label></br>
        <input type="text" name="price" id="price" value="{{$cds->price}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop