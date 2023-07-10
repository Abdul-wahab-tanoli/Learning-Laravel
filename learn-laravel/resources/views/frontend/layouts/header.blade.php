<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>ebook landing page template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link href="{{ url('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ url('frontend/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ url('frontend/css/templatemo-ebook-landing.css') }}" rel="stylesheet">
    <!--

TemplateMo 588 ebook landing

https://templatemo.com/tm-588-ebook-landing

-->
</head>

<body>

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/index">
                    <i class="navbar-brand-icon bi-book me-2"></i>
                    <span>ebook</span>
                </a>

                <div class="d-lg-none ms-auto me-3">
                    <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                        <i class="btn-icon bi-cloud-download"></i>
                        <span>Download</span><!-- duplicated another one below for mobile -->
                    </a>
                    <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                        <i class="btn-icon bi-cloud-download"></i>
                        <span>{{ Auth::user()->name }}</span><!-- duplicated another one below for mobile -->
                    </a>
                </div>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto me-lg-4">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/index">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/books">The Book</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/author">Author</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/reviews">Reviews</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/contact">Contact</a>
                        </li>
                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                            <i class="btn-icon bi-cloud-download"></i>
                            <span>Download</span><!-- duplicated above one for mobile -->
                        </a>
                        <a href="/logout" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                            <i class="btn-icon ">Logout</i>
                            <span>{{ Auth::user()->name }}</span><!-- duplicated above one for mobile -->
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 pb-5 pb-lg-0 mb-lg-0">

                        <h6>Introducing ebook</h6>

                        <h1 class="text-white mb-4">ebook landing page for professionals</h1>

                        <a href="#section_2" class="btn custom-btn smoothscroll me-3">Discover More</a>

                        <a href="#section_3" class="link link--kale smoothscroll">Meet the Author</a>
                    </div>

                    <div class="hero-image-wrap col-lg-6 col-12 mt-3 mt-lg-0">
                        <img src="{{ url('frontend/images/education-online-books.png') }}" class="hero-image img-fluid"
                            alt="education online books">
                    </div>

                </div>
            </div>
        </section>


        <section class="featured-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12">
                        <div class="avatar-group d-flex flex-wrap align-items-center">
                            <img src="{{ url('frontend/images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg') }}"
                                class="img-fluid avatar-image" alt="">

                            <img src="{{ url('frontend/images/avatar/portrait-young-redhead-bearded-male.jpg') }}"
                                class="img-fluid avatar-image avatar-image-left" alt="">

                            <img src="{{ url('frontend/images/avatar/pretty-blonde-woman.jpg') }}"
                                class="img-fluid avatar-image avatar-image-left" alt="">

                            <img src="{{ url('frontend/images/avatar/studio-portrait-emotional-happy-funny-smiling-boyfriend.jpg') }}"
                                class="img-fluid avatar-image avatar-image-left" alt="">

                            <div class="reviews-group mt-3 mt-lg-0">
                                <strong>4.5</strong>

                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star"></i>

                                <small class="ms-3">2,564 reviews</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-lg-5"></section>
