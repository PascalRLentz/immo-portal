@extends('layouts.app')

@section('content')
    <section id="show-realEstate">
        <div class="jumbotron jumbotron-fluid" style="background-image: url({{ $real_estate->house_data['images'][0] }});">
            <div class="row justify-content-center align-items-center d-flex text-center h-100">
                <div class="col-12 col-md-8 h-65 ">
                    <h1 class="display-2 text-light mb-2 mt-5"><strong>{{ $real_estate->name }}</strong></h1>
                    <p class="lead text-light mb-5">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</p>
                    <div class="row" style="margin: 13px;">
                        <div class="col-sm-12 col-md-3">
                            <div class="information-item">
                                <i class="fa-solid fa-circle-calendar"></i>
                                <h3 class="h3">Baujahr</h3>
                                <h5 class="h5">{{ !empty($real_estate->construction_year) ? $real_estate->construction_year : '- keine Angabe -' }}</h5>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="information-item">
                                <h3 class="h3">Wohnfläche</h3>
                                <h5 class="h5">{{ !empty($real_estate->square_meters) ? $real_estate->square_meters . ' m²' : '- keine Angabe -' }}</h5>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="information-item">
                                <h3 class="h3">Grundstück</h3>
                                <h5 class="h5">{{ !empty($real_estate->land_area) ? $real_estate->land_area . ' m²' : '- keine Angabe -' }}</h5>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="information-item">
                                <h3 class="h3">Zimmer</h3>
                                <h5 class="h5">{{ !empty($real_estate->rooms) ? $real_estate->rooms : '- keine Angabe -' }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="btn-container-wrapper p-relative d-block  zindex-1">
                        <a class="btn btn-link btn-lg  mt-md-3 mb-4 scroll align-self-center text-light" href="#house_cards">
                            <i class="fa fa-angle-down fa-3x text-light fa-beat" style="--fa-animation-duration: 5.5s;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
