@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista dei fumetti</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data di vendita</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Immagine</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a class="btn btn-secondary" href="{{ route('comics.show', $comic->id) }}">
                                <i class="fa-solid fa-image"></i>
                            </a>
                            <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">
                                <i class="fa-solid fa-pen"></i>
                            </a>

                            <form class="d-inline-block" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h3><a href="{{ route('home') }}">Torna alla Home Page</a></h3>
        <h3><a href="{{ route('comics.create') }}">Inserisci un nuovo fumetto</a></h3>
    </div>
@endsection
