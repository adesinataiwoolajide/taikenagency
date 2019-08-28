@extends('layouts.app')
@section('content')
    @include('layouts.slider')

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
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <a href="{{route('faq')}}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->
    
    
    <section class="testimonial-area home5-testimonial pt-90 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section-title testimonial-title text-center mb-45">
                        <span class="wow fadeInUp" data-wow-delay="0.2s">Testimonials</span>
                        <h1 class="wow fadeInUp" data-wow-delay="0.4s">What Clients Say</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.6s">There are many variations of passages of Lorem Ipsum available alteration in that some form by injected humour or
                        randomised don't look even slightly believable.</p>
                    </div>
                </div>
            </div>
            <div class="row second-testimonial-active">
                <div class="col-xl-6">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-img-wrap">
                            <img src="img/testimonial/001.png" alt="">
                        </div>
                        <div class="client-text-wrap">
                            <i class="flaticon-quote"></i>
                            <h6>Bert Matthews</h6>
                            <p>There are many variations of passages of Lorem Ipsum the aty available but the majority have
                                suffered
                                alteration in that at on some form by injected humour.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-img-wrap">
                            <img src="img/testimonial/002.png" alt="">
                        </div>
                        <div class="client-text-wrap">
                            <i class="flaticon-quote"></i>
                            <h6>Anna Dowson</h6>
                            <p>There are many variations of passages of Lorem Ipsum the aty available but the majority have
                                suffered
                                alteration in that at on some form by injected humour.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-img-wrap">
                            <img src="img/testimonial/001.png" alt="">
                        </div>
                        <div class="client-text-wrap">
                            <i class="flaticon-quote"></i>
                            <h6>Bert Matthews</h6>
                            <p>There are many variations of passages of Lorem Ipsum the aty available but the majority have
                                suffered
                                alteration in that at on some form by injected humour.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->
    <div class="area-wrap tb-bg">
        <!-- team-area -->
        <section class="team-area pt-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="section-title home-three-t text-center mb-45">
                            <span class="wow fadeInUp" data-wow-delay="0.2s">Our Team</span>
                            <h1 class="wow fadeInUp" data-wow-delay="0.4s">Our Creative Staff</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">There are many variations of passages of Lorem Ipsum available alteration in that some form by
                                injected humour or
                                randomised don't look even slightly believable.</p>
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
        
        <!-- brand-area-end -->
    </div>
    <!-- world-contact -->
    <section class="wcontact-area pt-90 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title home-three-t bp-title mb-45">
                        <span class="wow fadeInUp" data-wow-delay="0.2s">Contacts we have</span>
                        <h1 class="wow fadeInUp" data-wow-delay="0.4s">Offices Allround the World</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.6s">There are many variations of passages of Lorem that Ipsum that is that available alteration randomised even slightly
                        believable.</p>
                    </div>
                    <div class="cinfo-list mb-45">
                        <ul>
                            <li>Variations of passages of Lorem Ipsum available.</li>
                            <li>If you are going a to use a passage of Lorem Ipsum dummy.</li>
                            <li>The majority have suffered alteration randomised words.</li>
                            <li>Suffered alteration randomised words.</li>
                            <li>Lorem Ipsum you need sure there embarrassing.</li>
                        </ul>
                    </div>
                    <div class="wcontact-btn">
                        <a href="#" class="btn">More about us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wcontact-map">
                        <img src="img/bg/wcontact.png" alt="">
                        <div class="map-marker map-c1">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c2">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c3">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c4">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c5">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c6">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c7">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c8">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c9">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c10">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c11">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c12">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c13">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c14">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c15">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c16">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c17">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c18">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c19">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                        <div class="map-marker map-c20">
                            <div class="map-marker-icon">
                                <i></i>
                            </div>
                            <div class="map-address text-center">
                                <h6>Germany</h6>
                                <span>25632 Berlin, 173 Leipzig</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- world-contact-end -->
    <!-- cta-area -->
    <section class="cta-area second-cta d-flex align-items-center" style="background-image:url(img/subscription.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section-title home-three-t cta-t text-center mb-45" style="margin-top:-20px">
                        <h1>News Letter</h1>
                        <p></p>
                    </div>
                    <div class="subs-form text-center" style="margin-top:100px">
                        <form action="" method="POST">
                            <input type="text" placeholder="Enter Your Email Here">
                            <button class="btn">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-area-end -->
    <!-- blog-area -->
    <section class="blog-area pt-90 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section-title home-three-t text-center mb-45">
                        <span class="wow fadeInUp" data-wow-delay="0.2s">Tourist Center</span>
                        <h1 class="wow fadeInUp" data-wow-delay="0.4s">Dubai must-see tourist attractions</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.6s">Dubai is a city that must be seen to be believed.
                            Here are the top places to tick off your sightseeing list when you’re in town.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                   
                <div class="col-lg-12 col-md-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="blog-wrapper blog-border mb-30">
                                <div class="blog-thumb">
                                    <img src="{{asset('img/Burj Khalifa.jpg')}}" alt="Europe" >
                                </div>
                                <div class="b-content-box">
                                    <div class="blog-meta">
                                        <i class="far fa-clock"></i>
                                        <span><?php echo date("d-M, Y") ?>By | Taye Oyelade</span>
                                    </div>
                                    <div class="blog-content mb-20">
                                        <h5><a href="{{route('dubai')}}">Burj Khalifa</a></h5>
                                        <p align="justify">
                                                The Burj Khalifa (Arabic: برج خليفة‎, Arabic for "Khalifa Tower", 
                                                known as the Burj Dubai prior to its inauguration in 2010, is a skyscraper in Dubai, 
                                                United Arab Emirates. With a total height of 829.8 m (2,722 ft) and a roof height (excluding antenna) 
                                                of 828 m (2,717 ft), the Burj Khalifa has been the tallest structure and building in the world 
                                                since its topping out in 2009.
                                        </p>
                                    </div>
                                    <div class="blog-link">
                                        {{-- <a href="{{route('dubai')}}">Read More Details
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-wrapper blog-border mb-30">
                                <div class="blog-thumb">
                                    <img src="{{asset('img/dubai mall.jpg')}}" alt="Dubai Mall" style="height:250px">
                                </div>
                                <div class="b-content-box">
                                    <div class="blog-meta">
                                        <i class="far fa-clock"></i>
                                        <span><?php echo date("d-M, Y") ?>  By | Taye Oyelade</span>
                                    </div>
                                    <div class="blog-content mb-20">
                                        <h5><a href="#">The Dubai Mall</a></h5>
                                        <p align="justify">
                                                It is the second-largest mall in the world by total land area, 
                                                and the 26th-largest shopping mall in the world by gross leasable area.
                                                Dubai Mall opened on 4 November 2008, with about 1000 retailers, 
                                                marking the world's second largest-ever mall opening in retail history behind West Edmonton Mall
                                        </p>
                                    </div>
                                    <div class="blog-link">
                                        {{-- <a href="{{route('dubai')}}">Read More Details<i class="fas fa-long-arrow-alt-right"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-wrapper blog-border mb-30">
                                <div class="blog-thumb">
                                    <img src="{{asset('img/dubai fountain.jpg')}}" alt="Dubai Fountain" style="height:250px">
                                </div>
                                <div class="b-content-box">
                                    <div class="blog-meta">
                                        <i class="far fa-clock"></i>
                                        <span><?php echo date("d-M, Y") ?>By | Taye Oyelade</span>
                                    </div>
                                    <div class="blog-content mb-20">
                                        <h5><a href="">The Dubai Fountain</a></h5>
                                        <p>The Dubai Fountain is the world's largest choreographed fountain system. It is set on the 12 hectare (30 acre) manmade Burj Khalifa Lake, 
                                            at the center of the Downtown Dubai development in Dubai,
                                            United Arab Emirates. It was designed by WET Design, the California-based company 
                                            responsible for the fountains at the Bellagio Hotel Lake in Las Vegas. </p>
                                    </div>
                                    <div class="blog-link">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
    
    
                        <div class="col-lg-4">
                            <div class="blog-wrapper blog-border mb-30">
                                <div class="blog-thumb">
                                    <img src="{{asset('img/dubai-palm-jumeirah.jpg')}}" alt="Europe" >
                                </div>
                                <div class="b-content-box">
                                    <div class="blog-meta">
                                        <i class="far fa-clock"></i>
                                        <span><?php echo date("d-M, Y") ?>By | Kehinde Oyelade</span>
                                    </div>
                                    <div class="blog-content mb-20">
                                        <h5><a href="{{route('dubai')}}">
                                                Palm Jumeirah Dubai</a></h5>
                                        <p align="justify">
                                                It's a man-made island in the shape of a palm tree – there’s a reason why locals say ‘only in Dubai.’ 
                                                Palm Jumeirah is one of the largest artificial islands in the world and a triumph of human ingenuity. 
                                                Locals and tourists alike enjoy the Palm’s vast array of high-end hotels, including the Waldorf Astoria, 
                                                Fairmont, One&Only, Jumeirah Zabeel Saray a
                                                most notably, the iconic Atlantis, The Palm. And with a monorail running down the ‘trunk’ that connects to the mainland’s 
                                                tram system, getting there couldn’t be easier.
                                        </p>
                                    </div>
                                        <div class="blog-link">
                                            {{-- <a href="{{route('dubai')}}">Read More Details
                                                <i class="fas fa-long-arrow-alt-right"></i>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="blog-wrapper blog-border mb-30">
                                    <div class="blog-thumb">
                                        <img src="{{asset('img/Madinat-Jumeirah.jpg')}}" alt="Madinat-Jumeirah" style="height:250px">
                                    </div>
                                    <div class="b-content-box">
                                        <div class="blog-meta">
                                            <i class="far fa-clock"></i>
                                            <span><?php echo date("d-M, Y") ?>  By | Kehinde Oyelade</span>
                                        </div>
                                        <div class="blog-content mb-20">
                                            <h5><a href="#">Madinat Jumeirah</a></h5>
                                            <p align="justify">
                                                    Madinat Jumeirah the Arabian Resort - Dubai is a luxurious 5 star resort in Dubai. It is the largest resort in the Emirate,
                                                    spreading across over 40 hectares of landscapes and gardens. It is designed to resemble a traditional Arabian town. The resort comprises 
                                                    three boutique hotels (Jumeirah Al Qasr, 
                                                    Jumeirah Mina A'Salam, and Jumeirah Al Naseem) and a courtyard of 29 summer houses called Jumeirah Dar Al Masyaf. The resort has over 50 restaurants and bars
                                            </p>
                                        </div>
                                        <div class="blog-link">
                                            {{-- <a href="{{route('dubai')}}">Read More Details<i class="fas fa-long-arrow-alt-right"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="blog-wrapper blog-border mb-30">
                                    <div class="blog-thumb">
                                        <img src="{{asset('img/dubai fountain.jpg')}}" alt="Dubai Fountain" style="height:250px">
                                    </div>
                                    <div class="b-content-box">
                                        <div class="blog-meta">
                                            <i class="far fa-clock"></i>
                                            <span><?php echo date("d-M, Y") ?>By | Taye Oyelade</span>
                                        </div>
                                        <div class="blog-content mb-20">
                                            <h5><a href="">The Dubai Fountain</a></h5>
                                            <p align="justify">The Dubai Fountain is the world's largest choreographed fountain system. It is set on the 12 hectare (30 acre) manmade Burj Khalifa Lake, 
                                                at the center of the Downtown Dubai development in Dubai,
                                                United Arab Emirates. It was designed by WET Design, the California-based company 
                                                responsible for the fountains at the Bellagio Hotel Lake in Las Vegas. </p>
                                        </div>
                                        <div class="blog-link">
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
</main>

@endsection