@extends('layouts.app')
@section('content')
<section class="breadcrumb-area" style="background-image:url(img/bg/bc.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-wrap">
                    <div class="breadcrumb-title">
                        <h2>Contact Us</h2>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-end -->
<!-- contact-area -->
<section class="contact-area pt-100 pb-100">
    <div class="container">
        <div class="row align-items-center mb-100">
            <div class="col-lg-5">
                <div class="contact-title section-title">
                    <span>We’ll Be</span>
                    <h1>Glad To Assist You!</h1>
                    <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in that some
                    form by injected humour or randomised words which don't look even the slightly is believable dummy text.</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-img wow fadeInRight" data-wow-delay="0.4s">
                    <img src="img/bg/contact.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 cta-padding-r">
                <div class="contact-cta text-center">
                    <div class="contact-cta-icon mb-15">
                        <i class="flaticon-phone"></i>
                    </div>
                    <div class="contact-cta-content">
                        <h5>Phone No:</h5>
                        <span>+05 - 015 - 246 - 5524</span>
                        <span>+06 - 025 - 286 - 5500</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 paddingX">
                <div class="contact-cta text-center">
                    <div class="contact-cta-icon mb-15">
                        <i class="flaticon-mail"></i>
                    </div>
                    <div class="contact-cta-content">
                        <h5>Mail addess</h5>
                        <span>info@example.com</span>
                        <span>info@example.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 cta-padding-l">
                <div class="contact-cta text-center">
                    <div class="contact-cta-icon mb-15">
                        <i class="flaticon-pin"></i>
                    </div>
                    <div class="contact-cta-content">
                        <h5>LOCATION</h5>
                        <span>New York, NY 256364,</span>
                        <span>United States</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-map-wrap mt-100">
        <div class="contact-map" style="background-image:url(img/map.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="contact-form-wrap">
                        <div class="form-title mb-45">
                            <h4>Get In Touch With Us</h4>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form action="#">
                            <input type="text" placeholder="Full Name">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="First Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" placeholder="E-mail">
                                </div>
                            </div>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                            <button class="btn">send message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->
</main>
@endsection