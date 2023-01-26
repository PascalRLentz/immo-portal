@extends('layouts.app')

@section('content')
    <section id="house_cards" class="section-gray-gradient section-description">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4 mb-3">
                    <h1 class="text-center" data-aos="fade-in"><small>Aktuelle Immobilien</small><br>Endecken Sie unser Portfolio</h1>
                </div>
            </div>
            <div class="row">
                @foreach($real_estates as $real_estate)
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-5" data-aos="fade-in">
                        <div class="card position-relative">
                            <img class="card-img-top" src="{{ $real_estate->house_data['images'][0] }}" alt="Card image">
                            <div class="card-body">
                                <span class="position-absolute top-0 start-50 translate-middle badge bg-danger">
                                    {{ $real_estate->state->name }}
                                </span>
                                <h4 class="card-title">{{ $real_estate->name }}</h4>
                                <p class="card-text">{{ $real_estate->country . ' ' . $real_estate->federal_state . ' ' . $real_estate->zip_code . ', ' . $real_estate->city }}</p>
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
