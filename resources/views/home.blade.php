@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="container-models">
        <h1>Descubrí todos los modelos</h1>
        
        @foreach ($cars as $car)

            <article class="container-car">
                <h3>{{ $car->model }}</h3>
                <p>{{ $car->year }} | ${{ $car->price}}</p>
                <img src={{ $car->imageLoc }} alt="Toyota Yaris">
            </article>

        @endforeach
    </section>
@endsection
