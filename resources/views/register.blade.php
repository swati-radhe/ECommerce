<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .card-registration {
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #f1f1f1;
        }


        .card-registration img {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            height: 70%;
            object-fit: cover;
        }


        .card-registration .card-body {
            padding: 30px;

        }

        .card-registration h3 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 30px;
        }

        .form-outline {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-outline input,
        .form-outline select {
            width: 100%;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            background-color: #f8f9fa;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-outline input:focus,
        .form-outline select:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .form-label {
            position: absolute;
            top: 0.75rem;
            left: 1rem;
            color: #495057;
            transition: transform 0.15s ease-in-out, opacity 0.15s ease-in-out;
            opacity: 0.5;
            transform-origin: 0 0;
            cursor: text;
        }

        .form-outline input:focus~.form-label,
        .form-outline select:focus~.form-label,
        .form-outline input:not(:placeholder-shown)~.form-label,
        .form-outline select:not(:placeholder-shown)~.form-label {
            font-size: 0.85rem;
            transform: translateY(-1rem) scale(0.9);
            opacity: 1;
            background-color: #fff;
            padding: 0 0.25rem;
        }

        .form-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 50%;
            background-color: #ffffff;
            /* Dark background color */
            margin: 0 auto;
            /* Center horizontally using margin */
            padding: 9;
        }

        .btn-lg {
            padding: 0.75rem 2rem;
            font-size: 1rem;
        }

        .error-message {
            color: red;
            font-size: smaller;
        }

        /* @media (max-width: 768px) {
            .card-registration {
                display: flex;
                flex-direction: column;
            }

            .card-registration img {
                border-radius: 10px 10px 0 0;
                height: 200px;
            }

            .card-registration .card-body {
                padding: 20px;
            } 
        }*/
    </style>
    <!-- <link href="css/style.css" rel="stylesheet"> -->

</head>

<body>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row form-container">
                            <div class="col-lg-6 col-md-12">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <form method="post" action="/signup" autocomplete="off">
                                    @csrf
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase">Student registration form</h3>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="fname" name="fname" required value="{{ old('fname') }}" class="form-control form-control-lg" />
                                                    <label class="form-label" for="fname">First name</label>
                                                    <div class="error-message" class="alert alert-danger">
                                                        @error('fname')
                                                        <span>{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="lname" name="lname" required value="{{ old('lname') }}" class="form-control form-control-lg" />
                                                    <label class="form-label" for="lname">Last name</label>
                                                    <div class="error-message" class="alert alert-danger">
                                                        @error('lname')
                                                        <span>{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="tel" id="mobile_phone" name="mobile_phone" required value="{{ old('mobile_phone') }}" class="form-control form-control-lg" oninput="validateNumericInput(this)"/>
                                                    <label class="form-label" for="mobile_phone">Mobile No.</label>
                                                    <div class="error-message" class="alert alert-danger">
                                                        @error('mobile_phone')
                                                        <span>{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="email" id="email" name="email" required value="{{ old('email') }}" class="form-control form-control-lg" />
                                                    <label class="form-label" for="email">Email ID</label>
                                                    <div class="error-message" class="alert alert-danger">
                                                        @error('email')
                                                        <span>{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <select id="type" name="type" required value="{{ old('type') }}">
                                                <option value="">Select Type</option>
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                            </select>
                                            <label class="form-label" for="type">Type</label>

                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                            <label class="form-label" for="password">Password</label>
                                            <div class="error-message" class="alert alert-danger">
                                                @error('password')
                                                <span>{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" id="c_password" name="c_password" class="form-control form-control-lg" />
                                            <label class="form-label" for="c_password">Confirm Password</label>
                                            <div class="error-message" class="alert alert-danger">
                                                @error('c_password')
                                                <span>{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3" style="display: flex; justify-content: flex-end; gap: 7rem;">

                                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg" onclick="window.location.href='/Login';">SignIn</button>
                                            <button type="submit" class="btn btn-primary btn-lg ">Sign Up</button>
                                            <!-- <input type="submit" class="btn btn-primary btn-lg " value="SignUp"> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function validateNumericInput(input) {
                input.value = input.value.replace(/[^0-9]/g, '');
            }
        </script>
    </section>
</body>

</html>