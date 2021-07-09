@extends('FrontEndLayout')
@section('content')
<body>
    <!-- Slider.... ----->
        <div class="card">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                    <div class="carousel-inner" style="font-size: 30px;">
                        <div class="carousel-item active">
                            <img class="d-block w-100" style="height: 300px;" src="images/laptop3.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="head"><b>PRODUCT SALE SYSTEM</b></h1>
                                <p class="para"><b>Welcome to our Online Product Sales Store!</b></p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" style="height: 300px;" src="images/laptop2.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="head"><b>PRODUCT SALE SYSTEM</b></h1>
                                <p class="para"><b>Welcome to our Online Product Sales Store!</b></p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" style="height: 300px;" src="images/laptop1.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="head"><b>PRODUCT SALE SYSTEM</b></h1>
                                <p class="para"><b>Welcome to our Online Product Sales Store!</b></p>
                            </div>
                        </div>

                        <div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
            </div>
        </div>
    <!-- Slider.... ----->

    <!-- Card div... ---->
        <div class="card">
            <!--Product List... ------------------------------------------>

                    <div class="container-fluid"><br>
                        <!--Session Start... -------------->
                            <div class="container">
                                @if (session('success'))
                                    <div class="alert alert-success">{{session('success')}}</div>
                                @endif
                            </div>
                        <!--Session End... ---------------->

                        <div style="border-bottom: 1px solid rgb(233, 230, 230)">
                            <strong style="font-size: 30px;">Trending Products List</strong>
                        </div>
                            @foreach ($his as $store)
                                <div class="card" style="float: left; width:245px;"><!-- Card-2... --->
                                            <table class="table table-bordered">
                                                <tr>
                                                    <img style="height: 150px;" src="{{ Storage::url($store->picture) }}">
                                                </tr>
                                                <tr>
                                                    <td><strong>Tittle:</strong> {{$store['title']}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Price:</strong> {{$store['price']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="detail/{{$store['id']}}">
                                                            <button class="btn btn-primary" style="width:215px;">
                                                                <i class="fa fa-hand-o-right" aria-hidden="true"> <strong> Click</strong></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                </div><!-- Card-2... --->
                            @endforeach
                    </div>

            <!-- End Product List... -------------------------------------->
        </div>
    <!-- Card div... ---->
</body>
@endsection

