@extends('books.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Book</div>
  <div class="card-body">
      
      <form action="{{ url('book/' .$book->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$book->id}}" id="id" />

        <label>author</label></br>
        <input type="text" name="author" id="author" value="{{$book->author}}" class="form-control"></br>

        <label>title</label></br>
        <input type="text" name="title" id="title" value="{{$book->title}}" class="form-control"></br>

        <label>pages</label></br>
        <input type="text" name="pages" id="pages" value="{{$book->pages}}" class="form-control"></br>

        <label>price</label></br>
        <input type="text" name="price" id="price" value="{{$book->price}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop