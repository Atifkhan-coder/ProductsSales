@extends('FrontEndLayout')
@section('content')

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="d-flex" id="wrapper">
    <div id="page-content-wrapper">
        <div class="card bg-dark text-white text-center p-3">
            <h1><strong>About Us</strong></h1>
            <h6>Our Team Members</h6>
        </div>

        <div class="container-fluid">

                    <div class="row">
                        <div class="column">
                            <div class="card">
                                <img style="height: 150px;" src="images/laptop2.jpg" alt="Jane" style="width:100%">
                                <div class="container">
                                    <strong style="font-size: 30px">Atif Faheem khan</strong>
                                    <p class="title"><strong>CEO & Founder</strong></p>
                                    <p><strong> Description:</strong> Some text that describes me Atif Faheem Khan.</p>
                                    <p><strong>Email:</strong> Example@gmail.com</p>
                                    <p><a href="/contact"><button class="btn btn-primary" style="width: 380px;"><strong>Contact</strong></button></a></p>
                                </div>
                            </div>
                        </div>

                        <div class="column">
                            <div class="card">
                                <img style="height: 150px;" src="images/laptop1.jpg" alt="Jane" style="width:100%">
                                <div class="container">
                                    <strong style="font-size: 30px">Muhammd Bashir</strong>
                                    <p class="title"><strong>Art Director</strong></p>
                                    <p><strong> Description:</strong> Some text that describes me Muhammad Bashire.</p>
                                    <p><strong>Email:</strong> Example@gmail.com</p>
                                    <p><a href="/contact"><button class="btn btn-warning" style="width: 380px;"><strong>Contact</strong></button></a></p>
                                </div>
                            </div>
                        </div>

                        <div class="column">
                            <div class="card">
                                <img style="height: 150px;" src="images/laptop3.jpg" alt="Jane" style="width:100%">
                                <div class="container">
                                    <strong style="font-size: 30px">Syed Talha Majid</strong>
                                    <p class="title"><strong>Designer</strong></p>
                                    <p><strong> Description:</strong> Some text that describes me Syed Talha Majid.</p>
                                    <p><strong>Email:</strong> Example@gmail.com</p>
                                    <p><a href="/contact"><button class="btn btn-success" style="width: 380px;"><strong>Contact</strong></button></a></p>
                                </div>
                            </div>
                        </div>
                    </div>

        </div>

    </div>
</div>

@endsection
