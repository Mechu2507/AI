@extends('layouts.app')
@section('content')
    <div id="filmy" class="container mt-3 mt-100 text-light">
        <div class="row">
            <h1>Edytuj film: {{ $movie->title }}</h1>
        </div>
        <div class="row col-md-6">
            <form method="POST" action="{{ route('crud.update', $movie->id) }}">
                @method('PUT')
                @csrf
                <div class="form-group mb-2">
                    <label for="type">Typ</label>
                    <input id="type" name="type" type="text" class="form-control @error('id_type') is-invalid @enderror"
                        value="{{ $movie->id_type }}">
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="title">Tytuł</label>
                    <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                        value="{{ $movie->title }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="description">Opis</label>
                    <input id="description" name="description" type="text"
                        class="form-control @error('description') is-invalid @enderror" value="{{ $movie->description }}">
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="link">Link</label>
                    <input id="link" name="link" type="text"
                        class="form-control @error('link') is-invalid @enderror" value="{{ $movie->link }}">
                    @error('link')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <input type="submit" value="Zapisz" class="btn btn-primary">
            </form>
        </div>

    </div>
@endsection
