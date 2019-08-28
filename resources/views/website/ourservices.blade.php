@extends('layouts.app')
@section('content')
<main>
        <section class="breadcrumb-area" style="background-image:url(img/bg/bc.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="breadcrumb-wrap">
                            <div class="breadcrumb-title">
                                <h2>Our Services</h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-end -->
        <!-- features-area -->
        <section class="features-area pt-90 pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="section-title second-title text-center mb-45">
                            <h1 class="wow fadeInUp" data-wow-delay="0.2s">We Offer Great Service</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">There are many variations of passages of Lorem Ipsum available alteration in that some form by injected humour or
                            randomised don't look even slightly believable.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="third-features mb-30">
                            <div class="third-features-icon">
                                <i class="flaticon-3d red-icon"></i>
                            </div>
                            <div class="third-features-content inner-fContent">
                                <h3>Flight Bookings & Reservations</h3>
                                <p class="mb-0" align="justify">As an IATA, ASATA and ANTA accredited travel agency Trip Travel offers cost effective flight reservations to all destinations. 
                                    Preference for any particular airline is of course taken into consideration whenever reservations are made. 
                                   </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="third-features mb-30">
                            <div class="third-features-icon">
                                <i class="flaticon-power darkg-icon"></i>
                            </div>
                            <div class="third-features-content inner-fContent">
                                <h3>Accommodation</h3>
                                <p class="mb-0" align="justify">TaiKen Travels takes pride in giving the customers a choice of their specific accommodation needs, no matter where – regionally, nationally, and internationally. Certain corporate discounts are available, 
                                    with preferred accommodation establishments (with bill back facilities)..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center inner-fContent">
                        <div class="third-features mb-30">
                            <div class="third-features-icon">
                                <i class="flaticon-idea green-icon"></i>
                            </div>
                            <div class="third-features-content">
                                <h3>Car Hire</h3>
                                <p class="mb-0"  align="justify">Trip Travel is an agent for a number of internationally recognized car rental companies. A mutually beneficial relationship exists with Europcar, Budget and Avis from with special rates which are passed onto our customers. 
                                    However, should the customer prefer any other car rental company, Trip Travel will oblige.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->
        <!-- best-features -->
        <section class="best-features inner-features pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="best-features-wrap mb-25 green-bf">
                            <div class="best-features-icon">
                                <i class="flaticon-test green-icon"></i>
                            </div>
                            <div class="best-features-content">
                                <h4>Visas</h4>
                                <p align="justify">Taiken Travels has a department which offers professional and timeous visa services. 
                                    The department also advises clients regarding visa requirements and/or any other information relevant to a specific destination.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="best-features-wrap mb-25 red-bf">
                            <div class="best-features-icon">
                                <i class="flaticon-projection-screen-with-bar-chart red-icon"></i>
                            </div>
                            <div class="best-features-content">
                                <h4>Delivery service</h4>
                                <p>There are many variations of passages of Lorem that Ipsum available the and majority have
                                    suffered. There are many of
                                    majority have suffered.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="best-features-wrap mb-25 blue-bf">
                            <div class="best-features-icon">
                                <i class="flaticon-support-1 blue-icon"></i>
                            </div>
                            <div class="best-features-content">
                                <h4>Airline Loyalty.</h4>
                                <p>There are many variations of passages of Lorem that Ipsum available the and majority have
                                    suffered. There are many of
                                    majority have suffered.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- best-features-end -->
        <!-- team-area -->
        <section class="team-area team-bg pt-90 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                        <div class="section-title second-title text-center mb-45">
                            <span class="wow fadeInUp" data-wow-delay="0.2s">Our Team</span>
                            <h1 class="wow fadeInUp" data-wow-delay="0.4s">Our Creative Staff</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">There are many variations of passages of Lorem Ipsum available alteration in that some form by
                                injected
                                humour or randomised don't look even slightly believable.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-wrap text-center mb-30">
                            <div class="team-thumb mb-15">
                                <img src="img/team/01.png" alt="">
                            </div>
                            <div class="team-info">
                                <h5>Donna Delgado</h5>
                                <span>Web Designer</span>
                                <div class="team-social mt-20">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-wrap text-center mb-30">
                            <div class="team-thumb mb-15">
                                <img src="img/team/02.png" alt="">
                            </div>
                            <div class="team-info">
                                <h5>Genoveva Leannon</h5>
                                <span>app Designer</span>
                                <div class="team-social mt-20">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-wrap text-center mb-30">
                            <div class="team-thumb mb-15">
                                <img src="img/team/03.png" alt="">
                            </div>
                            <div class="team-info">
                                <h5>Angela Mayer</h5>
                                <span>Apps Developer</span>
                                <div class="team-social mt-20">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-wrap text-center mb-30">
                            <div class="team-thumb mb-15">
                                <img src="img/team/04.png" alt="">
                            </div>
                            <div class="team-info">
                                <h5>Gerard Parisian</h5>
                                <span>Web Developer</span>
                                <div class="team-social mt-20">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-area-end -->
    </main>


</main>

@endsection