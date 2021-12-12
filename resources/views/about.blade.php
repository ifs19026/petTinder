@extends('layouts.main')

@section('content')
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">About Us</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

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
                            <h5 class="sub-title">About pet Tinder</h5>
                            <p>Online searchable database to find adoptable pet. This website is for our project in 5th semester</p>
                            <h2 class="title">Our <span>Mission</span></h2>
                            <p>To use Internet technology and the resources it can generate to:</p>
                            <div class="adoption-list">
                                <ul>
                                    <li><i class="flaticon-tick"></i> Increase public awareness of the availability of high-quality adoptable pets</li>
                                    <li><i class="flaticon-tick"></i> Elevate the status of pets to that of family member</li>
                                    <li><i class="flaticon-tick"></i> Increase the overall effectiveness of pet adoption programs across Indonesia</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection