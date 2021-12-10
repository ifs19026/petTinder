@extends('layouts.main')

@section('content')
     <!-- main-area -->
     <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Get Adoption</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Adoption</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- adoption-area -->
        <section class="adoption-area-two pt-110 pb-110">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-65">
                            <div class="section-icon"><img src="img/icon/pawprint.png" alt=""></div>
                            <h5 class="sub-title">Meet the animals</h5>
                            <h2 class="title">Puppies Waiting for Adoption</h2>
                            <p>The best overall dog DNA test is Embark Breed &amp; Health Kit (view at Chewy), which provides
                                you with a breed brwn and information most dogs</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container custom-container">
                <div class="row adopt-active">
                    <div class="col-xl-3">
                        <div class="adoption-item">
                            <div class="adopt-thumb">
                                <a href="/dog-details"><img src="img/images/adop_img01.png" alt=""></a>
                                <span class="status">Free</span>
                            </div>
                            <div class="adopt-content">
                                <div class="adopt-date"><i class="far fa-calendar-alt"></i> Birth : 2021</div>
                                <h3 class="title"><a href="/dog-details">Golden Retriever</a></h3>
                                <p>The Golden Retriever is a medium-large gun dog that was bred.</p>
                                <a href="/dog-details" class="read-more">Read More <img src="img/icon/pawprint.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="adoption-item">
                            <div class="adopt-thumb">
                                <a href="/dog-details"><img src="img/images/adop_img02.png" alt=""></a>
                                <span class="status">Free</span>
                            </div>
                            <div class="adopt-content">
                                <div class="adopt-date"><i class="far fa-calendar-alt"></i> Birth : 2021</div>
                                <h3 class="title"><a href="/dog-details">German Sharped</a></h3>
                                <p>The German Shepherd is a breed of medium to large-sized.</p>
                                <a href="/dog-details" class="read-more">Read More <img src="img/icon/pawprint.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="adoption-item">
                            <div class="adopt-thumb">
                                <a href="/dog-details"><img src="img/images/adop_img03.png" alt=""></a>
                                <span class="status">Free</span>
                            </div>
                            <div class="adopt-content">
                                <div class="adopt-date"><i class="far fa-calendar-alt"></i> Birth : 2021</div>
                                <h3 class="title"><a href="/dog-details">Siberian Husky</a></h3>
                                <p>The Siberian Husky is a medium-sized working sled dog breed.</p>
                                <a href="/dog-details" class="read-more">Read More <img src="img/icon/pawprint.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="adoption-item">
                            <div class="adopt-thumb">
                                <a href="/dog-details"><img src="img/images/adop_img04.png" alt=""></a>
                                <span class="status">Free</span>
                            </div>
                            <div class="adopt-content">
                                <div class="adopt-date"><i class="far fa-calendar-alt"></i> Birth : 2021</div>
                                <h3 class="title"><a href="/dog-details">French Bulldog</a></h3>
                                <p>French Bulldog is a breed of domestic dog, bred to be companion.</p>
                                <a href="/dog-details" class="read-more">Read More <img src="img/icon/pawprint.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="adoption-item">
                            <div class="adopt-thumb">
                                <a href="/dog-details"><img src="img/images/adop_img05.png" alt=""></a>
                                <span class="status">Free</span>
                            </div>
                            <div class="adopt-content">
                                <div class="adopt-date"><i class="far fa-calendar-alt"></i> Birth : 2021</div>
                                <h3 class="title"><a href="/dog-details">Siberian Husky</a></h3>
                                <p>French Bulldog is a breed of domestic dog, bred to be companion.</p>
                                <a href="/dog-details" class="read-more">Read More <img src="img/icon/pawprint.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                            click this link <a href="/add">add friends list</a>
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

        <!-- breeder-gallery-area -->
        <section class="breeder-gallery-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-0 order-lg-2">
                        <div class="breeder-gallery-active">
                            <div class="breeder-gallery-item">
                                <img src="img/images/breeder_gallery01.jpg" alt="">
                            </div>
                            <div class="breeder-gallery-item">
                                <img src="img/images/breeder_gallery02.jpg" alt="">
                            </div>
                            <div class="breeder-gallery-item">
                                <img src="img/images/breeder_gallery03.jpg" alt="">
                            </div>
                            <div class="breeder-gallery-item">
                                <img src="img/images/breeder_gallery04.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="adoption-content">
                            <h5 class="sub-title">Meet Adoption</h5>
                            <h2 class="title">Working For <span>Adoption</span> <br> Happy Time</h2>
                            <p>The best overall dog DNA test is Embark Breed & Health Kit view at Chewy which provides domestic dog is a sticated
                            descendant of the wolf. The dog derived from an ancient.</p>
                            <div class="adoption-list">
                                <ul>
                                    <li><i class="flaticon-tick"></i> Embark Breed & Health</li>
                                    <li><i class="flaticon-tick"></i> The domestic dog is a domesticated</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breeder-gallery-area-end -->

    </main>
    <!-- main-area-end -->


@endsection