@extends('layouts.main')

@section('page_title', 'Create Comic')

@section('main_content')
    <h1 class="text-center">Create a New Comic</h1>
    <div class="container">

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="thumb">Inserisci il link all'immagine:</label>
                <input type="text" id="thumb" name="thumb" class="form-control" required>
    
                <label for="title">Inserisci il titolo:</label>
                <input type="text" id="title" name="title" class="form-control" required>
    
                <label for="description">Inserisci la descrizione:</label>
                <input type="text" id="description" name="description" class="form-control" required>
    
                <label for="price">Inserisci il prezzo:</label>
                <input type="number" step=0.01 id="price" name="price" class="form-control" required>
    
                <label for="series">Inserisci la serie:</label>
                <input type="text" id="series" name="series" class="form-control" required>
    
                <label for="sale_date">Insercisci la data d'uscita:</label>
                <input type="text" id="sale_date" name="sale_date" class="form-control" required>
    
                <label for="type">Inserisci la tipologia:</label>
                <input type="text" id="type" name="type" class="form-control" required>
    
                <label for="artists">Inserisci gli artisti:</label>
                <input type="array" id="artists[]" name="artists[]" class="form-control" required>
    
                <label for="writers">Inserisci gli scrittori:</label>
                <input type="array" id="writers[]" name="writers[]" class="form-control" required>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary my-5">Create Comic</button>
            </div>
        </form>
    </div>

@endsection
