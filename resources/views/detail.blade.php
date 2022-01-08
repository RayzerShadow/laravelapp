@extends('layouts.app')

    @section('content')
    <div class="container">
    <section id="about">


<h3 class="section-title">Szczegóły usługi</h3>
<div class="section-title-divider"></div>
<br><br>

<div class="container about-container" data-aos="fade-up" data-aos-delay="200">
        <div class="row">

          <div class="col-lg-6 about-img">
            <img src="/store_image/fetch_image/{{ $data->id }}" alt="">
          </div>
          <div class="col-md-5 about-content" style="padding:50px">

            <h2 class="about-title">{{ $data->name}}</h2>
            <p class="about-text">{{ $data->description}}</p>
            <p class="about-text">Cena: {{ $data->price}}zł</p>
            <p class="about-text">Czas trwania: {{ $data->time}}</p>

          </div>
        
        </div>
        </div>
</section>
        </div>






    @endsection