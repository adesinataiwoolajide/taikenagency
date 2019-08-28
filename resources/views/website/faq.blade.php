@extends('layouts.app')
@section('content')
<section class="breadcrumb-area" style="background-image:url(img/bg/bc.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-wrap">
                    <div class="breadcrumb-title">
                        <h2>FAQ</h2>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Faq</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services-area home-four-s services-bg pt-90 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="section-title home-three-t text-center mb-45">
                    <span class="wow fadeInUp" data-wow-delay="0.2s">FAQ</span>
                    <h1 class="wow fadeInUp" data-wow-delay="0.4s">Frequently Asked Questions</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.6s">Below are some of the most Frequently Asked Questions.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="services-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="services-item s-services-item mb-25">
                        <i class="flaticon-money green-icon"></i>
                        <div class="s-content">
                            <h5>How long does it takes to process Dubai Visa ?</h5>
                            <p>The Processing of Dubai Visa usually take 3-4 days. you dont have to go to Abuja for thumbprinting</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-item s-services-item mb-25">
                        <i class="flaticon-financial red-icon"></i>
                        <div class="s-content">
                            <h5>Do You offer Dubai Jobs ?</h5>
                            <p>We do not offer jobs. However , we do have an 
                                agency that helps in sourcing jobs over there in Dubai and it usually take about 
                                a month to get the jobs suited for you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-item s-services-item mb-25">
                        <i class="flaticon-cube blue-icon"></i>
                        <div class="s-content">
                            <h5>Do you have where i can stay when i get to Dubai ?</h5>
                            <p>Yes, we offer temporal accommodation in Dubai until you get your job and 
                                accommodation. However, it comes with a monthly fee.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-item s-services-item mb-25">
                        <i class="flaticon-social-media darkg-icon"></i>
                        <div class="s-content">
                            <h5>What other countries offers Jobs ?</h5>
                            <p>Lebanon and Oman both offer jobs, but they are restricted 
                                to ladies only. Most of the jobs are house keeping jobs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-item s-services-item mb-25">
                        <i class="flaticon-antivirus violet-icon"></i>
                        <div class="s-content">
                            <h5>What Other Countries do you process visa to ?</h5>
                            <p>We also help you you process visa to the United States of America, Canada, Scheghen countries and South Africa..</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-item s-services-item mb-25">
                        <i class="flaticon-support-2 cyan-icon"></i>
                        <div class="s-content">
                            <h5>Technologies And Innovations</h5>
                            <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in that some
                            form injected and humour or randomised words.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->
</main>
@endsection