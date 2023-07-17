@extends('bladeTemplateEngine.layout')
@section('contentOfPage')
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
@endsection
