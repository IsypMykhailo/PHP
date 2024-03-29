@extends('layouts.app')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg spad" data-setbg="{{asset('img/about-bread.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Latest Blog</h2>
                        <div class="breadcrumb-controls">
                            <a href="#"><i class="fa fa-home"></i> Home</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog-section blog-page spad">
        <div class="container">
            <div class="row blog-gird">
                <div class="grid-sizer"></div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item large-item set-bg" data-setbg="{{asset('img/blog/blog-1.jpg')}}">
                        <a href="blog-single.html" class="blog-text">
                            <div class="categories">Gym & Croosfit</div>
                            <h5>Many people sign up for affiliate programs</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item instagram-item">
                        <a href="#" class="instagram-text">
                            <div class="categories">Gym & Croosfit <i class="fa fa-instagram"></i></div>
                            <h5>Follow Our Classes Gyming on Instagram # BodyBuilding # photo</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item sm-item set-bg" data-setbg="{{asset('img/blog/blog-page-3.jpg')}}">
                        <a href="blog-single.html" class="blog-text">
                            <div class="categories">Gym & Croosfit</div>
                            <h5>Many people sign up for affiliate programs</h5>
                        </a>
                        <div class="play-btn">
                            <a href="https://www.youtube.com/watch?v=X_9VoqR5ojM" class="play-in-btn video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item large-item xls-large set-bg" data-setbg="{{asset('img/blog/blog-3.jpg')}}">
                        <a href="blog-single.html" class="blog-text">
                            <div class="categories">Gym & Croosfit</div>
                            <h5>Many people sign up for affiliate programs</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item large-item set-bg" data-setbg="{{asset('img/blog/blog-page-4.jpg')}}">
                        <a href="blog-single.html" class="blog-text">
                            <div class="categories">Gym & Croosfit</div>
                            <h5>Your Antibiotic One Day To 10 Day Options</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item large-item xls-large set-bg" data-setbg="{{asset('img/blog/blog-page-1.jpg')}}">
                        <a href="blog-single.html" class="blog-text">
                            <div class="categories">Gym & Croosfit</div>
                            <h5>Many people sign up for affiliate programs</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item large-item m-item set-bg" data-setbg="{{asset('img/blog/blog-page-2.jpg')}}">
                        <a href="blog-single.html" class="blog-text">
                            <div class="categories">Gym & Croosfit</div>
                            <h5>Many people sign up for affiliate programs</h5>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item sms-item set-bg" data-setbg="{{asset('img/blog/blog-page-5.jpg')}}">
                        <a href="blog-single.html" class="blog-text">
                            <div class="categories">Gym & Croosfit</div>
                            <h5>Your Antibiotic One Day To 10 Day Options</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item instagram-item">
                        <a href="#" class="instagram-text">
                            <div class="categories">Gym & Croosfit <i class="fa fa-instagram"></i></div>
                            <h5>Follow Our Classes Gyming on Instagram # BodyBuilding # photo</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="blog-option">
                <div class="blog-pagination">
                    <a href="#" class="active">1</a>
                    of
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="blog-option-right">
                    <div class="blog-result">Showing 1–3 of 12 results</div>
                    <div class="show-result">
                        <p>Show:</p>
                        <select class="show-result-select">
                            <option value="">09</option>
                            <option value="">19</option>
                            <option value="">29</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Cta Section Begin -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-text">
                        <h3>GeT Started Today</h3>
                        <p>New student special! $30 unlimited Gym for the first week anh 50% of our member!</p>
                    </div>
                    <a href="#" class="primary-btn cta-btn">book now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Cta Section End -->
@endsection
