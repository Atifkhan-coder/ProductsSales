<x-app-layout>
    @extends('layout')
<!DOCTYPE html>
<html>

<body>
    <div class="min-h-screen bg-gray-100">
        <div class="min-h-screen bg-gray-100">
            <div class="container-fluid"><!-- Container Fluid Div Start... ---------------------------->
                <!-- Start Slider... -------------------------------------------------------->
                <div class="card"><!-- Card div Start... ---->
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
                <!-- END Slider... ---------------------------------------------------------->

                <div class="card-body">
                    <p style="text-align: justify;">
                        Online shopping is a form of electronic commerce which allows consumers to directly buy goods
                        or services from a seller over the Internet using a web browser or a mobile app. Consumers
                        find a product of interest by visiting the website of the retailer directly or by searching
                        among alternative vendors using a shopping search engine, which displays the same product's
                        availability and pricing at different e-retailers. As of 2020, customers can shop online using
                        a range of different computers and devices, including desktop computers, laptops, tablet computers
                        and smartphones.
                    </p>
                </div>

                <div class="card-body">
                    <a href="CreateBusiness">
                        <button type="create" class="btn btn-success">
                            <i class="fa fa-plus-circle" aria-hidden="true"> Go & Create Business</i>
                        </button>
                    </a>
                </div>
                </div><!--Card div End... --->

            </div><!-- Contianer Fluid Div End... ----------------------------><br>

                <!-- Footer Start... -->
                    <footer class="bg-light text-center text-lg-start">
                        <div class="text-center p-3" style="background-color: rgba(163, 160, 160, 0.2)">Copyright © 2020:
                            <a class="text-dark" href="#"><strong>Atif Faheem khan</strong></a>
                        </div>
                    </footer>
                <!-- Footer End...-->
        </div>
    </div>
</body>
</html>

</x-app-layout>


