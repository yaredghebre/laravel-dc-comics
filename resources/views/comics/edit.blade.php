@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>{{ $comic->title }}</h2>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title' ,$comic->title) }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>  
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb' ,$comic->thumb) }}">
                @error('thumb')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <select id="type" name="type" class="form-select">
                    <option @selected($comic->type === 'comic book') value="comic book">Comic Book</option>
                    <option @selected($comic->type === 'graphic novel') value="graphic novel">Graphic Novel</option>
                    <option @selected($comic->type === 'anime') value="anime">Anime</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price' ,$comic->price) }}">
                @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di vendita</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date' ,$comic->sale_date) }}">
                @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>   
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series' ,$comic->series) }}">
                @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>

        </form>
    </div>
@endsection
