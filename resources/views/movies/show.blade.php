@extends('layouts.app')
@section('content')
    <div class="container mt-100 ">
        <div align="center">
        <h3 class="mt-5 text-light" id="kolekcja">Nasza kolekcja</h3>
                    <img src="{{ asset('img/f' . $movie->id . '.jpg') }}" class="card-img-top w-25" alt="{{ $movie->title }}" />
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="text-light">
                            {{ Str::words($movie->description) }}
                        </p>
        </div>
        <iframe width="560" height="315" src="{{ asset($movie->link) }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
    


    
@endsection