<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bootstrap 4 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('blade_sources/css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ asset('blade_sources/css/style.css') }}>
</head>

<body>
    @yield('header')


    <div id="banner" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <div class="banner-title">
                        <h1 class="title">Some Heading Goes Here</h1>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt quis,
                            architecto quasi. Iste excepturi veniam ea maxime libero officia, nesciunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container section">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-head">Some Heading Goes Here</h2>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <i class="fa fa-anchor"></i>
                    <h3>Some Heading</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, provident.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <i class="fa fa-bar-chart"></i>
                    <h3>Some Heading</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, provident.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <i class="fa fa-diamond"></i>
                    <h3>Some Heading</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, provident.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="testimonials" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-head text-white">Testimonials</h2>
                </div>
                <div class="col-md-6">
                    <div class="testimonial">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae reprehenderit autem
                            inventore, nemo, maxime tempore.</p>
                        <img src={{ asset('blade_sources/images/bill-gates.jpg') }} alt="">
                        <div class="author">Bill Gates</div>
                        <div class="author-company">Microsoft</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae reprehenderit autem
                            inventore, nemo, maxime tempore.</p>
                        <img src={{ asset('blade_sources/images/steve-jobs.jpg') }} alt="">
                        <div class="author">Steve Jobs</div>
                        <div class="author-company">Apple</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="news" class="container section">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-head">Recent News</h2>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="news-post">
                    <img src={{ asset('blade_sources/images/post-1.jpg') }} alt="">
                    <h3><a href="">News Heading Here</a></h3>
                    <div class="post-date">April 30, 2020</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, magni!</p>
                    <a href="" class="readmore">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="news-post">
                    <img src={{ asset('blade_sources/images/post-2.jpg') }} alt="">
                    <h3><a href="">News Heading Here</a></h3>
                    <div class="post-date">April 30, 2020</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, magni!</p>
                    <a href="" class="readmore">Read More</a>
                </div>
            </div>
            <div class="col-md-6  col-lg-3">
                <div class="news-post">
                    <img src={{ asset('blade_sources/images/post-3.jpg') }} alt="">
                    <h3><a href="">News Heading Here</a></h3>
                    <div class="post-date">April 30, 2020</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, magni!</p>
                    <a href="" class="readmore">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="news-post">
                    <img src={{ asset('blade_sources/images/post-4.jpg') }} alt="">
                    <h3><a href="">News Heading Here</a></h3>
                    <div class="post-date">April 30, 2020</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, magni!</p>
                    <a href="" class="readmore">Read More</a>
                </div>
            </div>
        </div>
    </div>




</body>

</html>
