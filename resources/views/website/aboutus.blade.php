@extends('layouts.app')
@section('content')
<main>
        <!-- breadcrumb -->
        <section class="breadcrumb-area" style="background-image:url(img/bg/bc.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="breadcrumb-wrap">
                            <div class="breadcrumb-title">
                                <h2>About Us</h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-end -->
        <!-- features-area -->
        <section class="features-area pt-90 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="section-title second-title text-center mb-45">
                            <span class="wow fadeInUp" data-wow-delay="0.2s">About Us</span>
                            <h1 class="wow fadeInUp" data-wow-delay="0.4s">We Make Creative Solutions</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">There are many variations of passages of Lorem Ipsum available alteration in that some form by injected humour or
                            randomised don't look even slightly believable.</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-65">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="third-features mb-30">
                            <div class="third-features-icon">
                                <i class="flaticon-3d red-icon"></i>
                            </div>
                            <div class="third-features-content inner-fContent">
                                <h3>Website Design</h3>
                                <p class="mb-0">There are many variations of passages of Lorem is a Ipsum available but the
                                    majority suffered the and is alteration in that dummy text.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="third-features mb-30">
                            <div class="third-features-icon">
                                <i class="flaticon-power darkg-icon"></i>
                            </div>
                            <div class="third-features-content inner-fContent">
                                <h3>Customer Support</h3>
                                <p class="mb-0">There are many variations of passages of Lorem is a Ipsum available but the
                                    majority suffered the and is alteration in that dummy text.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center inner-fContent">
                        <div class="third-features mb-30">
                            <div class="third-features-icon">
                                <i class="flaticon-idea green-icon"></i>
                            </div>
                            <div class="third-features-content">
                                <h3>Development</h3>
                                <p class="mb-0">There are many variations of passages of Lorem is a Ipsum available but the
                                    majority suffered the and is alteration in that dummy text.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="slogan-wrap mb-30">
                            <div class="icon mb-20">
                                <img src="img/icon/fp.png" alt="">
                            </div>
                            <div class="slogan-content">
                                <h3>Our Mission</h3>
                                <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in that some
                                form by injected humour or randomised words which don't look even slightly believable. If you to are going a to use a
                                passage of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="slogan-wrap ourVision mb-30">
                            <div class="icon mb-20">
                                <img src="img/icon/eye.png" alt="">
                            </div>
                            <div class="slogan-content">
                                <h3>Our Vision</h3>
                                <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in that some
                                form by injected humour or randomised words which don't look even slightly believable. If you to are going a to use a
                                passage of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->
        <!-- counter-area -->
        <div class="counter-area counter-bg pt-95 pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-count-wrap home5-count text-center mb-30">
                            <div class="count">
                                <span class="counter second-counter">175</span><span>k</span>
                            </div>
                            <p>Global Customer</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-count-wrap home5-count text-center mb-30">
                            <div class="count">
                                <span class="counter second-counter">47</span><span>y</span>
                            </div>
                            <p>Years Expereince</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-count-wrap home5-count text-center mb-30">
                            <div class="count">
                                <span class="counter second-counter">39</span><span>+</span>
                            </div>
                            <p>Awards Won</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="single-count-wrap home5-count text-center mb-30">
                            <div class="count">
                                <span class="counter second-counter">120</span><span>c</span>
                            </div>
                            <p>Offices the World</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter-area-end -->
        <!-- skill-area -->
        <section class="skill-area second-home-skill inner-skill-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="skill-img wow fadeInLeft" data-wow-delay="0.2s">
                            <img src="img/bg/skill.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 s-skill-pl">
                        <div class="section-title mb-45">
                            <h1>We give you both graphic <br>
                                & technical Support</h1>
                            <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered  alteration in that some form by injected humour or randomised words which don't look even slightly believable. If you are going a to use a passage of Lorem Ipsum you need.</p>
                        </div>
                        <div class="progress-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-progress fix mb-55">
                                        <div class="progress-bar-wrap">
                                            <div class="pie-chart" data-percent="69" data-barcolor="#fbb94c" data-trackcolor="#e5e5e5"
                                                data-linewidth="10" data-barsize="95">
                                                <div class="skill-range">
                                                    <div class="pie-chart-percent">
                                                        <span></span>
                                                        <sup>%</sup>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-content">
                                            <h5>Digital Design</h5>
                                            <p>There are many variations passages a Lorem Ipsum available majority.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-progress fix mb-55">
                                        <div class="progress-bar-wrap">
                                            <div class="pie-chart" data-percent="89" data-barcolor="#45a10e" data-trackcolor="#e5e5e5"
                                                data-linewidth="10" data-barsize="95">
                                                <div class="skill-range">
                                                    <div class="pie-chart-percent">
                                                        <span></span>
                                                        <sup>%</sup>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-content">
                                            <h5>Generative Graphics</h5>
                                            <p>There are many variations passages a Lorem Ipsum available majority.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-progress fix mb-55">
                                        <div class="progress-bar-wrap">
                                            <div class="pie-chart" data-percent="76" data-barcolor="#fe4e49" data-trackcolor="#e5e5e5"
                                                data-linewidth="10" data-barsize="95">
                                                <div class="skill-range">
                                                    <div class="pie-chart-percent">
                                                        <span></span>
                                                        <sup>%</sup>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-content">
                                            <h5>Motion Design</h5>
                                            <p>There are many variations passages a Lorem Ipsum available majority.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-progress fix mb-55">
                                        <div class="progress-bar-wrap">
                                            <div class="pie-chart" data-percent="80" data-barcolor="#06b4fd" data-trackcolor="#e5e5e5"
                                                data-linewidth="10" data-barsize="95">
                                                <div class="skill-range">
                                                    <div class="pie-chart-percent">
                                                        <span></span>
                                                        <sup>%</sup>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-content">
                                            <h5>Web Development</h5>
                                            <p>There are many variations passages a Lorem Ipsum available majority.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- skill-area-end -->
        <!-- testimonial-area -->
        <section class="testimonial-area inner-testimonial pt-90 pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="section-title testimonial-title text-center mb-45">
                            <span class="wow fadeInUp" data-wow-delay="0.2s">Testimonials</span>
                            <h1 class="wow fadeInUp" data-wow-delay="0.4s">What Clients Say</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">There are many variations of passages of Lorem Ipsum available alteration in that some form by
                                injected humour or
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
        <div class="team-area-wrap">
            <!-- team-area -->
            <section class="team-area team-bg pt-90">
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
            <!-- brand-area -->
            <div class="brand-area border-b inner-brand pt-70 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="brand-active">
                                <div class="single-brand">
                                    <img src="img/brand/01.png" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="img/brand/02.png" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="img/brand/03.png" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="img/brand/04.png" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="img/brand/05.png" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="img/brand/06.png" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="img/brand/03.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->
        </div>
        <!-- world-contact -->
        <section class="wcontact-area pt-90 pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title home-three-t bp-title mb-45">
                            <span>Contacts we have</span>
                            <h1>Offices Allround the World</h1>
                            <p>There are many variations of passages of Lorem that Ipsum that is that available alteration
                                randomised even slightly
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
    </main>
<!-- contact-area-end -->

@endsection