@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <img class="card-img-top" src="{{ $comic->thumb }}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{ $comic->title }}</h2>
                <p class="card-text"><strong>Descrizione: </strong> {{ $comic->description }}</p>
                <p class="card-text"><strong>Prezzo: </strong> {{ $comic->price }}</p>
                <p class="card-text"><strong>Data di vendita: </strong> {{ $comic->sale_date }}</p>
                <p class="card-text"><strong>Serie: </strong> {{ $comic->series }}</p>
                <p class="card-text"><strong>Tipologia: </strong> {{ $comic->type }}</p>
        
            </div>
        </div>
        <h3><a href="{{ route('home') }}">Torna alla Home Page</a></h3>
        <h3><a href="{{ route('comics.index') }}">Torna alla Lista dei fumetti</a></h3>
    </div>
@endsection

