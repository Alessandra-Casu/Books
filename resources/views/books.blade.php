
@extends('layouts.base')


@section('contents')
    <h2>Questi sono i nostri libri</h2>

    <div class="row g-3 row-cols-3">
        @foreach ($collBooks as $book)
            <div class="col">
            
                <div class="card h-100">
                    <img src="{{Vite::asset('resources/img/' . $book->img)}}" class="card-img-top h-75" alt="{{ $book->title }}">
                    <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">{{ substr( $book->plot, 0, 100 )}}...</p>
                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>  
            </div>
        @endforeach
    </div>
   
@endsection