<!doctype html>
<html lang="en">
    <head>
        <title>Product Sale System (Front End)</title>
        <link rel="icon" href="favicon.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <style>
        /* Search bar Css... */
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            }

            html {
            box-sizing: border-box;
            }

            *, *:before, *:after {
            box-sizing: inherit;
            }

            .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
            }

            .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
            }

            .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
            }

            .container {
            padding: 0 16px;
            }

            .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
            }

            .title {
            color: grey;
            }

            .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            }

            .button:hover {
            background-color: #555;
            }

            @media screen and (max-width: 650px)
                {
                .column {
                width: 100%;
                display: block;
                }
            }
    </style>

<body style="border-top: 2px solid rgb(187, 194, 182);">
    <!-- Navigation Bar.... -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- Naviagation Logo.... -->
                <div class="panel-body">
                    <img src="{{ asset('/images/cart.png') }}" style="width: 50px;">
                </div>
            <!-- Naviagation Logo.... -->

            <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav" style="font-size: 19px;">
                    <a href="/home" class="nav-item nav-link active"> <strong>Products Sale System</strong> </i></a>
                    <a href="/home" class="nav-item nav-link"> <i class="fa fa-home"> <strong style="font-family: arial">Home</strong> </i></a>
                    <a href="/aboutus" class="nav-item nav-link"><i class="fa fa-user"> <strong style="font-family: arial">About</strong> </i></a>
                    <a href="/services" class="nav-item nav-link"><i class="fa fa-cogs" aria-hidden="true"> <strong style="font-family: arial">Services</strong> </i></a>
                    <a href="/contact" class="nav-item nav-link"><i class="fa fa-user-circle"> <strong style="font-family: arial">Contact us</strong> </i></a>
                </div>
                <form action="/search" class="form-inline ml-auto">
                    <input type="text" name="query" class="form-control mr-sm-2" placeholder="Search">
                    <button type="submit" class="btn btn-outline-light" >Search</button>
                </form>
            </div>
        </nav>
    <!-- Navigation Bar End... -->

        @yield('content')

    <!-- Footer Start... -->
        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-3" style="background-color: rgba(163, 160, 160, 0.2)">Copyright © 2020:
                <a class="text-dark" href="#"><strong>Atif Faheem khan</strong></a>
            </div>
        </footer>
    <!-- Footer End...-->
</body>
</html>
