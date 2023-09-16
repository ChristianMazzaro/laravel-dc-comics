@extends('layouts.main')

@section('page_title', 'comic')
    
@section('main_content')
    <h1 class="text-center">
        {{$comic->title}}
    </h1>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center my-5">
                <img src="{{$comic->thumb}}" alt="">
                <div class="d-flex flex-column">

                    <div class="mx-5">
                        <h3>
                            Descrizione:
                        </h3>
                        <p >
                            {{$comic->description}}
                        </p>
                    </div>
                    <div class="mx-5">
                        <h3>
                            Prezzo:
                        </h3>
                        <p >
                            {{$comic->price}} $
                        </p>
                    </div>
                    <div class="mx-5">
                        <h3>
                            Serie:
                        </h3>
                        <p >
                            {{$comic->series}}
                        </p>
                    </div>
                    <div class="mx-5">
                        <h3>
                            Data d'uscita:
                        </h3>
                        <p >
                            {{$comic->sale_date}}
                        </p>
                    </div>
                    <div class="mx-5">
                        <h3>
                            Tipologia:
                        </h3>
                        <p >
                            {{$comic->type}}
                        </p>
                    </div>
                    <div class="mx-5">
                        <h3>
                            Artisti:
                        </h3>
                        <p >
                            {{ implode(', ', $comic->artists) }}
                        </p>
                    </div>
                    <div class="mx-5">
                        <h3>
                            Scrittori:
                        </h3>
                        <p >
                            {{ implode(', ', $comic->writers) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection