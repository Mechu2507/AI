@extends('layouts.app')
@section('content')  
<div id="Filmy" class="container mt-3 mb-5 text-light">
    <div class="row" style="margin-top: 100px;">
        <h1>Filmy</h1>
    </div>
    @can('is-admin')
        <a href="{{ route('crud.create') }}" class="btn btn-sm btn-success">Dodaj nowy film</a>
    @endcan
    @if (Session::has('error'))
        <p class="alert alert-danger">{{ Session::get('error') }}</p>
    @endif
    <table class="table text-light">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Typ</th>
                <th scope="col">Tytuł</th>
                <th scope="col">Opis</th>
                <th scope="col">Link</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movies as $movie)
                <tr>
                    <th scope="row" href="{{ route('crud.show', $movie) }}" class="link text-light">{{ $movie->id }}</th>
                    <td>{{ $movie->type->type }}</td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->description }} </td>
                    <td>{{ $movie->link }}</td>
                    @can('is-admin', $movie)
                        <td>
                            <a href="{{ route('crud.edit', $movie) }}" class="btn btn-sm btn-warning">Edytuj</a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('crud.destroy', $movie) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="confirm('Czy na pewno chcesz usunać film');">Usuń</button>
                            </form>
                        </td>
                    @endcan
                    </th>
                </tr>
            @empty
                <tr>
                    <th scope="row" colspan="6">Brak filmów.</th>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
  @endsection