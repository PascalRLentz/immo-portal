@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid" style="background-image: url('https://www.kpcimmobilien.de/wp-content/uploads/2019/06/slider-1-4.jpg');">
        <div class="row justify-content-center align-items-center d-flex text-center h-100">
            <div class="col-12 col-md-8 h-65 ">
                <img src="media/images/logo.png" class="img-fluid" style="width: 130px">
                <h1 class="display-2 text-light mb-2 mt-5"><strong>{{ config('app.name', 'Laravel') }}</strong></h1>
                <div class="row">
                    <div class="col-8 offset-2">
                        <div class="search">
                            <i class="fa fa-search"></i>
                            <input type="text" class="form-control" placeholder="Ort oder Anzeigen-ID eingeben">
                            <button class="btn btn-danger">Suchen</button>
                        </div>
                    </div>
                </div>
                <p class="lead text-light mb-5">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</p>

                <div class="btn-container-wrapper p-relative d-block  zindex-1">
                    <a class="btn btn-link btn-lg  mt-md-3 mb-4 scroll align-self-center text-light" href="#house_cards">
                        <i class="fa fa-angle-down fa-3x text-light fa-beat" style="--fa-animation-duration: 5.5s;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section id="house_cards" class="section-gray-gradient section-description">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4 mb-3">
                    <h1 class="text-center" data-aos="fade-in"><small>Aktuelle Immobilien</small><br>Endecken Sie unser Portfolio</h1>
                </div>
            </div>
            <div class="row">
                @foreach($real_estates as $real_estate)
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3" data-aos="fade-in">
                    <div class="card">
                        <img class="card-img-top" src="{{ $real_estate->house_data['images'][0] }}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">{{ $real_estate->name }}</h4>
                            <p class="card-text">{{ $real_estate->description_short }}</p>
                            <a href="{{ route('immobilien.{real_estate}.show', $real_estate) }}" class="btn btn-danger">Mehr anzeigen</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
