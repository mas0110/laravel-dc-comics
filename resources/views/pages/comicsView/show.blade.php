@extends('layouts.app')

@section('title', 'DC comics | Read show')

@section('main')
   <div class="container mt-3 bg-light text-dark rounded p-3">
        <h2>{{ $comic->title }}</h2>
        <p>
            {{ $comic->description }}
        </p>
        <div class="btn btn-primary">
            <a href="/comics">torna indietro</a>
        </div>
   </div>
@endsection
