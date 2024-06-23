<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .card-registration {
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #ffffff;
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
            /* background-color: #ffffff; */
            margin: 0 auto;
            padding: 9px;
        }

        .btn-lg {
            padding: 0.75rem 2rem;
            font-size: 1rem;
        }

        #error-message {
            color: red;
            font-size: 15px;
        }

        /* @media (max-width: 768px) {
            .card-registration {
                display: flex;
                flex-direction: column;
            }

          
            .card-registration .card-body {
                padding: 20px;
            }
        } */
    </style>
</html>