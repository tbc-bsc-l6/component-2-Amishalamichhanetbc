@extends('books.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Books</div>
  <div class="card-body">
      
      <form action="{{ url('book') }}" method="post">
        {!! csrf_field() !!}
        <label>author</label></br>
        <input type="text" name="author" id="author" class="form-control"></br>
        <label>title</label></br>
        <input type="text" name="title" id="title" class="form-control"></br>
        <label>pages</label></br>
        <input type="text" name="pages" id="pages" class="form-control"></br>
        <label>price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop