@extends('layouts.app')
@section('content')
<section class="breadcrumb-area" style="background-image:url(img/bg/bc.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-wrap">
                    <div class="breadcrumb-title">
                        <h2>BLOG</h2>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-inner-page pt-100 pb-100">
    <div class="container">
        <div class="row">
           
            <div class="col-lg-12 col-md-4">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-wrapper blog-border mb-30">
                            <div class="blog-thumb">
                                <img src="{{asset('img/europe.jpg')}}" alt="Europe" >
                            </div>
                            <div class="b-content-box">
                                <div class="blog-meta">
                                    <i class="far fa-clock"></i>
                                    <span><?php echo date("d-M, Y") ?>By | Taye Oyelade</span>
                                </div>
                                <div class="blog-content mb-20">
                                    <h5><a href="#">BEST DESTINATIONS FOR EASTER VACATION IN EUROPE</a></h5>
                                    <p>Easter is a time of the year in Europe when sunny days are back, 
                                        flowers in bloom and days longer and warmer. Europe's best destinations for your Easter holidays include:.</p>
                                </div>
                                <div class="blog-link">
                                    <a href="{{route('dubai')}}">Read More Details
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-wrapper blog-border mb-30">
                            <div class="blog-thumb">
                                <img src="{{asset('img/dubai.png')}}" alt="Dubai" style="height:210px">
                            </div>
                            <div class="b-content-box">
                                <div class="blog-meta">
                                    <i class="far fa-clock"></i>
                                    <span><?php echo date("d-M, Y") ?>By | Taye Oyelade</span>
                                </div>
                                <div class="blog-content mb-20">
                                    <h5><a href="{{route('dubai')}}">Dubai must-see tourist attractions</a></h5>
                                    <p>There are many variations of passages of Lorem that Ipsum available but the majority have
                                        suffered dumm alteration in
                                        that some form by injected.</p>
                                </div>
                                <div class="blog-link">
                                    <a href="{{route('dubai')}}">Read More Details<i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-wrapper blog-border mb-30">
                            <div class="blog-thumb">
                                <img src="{{asset('img/logo.jpg')}}" alt="Logo" style="height:210px">
                            </div>
                            <div class="b-content-box">
                                <div class="blog-meta">
                                    <i class="far fa-clock"></i>
                                    <span><?php echo date("d-M, Y") ?>By | Taye Oyelade</span>
                                </div>
                                <div class="blog-content mb-20">
                                    <h5><a href="#">Welcome to TaiKen Travels Blog</a></h5>
                                    <p>Welcome once again to a rebranded TBIL Travels website. We are set out to satisfy you 
                                        even more this time. In this blog post we will want to share with…</p>
                                </div>
                                <div class="blog-link">
                                    <a href="#">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>
<!-- all-blog-area-end -->
</main>
@endsection