@extends('layouts.app')
@section('content')
    <div id="filmy" class="container mt-3 mb-5 text-light">
        <div class="row" style="margin-top: 100px;">
            <h1>Dodaj Film</h1>
        </div>
        <div class="row col-md-6">
            <form method="POST" action="{{ route('crud.store') }}">
                @csrf
                <div class="form-group mb-2">
                    <label for="type">Typ</label>
                    {{-- <input id="type" name="type" type="text" class="form-control @error('id_type') is-invalid @enderror" 
                        value="{{ old('id_type') }}"> --}}
                        <select id="id_type" name="id_type" class="form-control @error('id_type') is-invalid @enderror">
                            @foreach ($types as $type)
                                <option value="{{$type->id}}">{{$type->type}}</option>
                            @endforeach
                        </select> 
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="title">Tytuł</label>
                    <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="description">Opis</label>
                    {{-- <input id="description" name="description" type="text"
                        class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}"> --}}
                        <textarea id="description" name="description" type="text"
                        class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}"></textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="link">Link</label>
                    <input id="link" name="link" type="text"
                        class="form-control @error('link') is-invalid @enderror" value="{{ old('link') }}">
                    @error('link')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <input type="submit" value="Wyślij" class="btn btn-primary">
            </form>
        </div>

    </div>
@endsection
