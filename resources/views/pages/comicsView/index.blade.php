@extends('layouts.app')

@section('title', 'DC comics | read Index')

@section('main')
    <h1>pagina dc comics</h1>
        <div class="row p-3">
        @foreach ($comics as $item)
        <div class="col-3 py-5">
            <div class="card bg-light text-dark" style="width: 18rem; min-height: 670px">
                <img src="{{$item->thumb}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    {{-- <p class="card-text"> --}}
                        {{-- {{$item->description}} --}}
                    {{-- </p> --}}
                    <div class="d-flex flex-column">
                        <span><strong>Series:</strong> {{$item->series}}</span>
                        <span>${{$item->price}}</span>
                        <span><strong>Sala date: </strong>{{$item->sale_date}}</span>
                        <span><strong>Type:</strong> {{$item->type}}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
