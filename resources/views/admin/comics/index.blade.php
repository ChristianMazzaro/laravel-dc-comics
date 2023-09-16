@extends('layouts.main')

@section('page_title', 'comics')
    
@section('main_content')
    <h1 class="text-center">
        Comics
    </h1>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-4 my-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$comic->title}}</h5>
                      <p class="card-text card_description">{{$comic->description}}</p>
                      <p class="card-text">prezzo: {{$comic->price}} $</p>
                      <p class="card-text">serie: {{$comic->series}}</p>
                      <p class="card-text">data d'uscita: {{$comic->sale_date}}</p>
                      <p class="card-text">tipologia: {{$comic->type}}</p>
                      <p class="card-text ">artisti: {{ implode(', ', $comic->artists) }}</p>
                      <p class="card-text my-3">scrittori: {{ implode(', ', $comic->writers) }}</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="/comics/{{$comic->id}}" class="btn btn-primary my-2">Dettagli</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection