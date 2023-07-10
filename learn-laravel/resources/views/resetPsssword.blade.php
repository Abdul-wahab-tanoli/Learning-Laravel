<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


    <div class="container">
        <br>
        <p class="text-center">Header for this page..!</p>
        <hr>
        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                {{--  --------- showing messages to user ------------ --}}
                @if (session()->has('success'))
                    <div class="alert alert-danger text-center">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <h4 class="card-title mt-3 text-center">Reset Your Password</h4>
                <form action="{{ url('/login') }}" method="post">

                    {{-- below line is for submitting form data properly in laravel; --}}
                    @csrf

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email address" type="email">
                    </div> <!-- form-group// -->
                    @error('email')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name="password" class="form-control" placeholder="Enter password" type="password">
                    </div> <!-- form-group// -->
                    @error('password')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name="confirmpassword" class="form-control" placeholder="Enter password" type="password">
                    </div> <!-- form-group// -->
                    @error('password')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Reset</button>
                    </div> <!-- form-group// -->
                    <p class="text-center"> Go Back To <a href="/login">Login</a> </p>
                </form>
            </article>
        </div> <!-- card.// -->

    </div>
    <!--container end.//-->

    <br><br>
    <article class="bg-secondary mb-3">
        <div class="card-body text-center">
            <h3 class="text-white mt-3">Footer for this page...!</h3>

        </div>
        <br><br>
    </article>


</body>

</html>
