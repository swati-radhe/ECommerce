@extends('main')
@section('content')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
   
</head>

<body>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row form-container">
                            <form method="post" action="/signin" autocomplete="off">
                                @csrf
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Student Login form</h3>


                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="email" id="email" name="email" class="form-control form-control-lg" required value="{{ old('email') }}" />
                                                <label class="form-label" for="email">Email ID</label>
                                                @if (session('message'))
                                                <div id="alert-success">
                                                    {{ session('message') }}
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                                <label class="form-label" for="password">Password</label>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="d-flex justify-content-end pt-3" style="display: flex; justify-content: flex-end; gap: 7rem;">

                                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg" onclick="window.location.href='/register';">SignUp</button>

                                        <input type="submit" class="btn btn-primary btn-lg " value="SignIn">
                                    </div>

                                    <div style="margin-top: 16px;">
                                        <a href="/forgot-password">Forgot Password?</a>
                                    </div>

                                    @if ($errors->any())
                                    <div id="error-message" class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
@endsection