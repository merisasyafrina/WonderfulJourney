@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center text-center">
        <div class="col-auto mb-3">
            <div class="card" style="width: 40rem;">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="/assets/pinkbeach.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Pink Beach, Lombok</h5>
                            <p>The main destination in Jerowaru is Tangsi Beach, also known as Pink Beach.</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="/assets/pulauseribu.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Kepulauan Seribu, DKI Jakarta</h5>
                            <p>The Thousand Islands (officially Kepulauan Seribu) are a chain of islands to the north of Jakartas coast.</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="/assets/rinjani.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Gunung Rinjani, Lombok</h5>
                            <p>An active volcano in Indonesia on the island of Lombok.</p>
                        </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Welcome to Wonderful Journey, {{ Auth::user()->name }}!</h5>
                    <p class="card-text" style="color: black; align-self: center;">
                        The Blog of Indonesia Tourism
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection