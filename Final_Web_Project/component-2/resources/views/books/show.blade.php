@extends('books.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Books</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Author : {{ $books->author }}</h5>
        <p class="card-text">Title : {{ $books->title }}</p>
        <p class="card-text">Page : {{ $books->pages }}</p>
        <p class="card-text">Price : {{ $books->price }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
