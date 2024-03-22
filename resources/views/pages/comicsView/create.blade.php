@extends('layouts.app')

@section('title', 'DC comics | Create')

@section('main')

<div class="container pt-3">
            <h2>Crea un nuovo fumetto</h2>
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">titolo</label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        id="title"
                    />
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">series</label>
                    <input
                        type="text"
                        class="form-control"
                        name="series"
                        id="series"
                    />
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">tipo</label>
                    <input
                        type="text"
                        class="form-control"
                        name="type"
                        id="type"
                    />
                </div>

                <div class="mb-3">
                    <label for="weight" class="form-label">Prezzo</label>
                    <input
                        type="text"
                        class="form-control"
                        name="price"
                        id="price"
                    />
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">immagine</label>
                    <input
                        type="text"
                        class="form-control"
                        name="thumb"
                        id="thumb"
                    />
                </div>

                <div class="mb-3">
                    <label for="cooking_time" class="form-label">sale date</label>
                    <input
                        type="text"
                        class="form-control"
                        name="sale_date"
                        id="sale_date"
                    />
                </div>

                <button
                    type="submit"
                    class="btn btn-primary">
                    Crea
                </button>


            </form>
        </div>
@endsection
