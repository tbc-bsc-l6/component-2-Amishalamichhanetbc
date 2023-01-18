@extends('cds.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">CDs</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Artist : {{ $cds->artist }}</h5>
        <p class="card-text">Title : {{ $cds->title }}</p>
        <p class="card-text">Duration : {{ $cds->durations }}</p>
        <p class="card-text">Price : {{ $cds->price }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
