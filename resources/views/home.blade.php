@extends('layouts.main')

@section('content')
 <!-- main-area -->
 <main>

    <!-- slider-area -->
    <section class="slider-area">
        <div class="slider-active">
            <div class="single-slider slider-bg d-flex align-items-center" data-background="img/slider/slider_bg01.jpg">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-10">
                            <div class="slider-content">
                                <div class="slider-title">
                                    <h2 class="title" data-animation="fadeInUpBig" data-delay=".2s" data-duration="1.2s">Best Friend <span>with</span> Happy Time</h2>
                                </div>
                                <div class="slider-desc">
                                    <p class="desc" data-animation="fadeInUpBig" data-delay=".4s" data-duration="1.2s">Human Shampoo on Dogs After six days of delirat, the jury found Hernandez guilty of first-degree murder</p>
                                </div>
                                <a href="/dogList" class="btn" data-animation="fadeInUpBig" data-delay=".6s" data-duration="1.2s">View More <img src="img/icon/w_pawprint.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-bg d-flex align-items-center" data-background="img/slider/slider_bg02.jpg">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-10">
                            <div class="slider-content">
                                <div class="slider-title">
                                    <h2 class="title" data-animation="fadeInUpBig" data-delay=".2s" data-duration="1.2s">Best Friend <span>with</span> Happy Time</h2>
                                </div>
                                <div class="slider-desc">
                                    <p class="desc" data-animation="fadeInUpBig" data-delay=".4s" data-duration="1.2s">Human Shampoo on Dogs After six days of delirat, the jury found Hernandez guilty of first-degree murder</p>
                                </div>
                                <a href="/dogList" class="btn" data-animation="fadeInUpBig" data-delay=".6s" data-duration="1.2s">View More <img src="img/icon/w_pawprint.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-shape"><img src="img/slider/slider_shape01.png" alt=""></div>
        <div class="slider-shape shape-two"><img src="img/slider/slider_shape02.png" alt=""></div>
    </section>
    <!-- slider-area-end -->

    <!-- find-area -->
    <div class="find-area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="find-wrap">
                            <div class="location">
                                <i class="flaticon-location"></i>
                                <input type="text"placeholder="Enter City, State. or Zip">
                            </div>
                            <div class="find-category">
                                <ul>
                                    <li><a href="/adoption"><i class="flaticon-dog"></i> Find Your Dog</a></li>
                                    <li><a href="/adoption"><i class="flaticon-happy"></i> Find Your Cat</a></li>
                                    <li><a href="/adoption"><i class="flaticon-dove"></i> Find Your Birds</a></li>
                                </ul>
                            </div>
                            <div class="other-find">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Find Other Pets
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="/adoption">Find Your Turtle</a>
                                        <a class="dropdown-item" href="/adoption">Find Your Snake</a>
                                        <a class="dropdown-item" href="/adoption">Find Your Rabbit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- find-area-end -->

    <!-- counter-area -->
    <section class="counter-area counter-bg" data-background="img/bg/counter_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="counter-title text-center mb-65">
                        <h6 class="sub-title">Why Choose Us?</h6>
                        <h2 class="title">Best Service to Find Your Beloved Best Friend</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="counter-item">
                        <h2 class="count"><span class="odometer" data-count="73"></span>%</h2>
                        <p>dogs are first bred</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="counter-item">
                        <h2 class="count"><span class="odometer" data-count="259"></span>+</h2>
                        <p>Most dogs are rescued</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="counter-item">
                        <h2 class="count"><span class="odometer" data-count="50"></span>+</h2>
                        <p>Animal Helper</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="counter-item">
                        <h2 class="count"><span class="odometer" data-count="5"></span>+</h2>
                        <p>Experience in Treat Animal</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter-area-end -->

    <!-- adoption-area -->
    <section class="adoption-area">
        <div class="container">
            <div class="row align-items-center align-items-xl-end justify-content-center">
                <div class="col-xl-7 col-lg-6 col-md-10 order-0 order-lg-2">
                    <div class="adoption-img">
                        <img src="img/images/adoption_img.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="adoption-content">
                        <h2 class="title">Working For <br> Dog <span>Adoption</span> Free, Happy Time</h2>
                        <p>The best overall dog DNA test is Embark Breed & Health Kit (view at Chewy), which provides you with a breed brwn and information.</p>
                        <a href="adoption.html" class="btn">Adoption <img src="img/icon/w_pawprint.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="adoption-shape"><img src="img/images/adoption_shape.png" alt=""></div>
    </section>
    <!-- adoption-area-end -->

   
     <!-- faq-area -->
     <section class="faq-area-two faq-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-img-wrap">
                        <img src="img/images/faq_tv.png" class="img-frame" alt="">
                        <img src="img/images/faq_img.png" class="main-img" alt="">
                        <a href="https://www.youtube.com/watch?v=XdFfCPK5ycw" class="popup-video"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-wrapper">
                        <div class="section-title mb-35">
                            <h5 class="sub-title">FAQ Question</h5>
                            <h2 class="title">Family Adoption</h2>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Working for dog adoption
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        This is volunteer working
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            How to Adopt
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        go to this page <a href="/adoption">here!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Add Adoptable puppy to dog List
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        go to this link <a href="/add">add friends list</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq-shape"><img src="img/images/faq_shape.png" alt=""></div>
    </section>
    <!-- faq-area-end -->


    <!-- brand-area -->
    <div class="brand-area pt-80 pb-80">
        <div class="container">
            <div class="row brand-active">
                <div class="col-12">
                    <div class="brand-item">
                        <img src="img/brand/brand_item01.png" alt="img">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="img/brand/brand_item02.png" alt="img">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="img/brand/brand_item03.png" alt="img">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="img/brand/brand_item04.png" alt="img">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="img/brand/brand_item05.png" alt="img">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="img/brand/brand_item06.png" alt="img">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="img/brand/brand_item03.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->

    <!-- adoption-shop-area -->
    <section class="adoption-shop-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="section-title text-center mb-65">
                        <div class="section-icon"><img src="img/icon/pawprint.png" alt=""></div>
                        <h5 class="sub-title">Meet the animals</h5>
                        <h2 class="title">Puppies Waiting for Adoption</h2>
                        <p>Lets help them to find new forever home</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($adoption as $data)
                    <div class="col-lg-4 col-md-6">
                        <div class="adoption-shop-item">
                            <div class="adoption-shop-thumb">
                                <img src="/image/{{ $data->image }}" alt="">
                                <a href="/adoption" class="btn">Adoption <img src="img/icon/w_pawprint.png" alt=""></a>
                            </div>
                            <div class="adoption-shop-content">
                                <h4 class="title"><a href="/adoption">{{ $data->name }}</a></h4>
                                <div class="adoption-meta">
                                    <ul>
                                        <li><i class="fas fa-cog"></i><a href="#">{{ $data->breed }}</a></li>
                                        <li><i class="far fa-calendar-alt"></i> Age : {{ $data->age }}</li>
                                    </ul>
                                </div>
                                <div class="adoption-rating">
                                    <ul>
                                        <li class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- adoption-shop-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial-area testimonial-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="section-title text-center mb-65">
                        <div class="section-icon"><img src="img/icon/pawprint.png" alt=""></div>
                        <h5 class="sub-title">Testimonials</h5>
                        <h2 class="title">Our Happy Customers</h2>
                        <p>What they said after use our services</p>
                    </div>
                </div>
            </div>
            <div class="row testimonial-active">
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="testi-avatar-thumb">
                            <img src="img/images/testi_avatar01.png" alt="">
                        </div>
                        <div class="testi-content">
                            <p>We have really appreciated all of your support during our home study process. A very easy group to work with.</p>
                            <div class="testi-avatar-info">
                                <h5 class="title">Alessia Cara</h5>
                                <span>Happy mom</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="testi-avatar-thumb">
                            <img src="img/images/testi_avatar02.png" alt="">
                        </div>
                        <div class="testi-content">
                            <p>We appreciate you thinking of us and for all the support Adoption & Beyond has provided through the adoption process. Amazing people work for your organization. </p>
                            <div class="testi-avatar-info">
                                <h5 class="title">Stephan</h5>
                                <span>Googel CEO</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="testi-avatar-thumb">
                            <img src="img/images/testi_avatar01.png" alt="">
                        </div>
                        <div class="testi-content">
                            <p>We went through Adoption and Beyond for all of our training and our homestudy prior to pursuing a private adoption. They helped us every step of the way and helped to make the process as smooth as possible. We can’t recommend them highly enough!</p>
                            <div class="testi-avatar-info">
                                <h5 class="title">Adinda</h5>
                                <span>FE Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="testi-avatar-thumb">
                            <img src="img/images/testi_avatar02.png" alt="">
                        </div>
                        <div class="testi-content">
                            <p>We have really appreciated all of your support during our home study process. A very easy group to work with.</p>
                            <div class="testi-avatar-info">
                                <h5 class="title">Alessia Cara</h5>
                                <span>Siska</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->

    <!-- blog-area -->
    <section class="blog-area pt-110 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="section-title text-center mb-65">
                        <div class="section-icon"><img src="img/icon/pawprint.png" alt=""></div>
                        <h5 class="sub-title">Our News</h5>
                        <h2 class="title">Latest News Update</h2>
                        <p>See more updates of our teams</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-post-item mb-50">
                        <div class="blog-post-thumb">
                            <a href="blog-details.html"><img src="img/blog/blog_post_thumb01.jpg" alt=""></a>
                            <div class="blog-post-tag">
                                <a href="#"><i class="flaticon-bookmark-1"></i>Sharped</a>
                            </div>
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-meta">
                                <ul>
                                    <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                    <li><i class="far fa-bell"></i> Mar 10, 2021</li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="blog-details.html">Working For Dog Adoption</a></h3>
                            <p>The best overall dog test is Embark Breed & Health Kit view at Chewy.</p>
                            <a href="blog-details.html" class="read-more">Read More <img src="img/icon/pawprint.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-post-item mb-50">
                        <div class="blog-post-thumb">
                            <a href="blog-details.html"><img src="img/blog/blog_post_thumb02.jpg" alt=""></a>
                            <div class="blog-post-tag">
                                <a href="#"><i class="flaticon-bookmark-1"></i>Creative</a>
                            </div>
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-meta">
                                <ul>
                                    <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                    <li><i class="far fa-bell"></i> Mar 12, 2021</li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="blog-details.html">Dog Derived From an Ancient</a></h3>
                            <p>The best overall dog test is Embark Breed & Health Kit view at Chewy.</p>
                            <a href="blog-details.html" class="read-more">Read More <img src="img/icon/pawprint.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-post-item mb-50">
                        <div class="blog-post-thumb">
                            <a href="blog-details.html"><img src="img/blog/blog_post_thumb03.jpg" alt=""></a>
                            <div class="blog-post-tag">
                                <a href="#"><i class="flaticon-bookmark-1"></i>Business</a>
                            </div>
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-meta">
                                <ul>
                                    <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                    <li><i class="far fa-bell"></i> Mar 12, 2021</li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="blog-details.html">Ten Dog Breeds are Noted</a></h3>
                            <p>The best overall dog test is Embark Breed & Health Kit view at Chewy.</p>
                            <a href="blog-details.html" class="read-more">Read More <img src="img/icon/pawprint.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
</main>
<!-- main-area-end -->

@endsection
