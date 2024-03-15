@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h1>Movies</h1>
        <div class="row justify-content-between">
            @foreach ($movies as $movie)
                <div class="card">
                    <div class="card-body d-flex flex-column gap-2">
                        <span>Id: {{ $movie['id'] }}</span>
                        <h4 class="card-title">{{ $movie['title'] }}</h4>
                        <h6 class="card-title">{{ $movie['original_title'] }}</h6>
                        <span>Date: {{ $movie['date'] }}</span>
                        <span>Vote: {{ $movie['vote'] }}</span>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
@endsection