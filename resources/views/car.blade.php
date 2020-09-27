@extends('layouts.app')

@section('title', $car->model)

@section('content')
    <section class="container-hero-model">
      @if ($car->imageName == "hilux")
        <img src={{ asset('img/cars/'.$car->imageName.'2@2x.png') }} alt={{$car->model}}>
      @else
        <img src={{ asset('img/cars/'.$car->imageName.'@2x.png') }} alt={{$car->model}}>
      @endif
      <div class="container-hero-description">
        <h3>{{ $car->model }}</h3>
        <h2>Preparada para cualquier desafio</h2>
        <p>Mayor durabilidad, estabilidad, confort de marcha y mucha seguridad. Lorem ipsum dolor sit amet. lorem ipsum dolor sit amet orem ipsum dolor..</p>
      </div>
    </section>

    <section class="container-carousel">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('img/carousel/engine.png') }}" alt="First slide">
            <p class="carousel-image-title">Nuevos motores Toyota</p>
            <p class="carousel-image-subtitle">Dos alternativas diesel con turbo de geometría variable, 1GD (2.8 L) y 2GD (2.4 L).</p>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/carousel/chasis.png') }}" alt="Second slide">
            <p class="carousel-image-title">Suspensión mejorada</p>
            <p class="carousel-image-subtitle">Mayor confort de marcha, estabilidad y capacidad Off Road.</p>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/carousel/knob.png') }}" alt="Third slide">
            <p class="carousel-image-title">Transmisión automática</p>
            <p class="carousel-image-subtitle">Posibilidad de elección de caja automática de  manejo.</p>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/carousel/manual_knob.png') }}" alt="Fourth slide">
            <p class="carousel-image-title">Transmisión manual</p>
            <p class="carousel-image-subtitle">Posibilidad de elección de caja automática de manejo.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="container-description-model">
      <div class="row-description">
        <img class="odd" src="{{ asset('img/description/xray.png')}}" alt="">
        <div class="row-text even" >
          <h3>Título de 20 px</h3>
          <p>Texto lorem ipsum dolor sit amet orem ipsum dolor sit amet. lorem ipsum dolor sit amet orem ipsum dolor sit amet lorem ipsum dolor sit amet orem ipsum dolor sit amet.</p>
        </div>
      </div>

      <div class="row-description">
        <img class="even" src="{{ asset('img/description/offroad.png')}}" alt="">
        <div class="row-text odd">
          <h3>Título de 20 px</h3>
          <p>Texto lorem ipsum dolor sit amet orem ipsum dolor sit amet. lorem ipsum dolor sit amet orem ipsum dolor sit amet lorem ipsum dolor sit amet orem ipsum dolor sit amet.</p>
        </div>
      </div>

    </section>
    <div id="p-flag">models</div>

@endsection