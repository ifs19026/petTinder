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
                            <h2 class="title">Add Friends List</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

         <!-- contact-area -->
    <section class="contact-area pt-110 pb-110">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row justify-content-center justify-content-lg-between">
                    <div class="col-lg-6 col-md-8 order-2 order-lg-0">
                        <div class="contact-title mb-20">
                            <h2 class="title">Add adoptable friend<span>.</span></h2>
                        </div>
                        <div class="contact-wrap-content">
                            <p>Add puppy, kitten, and other friends to find new forever home.</p>
                            <form action="" method="POST" class="contact-form">
                                <div class="form-grp">
                                    <label for="name">Name <span>*</span></label>
                                    <input type="text" id="name" placeholder="Best Puppy..">
                                </div>
                                <div class="form-grp">
                                    <label for="age">Age <span>*</span></label>
                                    <input type="text" id="age" placeholder="1 month">
                                </div>
                                <div class="form-grp">
                                    <label for="breed">Breed <span>*</span></label>
                                    <input type="text" id="breed" placeholder="Corgy..">
                                </div>
                                <div class="form-grp">
                                    <label for="location">Location <span>*</span></label>
                                    <input type="text" id="age" placeholder="Jakarta Utara..">
                                </div>
                                <div class="form-grp">
                                    <label for="message">About </label>
                                    <textarea name="message" id="message" placeholder="Opinion..."></textarea>
                                </div>
                                <div class="form-grp">
                                    <label for="file">Add Image</label>
                                    <input type="file" name="file" required>
                                </div>
                                <button type="submit" value="send" class="btn rounded-btn">Add</button>
                            </form>
                        </div>
                    </div>
        
                        <div class="col-xl-5 col-lg-6 col-md-8">
                            <div class="contact-info-wrap">
                                <div class="contact-img">
                                    <img src="img/images/contact_img.png" alt="">
                                </div>
                                <div class="contact-info-list">
                                    <ul>
                                        <li>
                                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                            <div class="content">
                                                <p>Jl. P.I. Del, Sitoluama, Lagu Boti, Toba, Sumatera Utara 22381</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                            <div class="content">
                                                <p>+62 822 1234 5678</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fas fa-envelope-open"></i></div>
                                            <div class="content">
                                                <p><a href="https://themebeyond.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="387b57564c595b4c78">petTinder-project@gmail.com</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="contact-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->
    </main>
    <!-- main-area-end -->

@endsection
