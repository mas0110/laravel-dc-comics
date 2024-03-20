@extends('layouts.app')

@section('title', 'Benvenuto | About')

@section('style')
    <style>
        main {
            h1 {
                text-align: start;
            }

            li {
                list-style-type: disc;
                margin-left: 1rem;
            }
        }
    </style>
@endsection

@section('main_content')
    <h1>Pagina di about</h1>

    <p>{{ $lorem }}</p>
@endsection
