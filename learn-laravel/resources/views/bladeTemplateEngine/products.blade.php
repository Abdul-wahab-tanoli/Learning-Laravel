@extends('bladeTemplateEngine.layout')
@section('contentOfPage')
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
@endsection
