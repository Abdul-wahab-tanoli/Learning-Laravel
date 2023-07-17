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
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1 id="logo">Company Name</h1>
                </div>
                <div class="col-md-8">
                    <ul id="menu" class="float-md-right">
                        <li><a href="/blade2">Home</a></li>
                        <li><a href="/banner">banner</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/gallery">Gallery</a></li>
                        <li><a href="/products">Products</a></li>
                        <li><a href="/contactUs">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @hasSection('contentOfPage')
        @yield('contentOfPage')
    @else
        <h2>No Content for this Section</h2>
    @endif


    {{-- <div class="container section">
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

    <div id="footer-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="footer-widget">
                        <h4>About Company</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro praesentium, doloremque,
                            aperiam recusandae rem aliquam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, molestias.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="footer-widget">
                        <h4>Latest News</h4>
                        <ul class="latest-news">
                            <li><a href="">Lorem ipsum dolor sit amet, consectetur.</a></li>
                            <li><a href="">Lorem ipsum dolor sit amet, consectetur.</a></li>
                            <li><a href="">Lorem ipsum dolor sit amet, consectetur.</a></li>
                            <li><a href="">Lorem ipsum dolor sit amet, consectetur.</a></li>
                            <li><a href="">Lorem ipsum dolor sit amet, consectetur.</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="footer-widget">
                        <h4>Company Address</h4>
                        <address>
                            <b>Yahoo Baba, Inc.</b><br>
                            455 Hill Road, Ambala Cantt<br>
                            HARYANA, INDIA 133001<br>
                            P : (123) 456-7890
                        </address>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">copyright@2020 company name.</div>
                <div class="col-md-6">
                    <ul id="social-icons" class="float-md-right">
                        <li><a href="" class="fa fa-facebook-square"></a></li>
                        <li><a href="" class="fa fa-twitter-square"></a></li>
                        <li><a href="" class="fa fa-linkedin-square"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
