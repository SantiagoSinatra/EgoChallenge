@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @include('components.hero')
    @include('components.filters')

    <section class="container-models">      
        @foreach ($cars as $car)

            <article class="container-car">
                <h3><a href="{{ route('car-page', $car->id) }}">{{ $car->model }}</a></h3>
                <p>{{ $car->year }} | ${{ $car->price}}</p>
                <a href="{{ route('car-page', $car->id) }}"><img src={{ asset('img/cars/'.$car->imageName.'.png') }} alt="Imagen de un Toyota"></a>
            </article>

        @endforeach
    </section>
@endsection
