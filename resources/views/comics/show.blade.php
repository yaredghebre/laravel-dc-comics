@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <img class="card-img-top w-25" src="{{ $comic->thumb }}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{ $comic->title }}</h2>
                <p class="card-text"><strong>Descrizione: </strong> {{ $comic->description }}</p>
                <p class="card-text"><strong>Prezzo: </strong> {{ $comic->price }}</p>
                <p class="card-text"><strong>Data di vendita: </strong> {{ $comic->sale_date }}</p>
                <p class="card-text"><strong>Serie: </strong> {{ $comic->series }}</p>
                <p class="card-text"><strong>Tipologia: </strong> {{ $comic->type }}</p>
        
            </div>
        </div>
    </div>
@endsection

