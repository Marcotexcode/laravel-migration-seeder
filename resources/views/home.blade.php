@extends('layouts.app')

@section('title', 'Pacchetti viaggio')

@section('content')


  

  <div class="container">

  @foreach($travels as $travel)
  
    <div class="card">
      <div class="card-header">
        Featured
      </div>
      <div class="card-body">
        <h5 class="card-title">{{$travel->title}}</h5>
        <ul>
          <li>Numero {{$travel->people}}</li>
          <li>{{$travel->validity}}</li>
          <li>Localita: {{$travel->locality}}</li>
          <li>Prezzo: {{$travel->price}} €</li>
        </ul>
        <p class="card-text">{{$travel->description}}</p>
        <a href="#" class="btn btn-primary">DETTAGLI</a>
      </div>
    </div>
  @endforeach

  </div>

@endsection