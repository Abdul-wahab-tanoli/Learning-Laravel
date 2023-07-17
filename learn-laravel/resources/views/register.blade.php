@extends('OnePage.layout.layout')
@section('main-section')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <div class="container" style="margin-top: 10%">

        <hr>

        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                @if (Session::has('message'))
                    <div class="alert alert-danger">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <form action="{{ url('/register') }}" method="post">

                    {{-- below line is for submitting form data properly in laravel; --}}
                    @csrf

                    <x-forms.input name="name"  value="{{ old('name') }}" type="text" placeholder="Full name" fontclass="fa fa-user" />

                    <x-forms.input name="email" value="{{ old('email') }}" type="email" placeholder="Email Address"  fontclass="fa fa-envelope" />
                    <x-forms.input name="phone" value="{{ old('phone') }}" type="tel" placeholder="Phone Number" fontclass="fa fa-phone" />
                    <x-forms.input name="pass" value="" type="password" placeholder="Create Password" fontclass="fa fa-lock"/>
                    <x-forms.input name="password_confirmation" value="" type="password" placeholder="Repeat Password" fontclass="fa fa-lock" />






                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
                    </div> <!-- form-group// -->
                    <p class="text-center">Have an account? <a href="/login">Log In</a> </p>
                </form>
            </article>
        </div> <!-- card.// -->

    </div>
@endsection
