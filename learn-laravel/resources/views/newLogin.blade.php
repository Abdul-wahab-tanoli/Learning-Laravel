@extends('OnePage.layout.layout')
@section('main-section')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->

        <section class="sample-page">
            <div class="container" data-aos="fade-up">


            </div>
        </section>
        <div class="container">
            <article class="card-body mx-auto" style="max-width: 400px;">
                {{--  --------- showing messages to user ------------ --}}
                @if (session()->has('success'))
                    <div class="alert alert-danger text-center">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <h4 class="card-title mt-3 text-center">Login to your Account</h4>
                <form action="{{ url('/login') }}" method="post">

                    {{-- below line is for submitting form data properly in laravel; --}}
                    @csrf


                    <x-forms.input name="email" type="email" placeholder="Email Address" value=''
                        fontclass="fa fa-envelope" />
                    <x-forms.input name="password" type="password" placeholder="Enter Password" value=''
                        fontclass="fa fa-lock" />


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Login</button>
                    </div> <!-- form-group// -->
                    <p class="text-center"> Dont have an account? <a href="/register">Register Here</a> </p>
                    <p class="text-center"> <a href="/forgotPassword">Forgot Password</a> </p>
                </form>
            </article>
        </div> <!-- card.// -->


    </main><!-- End #main -->
@endsection
