@extends('layouts.app')
@section('title', 'Film: ' . $movie->title . ' - ')
@section('content')
    <div id="kraje" class="container mt-3 mt-100 text-light">
        <div class="jumbotron">
            <h1 class="display-4">{{ $movie->title }}</h1>

            <div class="row">
                <table class="table table-bordered col-md-6" style="width: 33%;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Opis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Typ</th>
                            <td>{{ $movie->id_type }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Tytuł</th>
                            <td>{{ $movie->title }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Opis</th>
                            <td>{{ $movie->surface }} km²</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
