@extends('layouts.main')

@section('content')
     <!-- main-area -->
     <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('/img/bg/breadcrumb_bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Pet Details</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pet Single</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- breeder-details-area -->
        <section class="breeder-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="breeder-details-content">
                            <h4 class="title">{{ $adoption->name }}</h4>
                            <div class="breeder-details-img">
                                <img src="/image/{{ $adoption->image }}" alt="">
                            </div>
                            <h4 class="title">About Bio</h4>
                            <p>{{ $adoption->detail }}.</p>
                            <div class="breeder-dog-info">
                                <h5 class="title">Dog Information</h5>
                                <div class="row">
                                    <div class="col-md-3 col-sm-4 col-6">
                                        <div class="breeder-info-item">
                                            <h6>Gender:</h6>
                                            <span>{{ $adoption->gender }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6">
                                        <div class="breeder-info-item">
                                            <h6>Age:</h6>
                                            <span>{{ $adoption->age }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6">
                                        <div class="breeder-info-item">
                                            <h6>Color:</h6>
                                            <span>{{ $adoption->color }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6">
                                        <div class="breeder-info-item">
                                            <h6>Pet ID:</h6>
                                            <span>{{ $adoption->id }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6">
                                        <div class="breeder-info-item">
                                            <h6>Weight:</h6>
                                            <span>{{ $adoption->weight }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6">
                                        <div class="breeder-info-item">
                                            <h6>City:</h6>
                                            <span>Sumatera Utara</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6">
                                        <div class="breeder-info-item">
                                            <h6>Breed:</h6>
                                            <span>{{ $adoption->breed }}</span>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('adoption.destroy', $adoption->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn">Adopt Now <img src="img/icon/w_pawprint.png" alt=""></button>
                                </form>

                                <a class="btn" href="/adoption/{{ $adoption->id }}/edit"> Update</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="breeder-sidebar">
                            <div class="widget breeder-widget">
                                <div class="breeder-widget-title mb-20">
                                    <h5 class="title">Find Your Pets</h5>
                                </div>
                                <form action="#" class="sidebar-find-pets">
                                    <div class="form-grp search-box">
                                        <input type="text" placeholder="Search">
                                        <button><i class="fas fa-search"></i></button>
                                    </div>
                                    <div class="form-grp">
                                        <i class="flaticon-location"></i>
                                        <input type="text" placeholder="Location">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-grp">
                                                <i class="flaticon-color-palette"></i>
                                                <input type="text" placeholder="White">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-grp">
                                                <i class="far fa-calendar-alt"></i>
                                                <input type="text" value="2021">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-grp">
                                        <i class="flaticon-sex"></i>
                                        <select name="name" class="selected">
                                            <option value="">Female</option>
                                            <option value="">Male</option>
                                            <option value="">Adoption</option>
                                        </select>
                                    </div>
                                    <div class="form-grp">
                                        <i class="flaticon-plus-18-movie"></i>
                                        <select name="name" class="selected">
                                            <option value="">Adult :</option>
                                            <option value="">6 Month</option>
                                            <option value="">9 Month</option>
                                            <option value="">1 Year</option>
                                        </select>
                                    </div>
                                    <button class="btn">Find New Pets</button>
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- breeder-details-area-end -->

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

    </main>
    <!-- main-area-end -->

@endsection