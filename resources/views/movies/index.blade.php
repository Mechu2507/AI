@extends('layouts.app')
@section('content')  
    <div align="center">
    <div id="carouselExampleCaptions" class="carousel slide w-75" data-bs-ride="carousel" >
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/b1.jpg" class="d-block w-100" alt="Proceder">
            <div class="carousel-caption d-none d-md-block text-black">
              <h5>Proceder</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/b2.jpg" class="d-block w-100" alt="Avengers">
            <div class="carousel-caption d-none d-md-block">
              <h5>Avengers</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/b3.jpg" class="d-block w-100" alt="Joker">
            <div class="carousel-caption d-none d-md-block">
              <h5>Joker</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/b4.jpg" class="d-block w-100" alt="Szybcy i wściekli">
            <div class="carousel-caption d-none d-md-block">
              <h5>Szybcy i wściekli</h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>

      <p class="h1 text-center text-white">Nasza kolekcja</p>

      <div class="container">
        <div class="cards d-flex row mt-3 ">
            @forelse ($movies as $movie)
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card bg-dark text-white">
                        <img src="{{ asset('img/f' . $movie->id . '.jpg') }}" class="card-img-top card-img-height" alt="{{ $movie->title }}" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">
                                {{ Str::words($movie->description, 10, '...') }}
                            </p>
                            <a href="{{ route('movies.show', $movie) }}" class="btn btn-sm btn-outline-danger">Obejrzyj</a>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div> 
    </div>
  @endsection